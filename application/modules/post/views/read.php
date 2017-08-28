<?php

  if($Posts){

  //t
		$b_judul = $Posts->judul;
		$b_isi = $Posts->isi;
		$tgl = "Date : ";
		$wb = "Write By : ";
		$rd = "Read : ";
		$kat = "Category  : ";



?>
<div  class="bg-newsevent">

<h1 style="text-align:left"><?php echo $b_judul;?></h1>
<p>Tanggal : <span class="glyphicon glyphicon-time"></span> <?php echo date("d M Y H:i",strtotime($Posts->created_on));?> Wib</p>
<hr />

<div class='section' style="margin-bottom:30px;">
<div class='addthis_toolbox addthis_default_style'>

<a class='addthis_button_preferred_1'></a>
<a class='addthis_button_preferred_2'></a>
<a class='addthis_button_preferred_3'></a>
<a class='addthis_button_preferred_4'></a>
<a class='addthis_button_compact'></a>
<a class='addthis_counter addthis_bubble_style'></a>
</div>
<script type='text/javascript' src='<?php echo Template::theme_url("js/addthis_widget.js");?>'></script>
</div>

<?php if($Posts->guid_image !=""): ?>

<img src='<?php echo base_url()."/media/".$Posts->guid_image;?>' style='margin-bottom:20px;max-width:100%;' class='img-thumbnail thumbnail'>

<?php endif; ?>



<?php

#isi text
echo ($Posts->isi!="")?$b_isi:$Posts->slug_judul;
?>


<div style="clear:both"></div>

<!--
UNTUK POSTINGAN TERKAIT
-->
<?php if($terkait): ?>
<br />
<h1 style="text-align:left">Post Terkait<hr /></h1>

<?php foreach($terkait as $related){
//translate

		$b_judul1 =$related->judul;
		$b_slug_judul = $related->slug_judul;
		$tgl1 = "Date : ";
		$selengkapnya = "Read more...";


 ?>

  <div class="produkhukumitem">
        <h3 class="titleundang"><a href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul,'dash'));?>"><?php echo $related->judul;?></a></h3>
        <div class="publisherstyle">
            Tanggal Publikasi: <?php echo date("d M Y H:i",strtotime($related->created_on));?>  | <?php echo $related->baca;?> View
        </div>
				<?php if($related->image_data!=""): ?>
 
                <p><img src="<?php echo "http://www.kemendagri.go.id/media/".$related->guid_image;?>" class="newsthumbnail"></p><p>
                   
               </p>
							  <?php endif; ?>
							 <p><?php echo word_limiter(strip_tags($related->slug_judul),30);?></p>
            
            
               <a class="selengkapnya" href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul,'dash'));?>">Selengkapnya</a>
            
        
    </div>






 <?php } ?>


<?php endif; ?>





<?php
}else{
  echo '<p> '.lang('post_msgnoposting').'</p>';
}
?>



<br /><br />
 </div>
