<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

	public function action_index()
	{
	    $view = View::factory ('admin/index');
	    
	    $config = Kohana::$config->load ('snapshot');
	    $model  = new Model_Snapshot ($config);
	    
	    if ($this->request->post()) {
            $post = Validation::factory ($_POST);
        
            $post->rule ('os', 'not_empty');
            $post->rule ('version', 'not_empty');
            $post->rule ('message', 'not_empty');
        
            if ($post->check ()) {
                $os      = $this->request->post ('os');
        	    $version = $this->request->post ('version');
 
                if (!$model->is_valid_version ($os, $version)) {
                    $post->error ('message', "The OS/version combination is not valid");
                } else {
                    $files = Validation::factory ($_FILES);
                    $files->rule('file', 'Upload::not_empty');

                    if (!$files->check ())
                        $post->error ('message', "No upload file specified or upload failed");
                    else {
                        $snapshot_dir = $model->create_snapshot_dir ($os, $version);

                        if ($snapshot_dir) {
                            Upload::save ($_FILES ['file'],
                                          basename ($_FILES ['file'] ['name']),
                                          $snapshot_dir);
                                          
                            Kohana::log ('info', $_SERVER ["PHP_AUTH_USER"] . ' uploaded snapshot: ' . $snapshot_dir);
                        } else {
                            $post->error ('message', "Failed to create upload directory");
                        }
                    }
                }
            }
            $view->errors = $post->errors ('user');
        }

	    $view->model = $model;
		$this->response->body ($view);
	}
}
