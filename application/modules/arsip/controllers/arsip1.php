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
  	
    }
	
	
	public function index($filter='all', $offset=0){
        $limit=5;
        $role_id="";
      // Fetch roles we might want to filter on
		$roles = $this->kategori_model->select('id, kategori')->where('deleted', 0)->where('type_kategori', 'arsip')->find_all();
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

		// Fetch the users to display
		$this->user_model->limit($limit, $offset)->where($where);
		$this->user_model->select('*');
		Template::set('users', $this->arsip_model->find_all());

		// Pagination
		$this->load->library('pagination');

		$this->arsip_model->where($where);
		$total_users = $this->arsip_model->count_all();

		$pager['base_url'] = site_url("/arsip/index/$filter/");
		$pager['total_rows'] = $total_users;
        $pager['full_tag_open']  = '<ul>';
	    $pager['full_tag_close']  = '</ul>';
	    $pager['next_link']  = '<li class="next">Next &raquo;</li>';
	    $pager['prev_link']   = '<li class="previous">Prev</li>';
	    $pager['cur_tag_open']  = '<li class="active">';
        $pager['cur_tag_close']  = '</li>';
		 $pager['num_tag_open']  = '<li>';
	    $pager['num_tag_close']  = '</li>';
		$pager['per_page'] = $limit;
		$pager['uri_segment']	= 4;

		$this->pagination->initialize($pager);

		Template::set('index_url', site_url('/arsip/index/') .'/');
		Template::set('filter_type', $filter_type);

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