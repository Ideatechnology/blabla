 <?php
  $this->load->library('widget/widget_custom');
  $arsip = $this->widget_custom->widget_arsip($widgets->id_widget);
  $arsip_h = $this->widget_custom->widget_arsip_title( $widgets->id_widget );
 ?>
 
 <?php
 	 $tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
   $tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/arsip/": "/bonfire/modules/arsip/";
   $config['upload_config'] = array('upload_path_file'=> $tmp_module_path.'files/');
   
   if($arsip_h->status_list==1){
 ?>

 <h2 class="judul_kotak"> <?php echo $arsip_h->title;?></h2>
<div class="kotak_box">
<ul class="nav nav-tabs nav-stacked">
			   
<?php 
  if($arsip):
	foreach($arsip as $rows):
?>
 <li>
 <em><?php echo date("M Y", strtotime($rows->tgl_arsip));?></em>
   
  <p><a href="<?php echo base_url().'application/modules/arsip/files/'.$rows->file_data;?>"><?php echo $rows->judul; ?></a></p>
 </li>
<?php
endforeach;
endif;
?>
               
 </ul>
 </div>
               
 
  <?php
 /* ===================================================
 ARSIP TEXT ANOTHER
 ================================================================ */
 
   }else{
    ?>

 <h2 class="judul_kotak"><?php echo $arsip_h->title;?></h2>
 <div class="kotak_box">  
  <ul class="nav nav-pills nav-stacked">
    	<?php 
					if($arsip):
					  foreach($arsip as $rows):
				 ?>
       <li ><a href="<?php echo base_url().'application/modules/arsip/files/'.$rows->file_data;?>" style="color: #0094ff;margin-bottom: 5px;padding:0;text-shadow: 0 0px 0px rgba(0,0,0,.4);"> <i class="icon-circle-arrow-down"></i>  <?php echo $rows->judul;?></a>
	   <p><?php echo $rows->isi_arsip; ?></p>
	   </li>
        <?php
			  endforeach;
		 endif;
		 ?>
     </ul>
	  </div>
   <?php
   }
   ?>
   