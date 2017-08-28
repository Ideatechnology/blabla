<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// ------------------------------------------------------------------------

/**
 * Widget_custom Class
 *
 * The Widget_custom class works with the Template class to provide powerful theme/template functionality.
 *
 */
class Widget_custom 
{
  
  #Instance CI Variabel
   private $CI;
    
  
   
   #get your Tables  Index
   private $widget_tables;
   
  
   /*
     Construct
   */
   public function __construct(){
 	  $this->CI = & get_instance();
   } 
   
   
   /*
    * Content Widget Custom
	* @return : @Retive data Post Meta
   */

   public function widget_style_post($id_widget){
	   $id_widget =(int)$id_widget;
	   
	   $post = 'bf_widget_post';
	   $join = 'bf_post_meta';
  		  
		$this->CI->db->where($post.'.id', $id_widget);
		$this->CI->db->where($post.'.last_post_status ', 0); //kalau tidak null berarti milik POST bukan LAST_POST
 		$this->CI->db->where($join.'.status_tampil', 0);
		$this->CI->db->where($join.'.deleted', 0);
		$data = $this->CI->db->select($join.'.*,'.$post.'.title, '.$post.'.more_status,'.$post.'.style_widget')->from($post)
					         ->join($join, $join.'.post_category = '.$post.'.post_category')
 							 ->order_by($join.'.created_on', "Desc")
 							 ->get()->row();
  		    
	    return $data;
		//echo '<pre>'; print_r($data); echo '</pre>';die();
    	     
   }
   
   
   /*
    * Content Widget Custom
	* @return : @Retive data Post Meta
   */
   public function title_last($id_widget){
	   $id_widget =(int)$id_widget;
 	   return $this->CI->db->select('title')->from('widget_post')->where('id', $id_widget)->get()->row()->title;
   }
   public function widget_last_post($id_widget, $limit){
	   $id_widget =(int)$id_widget;
	   $limit =(int)$limit;
	   
	   $post = 'bf_widget_post';
	   $join = 'bf_post_meta';
  		  
		$this->CI->db->where($post.'.id', $id_widget);
		$this->CI->db->where($post.'.last_post_status', 1); 
		$this->CI->db->where($join.'.deleted', 0);
 		$this->CI->db->where($join.'.status_tampil', 0);
		
		$data = $this->CI->db->select($join.'.*,'.$post.'.title, '.$post.'.more_status')->from($post)
					         ->join($join, $join.'.post_category = '.$post.'.post_category')
 							 ->order_by($join.'.created_on', "Desc")
							 ->limit($limit)
							 ->get()->result();
  		    
	    return $data;
		
    	     
   }
   
   /*
    * Content Widget Custom
	* @return : @Retive data Post Meta
   */
   public function widget_post_more($post_category){
	    $post_category =(int)$post_category;
	   
	    $this->widget_tables = 'post_meta';
 		$this->CI->db->where($this->widget_tables.'.post_category', $post_category);
		$this->CI->db->where($this->widget_tables.'.status_tampil', 0);
		$data = $this->CI->db->from($this->widget_tables)->limit(5)->get()->result();
  		
	    return $data;
		//echo '<pre>'; print_r($data); echo '</pre>';die();
    	     
   }
   
   /*
    * Content Widget Custom
	* @return : @Retive data Text
	* 
   */
   public function widget_text($column_sidebar, $sort_no){
 	   $column_sidebar =(int)$column_sidebar;
	   $sort_no =(int)$sort_no;
	  
	    $data = $this->CI->db->query('select a.* from bf_widget_text a, bf_widget b
									 where
									 a.id = b.id_widget 
									 and b.column_sidebar ='.$column_sidebar.'
									 and b.sort_no='.$sort_no.' order by id desc limit 1')->result();
  		//echo $this->CI->db->last_query();
	    return $data;
     	     
   }
   
   
    /*
    * Content Widget Custom
	* @return : @Retive data Text
	* 
   */
   public function widget_tabs($id_widget){
	    $id_widget = $this->CI->db->escape_str($id_widget);
	   $this->CI->load->helper('text');
		$this->widget_tables = 'widget_tabs';
		if($id_widget){
			$data = $this->CI->db->from($this->widget_tables)->where('id IN ( '.$id_widget.' )')->get()->result();
 		}else{
			$data =array();
		}
  	    return $data;
	    //echo '<pre>'; print_r($data); echo '</pre>';die();
   }
   
   /*
    * Content Widget Custom
	* @return : @Retive data Text
	* 
   */
   public function widget_tabs_related($id_post_category, $tabs, $limit){
	    $id_post_category =(int)$id_post_category;
	    $tabs =(int)$tabs;
	     
	  $this->CI->load->helper('text');
		 $this->widget_tables = 'bf_widget_tabs';
		 
		 if($id_post_category=='80001'){ #80001 ada polpular indetification
			$data = $this->CI->db->from('hit_popular a')
		                     ->join('post_meta b', 'b.id = a.id_posts') 
							 ->where('datediff(a.tanggal, CURRENT_DATE() ) <= ', 30)
							 ->limit($limit)
							 ->get()->result(); 
			//echo $this->CI->db->last_query();die;
		 }else{
			 
		 $this->CI->db->where('post_meta.status_tampil', 0);
	     $data = $this->CI->db->from($this->widget_tables)
		                     ->join('post_meta', 'post_meta.post_category ='.$this->widget_tables.'.post_category')
		                     ->where('post_meta.post_category IN ('.$id_post_category.') 
									  and '.$this->widget_tables.'.colomn_tabs='.$tabs.'')
							 ->limit($limit)
							 ->get()->result(); 
    		 //echo $this->CI->db->last_query();
		 }
	    return $data;
	    //echo '<pre>'; print_r($data); echo '</pre>';die();
   }
   
    /*
    * Content Widget Custom
	* @return : @Retive data blogroll
	* 
   */
   public function widget_blog( $id_widget, $column_sidebar, $sort_no ){
	  $id_widget =(int)$id_widget;
	  $column_sidebar =(int)$column_sidebar;
	  $sort_no =(int)$sort_no;
	  
	  $data = $this->CI->db->query('select b.*, c.kategori from bf_widget_blogroll a, bf_blogroll b, bf_m_kategori c, bf_widget d
									where
									a.link_category = b.link_category and
									b.link_category = c.id and
									c.type_kategori ="link" and
 									d.column_sidebar = '.$column_sidebar.' and
									d.sort_no ='.$sort_no.'  and
									a.id = '.$id_widget.'')->result();
			//echo $this->CI->db->last_query();			
	 return $data;
   }
   public function widget_blog_headers( $id_widget, $column_sidebar, $sort_no ){
	  $id_widget =(int)$id_widget;
	  $column_sidebar =(int)$column_sidebar;
	  $sort_no =(int)$sort_no;
	  
	  $blog_header_tabs = $this->CI->db->query('select c.kategori from bf_widget_blogroll a, bf_blogroll b, bf_m_kategori c, bf_widget d
									where
									a.link_category = b.link_category and
									b.link_category = c.id and
									c.type_kategori ="link" and
 									d.column_sidebar = '.$column_sidebar.' and
									d.sort_no ='.$sort_no.'  group by b.link_category')->row(); 
	  return $blog_header_tabs->kategori;
   }
    /*
    * Content Widget Custom
	* @return : @Retive data blogroll style widget
	* Related Function widget_blog_all_result() dan widget_blog
	* 
   */
   public function widget_blog_all( $id_widget, $column_sidebar, $sort_no ){
	   
	  $id_widget =(int)$id_widget;
	  $column_sidebar =(int)$column_sidebar;
	  $sort_no =(int)$sort_no;
	  
	  $data = $this->CI->db->query('select a.* from bf_widget_blogroll a, bf_widget b
									where
									a.id = b.id_widget  and
 									b.column_sidebar = '.$column_sidebar.' and
									b.sort_no ='.$sort_no.'  and
									a.id = '.$id_widget.' ')->row();
	 			
	   return $data;
	  
   }
   
    /*
    * Content Widget Custom
	* @return : @Retive data blogroll Semua 
	* Related Function widget_blog_all() dan widget_blog
	* 
   */
   public function widget_blog_all_result(){
	  $data = $this->CI->db->query('select a.*, b.kategori from bf_blogroll a, bf_m_kategori b
									where
									a.link_category = b.id group by b.id')->result();
 						return $data;
   }
   
   public function widget_blog_all_row($category){
	  $category =(int)$category;
 	  $data = $this->CI->db->query('select a.*, b.kategori from bf_blogroll a, bf_m_kategori b
									where
									a.link_category = b.id and a.link_category ='.$category.'')->result();
 						return $data;
   }
   
   
  
    /*
    * Content Widget Custom
	* @return : @Retive data Agenda 
	* Related none
	* 
   */
   public function widget_agenda($id_widget, $column_sidebar, $sort_no ){
         $id_widget =(int)$id_widget;
		 $column_sidebar =(int)$column_sidebar;
	     $sort_no =(int)$sort_no;
	  
	     $CheckValids = $this->CI->db->query('select a.*, b.title_widget from bf_widget a, bf_widget_agenda b
											 where
											 a.id_widget = b.id and
											 a.column_sidebar = '.$column_sidebar.' and
											 a.sort_no ='.$sort_no.' and
											 a.id_widget = '.$id_widget.'
											 ');
		 $agenda=array();		
		 if( $CheckValids->num_rows() > 0 ){
			 #keluarkan Agenda Widget
			 $agenda = $this->CI->db->query('select * from bf_agenda order by id limit 5')->result();
			     
 		 }
		 
		 return $agenda;
       
      
   }
   
   
    /*
    * Content Widget Custom
	* @return : @Retive data Arsip 
	* Related none
	* 
   */
   public function widget_arsip($id_widget){
	   $id_widget =(int)$id_widget;
 	   $check = $this->CI->db->query('select a.id_widget, b.title, b.status_list
									from bf_widget a, bf_widget_arsip b 
									where
									a.id_widget = b.id and
 									a.id_widget ='.$id_widget.' group by  a.id_widget
									')->row();
 	   if($check){
		  $data = $this->CI->db->query('select * from bf_arsip ORDER BY  DATE_FORMAT(tgl_arsip, "%Y-%M") limit 0, 6')->result();   
	   }
	   return $data;
   }
   public function widget_arsip_title($id_widget){
	   $id_widget =(int)$id_widget;
 	   $data = $this->CI->db->query('select a.id_widget, b.title, b.status_list
									from bf_widget a, bf_widget_arsip b 
									where
									a.id_widget = b.id and
 									a.id_widget ='.$id_widget.' group by  a.id_widget
									')->row();
  	   if($data){
	   		return $data;
	   } 
   }
   
   
     /*
    * Content Widget Custom
	* @return : @Retive data Galeri Foto 
	* Related none
	* 
   */
	 public function widget_foto($id_widget){
		   $id_widget =(int)$id_widget;
 		   $check = $this->CI->db->query('select a.id_widget, b.title, b.jml_foto
										from bf_widget a, bf_widget_foto b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.' group by  a.id_widget
										')->row();
		   $data['title']= $check->title;
		   if($check){
			  $data = $this->CI->db->query("select bf_m_kategori.*,
								bf_m_kategori.id as id_kategori,
	   							bf_galeri_foto.title_foto,
								bf_galeri_foto.file_foto,
								(select count(*) from 
								bf_galeri_foto where 
								bf_galeri_foto.id_album=bf_m_kategori.id) as jumgaleri
								from bf_m_kategori
								left join bf_galeri_foto on 
								bf_galeri_foto.id_album=bf_m_kategori.id
								where bf_m_kategori.type_kategori='gallery' 
								and title_foto!='' 
								group by bf_m_kategori.id 
								order by bf_m_kategori.id desc
								limit 0,".$check->jml_foto."
			  					")->result();   
		   }
		   return $data;
	  }
	  public function widget_foto_title($id_widget){
	   $id_widget =(int)$id_widget; 
	   $data = $this->CI->db->query('select a.id_widget, b.title, b.jml_foto
									from bf_widget a, bf_widget_foto b 
									where
									a.id_widget = b.id and
 									a.id_widget ='.$id_widget.' group by  a.id_widget
									')->row();
  	   return $data;
   }
	  
	   /*
    * Content Widget Custom
	* @return : @Retive data Buletin 
	* Related none
	* 
   */
	 public function widget_buletin($id_widget){
		   $id_widget =(int)$id_widget;
 		   $check = $this->CI->db->query('select a.id_widget, b.title, b.jml_buletin
										from bf_widget a, bf_widget_buletin b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.' group by  a.id_widget
										')->row();
		   $data['title']= $check->title;
		   if($check){
			  $data = $this->CI->db->query('select * from bf_media where publish="Y" order by id_media desc limit 0, '.$check->jml_buletin.' ')->result();   
		   }
		   return $data;
	  }
   public function widget_buletin_title($id_widget){
	   $id_widget =(int)$id_widget; 
	   $data = $this->CI->db->query('select a.id_widget, b.title, b.jml_buletin
									from bf_widget a, bf_widget_buletin b 
									where
									a.id_widget = b.id and
 									a.id_widget ='.$id_widget.' group by  a.id_widget
									')->row();
  	   return $data;
   }
   
    /*
    * Content Widget Custom
	* @return : @Retive data Galeri Foto 
	* Related none
	* 
    */
	 public function widget_kontak($id_widget){
		   $id_widget =(int)$id_widget;
		   $check = $this->CI->db->query('select a.id_widget, b.id
										from bf_widget a, bf_widget_kontak b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.' group by  a.id_widget 
										')->row();
		   
		    $data = $this->CI->db->query('select * from bf_widget_kontak  order by id desc limit 1')->row();  
			   return $data;
		  
	 }
       
   /*
    * Content Widget Custom
	* @return : @Retive data Banners
	* Related none
	* 
    */
	 public function widget_banners($id_widget){
		   $id_widget =(int)$id_widget;
		   $check = $this->CI->db->query('select a.id_widget, b.id, b.jml_views,b.flag_animation
										from bf_widget a, bf_widget_banners b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.' group by  a.id_widget
										')->row();
		 
		   $count ='';
		   if($check){
			  if($check->jml_views!=0){
				 #count
				 $count =  ' limit 0,'.$check->jml_views;
			  }
			  $data = $this->CI->db->query('select * from bf_banners '.$count )->result();   
 		   }
		      $data ['flag_animation'] = $check->flag_animation;
		   return $data;
	 }
	 
	 
	 /*
    * Content Widget Custom
	* @return : @Retive data scrolltext
	* Related none
	* 
    */
	 public function widget_scrolltext($id_widget){
		   $id_widget =(int)$id_widget;
		   $check = $this->CI->db->query('select a.id_widget, b.id, b.flag_animation
										from bf_widget a, bf_widget_scrolltext b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.'
										')->row();
		 
		   
		   if($check->id_widget){
 			  $data = $this->CI->db->query('select * from bf_scrolltext where flag_scroll=1')->row(); 
			  
			   $precus['animation']= $check->flag_animation;
 		       $precus['scrolltext'] = $data->scrolltext;
 		       $precus['scrolltext_english'] = $data->scrolltext_english;
		       
			   return $precus;
		   }
		  
		    
	 }
       
	   
	  /*
    * Content Widget Custom
	* @return : @Retive data Polling
	* Related none
	* 
    */
	 public function widget_polling($id_widget){
		   $id_widget =(int)$id_widget;
		   $check = $this->CI->db->query('select a.id_widget, b.flag_polling
										from bf_widget a, bf_widget_polling b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.'
										')->row();
		 if($check->id_widget){
 			   $poll = $this->CI->db->query('SELECT * FROM (`bf_polling`) 
											 WHERE flag_polling = '.$check->flag_polling.' 
											 AND DATE_FORMAT(NOW(),"%Y-%m-%d") >= tgl_waktu_polling
											 AND DATE_FORMAT(NOW(),"%Y-%m-%d") <= tgl_batas_polling')->row(); 
			   
 		   }
		    
		  return $poll;   
	 }
	 
	 
	   /*
    * Content Widget Custom
	* @return : @Retive data multimedia
	* Related none
	* 
    */
	 public function widget_multimedia($id_widget){
		   $id_widget =(int)$id_widget;
		  
		   $check = $this->CI->db->query('select count(a.id_widget) as jml 
										from bf_widget a, bf_widget_multimedia b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.'
										group by a.id_widget
										')->row();
		    
		   if($check->jml > 0){
			   #tampilkan multimedia
			   $mult = $this->CI->db->from('multimedia')->get()->result();
			   $field['mult']= $mult;
			   
			   
			    $f = $this->CI->db->query('select b.title,b.width,b.height
										from bf_widget a, bf_widget_multimedia b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.'
										group by a.id_widget
										')->row();
				
			   $field ['title'] = $f->title;
			   $field ['width'] = $f->width;
			   $field ['height'] = $f->height;
			   return $field;   
		   }
		    
		  
	 }
	 
	    /*
    * Content Widget Custom
	* @return : @Retive data multimedia
	* Related none
	* 
    */
	 public function widget_social($id_widget){
		      $id_widget =(int)$id_widget;
	 
			   #tampilkan multimedia
 			    $f = $this->CI->db->query('select b.*
										from bf_widget a, bf_widget_social_media b 
										where
										a.id_widget = b.id and
										a.id_widget ='.$id_widget.'
										group by a.id_widget
										')->row();
 			   return $f;   
		   
		    
		  
	 }
}
?>