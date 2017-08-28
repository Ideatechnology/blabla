  <?php
  $this->load->library('widget/widget_custom');
  $banners = $this->widget_custom->widget_banners( $widgets->id_widget );
  $animation = $banners['flag_animation']; 
  unset($banners['flag_animation']);
  
  $tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
  $path_file = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/banner/files/": "/bonfire/modules/banner/files/";
	
  ?>
  
    <?php if($animation ==1){ ?> <marquee direction="up" onmouseover="stop();" onmouseout="start();" style="border:0px solid #000;height:200px;" scrolldelay="200"> <?php } ?>
    
  <?php
    
    if($banners){
	echo "
	 <div class='kotak_box'> 
	<ul class='nav nav-pills nav-stacked'>";
 		foreach($banners as $rows){
			echo "<li>";
 			if($animation==0){
    ?>
	
		
  	     <a href="<?php echo $rows->link_banner;?>" target="_blank">
         <?php echo img(array("src"=>$path_file.@$rows->file_banner,"style"=>"max-width: 100%; height: auto;")); ?>
   
 	     </a>
	  <?php }else{?>
      
        <div class="marquee">
        <a href="<?php echo $rows->link_banner;?>" target="_blank">
         <?php echo img(array($path_file.@$rows->file_banner)); ?>
        </a>
         </div>
      <?php
         }//end flag animation
		  echo "</li>";
	  }
	 
	  echo "</ul></div>";
	}
  ?>
  <?php if($animation ==1){ ?> </marquee> <?php } ?>
 

 
  
 