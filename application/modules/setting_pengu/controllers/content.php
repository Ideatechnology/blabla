<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Content extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		Template::set('toolbar_title',"Setting Pengumuman");

	}

	public function index(){

		$this->auth->restrict('Setting_Pengu.Content.View');

		if(isset($_POST["simpan"])){


			$status = $this->input->post("status_pengumuman");

			$data = array(
			array('name' => 'site.setPengumuman', 'value' => $status),
			);
			$updated = $this->settings_model->update_batch($data, 'name');
			Template::set_message("Pengaturan berhasil disimpan","success");
			redirect("admin/content/setting_pengu");


		}
		
		Template::render();

	}

}

?>