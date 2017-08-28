<?php
  $this->load->library('widget/widget_custom');
  
   $limit = 10;
   $post_last = $this->widget_custom->widget_last_post($widgets->id_widget,$limit );

   
?>
    <div class="grid_4">
 	<div id="latest">
    <div class="title alpha"><?php echo $this->widget_custom->title_last($widgets->id_widget);?></div>
 	<ul>
		<?php
		 if($post_last){
		 foreach($post_last as $meta_last){
		?>
        <li>
	     <span class="postdate"><?php echo date('d/m', strtotime($meta_last->created_on));?></span>
		 <a href="<?php echo site_url('post/read/'.date("Y",strtotime($meta_last->created_on)).'/'.$meta_last->id.'/'.url_title($meta_last->judul, 'dash'));?>"><?php echo $meta_last->judul;?></a>
		</li>
        <?php  } }else{ echo 'No Last Post Founds.'; } ?>    
 	</ul>
		
	    <p class="more"><a title="" href="#">More latest news &#187; </a></p>
       </div>
    </div>
   