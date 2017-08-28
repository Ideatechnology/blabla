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

        #this load model
        $this->load->model("kategori/kategori_model",NULL,true);
        $this->load->model("arsip_model",NULL,true);


		#-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
		#load bahasa
        if($this->session->userdata('site_lang')) {
    		$this->lang->load('arsip',$this->session->userdata('site_lang'));
	    }else{
            $this->lang->load('arsip','indonesia');
        }

         Template::set_block("sidebar","pages/sidebar");


    }


	public function index($filter='all'){

		$limit=5;
        $role_id="";
      // Fetch roles we might want to filter on
		$roles = $this->db->query("select * from bf_m_kategori where type_kategori='arsip' and deleted=0")->result();
		$ordered_roles = array();
		foreach ($roles as $role)
		{
			$ordered_roles[$role->id] = $role;
		}
		Template::set('roles', $ordered_roles);
        $where=array();

		// Filters
		if (preg_match('{first_letter-([A-Z])}', $filter, $matches))
		{
			$filter_type = 'first_letter';
			$first_letter = $matches[1];
		}
		elseif (preg_match('{kat-([0-9]*)}', $filter, $matches))
		{
			$filter_type = 'kat';
			$role_id = (int) $matches[1];
		}
		else
		{
			$filter_type = $filter;
		}

		switch($filter_type)
		{

			case 'kat':
				$where['post_category'] = $role_id;

				foreach ($roles as $role)
				{
					if ($role->id == $role_id)
					{
						Template::set('filter_role', $role->kategori);
						break;
					}
				}
				break;

			case 'all':
				// Nothing to do
				break;

			default:
				show_404("arsip/index/$filter/");
		}

       #judul keyword bahasa
        if ($this->session->userdata('site_lang')=='indonesia') {
				  if ($this->session->userdata('site_lang')=='indonesia') {
    				$wherelike['judul'] =$this->input->get('keyword');
					}else{
					$wherelike['judul_english'] =$this->input->get('keyword');
					}
	    } else {
            		$wherelike['judul'] =$this->input->get('keyword');
        }


		if( $this->input->get('per_page')!="")
		$offset =$this->input->get('per_page');
		else
		$offset="";

		// Fetch the users to display
		$this->user_model->limit($limit, $offset)->where($where)->like($wherelike);
		$this->user_model->select('*');
		$this->user_model->order_by("tgl_arsip","desc");
		Template::set('users', $this->arsip_model->find_all());

		// Pagination
		$this->load->library('pagination');


		$this->arsip_model->like($wherelike);
		$this->arsip_model->where($where);
		$total_users = $this->arsip_model->count_all();

		$pager['page_query_string']	= TRUE;
		//$pager['base_url'] = site_url("/arsip/index/$filter/");

		$pager['base_url'] 			= site_url().'/arsip/index/'.$filter.'?keyword='.$this->input->get('keyword');


		$pager['total_rows'] = $total_users;
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
		$pager['per_page'] = $limit;
		//$pager['uri_segment']	= 4;

		$this->pagination->initialize($pager);

		Template::set('index_url', site_url('/arsip/index/') .'/');

		Template::set('filter_type', $filter_type);


		Template::render();
   	}

   	function file_download()
    {

        $file = $this->uri->segment(3);
        $this->load->helper('download');
        
        $data = file_get_contents(base_url("application/modules/arsip/files/".$file));
        $name = $file;

        force_download($name, $data);

	}

public function categories($kategori=0){


		 $kategori = str_replace('=','',base64_decode($this->uri->segment(3)));




	$limit=10;
        $role_id="";
      // Fetch roles we might want to filter on
		$roles = $this->db->query("select * from bf_m_kategori where type_kategori='arsip' and id='".$kategori."'  and deleted=0")->row();

		$id_kategori=str_replace('=','',base64_encode($roles->id));
		Template::set("kategori",$roles);
       #judul keyword bahasa
        if ($this->session->userdata('site_lang')=='indonesia') {
				  if ($this->session->userdata('site_lang')=='indonesia') {
    				$wherelike['judul'] =$this->input->get('keyword');
					}else{
					$wherelike['judul_english'] =$this->input->get('keyword');
					}
	    } else {
            		$wherelike['judul'] =$this->input->get('keyword');
        }


		if( $this->input->get('per_page')!="")
		$offset =$this->input->get('per_page');
		else
		$offset="";

		// Fetch the users to display
		$this->arsip_model->limit($limit, $offset)->like($wherelike);
		$this->arsip_model->select('*');
		$this->arsip_model->where("post_category",$kategori);
		$this->arsip_model->order_by("tgl_arsip","desc");
		Template::set('users', $this->arsip_model->find_all());

		// Pagination
		$this->load->library('pagination');

	
		$this->arsip_model->where("post_category",$kategori);
		$this->arsip_model->like($wherelike);
		$total_users = $this->arsip_model->count_all();

		$pager['page_query_string']	= TRUE;
		//$pager['base_url'] = site_url("/arsip/index/$filter/");

		$pager['base_url'] 			= site_url().'/arsip/categories/'.$id_kategori.'?keyword='.$this->input->get('keyword');


		$pager['total_rows'] = $total_users;
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
		$pager['per_page'] = $limit;
		//$pager['uri_segment']	= 4;

		$this->pagination->initialize($pager);

		Template::set('index_url', site_url('/arsip/categories/') .'/');
		Template::set("page_title",$roles->kategori);

		Template::render("page");
	}

    public function download_file()
	{
        
        $file_id = $this->uri->segment(3);
        
        $data = file_get_contents("./application/modules/arsip/files/".$file_id); // Read the file's contents
        $name = $file_id;

        force_download($name, $data);
        
        /*$this->load->config('config');
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
        */
	}

	public function detail($id){

		$arsip=$this->arsip_model->find(abs((int)$id));
		$kategori=$this->kategori_model->find($arsip->post_category);

			#insset jumlah pembaca
			$databaca['download'] = $arsip->download+1;
			$this->db->where('id', $id);
 			$pembaca = $this->db->update('arsip',$databaca);


		Template::set('kategori', $kategori);
		Template::set('arsip', $arsip);
		Template::render("page");

	}

	public function view($id){

	$arsip=$this->arsip_model->find(abs((int)$id));
	$data["arsip"]=$arsip;
	$this->load->view("view",$data);

	}



}
?>
