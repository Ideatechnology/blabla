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

 		$this->load->helper('xml');
 		$keywords = $this->input->get("keywords");
 		libxml_use_internal_errors(false);
 		// set feed URL
 		$pagepaging = $this->input->get("page")?"&page=".$this->input->get("page"):"";
		$url = $this->config->item('base_url_config')."index.php?resultXML=true&search=search&keywords=".$keywords.$pagepaging;
		
		$this->db2 = $this->load->database('db2', TRUE);
		$qry = $this->db2->query("SELECT * FROM biblio limit 5");
		print_r($qry->result());

		// read feed into SimpleXML object
 		$xml = curl_get_contents($url);
 		$query = simplexml_load_string($xml);
 		$ns=$query->getNameSpaces(true);
		$s = $query->children($ns["slims"]); 	

		$this->load->library('pagination');	
		$offset = $s[0]->modsResultPage;
		$limit = $s[0]->modsResultShowed;
		$total = $s[0]->modsResultNum;

		$pager['base_url'] 			= current_url() .'?search=search&keyword='.$this->input->get('keyword');
		$pager['total_rows'] 			= $total;
		$pager['per_page'] 			= $limit;
		$pager['page_query_string']	= TRUE;
		$pager['query_string_segment'] = "page";
		$pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$pager['full_tag_close'] = '</ul></div>';
		 $pager['next_link']  = 'Next';
		$pager['next_tag_open'] = '<li class="next">';
		$pager['next_tag_close'] = '</li>';
		$pager['prev_tag_open'] = '<li class="previoust">';
		$pager['prev_tag_close'] = '</li>';
	    $pager['prev_link']   = 'Prev';
	    $pager['cur_tag_open']  = '<li class="active"><a href="#">';
        $pager['cur_tag_close']  = '</a></li>';
	     $pager['num_tag_open']  = '<li>';
	    $pager['num_tag_close']  = '</li>';
		$pager['last_link'] = 'Last';
	   $pager['last_tag_open'] = '<li>';
		$pager['last_tag_close'] = '</li>';
		$pager['first_link'] = 'First';
		$pager['first_tag_open'] = '<li>';
		$pager['first_tag_close'] = '</li>';

        $this->pagination->initialize($pager);
 		
 		Template::set("ns",$ns);
 		Template::set("s",$s);
 		Template::set("query",$query);
		

 		Template::set_block('sidebar', 'pages/sidebar');
		Template::render("page");	


		

	
	}

	public function detail(){
		$id = $this->input->get("id");

		libxml_use_internal_errors(true);
 		// set feed URL
 		$url = $this->config->item('base_url_config')."index.php?p=show_detail&inXML=true&id=".$id;
		// read feed into SimpleXML object
 		$xml = curl_get_contents($url);
 		$query = simplexml_load_string($xml);

		$ns=$query->getNameSpaces(true);
		$s = $query->children(@$ns["slims"]); 	
	
		Template::set("s",$s);
	
		Template::set("ns",$ns);
 		Template::set("query",$query);

		Template::set_block("sidebar","pages/sidebar");
		Template::render("page");

	}

 }