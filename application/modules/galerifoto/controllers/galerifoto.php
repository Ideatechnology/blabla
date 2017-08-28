<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galerifoto extends Front_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
  		$this->load->helper('text');
		$this->load->library('users/auth');
		$this->set_current_user();

	   #-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------

		$this->load->config('config');
		$this->upload_config_gallery = $this->config->item('upload_config_gallery');
		if($this->session->userdata("site_lang")){
			$this->lang->load('gallery',$this->session->userdata("site_lang"));
		}else{
			$this->lang->load('gallery','indonesia');
		}


 	}


	public function index($offset = 0)
	{

	   $this->load->library('pagination');
	   $config['base_url'] = site_url('galerifoto/index');
       $config['total_rows'] = $this->db->query("select bf_album_foto.*,
								bf_album_foto.id as id_kategori,
	   							bf_galeri_foto.title_foto,
								bf_galeri_foto.file_foto,
								(select count(*) from
								bf_galeri_foto where
								bf_galeri_foto.id_album=bf_album_foto.id) as jumgaleri
								from bf_album_foto
								left join bf_galeri_foto on
								bf_galeri_foto.id_album=bf_album_foto.id
								where bf_album_foto.type_kategori='galleri'
								and title_foto!=''
								group by bf_album_foto.id
								order by bf_galeri_foto.id desc,bf_album_foto.id desc
								")->num_rows();

        $config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
 		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = 'First';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

	   $this->pagination->initialize($config);
	   $gs = $this->db->query("select bf_album_foto.*,
								bf_album_foto.id as id_kategori,
	   							bf_galeri_foto.title_foto,
								bf_galeri_foto.file_foto,
								(select count(*) from
								bf_galeri_foto where
								bf_galeri_foto.id_album=bf_album_foto.id) as jumgaleri
								from bf_album_foto
								left join bf_galeri_foto on
								bf_galeri_foto.id_album=bf_album_foto.id
								where bf_album_foto.type_kategori='galleri'
								and title_foto!=''
								group by bf_album_foto.id
								order by bf_galeri_foto.id desc,bf_album_foto.id desc
								limit ".$offset.",".$config['per_page']."")->result();

       $links = $this->pagination->create_links();
	   Template::set('path_image_gallery',base_url().$this->upload_config_gallery['upload_path_image_gallery']);
	   Template::set('gs', $gs);
	   Template::set('links', $links);

	   Template::render("page");

 	}


	public function detail($id)
	{


		Assets::add_js(Template::theme_url("js/jquery.fancybox.js"));
		Assets::add_css(Template::theme_url("js/jquery.fancybox.css"));
		Assets::add_js("$('.fancybox').fancybox();","inline");

		$querydetail = $this->db->query("select bf_galeri_foto.*,bf_album_foto.kategori
		from bf_galeri_foto inner join bf_album_foto
		on bf_galeri_foto.id_album=bf_album_foto.id
		where
		bf_galeri_foto.id_album ='".$id."'
		order by bf_galeri_foto.id desc")->result();

 	    Template::set('galerifoto', $querydetail);

	    Template::set('path_image_gallery',$this->upload_config_gallery['upload_path_image_gallery']);

	    Template::render("page");

	}


}
?>
