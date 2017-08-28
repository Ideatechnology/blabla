
<?php
  $this->load->helper('text');
  $this->load->library('widget/widget_custom');
  $post_meta = $this->widget_custom->widget_style_post($widgets->id_widget);
  $title = $this->widget_custom->title_last($widgets->id_widget);
 
  $tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
  $path_file = ($tmp_bonfire_version_numeric >= 0.7) ? "application/modules/post/images/": "bonfire/modules/post/images/";
	  
  $linksArray=explode('.', @$post_meta->image_data);
  $data= array_filter($linksArray);
  if(!empty($data)){
	$the = $data[0]."_thumb.".$data[1];	
  }else{
	 $the ='';	
  }



	

#call styling widget
if(@$post_meta->style_widget==0):
?>
        
 <h2 class="judul_kotak"> <?php echo $title;?></h2>
<div class="kotak_box">  

<?php if($post_meta){	?>

    <div class="media">
    <div class="media-body">
    <h5 class="media-heading"><a title="<?php echo $post_meta->judul;?>" href="<?php echo site_url('post/read/'.date("Y",strtotime($post_meta->created_on)).'/'.$post_meta->id.'/'.url_title($post_meta->judul, 'dash'));?>">
<?php echo ucfirst(strtolower($post_meta->judul));?></a>
</h5>
<span class="muted"><?php echo date("d M Y", strtotime($post_meta->created_on));?></span>

    <!-- Nested media object -->
    <div class="media">
     <?php
	#donot show image is blank
	echo ($the!='' && $the!='noimage_thumb.png')?'<a class="pull-left" href="#">
    '.img(array($path_file.@$the,"class"=>"media-object","style"=>"width:64px;height:64px;"))."</a>":"";
	?>
    <p><?php echo word_limiter( strip_tags($post_meta->isi),20);?></p>	 
    </div>
    </div>
    </div>

<?php }else{  ?>
<div class="alert alert-block">
Saat ini belum ada yang di posting.
</div>
<?php } ?>    
    
 </div>
     
<?php
	/* ==================================================================
   #next style
   ====================================================================== */
   else:
 ?>

     <div class="featured-pages">
        <div class="column">
            <div class="cover">
                 <?php
				    #donot show image is blank
					if($the!=''){
				 ?>		
                 <a title="" href="#"><img width="220" height="110" alt="<?php echo $post_meta->judul;?>" src="<?php echo base_url();?>upload/<?php echo $the;?>"> </a>
                <?php
					}
				?>
               
            </div>
             
   
            <h2><a title="<?php echo $post_meta->judul;?>" href="#"><?php echo $post_meta->judul;?></a></h2>
            
            <p><?php echo word_limiter( strip_tags($post_meta->isi),20);?></p>
            
             <span class="more">
               <a rel="nofollow" href="<?php echo site_url('post/read/'.date("Y",strtotime($post_meta->created_on)).'/'.$post_meta->id.'/'.url_title($post_meta->judul, 'dash'));?>">continue reading &#8594;</a>
            </span>
            <br><br>
             
        </div>
     </div>
 
     <?php
	    endif;

	 ?>   
            

            
            
        
       
     
     

 