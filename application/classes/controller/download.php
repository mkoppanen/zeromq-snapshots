<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller {

	public function action_file()
	{
	    $this->auto_render = FALSE;
	    
	    $os      = $this->request->param ('os');
	    $version = $this->request->param ('version');

	    if (!$os || !$version)
	    {
	        header ("HTTP/1.0 404 Not Found");
	        exit ();
	    }
	    
	    $config = Kohana::$config->load ('snapshot');
	    $model  = new Model_Snapshot ($config);
	    $file   = $model->get_build_file ($os, $version);
	    
	    if (!$file)
	        throw new ErrorException ('Failed to get the download file');

	    $basename = basename ($file);
	    $this->response->headers ('Content-Type', File::mime ($file))
                       ->headers ('Content-Disposition', "attachment; filename=\"{$basename}\"")
                       ->body (file_get_contents ($file));
	}
}
