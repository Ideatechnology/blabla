<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Post extends Front_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('users/auth');
		$this->set_current_user();

		$this->load->helper('text');
		$this->load->helper('html');
		$this->load->helper('post');

		$this->set_current_user();
		$this->load->model('post_model', null, true);
		$this->load->model('kategori/kategori_model', null, true);

		$this->load->config('post/config');
		$this->upload_config = $this->config->item('upload_config');

		$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();


		$this->load->library("settings/settings_lib");

		#load bahasa
        if ($this->session->userdata('site_lang')) {
    		$this->lang->load('post',$this->session->userdata('site_lang'));
	    } else {
            $this->lang->load('post','indonesia');
        }


	}



	/*
	 *************************************************************************************************
	   Customize Dimulai dari Disini
	   Return Categories Post
	 *************************************************************************************************
	*/
	public function categories(){

		$kat = $this->uri->segment("2");
		$parse = explode("-",$kat);

		$query_kat = $this->db->where("id",$parse[0])->get("m_kategori")->row();


		#Related Posts
		$this->load->library('pagination');
		$offset = $this->input->get('per_page')?$this->input->get('per_page'):0;
		$limit = $this->settings_lib->item("site.list_limit");


		$total = $this->db->from('post_meta')
						  ->where('status_tampil',0)
						  ->where('deleted',0)
						  ->where('post_category',$parse[0])
						  ->order_by('created_on','DESC')
						  ->get()
						  ->num_rows();

		$pager['base_url'] 			= current_url() .'?';

		$pager['total_rows'] 			= $total;
		$pager['per_page'] 			= $limit;
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

		$relatedPosts = $this->db->from('post_meta')
									 ->where('status_tampil',0)
									 ->where('deleted',0)
									 ->where('post_category',$parse[0])
									 ->order_by("id","desc")
									 ->limit($limit, $offset)->get()->result();

 		Template::set('relatedPosts', $relatedPosts);



		Template::set('path_image', $this->upload_config['upload_path_image']);
		Template::set_block('sidebar', 'sidebar');

		Template::set("page_title",$query_kat->kategori);

			Template::set_view('categories');
			Template::render('page');




		//}


	}

	/*
	 *************************************************************************************************
	   Tidak Ada Customize Dimulai dari Disini
	   Return Detail Post
	 *************************************************************************************************
	*/
	public function read(){

 		$data_id=explode("-",abs((int)$this->uri->segment(2,0)));
		$id = $data_id[0];

		$Posts = $this->db->from('post_meta')
						  ->where('id', $id)
						  ->order_by('created_on','DESC')
						  ->get()
						  ->row();

		 Template::set("page_title",$Posts->judul);
	   Template::set('page_description',$Posts->slug_judul);
	   Template::set('page_keyword', $Posts->judul." |  D'Crepes");
		 Template::set('Posts', $Posts);

		$int =$id;
		if($int!= 0){

		#Popular Post
		#proses Update data
			#cek cosistence ID

			#insset jumlah pembaca
			$databaca['baca'] = $Posts->baca+1;
			$this->db->where('id', $int);
 			$pembaca = $this->db->update('post_meta',$databaca);





		}else {

		   redirect(site_url());
		}

		$terkait=$this->db->query("select * from bf_post_meta where id <> '".$id."'
		and deleted=0 and status_tampil=0 and post_category='".$Posts->post_category."' order by created_on desc limit 5")->result();

		Template::set("terkait",$terkait);
		Template::set('path_image', $this->upload_config['upload_path_image']);

		Template::set_block('sidebar', 'pages/sidebar');

		Template::set("page_title",$Posts->judul);


			Template::set_view('read');
			Template::render('page');


	}

}
