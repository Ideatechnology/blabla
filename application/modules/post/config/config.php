<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/datatable/": "/bonfire/modules/datatable/";

$config['module_config'] = array(
	'module_path'		=> $tmp_module_path,
	'description'	=> " Beta 1.0",
	'name'		=> "Posting",
	'version'		=> 'Beta 1.0',
	'author'		=> 'Harry Ridwan Ramadan',
	'menus'	=> array(
		'content'	=> 'post/content/menu'
	),	
);


$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/post/": "/bonfire/modules/post/";

$config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'files/',
								'upload_path_image'=> $tmp_module_path.'images/'
								);
