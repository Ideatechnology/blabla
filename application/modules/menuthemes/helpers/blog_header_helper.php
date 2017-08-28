<?php

	function header_menu(){
	   $CI =& get_instance();
	   //Ini Sampling ?
	   //Call Using Widget Untuk Return Menu Locations
	   //Cara Pemanggilannya Sebagai berikut :
	   
	   #load Librarys
	   $CI->load->library('widget/widget_get');
	    
	   #call Get Menu Widget
	   $init = $CI->widget_get->widget_menu_render(7); #!sampling TOP MENU ID On Locations
	    
        return $init;
	}
   #sample Membuat left_menu Headers Untuk Jenis Template ini
   function left_menu(){
	   $CI =& get_instance();
	   //Ini Sampling ?
	   //Call Using Widget Untuk Return Menu Locations
	   //Cara Pemanggilannya Sebagai berikut :
	   
	   #load Librarys
	   $CI->load->library('widget/widget_get');
	   
	   #call Get Menu Widget
	   $init = $CI->widget_get->widget_menu_render(8); #!sampling LEFT MENU ID On Locations
	   
	   return $init;
   }
	/*END CUSTOMIZED*/  
 ?>