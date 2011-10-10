<?php

$config ['zip_dir'] = APPPATH . 'cache/zips';
$config ['zip_ttl'] = 86400 * 10;

$config ['os'] ['win64']  = 'Windows 64 bit';
$config ['os'] ['win32']  = 'Windows 32 bit';
$config ['os'] ['src']    = 'Source packages';
$config ['os'] ['phpwin'] = 'PHP extension';

$config ['path'] ['src'] ['2.1-stable'] = '/home/jenkins/snapshot/src/libzmq2-1';
$config ['path'] ['src'] ['3.0-beta']   = '/home/jenkins/snapshot/src/libzmq3-0/';

$config ['path'] ['win64'] ['2.1-stable'] = '/home/jenkins/snapshot/win64/libzmq2-1';
$config ['path'] ['win32'] ['2.1-stable'] = '/home/jenkins/snapshot/win32/libzmq2-1';

$config ['path'] ['phpwin'] ['zeromq-2.1'] = '/home/jenkins/snapshot/phpwin';

#$config ['path'] ['win64'] ['3.0-beta'] = APPPATH . 'data/x1/test';
#$config ['path'] ['win32'] ['3.0-beta'] = APPPATH . 'data/x2/test';

#$config ['path'] ['win64'] ['4.0-dev'] = APPPATH . 'data/x3/test';
#$config ['path'] ['win32'] ['4.0-dev'] = APPPATH . 'data/x4/test';

return $config;