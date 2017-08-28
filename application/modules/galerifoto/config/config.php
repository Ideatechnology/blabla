<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module_config'] = array(
	'description'	=> lang("bf_description_galeri")." Beta 1.0",
	'name'		=> "Gallery Foto",
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan',
	'menus'	=> array(
		'plugin'	=> 'galerifoto/plugin/menu'
	),
);

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
$tmp_module_path = "./application/modules/galerifoto/";

$config['upload_config_gallery'] = array('upload_path_image_gallery'=> $tmp_module_path.'images/');
 