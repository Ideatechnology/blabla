<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
# Karena Tipe Widget ini narik dari Front End, maka otomatis Arsip berdiri sendiri
# dengan extends bukan Admin_Controller melainkan Front_Controller
# !Important
# Note : Tidak ada Costumized disini.
*/
class Arsip extends Front_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
		#-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
  	}
	
	
	public function index(){

        $offset=0;
  		$this->load->model('roles/role_model');
        	// Fetch roles we might want to filter on
		$roles =$this->db->from('m_kategori')
                         ->select('id,kategori')
                         ->where('type_kategori', 'arsip')
                         ->order_by("kategori","asc")->get()->result(); 

		$ordered_roles = array();
		foreach ($roles as $role)
		{
			$ordered_roles[$role->id] = $role;
		}
        Template::set('roles', $ordered_roles);
        
        $filter_type="all";
		
        Template::set('filter_type', $filter_type);
        Template::set('index_url', site_url('/arsip/index/') .'/');
		#categories
        $this->load->library('pagination');
		$cate = $this->db->from('m_kategori')
                         ->where('type_kategori', 'arsip')
                         ->order_by("kategori","asc")->get();
        //echo $this->db->last_query();
		Template::set('categori', $cate->result());
		
		$getktg = $cate->row();
		 
		$t=$this->input;
		$return='';
		
		
        $config['per_page'] = 1;
		if(@$_GET['archives']){
			$config['base_url'] = site_url('arsip/index?archives='.$_GET['archives']);
			 $this->db->where('arsip.post_category', $_GET['archives']);
			 $return = $this->db->from('arsip')
                                ->order_by("tahun","DESC")
                                ->join('m_kategori', 'm_kategori.id=arsip.post_category')
                                 ->limit($config['per_page'],$offset)
                                ->get()->result();

 			 $jumlah=$this->db->query("select * from bf_arsip where post_category='".$_GET['archives']."'")->num_rows(); 
       
		}else{
			 $config['base_url'] = site_url('arsip/index');
			 $this->db->where('arsip.post_category', $getktg->id);
			 $return = $this->db->from('arsip')
                                ->join('m_kategori', 'm_kategori.id=arsip.post_category')
                                ->order_by("tahun","DESC")
                                ->limit($config['per_page'],$offset)
                                ->get()->result();
			 
             $jumlah=$this->db->query("select * from bf_arsip")->num_rows();
			 
		}
       
       $config['total_rows'] = $jumlah;
       
	   $config['full_tag_open']  = '<ul>';
	   $config['full_tag_close']  = '</ul>';
	   $config['next_link']  = '<li class="next">Next &raquo;</li>';
	   $config['prev_link']   = '<li class="previous">Prev</li>';
	   $config['cur_tag_open']  = '<li class="active">';
       $config['cur_tag_close']  = '</li>';
	   $config['num_tag_close']  = '</li>';

        $this->pagination->initialize($config);
       $links = $this->pagination->create_links();
       Template::set('links', $links);

		Template::set('arsip', $return);  
		Template::render();
   	}
	
    public function download_file()
	{
         $this->load->config('config');
		// is there more ways to add file validation rules except for the ones in the view
		// for instance something to reject certain files and so on?
		// also, add support for view files inline, could be available to settings

		$this->output->enable_profiler(false);

		$this->load->config('arsip/config');
		$upload_config = $this->config->item('upload_config');
        echo $upload_config['upload_path_file'];
	   
		$this->load->model('arsip/arsip_model', null, true);

		$file_id = $this->uri->segment(3);

		$record = $this->arsip_model->select('file_data')->find_by('id', $file_id);
        echo $record->file_data;
		$file_path = null;
		if($record)
		{
		
			echo $file_path  = $upload_config['upload_path_file'].$record->file_data;
			$content_types=explode(".",$record->file_data);
		}

		if(file_exists($file_path))
		{

			$attachment_name = $record->file_data;


			$this->load->vars(array(
				'file_path'         => $file_path,
				'content_type'      => $content_types[1],
				'attachment_name'   => $attachment_name
			));

			$this->load->view('widget/download');
		}
		else
		{
			$this->load->view('widget/download_failed');
		}
	}
	
	 
	
}
?>