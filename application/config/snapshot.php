<?php

$config ['zip_dir'] = APPPATH . 'cache/zips';
$config ['zip_ttl'] = 86400 * 10;

$config ['os'] ['win64'] = 'Windows 64 bit';
$config ['os'] ['win32'] = 'Windows 32 bit';

$config ['path'] ['win64'] ['2.1-stable'] = APPPATH . 'data/packages/test';
$config ['path'] ['win32'] ['2.1-stable'] = APPPATH . 'data/packages/test2';

$config ['path'] ['win64'] ['3.0-beta'] = APPPATH . 'data/x1/test';
$config ['path'] ['win32'] ['3.0-beta'] = APPPATH . 'data/x2/test';

$config ['path'] ['win64'] ['4.0-dev'] = APPPATH . 'data/x3/test';
$config ['path'] ['win32'] ['4.0-dev'] = APPPATH . 'data/x4/test';

return $config;