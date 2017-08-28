<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// ------------------------------------------------------------------------

/**
 * Widget_get Class
 *
 * The Widget_get class works with the Template class to provide powerful theme/template functionality.
 *
 */

class Widget_tools 
{
   
    #Instance CI Variabel
     private $CI;
     
	 #escape string variabel
	 private $esc;
	 
	 
      /*
        Construct
   	  */
	   public function __construct(){
		  $this->CI = & get_instance();
		  $this->esc = $this->CI->db;
	   } 
   
   
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data post dan update post dari Widget
	 * Tipe Widget : widget_post
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page post Submit
	public function post_submit_panel(){
 		 
		$t = $this->CI->input;
		
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;

		  

		   $data = array(  'id'=>$max,
                            'title' => $this->esc->escape_str($t->post('title')),
						   'post_category' => $this->esc->escape_str($t->post('category')),
						   'more_status' => $this->esc->escape_str($t->post('more_status')),
						   'style_widget' => $this->esc->escape_str($t->post('style_widget')) 
						   );
		   $log = $this->CI->db->insert('widget_post' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=> $this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=>  $this->esc->escape_str($t->post('sort_no_identity')),
									  'column_sidebar' =>  $this->esc->escape_str($t->post('coloumn_sidebar')) ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
			 $data = array(  'title' => $this->esc->escape_str($t->post('title')),
						   'post_category' => $this->esc->escape_str($t->post('category')),
						   'more_status' => $this->esc->escape_str($t->post('more_status')),
						   'style_widget' => $this->esc->escape_str($t->post('style_widget')) 
						   );
			 
		   $id=(int)$t->post('post_id');
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_post' , $data );
		   
		  
		   if($log){
			  echo 'success';   
		   }
	   }
		
	}
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data post dan update last post dari Widget
	 * Tipe Widget : widget_post
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page post Submit
	public function last_post_submit_panel(){
  	   $t = $this->CI->input; 
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {

           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;

		   $data = array(  
                            'id'=>$max,
                            'title' => $this->esc->escape_str($t->post('title')),
						   'post_category' => $this->esc->escape_str($t->post('category')),
						   'last_post_status' => 1 
						   );
		   $log = $this->CI->db->insert('widget_post' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
			$data = array('title' => $this->esc->escape_str($t->post('title')),
						   'post_category' => $this->esc->escape_str($t->post('category')),
						   'more_status' => $this->esc->escape_str($t->post('more_status'))
						   );
		   $id=(int)$t->post('post_id');
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_post' , $data );
		   if($log){
			  echo 'success';   
		   }
	   }
		
	}
	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data pagetext dan update pagetext dari Widget pagetext
	 * Tipe Widget : Widget_text
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function text_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {

           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;

		   $data = array(  'id'=>$max,
                            'title' => $this->esc->escape_str($t->post('title')),
						   'text_isi' => $t->post('text_isi')
						   );
		   $log = $this->CI->db->insert('widget_text' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
			$data = array(  'title' => $this->esc->escape_str($t->post('title')),
						    'text_isi' => $t->post('text_isi')
						   );
			
		   $id=(int)$t->post('post_id');
		   $this->CI->db->where('id',$id);
		   $log = $this->CI->db->update('widget_text' , $data );
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	public function tabs_submit_panel(){
	   
	 
	   //print_r($_POST); die();
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
 		   $str ='';
 		   $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   #Cek Max ID untuk dimasukkan ke Column_tabs
		   $max = $this->CI->db->select(' max(id) as Col_tabs ')->from('widget_tabs')->get()->row();
		   
		   for($i=0; $i<count($_POST['title']); $i++){
			   $data = array(
                            'title_tabs' => $this->esc->escape_str($_POST['title'][$i]),
						     'post_category' => $this->esc->escape_str($_POST['category'][$i]),
						     'colomn_tabs' => $max->Col_tabs + $i,
							 'limit_p' => $_POST['limit_p'][$i]
						   );
 			   
 		       $log = $this->CI->db->insert('widget_tabs' , $data );
			   
			   $temp = $this->CI->db->insert_id();
			   
			   $str = $str."".  $temp .",";
  		   }
		       
				 $str = rtrim($str,"\,");
				  
		   	    #insert also on widget tables
			     $updates = array('id_widget'=> $str);
			     $this->CI->db->where(array('sort_no'=> $this->esc->escape_str($t->post('sort_no_identity')), 
											'column_sidebar' => $this->esc->escape_str($t->post('coloumn_sidebar')) ) );
			     $this->CI->db->update('widget' , $updates ); 
		         //echo $this->CI->db->last_query();
		        echo 'success'; 
		   
	   } 
	   
	   
	   if($t->post('post_tipe')== 'update' )  {
 			
			//echo "ini array "; print_r($_POST['post_id']); die();
			
		     
		   $str ='';
		   $temp =''; 
		    #Cek Max ID untuk dimasukkan ke Column_tabs
		    $max = $this->CI->db->select(' max(id) as Col_tabs ')->from('widget_tabs')->get()->row();
		     
			#ambil dulu ke tabel Tabs
 			for($i=0; $i<count($_POST['post_idx']); $i++):
				
				#delete data lama
				$id=(int)$_POST['post_idx'][$i];
				$this->CI->db->where('id', $id);
				$this->CI->db->delete('widget_tabs');
				$querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
				$data = array(
                              'title_tabs' => $this->esc->escape_str($_POST['title'][$i]),
						     'post_category' => $this->esc->escape_str($_POST['category'][$i]),
						     'colomn_tabs' => $max->Col_tabs + $i,
							 'limit_p' => $_POST['limit_p'][$i]
						   );
  		        $log = $this->CI->db->insert('widget_tabs' , $data );
				
			   $temp = $this->CI->db->insert_id();
 			   $str = $str."".  $temp .",";
				
   			endfor;
			 
			 	$str = rtrim($str,"\,");
				 #insert also on widget tables
			     $updates = array('id_widget'=> $str);
			     $this->CI->db->where(array('sort_no'=> $this->esc->escape_str($t->post('sort_no_identity')),
											'column_sidebar' => $this->esc->escape_str($t->post('coloumn_sidebar')) ) );
			     $this->CI->db->update('widget' , $updates ); 
		     echo 'success';
			die();  		 
 		}//end update
	   
	    
	}
	
	 
    /*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data BlogRoll dan update BlogRoll dari Widget BlogRoll
	 * Tipe Widget : Widget_BlogRoll
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function blogroll_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  
                            'id'=>$max,
                            'link_category' => $this->esc->escape_str($t->post('category')),
						   'link_name' => $this->esc->escape_str($t->post('link_name')),
						   'tooltip_descr' => $this->esc->escape_str($t->post('tooltip_descr'))
  						   );
		   $log = $this->CI->db->insert('widget_blogroll' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $this->esc->escape_str($t->post('sort_no_identity')),
									  'column_sidebar' => $this->esc->escape_str($t->post('coloumn_sidebar')) ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
			 $data = array('link_category' => $this->esc->escape_str($t->post('category')),
						   'link_name' => $this->esc->escape_str($t->post('link_name')),
						   'tooltip_descr' => $this->esc->escape_str($t->post('tooltip_descr')) 
 						   );
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_blogroll' , $data );
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Agenda dan update Agenda dari Widget Agenda
	 * Tipe Widget : Widget_Agenda
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function agenda_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  'id'=>$max,
                            'title_widget' => $this->esc->escape_str($t->post('title_widget'))
  						   );
		   $log = $this->CI->db->insert('widget_agenda' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $this->esc->escape_str($t->post('sort_no_identity')),
									  'column_sidebar' => $this->esc->escape_str($t->post('coloumn_sidebar')) ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array(  'title_widget' => $this->esc->escape_str($t->post('title_widget'))
  						   );
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_agenda' , $data );
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Arsip dan update Arsip dari Widget Arsip
	 * Tipe Widget : Widget_Arsip
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function arsip_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  
                            'id'=>$max,
                            'title' => $this->esc->escape_str($t->post('title')),
						   'status_list' => $this->esc->escape_str($t->post('status_list'))	   
  						   );
		   $log = $this->CI->db->insert('widget_arsip' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		    $data = array(  'title' => $this->esc->escape_str($t->post('title')),
						   'status_list' => $this->esc->escape_str($t->post('status_list'))	   
  						   );
			
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_arsip' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Galeri Foto dan update Galeri Foto dari Widget Galeri Foto
	 * Tipe Widget : Widget_foto
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function foto_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
           $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  'id'=>$max,
                            'title' => $this->esc->escape_str($t->post('title')),
						   'jml_foto' => $this->esc->escape_str($t->post('jml_foto'))		   
  						   );
		   $log = $this->CI->db->insert('widget_foto' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array(  'title' => $this->esc->escape_str($t->post('title')),
						   'jml_foto' => $this->esc->escape_str($t->post('jml_foto'))		   
  						   );
		   
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_foto' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Kontak us dan update Kontak us dari Widget Kontak us
	 * Tipe Widget : Widget_kontak
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function kontak_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
            $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  'id'=>$max,
                           'url_logo' => $this->esc->escape_str($t->post('url_logo')),
						   'logo_title' => $this->esc->escape_str($t->post('logo_title')),					  
						   'alamat' => $this->esc->escape_str($t->post('alamat')),
						   'telp' =>$this->esc->escape_str($t->post('telp')),
						   'fax' =>$this->esc->escape_str($t->post('fax')),
						   'email' =>$this->esc->escape_str($t->post('email'))
  						   );
		   $log = $this->CI->db->insert('widget_kontak' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array(  'url_logo' => $this->esc->escape_str($t->post('url_logo')),
						   'logo_title' => $this->esc->escape_str($t->post('logo_title')),					  
						   'alamat' => $this->esc->escape_str($t->post('alamat')),
						   'telp' =>$this->esc->escape_str($t->post('telp')),
						   'fax' =>$this->esc->escape_str($t->post('fax')),
						   'email' =>$this->esc->escape_str($t->post('email'))
  						   );
			
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_kontak' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Banners dan updateBanners dari Widget Banners
	 * Tipe Widget : Widget_Banners
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function banners_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
            $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array(  'id'=>$max,
                            'jml_views' => $this->esc->escape_str($t->post('jml_views')),					  
						   'flag_animation' => $this->esc->escape_str($t->post('flag_animation')) 
  						   );
		   $log = $this->CI->db->insert('widget_banners' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array(  'jml_views' => $this->esc->escape_str($t->post('jml_views')),					  
						   'flag_animation' => $this->esc->escape_str($t->post('flag_animation') )
  						   );
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_banners' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Scroll Text dan updateBanners dari Widget Scroll Text
	 * Tipe Widget : Widget_Scroll Text
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function scrolltext_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
            $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array('id'=>$max,
                          'flag_animation' => $this->esc->escape_str($t->post('flag_animation'))  );
		   $log = $this->CI->db->insert('widget_scrolltext' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array('flag_animation' => $this->esc->escape_str($t->post('flag_animation'))  );
		   
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_scrolltext' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Polling
	 * Tipe Widget : Widget_Polling
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#Polling Submit
	public  function polling_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
            $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array('id'=>$max,'flag_polling' => 1 ); //poling yang di set aktif/publish saja
		   $log = $this->CI->db->insert('widget_polling' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array('flag_polling' => 1 ); //poling yang di set aktif/publish saja
		   
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_polling' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Polling
	 * Tipe Widget : Widget_Multimedia
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#Polling Submit
	public  function multimedia_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' ){
		    $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array('id'=>$max,
                          'title' =>  $t->post('title'),
						  'width' =>  $t->post('width'),				  
						  'height' =>  $t->post('height')); //Insert title
		   $log = $this->CI->db->insert('widget_multimedia' , $data );
		   
		   
	 	   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		  $data = array('title' =>  $t->post('title'),
						  'width' =>  $t->post('width'),				  
						  'height' =>  $t->post('height')); //Insert title
		   
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_multimedia' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}
	
	/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Social
	 * Tipe Widget : Widget_Social
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#Polling Submit
	public  function social_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' ){
		    $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1;
		   $data = array( 'id',$max,
                          'facebook' =>  $t->post('fb'),
						  'twitter' =>  $t->post('twitter'),				  
						  'fb_url' =>  $t->post('fb_url'),
						  'fb_icon' =>  $t->post('fb_icon'),
						  'tw_url' =>  $t->post('tw_url'),
						  'tw_icon'=> $t->post('tw_icon')
						  ); //Insert title
		   $log = $this->CI->db->insert('widget_social_media' , $data );
		 
		   
	 	   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		    $data = array('facebook' =>  $t->post('fb'),
						  'twitter' =>  $t->post('twitter'),				  
						  'fb_url' =>  $t->post('fb_url'),
						  'fb_icon' =>  $t->post('fb_icon'),
						  'tw_url' =>  $t->post('tw_url'),
						  'tw_icon'=> $t->post('tw_icon')
						  ); //Insert title
		 
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_social_media' , $data );
 		   if($log){
			  echo 'success';   
		   }
	   }
	}
	
	
		/*
	 * Code dibawah ini bertujuan untuk
	 * Menyimpan data Buletin dan update buletin dari Widget buletin
	 * Tipe Widget : Widget_buletin
  	*/
	/*_____________________________________START DEPLOY________________________________________________*/
	#page text Submit
	public  function buletin_submit_panel(){
	   $t = $this->CI->input;
	   #IF BUTTON INSERT
	   if($t->post('post_tipe')== 'simpan' )  {
            $querymax=$this->CI->db->select("max(id_widget) as urutan")->from("widget")->get()->row();
           $max = $querymax->urutan+1; 
		   $data = array(  'id'=>$max,
                           'title' => $this->esc->escape_str($t->post('title')),
						   'jml_buletin' => $this->esc->escape_str($t->post('jml_buletin'))		   
  						   );
		   $log = $this->CI->db->insert('widget_buletin' , $data );
		   
		   #insert also on widget tables
		   $updates = array('id_widget'=>$this->CI->db->insert_id());
		   $this->CI->db->where(array('sort_no'=> $t->post('sort_no_identity'), 'column_sidebar' => $t->post('coloumn_sidebar') ) );
		   $this->CI->db->update('widget' , $updates );
	   
		   if($log){
			  echo 'success';   
		   }
		   
	   }else{ 
		    
		   $data = array(  'title' => $this->esc->escape_str($t->post('title')),
						   'jml_buletin' => $this->esc->escape_str($t->post('jml_buletin'))		   
  						   );
		   
		   $id = (int)$t->post('post_id'); 
		   $this->CI->db->where('id', $id);
		   $log = $this->CI->db->update('widget_buletin' , $data );
 		    
		   if($log){
			  echo 'success';   
		   }
	   }
	}	
	
	
	
}
?>