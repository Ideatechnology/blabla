 <?php
  $this->load->library('widget/widget_custom');
  $foto = $this->widget_custom->widget_foto( $widgets->id_widget );
  $foto_h = $this->widget_custom->widget_foto_title( $widgets->id_widget );
  $this->load->helper("html");
  $tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
  $path_file = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/galerifoto/images/": "/bonfire/modules/galerifoto/images/";
	if($foto):
 ?>
 <h2 class="judul_kotak"><?php echo $foto_h->title;?></h2>

<ul class="nav nav-tabs nav-stacked">
<?php 
			  
foreach($foto as $rows):

			$linksArray=explode('.', $rows->file_foto);
			$data= array_filter($linksArray);
			if(!empty($data)){
			  $the = $data[0]."_thumb.".$data[1];	
			}else{
			   $the ='';	
			}
?>
<li><a href="<?php echo site_url("galerifoto/detail/".$rows->id_kategori);?>" class="thumbnail"><?php echo img(array($path_file.$rows->file_foto,"alt"=>"$rows->title_foto","style"=>"width: 160px; height: 120px;","class"=>"img-polaroid img-thumbnail")); ?>
<p class="text-center"><?php echo $rows->kategori;?>
</p>
</a></li>
<?php
endforeach;
?>
</ul>
<?php
endif;
?>
 
 
 