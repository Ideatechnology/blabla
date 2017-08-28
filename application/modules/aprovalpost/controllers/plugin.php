<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * plugin controller
 */
class plugin extends Admin_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Aprovalpost.Plugin.View');
		$this->lang->load('aprovalpost');
		
		Template::set_block('sub_nav', 'plugin/_sub_nav');

		Assets::add_module_js('aprovalpost', 'aprovalpost.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{



		 $this->load->model("api_model");
		 $resultberita = $this->api_model->get_berita_approve("terbaru",50);
		 Template::set("resultberita",$resultberita);


		Template::set('toolbar_title', 'Belum di Approve');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a aprovalpost object.
	 *
	 * @return void
	 */
	public function create()
	{
		 $this->load->model("api_model");
		 $resultberita = $this->api_model->get_berita_approve("terbaru",50,"Y");
		 Template::set("resultberita",$resultberita);


		Template::set('toolbar_title', 'Sudah di Approve');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of aprovalpost data.
	 *
	 * @return void
	 */
	public function edit()
	{	

			$this->db->query("update ".$this->input->get("database").".bf_post_meta set headline='Y' 
				where ".$this->input->get("database").".bf_post_meta.id='".$this->input->get("id")."'");
		
			Template::set_message("Telah di approve", 'success');
			redirect(SITE_AREA .'/plugin/aprovalpost');
		
	}

	//--------------------------------------------------------------------



}