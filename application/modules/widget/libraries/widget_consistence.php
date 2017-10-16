<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * Widget_consistence Class
 *
 * The Widget_consistence class works with the Template class to provide powerful theme/template functionality.
 *
 */

class Widget_consistence
{

   #Instance CI Variabel
   private $CI;



   public function __construct(){

		$this->CI = & get_instance();

		#load library user
		$this->CI->load->library('users/auth');

		$this->CI->load->model('users/user_model');

		$this->CI->load->helper('form');

		#load bahasa
        if ($this->CI->session->userdata('site_lang')) {
    		$this->CI->lang->load('../application',$this->CI->session->userdata('site_lang'));
	    }else{
			$this->CI->session->set_userdata(array('site_lang'=>'indonesia'));
            $this->CI->lang->load('../application','indonesia');
        }




		//}
   }

   /*
     Widget ini untuk Menu Belakang
	 Karena Dia konsisten akan selalu diminta ketika proses di menu belakang
   */

   public function widget_set_themes(){

	   	#untuk system include menu
        $this->CI->load->helper('menuthemes/slug_menu'); #!important to load Menu Collapse
        $this->CI->load->helper('uploadut');
        
		$this->CI->load->model("post/post_model");

		


		//untuk set template secara dinamis
		$this->CI->load->model("templates/templates_model");
		$template = $this->CI->templates_model->find_by("aktif","Y");
		Template::set_default_theme($template->folder);

		
    
			
		#link
		$this->CI->load->model("link/link_model");
		
		
		$banner_link = $this->CI->link_model->getLink(20,"Banner Link");
		Template::set("banner_link",$banner_link);
		


		$hari = date("d");
		$bulan = date("m");
		$tahun = date("Y");

		$redaksi = $this->CI->post_model->post_categories(107,0,4)->result();
		Template::set("redaksi",$redaksi);

		$kolom = $this->CI->post_model->post_categories(97,0,4)->result();
		Template::set("kolom",$kolom);


		$editorial = $this->CI->post_model->post_categories(104,0,4)->result();
		Template::set("editorial",$editorial);

		//artikel terbaru 
		$artikel_terbaru = $this->CI->post_model->post_categories(98,0,4)->result();
		Template::set("artikel_terbaru",$artikel_terbaru);

		//artikel terpopuler
		$artikel_terpopuler = $this->CI->post_model->post_categories(98,0,4,"baca")->result();
		Template::set("artikel_terpopuler",$artikel_terpopuler);


		//kegiatan terbaru 
		$kegiatan_terbaru = $this->CI->post_model->post_categories(96,0,4)->result();
		Template::set("kegiatan_terbaru",$kegiatan_terbaru);

		//kegiatan terpopuler 
		$kegiatan_terpopuler = $this->CI->post_model->post_categories(96,0,4,"baca")->result();
		Template::set("kegiatan_terpopuler",$kegiatan_terpopuler);

		
		$statistikperhari=$this->CI->db->query("select count(*) as jumlah from bf_activities where DATE_FORMAT(created_on,'%d')='".$hari."'")->row();
		Template::set("statistikperhari",$statistikperhari->jumlah);
		$statistikperbulan=$this->CI->db->query("select count(*) as jumlah from bf_activities where DATE_FORMAT(created_on,'%m')='".$bulan."'")->row();
		Template::set("statistikperbulan",$statistikperbulan->jumlah);
		$statistikpertahun=$this->CI->db->query("select count(*) as jumlah from bf_activities where DATE_FORMAT(created_on,'%Y')='".$tahun."'")->row();
		Template::set("statistikpertahun",$statistikpertahun->jumlah);
		$statistiktotal=$this->CI->db->query("select count(*) as jumlah from bf_activities")->row();
		Template::set("statistiktotal",$statistiktotal->jumlah);


		#untuk polling
		$this->CI->load->model("polling/polling_model");
		$polling = $this->CI->polling_model->getID_Publish();
		Template::set("polling",$polling);


			//untuk statistik pengunjung
				$tanggal = date("Y-m-d");
				   $ip      = $_SERVER['REMOTE_ADDR'];
				$waktu   = date("Y-m-d H:i:s");
               $s = $this->CI->db->query("SELECT count(*) as jumlah FROM bf_activities WHERE activity='pengunjung : ".$ip."' AND DATE_FORMAT(created_on,'%Y-%m-%d')='".$tanggal."'")->row();
				if($s->jumlah == 0){
					$this->CI->db->query("INSERT INTO bf_activities(user_id,activity, module, created_on) VALUES('0','pengunjung : ".$ip."',
					'visitor','$waktu')");
				}




   }

}

?>
