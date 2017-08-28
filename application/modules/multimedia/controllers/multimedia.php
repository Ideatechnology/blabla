<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Multimedia extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
 		$this->load->library('form_validation');
  		$this->load->helper('text');
		$this->load->library('users/auth');
		$this->set_current_user();
		$this->load->model('multimedia_model', null, true);
		#-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
		
		//set language
		if($this->session->userdata("site_lang")){
			
			$this->lang->load("multimedia",$this->session->userdata("site_lang"));
			
		}else{
			
			$this->lang->load("multimedia","indonesia");
		
		}
		
		$this->load->library("settings/settings_lib");
		
 	}
	
	
	public function index() 
	{
		
		$id=$this->uri->segment(3);
		$this->db->like('judul',$this->input->get('keyword'),"after");
		if($id!="")
		$this->db->where("multimedia_category",$id);
		$jumlah= $this->db->from('multimedia')
									->where("flag",1)
									->get()
									->num_rows();
									
		$offset = abs((int) $this->input->get('per_page'));
	   $this->load->library('pagination');
	  
		if($this->input->get('keyword')=="")
 		$pager['base_url'] 			= current_url() .'?';
		else
		$pager['base_url'] 			= current_url() .'?keyword='.$this->input->get('keyword');
			  
	   
	   $pager['total_rows'] =$jumlah;
       $pager['per_page'] =  $this->settings_lib->item("site.list_limit");
	   $pager['page_query_string']	= TRUE;
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
	   
		
	   $this->db->like('judul',$this->input->get('keyword'),"after");
	   	if($id!="")
		$this->db->where("multimedia_category",$id);
	   $gs = $this->db->from('multimedia')
						     ->limit($pager["per_page"], $offset)
							 ->where("flag",1)
							 ->get()
							 ->result();
	   
	   $links = $this->pagination->create_links();
	   Template::set('gs', $gs);
	   Template::set('links', $links);
	   
	   	   $rowcategories = $this->db->where('type_kategori' , 'multimedia' )->where("id",abs((int)$this->uri->segment(3)))->get('m_kategori')->row();
	   Template::set('rowcategories', @$rowcategories->kategori);

	  Template::set_block('sidebar', 'sidebar');
		Template::render("page");	
 	}
	
	function detail(){
	
	$this->load->helper('text');

 	  
	   $querytunggal=$this->db->query("select * from bf_multimedia where id='".$this->uri->segment(3)."' order by id desc");
	   $query=$this->db->query("select * from bf_multimedia where flag=1 and multimedia_category='".$querytunggal->row()->multimedia_category."' and id <> '".$this->uri->segment(3)."' order by id desc limit 5");

	   

	   Template::set('query', $query->result());

	   Template::set('row', $querytunggal->row());

	  
	 	  Template::set_block('sidebar', 'sidebar');
		Template::render("page");	
		
	}
	
	 
}
?>