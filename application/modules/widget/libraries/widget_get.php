<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// ------------------------------------------------------------------------

/**
 * Widget_get Class
 *
 * The Widget_get class works with the Template class to provide powerful theme/template functionality.
 *
 */

class Widget_get 
{
   
   #Instance CI Variabel
   private $CI;
   
   #Prefix Default bit_
   private $prefix ='';
   
   #get your Tables 
   private $widget_tables;
   
   
   /*
     Construct
   */
   public function __construct(){
 	  $this->CI = & get_instance();
   } 
   
    /**
	 * widget_tools Function
	 * Show Coloumn sidebar or layout
 	 * Return @option widget
	 * Use :
	     $this->widget_get->widget_tools( Colomn side bar widget)  
	 *
	 */
 
   public function widget_column($column_sidebar=''){
	      
	   //Costructor 
 	   $this->widget_tables = 'widget';
	   
	   if( $column_sidebar ):
	   $option_wgt = $this->CI->db->from($this->widget_tables)
                                  ->order_by("sort_no","asc")
                                  ->where('column_sidebar', $column_sidebar)->get()->result();
	   
	   //print_r($option_wgt);
	   
	   if( $option_wgt ):
  			   
			  return $option_wgt;
  		    
	   endif;
	   
	   else:
	   
	     echo 'Widget Coloumn Not Founds.'; 
	   
	   endif;
	   
   }
   
   
   /**
	 * widget_render Function
	 * Show load view widget content
 	 * Return @Show Content
	 * Use :
	     $this->widget_get->widget_render( Auto_get_files_widget )  
	 *
	 */
	 
   public function widget_render($set_layout, $array=array()){
	   
 	    return $this->CI->load->view('widget/widget_themes/wgt_'.$set_layout ,  $array);
 	      
   }
   
   /**
	 * widget_show Function
	 * Show load view widget Array
 	 * Return @Show show
	 * Use :
	     $this->widget_get->widget_show( $array)  
	 *
	 */
	 public function widget_show($array=array()){
		  
		  if(!is_null($array)){
			 foreach($array as $wgt){
				  $widget['widgets'] = $wgt;
			      $this->widget_render($wgt->tipe_widget, $widget); #instance
 			 }  
		  } 
	 }
	 
	 
    #melakukan retrive database Widget into Sidebar
	   /**
		 * widget_model Function
		 * Retrive data 
		 * Use :
			 $this->widget_get->widget_model( idcoloumn )  
		 *
		 * using into apperance/widget
		 */
	  public function widget_model($column_sidebar){
		  $return = $this->CI->db->from('widget')->where('column_sidebar', $column_sidebar)->order_by("sort_no","asc")->get()->result();
		  return $return;
	  }
	  
	  
	   /**
		 * widget_forms Function
		 * Mengambil data Widget i.e (form post dll) disesuaikan dengan kolom widget masing-masing 
		 * Use :
			 $this->widget_get->widget_model( idcoloumn )  
		 *
		 */
	  public function widget_forms($widget_reference, $array=array()){
		  $return = $this->CI->load->view('widget/widget_references/wgt_reference_'.$widget_reference, $array);
 		  return $return;
	  }
	  
	  
	  /**
	 * widget_menu_render Function
	 * Show load Render Menu Locations
 	 * Return @Results Location
	 * Use :
	     $this->widget_get->widget_menu_render( Auto_get_location_menu )  
	 *
	 */
	 public function widget_menu_render($index_locations){
 	       
 		  $params = $this->prefix.'menu_lokasi.id = '.$this->prefix.'meta_menu.location_index';
 		 $this->CI->db->select($this->prefix.'meta_menu.*');
		 $return = $this->CI->db->from($this->prefix.'menu_lokasi')->join($this->prefix.'meta_menu', $params)
		 						->where($this->prefix.'menu_lokasi.id' , $index_locations)
								->order_by('rang','asc')
								->get()->result();
								
		 						
		 $results = '<ul class="navbarku">';
                        	 
							   #Cara Extract Menus
							   if($return):
							    foreach($return as $row):
							 
                            	$results .= '<li>';
                                   
								    #Validasi Consistence Menus
									#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
									if($row->url_module!=''):
									   //Menu Tidak ditampilkan
										$results .="<a href='".site_url($row->url_module)."'>".$row->name."</a>";
									endif;
									
									if($row->url_blank =='#'){
										$results .="<a href='#'>".$row->name."</a>";
									}
									
									#categories
									if($row->url_kategori!='' && $row->url_kategori!=0):
									   //Menu Tidak ditampilkan
									   $results .="<a href='".site_url('subblog/categories/'.$row->url_kategori)."/".url_title($row->name,'dash')."'>".$row->name."</a>";
									endif;
									
									if($row->url_pages !='' && $row->url_pages!=0){
										 $pages = $this->CI->db->from('pages_meta')->where('id', $row->url_pages)->get()->row();
										 $results .= "<a href='".site_url('subblog/pages/'.date("Y",strtotime($pages->created_on)).'/'.$row->url_pages.'/'.url_title($pages->judul, 'dash'))."'>".$row->name."</a>";
									}
									
									if($row->url_posts!=''):
									  #parsing/restrive Post data
									  $rows = $this->CI->db->from('post_meta')->where('id', $row->url_posts)->get()->row();
									  if($rows):
									  $results .="<a href='".site_url('subblog/read/'.date("Y",strtotime($rows->created_on)).'/'.$row->url_posts.'/'.url_title($rows->judul, 'dash'))."'>".$row->name."</a>";
										  
									  endif;
									 endif;
								   
                                $results .= '</li>';
                            
							     endforeach;
							   endif;
							 
                         $results .= '</ul>';
						 
				return $results; 
		  
	 }
    
   
}
?>