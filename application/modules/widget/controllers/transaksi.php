<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Transaksi extends Admin_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('data');
		$this->load->helper('widget_setting');
 		$this->load->library('form_validation');
 		$this->load->library('widget/widget_get');
		$this->load->library('widget/widget_tools');
 		
   		Template::set('toolbar_title','Widgets Settings');
		Template::set_block('sidebar', 'transaksi/sidebar');
		
		Assets::add_module_css('widget', 'css/widget.css');
		Assets::add_js('jquery-ui-1.8.2_widget.js');
		Assets::add_js('mousewheel/jquery.mousewheel.min.js');
		Assets::add_js('jquery.table.addrow.js');
		Assets::add_js('mousewheel/jquery.mCustomScrollbar.js');
		Assets::add_css('mousewheel/jquery.mCustomScrollbar.css');
		Assets::add_js($this->load->view('transaksi/js', null, true), 'inline');
		
 	}
	
	
	public function index() 
	{
 	   $this->auth->restrict('Menuthemes.Transaksi.View');
 	   $this->load->library('widget_custom');
	   
 	   #Category Post
	   Template::set('optCategory', $this->ReferensiCategory());
	   
	   #Category BlogRoll
 	   Template::set('optBlogCategory', $this->BlogrollCategory());
	   
	   #Category Polling
 	   Template::set('Polling', $this->DaftarPolling());
	   
  	   Template::render('custome_two_right');
 	}
	
	
	
	#widget Referensi#
 	/*
	@Library Referensi
	#Return : Function()
	#description : Library ini bertujuan untuk memberikan nilai keluaran
				  sesuai dengan kegunaannya.
	#Parsing into : Index() or etc.
	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	
	public function ReferensiCategory(){
	   $this->db->where('deleted',0);
	   $this->db->where('type_kategori in ("artikel","berita")');
	   $reference = $this->db->from('m_kategori')->get()->result();
  	   $Category['category'] = array('80001'=>'Show Popular', '---Other Category---'=>reference_map($reference, 'id','kategori'));
	   
	   return $Category;
	}
	
	/*
	@Library Referensi
	#Return : Function()
	#description : Library ini bertujuan Blogroll Category
	#Parsing into : Index() or etc.
	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	
	public function BlogrollCategory(){
	   $this->db->where('deleted',0);
	   $this->db->where('type_kategori', 'link');
	   $reference = $this->db->from('m_kategori')->get()->result();	
 	   $Category = reference_map($reference, 'id','kategori');
	   $CategoryPilih= array('0'=>'All Category', '--pilih--'=> $Category );
	   return $CategoryPilih;
	}
	
	/*
	@Library Referensi
	#Return : Function()
	#description : Library ini bertujuan Menampilkan Daftar Polling
	#Parsing into : Index() or etc.
	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	
	public function DaftarPolling(){
 	   $this->db->where('flag_polling', '1');
	   $reference = $this->db->from('polling')->get()->result();	
 	   $polling['polling'] = reference_map($reference, 'id','judul');
 	   return $polling;
	}
	
	#widget Save#
	public function updatePanels(){
 	    if(!$_GET["data"]){
			echo "Invalid data";
			exit;
		}

 		$parsing = isset($_GET["data"]) ? $_GET["data"] : '';
	    $data=json_decode($parsing);
		
		
	 foreach($data->items as $item)
		{
  			if(isset($item)){
				//Extract column number for panel
				$column_sidebar=preg_replace('/[^\d\s]/', '', $item->column); 
				//Extract id of the panel
				$id_referen_widget=preg_replace('/[^\d\s]/', '', $item->id);
				$tipe_widget = isset($item->referen) ?  $item->referen : '' ;
				
				#insert into Widget
				$data = array('column_sidebar' => $column_sidebar,
							  'id_referen_widget' =>$id_referen_widget,
							  'tipe_widget' => $tipe_widget,
							  'collapse' =>$item->collapsed,
							  'sort_no' =>$item->order,
							  );
				
				#Info Widget Register
				 $this->db->where(array('id_referen_widget' => $id_referen_widget,
									   'column_sidebar' => $column_sidebar,
									   'sort_no' =>$item->order
									   ));
				$infowgt = $this->db->select('id')->from('widget')->get()->row(); 
				
				#jika sudah ada Widget tersebut sesuai where, maka jangan di isnert lagi
 				if(!isset($infowgt->id) && $tipe_widget !=''){
 				   #genereate Save
				   $this->db->insert('widget', $data);
    			}
 				 
			}
 	    } 
		  
	}
 
 	
	#using widget_tools
	/*----------------------------------------------------------------------------------
	 * Method Send Post
	*/
 	public function post_submit_panel()
	{
	    $this->widget_tools->post_submit_panel();	
	}
	/*----------------------------------------------------------------------------------
	 * Method  Multimedia
	*/
	
	public function multimedia_submit_panel()
	{
	    $this->widget_tools->multimedia_submit_panel();	
	}
	/*----------------------------------------------------------------------------------
	 * Method Send Post
	*/
 	public function last_post_submit_panel()
	{
	    $this->widget_tools->last_post_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Post
	*/
 	public function text_submit_panel()
	{
	    $this->widget_tools->text_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Tabs
	*/
 	public function tabs_submit_panel()
	{
	    $this->widget_tools->tabs_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Tabs
	*/
 	public function blogroll_submit_panel()
	{
	    $this->widget_tools->blogroll_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Tabs
	*/
 	public function agenda_submit_panel()
	{
	    $this->widget_tools->agenda_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Arsip
	*/
 	public function arsip_submit_panel()
	{
	    $this->widget_tools->arsip_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Galeri Foto
	*/
 	public function foto_submit_panel()
	{
	    $this->widget_tools->foto_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Send Kontak
	*/
 	public function kontak_submit_panel()
	{
	    $this->widget_tools->kontak_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Banners
	*/
 	public function banners_submit_panel()
	{
	    $this->widget_tools->banners_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Banners
	*/
 	public function scrolltext_submit_panel()
	{
	    $this->widget_tools->scrolltext_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Banners
	*/
 	public function polling_submit_panel()
	{
	    $this->widget_tools->polling_submit_panel();	
	}
	/*----------------------------------------------------------------------------------
	 * Method Social
	*/
 	public function social_submit_panel()
	{
	    $this->widget_tools->social_submit_panel();	
	}
	
	/*----------------------------------------------------------------------------------
	 * Method Buletin
	*/
 	public function buletin_submit_panel()
	{
	    $this->widget_tools->buletin_submit_panel();	
	}
	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data ?
	 * Tipe Widget : ?
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
 	
	
	
	#Delete panel
	public function delete_panel(){
		$column_sidebar=preg_replace('/[^\d\s]/', '', $_GET['columnId']); 
		
	    #delete WIdget Relasi
		$this->db->where(array('sort_no'=> $_GET['sortNo'], 'column_sidebar'=> $column_sidebar));
		$widget = $this->db->select('id_widget, id_referen_widget')->from('widget')->get()->row();
		
		 
  		switch($widget->id_referen_widget){
		   case '1':
		      //delete widget_post with POST
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_post');
 		   break;
		   
		   case '2':
		      //delete widget_tabs with TABS
			    $id = explode(',', $widget->id_widget);
			    
			     //if($widget->id_widget){
				   for($i=0; $i<count($id); $i++){
 					   $this->db->where('id', $id[$i]);
			   		   $this->db->delete('widget_tabs');
  				   }
				 //}
			   
 		   break;
		   case '3':
 			   //delete widget_banners with Banners
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_multimedia'); 
 		   break;
		   case '4':
		      //delete widget_banners with Banners
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_polling');
			   
 		   break;
		   
		    case '5':
		      //delete widget_agenda with AGENDA
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_agenda');
			   
 		   break;
		   
		    case '7':
		      //delete widget_agenda with AGENDA
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_social_media');
			   
 		   break;
		   
		   case '8':
		      //delete widget_blogroll with BLOGROLL
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_blogroll');
			   
 		   break;
		   
		   
		   case '10':
		      //delete widget_post with Post
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_post');
			   
 		   break;
		   
		   case '11':
		      //delete widget_arsip with Arsip
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_arsip');
			   
 		   break;
		   
		   case '12':
		      //delete widget_foto with Foto Galeri
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_foto');
			   
 		   break;
		   
		   case '13':
		      //delete widget_foto with Foto Galeri
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_kontak');
			   
 		   break;
		   
		   case '14':
		      //delete widget_banners with Banners
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_banners');
			   
 		   break;
		   
		    case '15':
		      //delete widget_banners with Banners
			   $this->db->where('id', $widget->id_widget);
			   $this->db->delete('widget_scrolltext');
			   
 		   break;
		   
		}
		
		 $this->db->where(array('sort_no'=> $_GET['sortNo'], 'column_sidebar'=> $column_sidebar));
	     $this->db->delete('widget');
 		 echo $_GET['sortNo'];
 	}
	
	 
 
	
}
?>