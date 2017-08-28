 <?php
  $this->load->library('widget/widget_custom');
  $foto = $this->widget_custom->widget_buletin( $widgets->id_widget );
  $foto_h = $this->widget_custom->widget_buletin_title( $widgets->id_widget );
  $this->load->helper("html");
  $tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
  $path_file = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/buletin_media/buletin/pages/": "/bonfire/modules/buletim_media/buletin/pages/";
	if($foto):
 ?>
 <h2 class="judul_kotak"> <?php echo $foto_h->title;?></h2>

<ul class="nav nav-tabs nav-stacked">
<?php 
			  
foreach($foto as $rows):

			$linksArray=explode('.', $rows->file);
			$data= array_filter($linksArray);
			if(!empty($data)){
			  $the = $data[0]."_thumb.".$data[1];	
			}else{
			   $the ='';	
			}
?>
<li><a href="<?php echo base_url('application/modules/buletin_media/buletin/Main.php?MagID=0&MagNo='.$rows->id_media);?>" class="thumbnail" target="_blank"><p class="text-center"><?php echo $rows->judul_media;?>
</p><?php echo img(array($path_file.$rows->file,"alt"=>"$rows->judul_media","style"=>"width: 160px; height: 220px;max-width: 100%","class"=>"img-polaroid img-thumbnail")); ?></a></li>
<?php
endforeach;
?>
</ul>
<?php
endif;
?>
 
 
 