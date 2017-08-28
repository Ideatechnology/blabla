
<?php if($relatedPosts){ ?>
<h2><?php echo $page_title;?></h2> <hr />

<?php 
//print_r($relatedPosts);
foreach($relatedPosts as $related){

if ($this->session->userdata('site_lang')=="english"):
		$b_judul1 = $related->judul_english;
		$b_slug_judul = $related->slug_judul_english;
		$tgl1 = "Date : ";
		$selengkapnya = "Read more...";
		else :
		$b_judul1 = $related->judul;
		$b_slug_judul = $related->slug_judul;
		$tgl1 = "Tanggal Posting : ";
		$selengkapnya = "Selengkapnya";
		endif;
?>

 <div class="produkhukumitem">
        <h3 class="titleundang"><a href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul,'dash'));?>"><?php echo $related->judul;?></a></h3>
        <div class="publisherstyle">
            Tanggal Publikasi: <?php echo date("d M Y H:i",strtotime($related->created_on));?>  | <?php echo $related->baca;?> View
        </div>
				<?php if($related->image_data!=""): ?>
 
             <img src="<?php echo base_url()."/media/".$related->guid_image;?>" style="width:300px;" class="newsthumbnail pull-left">
							  <?php endif; ?>
							 <p><?php echo word_limiter(strip_tags($related->slug_judul),30);?></p>
            
            
               <a class="selengkapnya" href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul,'dash'));?>">Selengkapnya</a>
            
        <div style="clear:both"></div>
    </div>



<?php
	}
?>

<div class="custom-pagination pagination-location">
<?php echo $this->pagination->create_links(); ?>
</div>

<?php }else{ ?>

<img src="<?php echo base_url();?>assets/img/nodata.png">



<div style="clear:both"></div>

<?php
  }
  ?>
<br />