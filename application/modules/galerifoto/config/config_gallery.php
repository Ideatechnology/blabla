<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module_config'] = array(
	'description'	=> lang("bf_description_galeri")." Beta 1.0",
	'name'		=> lang("bf_judul_galeri"),
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan'
);

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/galerifoto/": "/bonfire/modules/galerifoto/";

$config['upload_config_gallery'] = array('upload_path_image_gallery'=> $tmp_module_path.'images/');
 