<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);


$config['module_config'] = array(

	'description'	=> 'Your module description',
	'name'		=> 'Media Kemendagri',
	'version'		=> '0.0.1',
	'author'		=> 'developer',
	'menus'	=> array(
		'plugin'	=> 'publikasi/plugin/menu'
	),

);

$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./assets/": "/assets/";

$config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'publikasi/files/',
								'upload_path_image'=> $tmp_module_path.'publikasi/images/'
								);