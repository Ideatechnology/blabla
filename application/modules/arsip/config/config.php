<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module_config'] = array(
	'description'	=> lang('bf_description_file').' Beta 1.0',
	'name'		=> "File Arsip",
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan',
	'menus'	=> array(
		'plugin'	=> 'arsip/plugin/menu'
	),	
	
);

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/arsip/": "/bonfire/plugin/arsip/";
$config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'files/');
