<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module_config'] = array(
	'description'	=> " Beta 1.0",
	'name'		=>'Halaman',
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan'
);

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);

$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/pages/": "/bonfire/modules/pages/";

$config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'files/',
								'upload_path_image'=> $tmp_module_path.'images/'
								);