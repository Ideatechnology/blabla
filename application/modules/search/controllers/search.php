<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search extends Front_Controller{

	public function __construct()
	{
		parent::__construct();

 		$this->load->helper('form');
		$this->load->library('users/auth');
		$this->set_current_user();
			   #-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------

		$this->load->config('search/config');
		$this->load->helper("search");

	
 	}


 	public function index(){

 		$keywords = $this->db->escape_like_str($this->input->get("keyword"));
		$this->load->helper("text");
		$this->load->helper("post/post");
 		$this->load->model("api_model");
		$query = $this->api_model->searching($keywords);
		$jumlah = count($query);
		Template::set("jumlah",$jumlah);
		Template::set("query",$query);
		Template::set_block('sidebar', 'pages/sidebar');
		Template::render("page");

	}

	function sitemap(){

	 $urlslist = array();
	Template::set("urlslist",$urlslist);
	Template::set_view("sitemap_view");
	Template::render("page");
	
	}

	public function detail(){

		$id = $this->input->get("id");

 		$query = $this->model_search->getID_Bilbilo($id);
		Template::set("query",$query);

		Template::set_block("sidebar","pages/sidebar");
		Template::render("page");

	}

 }
