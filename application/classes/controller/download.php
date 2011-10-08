<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Download extends Controller {

	public function action_file()
	{
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
	    
	    $finfo = finfo_open (FILEINFO_MIME_TYPE);
	    $mime  = finfo_file ($finfo, $file);
	    
	    $basename = basename ($file);
	    
	    header ("Content-Type: $mime");
	    header ("Content-Disposition: attachment; filename='{$basename}'");
	    readfile ($file);
	    exit ();
	}
}
