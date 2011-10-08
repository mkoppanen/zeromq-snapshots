<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Snapshot extends Model {
 
    private $config;
 
	public function __construct (Config_Group $config)
	{
		$this->config = $config;
	}

	public function get_versions ($os)
	{
	    if (isset ($this->config ['path'] [$os]) &&
	        is_array ($this->config ['path'] [$os])) {
	        return array_keys ($this->config ['path'] [$os]);
	    }
	    return array ();
	}
	
	public function is_valid_version ($os, $version)
	{
	    return (isset ($this->config ['path'] [$os] [$version]));
	}
	
	public function create_snapshot_dir ($os, $version)
	{
	    $path = $this->config ['path'] [$os] [$version] .'/' . date ('Y-m-d_H-i-s');
	    if (mkdir ($path, 0777, true))
	        return $path;
	    return false;
	}
	
	public function get_latest_build ($os, $version)
	{
	    if (isset ($this->config ['path'] [$os] [$version])) {
	    
	        // Whether we have snapshot dir
	        $path = $this->config ['path'] [$os] [$version];
	        
	        if (file_exists ($path)) {
	            $files = glob ("{$path}/????-??-??_??-??-??/*"); 

	            if ($files) {
	                rsort ($files);
	                return array ('id'    => $this->format_build_id ($files [0]),
	                              'time'  => $this->format_timestamp ($files [0]),
	                              'files' => $files);
	            }
	        }
        }        
        return array ();
	}
	
	public function rmdir_r ($dir) 
	{ 
        $files = glob ($dir . '*', GLOB_MARK);

        foreach ($files as $file) { 
            if (substr( $file, -1) == '/') 
                $this->rmdir_r ($file); 
            else 
                unlink ($file); 
        } 

        if (is_dir ($dir)) 
            rmdir ($dir); 

    }
	
	public function clean_old_builds ()
	{
	    foreach ($this->config ['path'] as $paths)
	    {
	        foreach ($paths as $path) {
	            $dirs = glob ("{$path}/????-??-??_??-??-??/"); 
    	        
    	        if (count ($dirs) > 5) {
    	            rsort ($dirs);
    	            $slice = array_slice ($dirs, 5);
    	            
    	            foreach ($slice as $old) {
    	                $this->rmdir_r ($old);
    	            }
	            }
	        }
	    }    
	}
	
	public function clean_old_zips ()
	{
	    $zip_dir = $this->config ['zip_dir'];
	    
	    if (file_exists ($zip_dir)) {
	        $dirs = glob ($zip_dir . '/*');

	        if ($dirs) {
	            foreach ($dirs as $dir) {
	                if (time () - filemtime ($dir) > $this->config ['zip_ttl']) {
	                    $this->rmdir_r ($dir);
	                }
	            }
	        }
	    }
	}
	
	public function get_build_file ($os, $version)
	{
	    if (!isset ($this->config ['path'] [$os] [$version]))
	        return false;

        $path = $this->get_latest_build ($os, $version);
        
        if (empty ($path)) {
            return false;
        }
        $path = dirname ($path ['files'] [0]);

        if (!file_exists ($path)) {
            return false;
        }
        
        $files = glob ("$path/*");

        if (!$files)
            return false;

        if (count ($files) > 1) {
            $filename = $this->create_zip_file ($os, $version, $files);
        } else {
            $filename = current ($files);
        }
        return $filename;
	}
	
	public function create_zip_file ($os, $version, $files)
	{
	    $tmp_dir = APPPATH . 'cache/zips/' . md5 ($os . $version . serialize ($files));
        $tmp_filename = "$tmp_dir/zeromq-${version}.zip";
        
        if (file_exists ($tmp_filename))
            return $tmp_filename;
        
        if (!file_exists ($tmp_dir))
            mkdir ($tmp_dir, 0777, true);

        // Zip the files
        $zip = new ZipArchive;
        $status = $zip->open (
                    "$tmp_dir/zeromq-${version}.zip", 
                     ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE
                  );

        if ($status) {
            foreach ($files as $file) {
                $zip->addFile($file, basename ($file));
            }
            $zip->close();
            return $tmp_filename;
        } else {
            return false;
        }
	}
	
	public function get_operating_systems ()
	{
	    return $this->config ['os'];
	}
	
	public function format_timestamp ($path)
	{
	    if (preg_match ('~/(\d{4}-\d{2}-\d{2}_\d{2}-\d{2}-\d{2})/~', $path, $matches)) {
	        $parts = explode ('_', $matches [1]);
    	    $time  = implode (':', explode ('-', $parts [1]));
    	    return $parts [0] . ' ' . $time;
	    }
	    return 'Unknown';
	}
	
	public function format_build_id ($path)
	{
	    if (preg_match ('~/(\d{4}-\d{2}-\d{2}_\d{2}-\d{2}-\d{2})/~', $path, $matches)) {
	        return $matches [1];
	    }
	    return 'undefined';
	}
}