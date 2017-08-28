<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);

$config['module_config'] = array(
	'description'	=>" Beta 1.0",
	'name'		=> "Link",
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan'
);

$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/link/": "/bonfire/modules/link/";
$tmp_module_path_upload = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/link/": "/bonfire/modules/link/";
$config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'files/','upload_path_file_upload'=> $tmp_module_path_upload.'files/');
