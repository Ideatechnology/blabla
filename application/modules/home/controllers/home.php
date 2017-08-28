
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2013, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');

			$this->load->helper('post/post');

			$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();

		$this->load->library('users/auth');
		$this->set_current_user();

			#load bahasa
        if ($this->session->userdata('site_lang')) {
    		$this->lang->load('home',$this->session->userdata('site_lang'));
	    } else {
            $this->lang->load('home','indonesia');
        }



	}


	function sitemap(){

	 $urlslist = array();
	Template::set("urlslist",$urlslist);
	Template::set_view("sitemap_view");
	Template::render("page");
	
	}
	//--------------------------------------------------------------------

	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{

		#produk
		$this->load->helper("text");
		$this->load->helper("html");
		$this->load->helper('menuthemes/slug_menu');
		$this->load->library('users/auth');
		$this->load->helper('url');
		$this->set_current_user();
		#load model
		$this->load->model("post/post_model");
		$this->load->model("kategori/kategori_model");
    
		
		$news_nasional=$this->db->query("select * from bf_post_meta where deleted=0 and status_tampil=0 and post_category=77 order by created_on desc 
		limit 4")->result();
		Template::set("news_nasional",$news_nasional);

		$news_daerah=$this->db->query("select * from bf_post_meta where deleted=0 and status_tampil=0 and post_category=81 order by created_on desc 
		limit 4")->result();
		Template::set("news_daerah",$news_daerah);

		$news_kemendagri=$this->db->query("select * from bf_post_meta where deleted=0 and status_tampil=0 and post_category=43 order by created_on desc 
		limit 4")->result();
		Template::set("news_kemendagri",$news_kemendagri);


		$artikel=$this->db->query("select * from bf_post_meta where deleted=0 and status_tampil=0 and post_category=93 order by created_on desc 
		limit 5")->result();
		Template::set("artikel",$artikel);


		$video=$this->db->query("select * from bf_multimedia where flag=1 order by id desc limit 1")->result_array();
		Template::set("video",$video);
		

		
		$gallery=$this->db->query("SELECT * FROM bf_galeri_foto a 
								order by a.id desc limit 10 ")->result();
		Template::set("gallery",$gallery);

	

	

		$gallery_portal=$this->db->query("SELECT * FROM bf_galeri_foto a 
								where flag=1
								group by a.id_album 
								order by a.id desc limit 7")->result();
		Template::set("gallery_portal",$gallery_portal);
		
		
		
		
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
								limit 0,7")->result();
		Template::set("gs",$gs);

		$this->load->model("slide/slide_model");
		$slide = $this->slide_model->getSlider(6);
		Template::set("slide",$slide);


		
		
		$produk_hukum = $this->db->order_by("id","desc")
								 ->limit(5,0)
								 ->get("arsip")->result();
		Template::set("produk_hukum",$produk_hukum);

		$publikasi = $this->db->order_by("id_publikasi","desc")->limit(20)->get("publikasi")->result();
		Template::set("publikasi",$publikasi);
		
		Template::set_view('home');
		Template::render();




	}//end index()

	public function welcome(){
        
        $pengumuman = $berita = $this->post_model->select_public(0,1,86)->result();
	    $data["pengumuman"] = $pengumuman;
        
        $slider= $this->db->query("select * from bf_gambardepan where deleted=0")->result();
        $data["slider"] = $slider;

        $icon = $this->db->query("select * from bf_icon where deleted=0")->result();
        $data["icon"] = $icon;
 
        $this->load->view("welcome",$data);
        
        
    }


	//--------------------------------------------------------------------

	/**
	 * If the Auth lib is loaded, it will set the current user, since users
	 * will never be needed if the Auth library is not loaded. By not requiring
	 * this to be executed and loaded for every command, we can speed up calls
	 * that don't need users at all, or rely on a different type of auth, like
	 * an API or cronjob.
	 *
	 * Copied from Base_Controller
	 */
	protected function set_current_user()
	{
		if (class_exists('Auth'))
		{
			// Load our current logged in user for convenience
			if ($this->auth->is_logged_in())
			{
				$this->current_user = clone $this->auth->user();

				$this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

				// if the user has a language setting then use it
				if (isset($this->current_user->language))
				{
					$this->config->set_item('language', $this->current_user->language);
				}
			}
			else
			{
				$this->current_user = null;
			}

			// Make the current user available in the views
			if (!class_exists('Template'))
			{
				$this->load->library('Template');
			}
			Template::set('current_user', $this->current_user);
		}
	}

	function change_language($id){

		#format penggantian bahasa
		//index.php/home/change_language/french?page=profile_pimpinan/index
		$data=array("site_lang"=>$id);
		$this->session->set_userdata($data);
		redirect(@$_GET["page"]);

	}


	//--------------------------------------------------------------------
}//end class
