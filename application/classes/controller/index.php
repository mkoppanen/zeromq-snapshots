<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
	    $view = View::factory ('index/index');
	    
	    $config = Kohana::$config->load ('snapshot');
	    $model  = new Model_Snapshot ($config);
	    
	    $model->clean_old_builds ();
	    $model->clean_old_zips ();
	    
	    $view->model = $model;
		$this->response->body ($view);
	}

}
