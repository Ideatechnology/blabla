<div style="padding:10px;">
<?php
  if($postsbycategories){
?>

    <h1 style="text-align:left"><?php echo $categories->judul_bahasa;?></h1>

 <hr / style="border:solid 1px #FF3300">


    <img src="<?php echo base_url();?>application/modules/post/images/<?php echo $postsbycategories->image_data;?>" style="width:100%">
  <h2 class="home-icons-article">
        <a href="<?php echo site_url('blog/'.$postsbycategories->id.'-'.url_title($postsbycategories->judul,'dash'));?>" data-event="the-brief"><?php echo $postsbycategories->judul;?></a>
        </h2>

        <p class="home-excerpt">
            <?php echo word_limiter($postsbycategories->slug_judul,30);?>
        </p>

<?php }else{ ?>

 <div class="alert alert-danger">
<?php echo lang('post_msgnoposting');?>
</div>
 
<?php } ?> 
      
<div style="clear:both"></div>      
<hr /><h2><?php echo lang('post_other');?></h2> <hr / style="border:solid 1px #FF3300">




<?php if($relatedPosts){ ?>
<dl class="uk-description-list-line">
<?php foreach($relatedPosts as $related){ 

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


<dt><h3 class="uk-text-bold"><a style="color:#000" href="<?php echo site_url('blog/'.$related->id.'-'.url_title($related->judul,'dash'));?>"><?php echo $related->judul;?></a></h3></dt>
        <dd>
        <?php if($related->image_data!=""): ?>
        <img src="<?php echo base_url();?>application/modules/post/images/<?php echo $related->image_data;?>" style="float:left;width:100px;margin-right:15px;">
        <?php endif; ?>
        <?php echo word_limiter($related->slug_judul,30);?>
        </dd>
        <br />
        <div class="clearboth"></div>


<?php
	}
?>
 </dl>
<div id="pagination-digg">
<?php echo $this->pagination->create_links(); ?>
</div>
<?php
  }else{
  
if ($this->session->userdata('site_lang')=="english"): 
	 echo '<p>No Related posts.</p>';  
	 else:
	  echo '<p>Tidak ada Post yang terkait.</p>';  
	 endif;
  }
?>

   
    
     <br /><br /><br />
      
        
  
</div>

  
