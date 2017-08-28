<?php

  $this->load->library('widget/widget_custom');
  $blog = $this->widget_custom->widget_blog( $widgets->id_widget, $widgets->column_sidebar, $widgets->sort_no  );
  $blogstyle = $this->widget_custom->widget_blog_all( $widgets->id_widget, $widgets->column_sidebar, $widgets->sort_no  );
 
/*============================================================
# One Result type
==================================================================== */
	if(isset($blogstyle->link_category) && $blogstyle->link_category != 0){ #tampilkan blogroll satu saja

    if($blog){ 

?>	
  <div class="kotak_box"> 
<ul class="nav nav-tabs" style="background-color:#fff">
         <li class="active"><a href="#tabss1"><?php echo $this->widget_custom->widget_blog_headers($widgets->id_widget, $widgets->column_sidebar, $widgets->sort_no);?></a></li>
       </ul>
       
       <div class="tab-content"> 
       
       <table class="table">
       
        <?php
 			  foreach($blog as $rr):
		?>
     	<tr>
        <td>
       <div class="tab-pane active" id='tabsx<?php echo ($rr->id);?>'>
      
           <?php if($blogstyle->link_name==1):?>
         	<a href="<?php echo $rr->url_linked;?>" id="chunkblog" target="<?php echo $rr->target_link;?>">
         	<strong> <?php echo $rr->title_link;?></strong> </a>
         	<br />
         <?php endif;?>
         
         <span id="linkblog"><?php echo $rr->url_linked;?> </span>
      
      </div>
      </td>
      </tr>
        <?php
 		  endforeach;
 		?>
		<tr>
		<td>
		<br />
		<a href="<?php echo site_url("links");?>">
		<span class="glyphicon glyphicon-share-alt"></span> <?php echo lang('selengkapnya');?>
			</a>
		</td>
		</td>
        </table>
		
 </div> 
 </div>
 <?php }else{ echo 'No items Founds.'; } ?>
  
 <?php 
 }else{ 
 
/*============================================================
#All Result type
==================================================================== */
	$blogallresult = $this->widget_custom->widget_blog_all_result();
	
	if($blogallresult){ 
   ?>
     
    <div class="blog_container">
      <ul class="blogtabs">
        <?php
 			  foreach($blogallresult as $roll):
		?>
       	 <li><a href="#tabblog<?php echo ($roll->id);?>"><?php echo $roll->kategori;?></a></li>
        <?php
 		  endforeach;
 		?>
      </ul>
       
        <?php
 		 
		   foreach($blogallresult as $rr):
		?>
      <div id='tabblog<?php echo ($rr->id);?>'>
         <?php
		   #aktive link name on widget
		   if(isset($blogstyle->link_name) && $blogstyle->link_name==1):
		     
			 $blog_rows = $this->widget_custom->widget_blog_all_row($rr->link_category);
			 foreach($blog_rows as $blog):
		 ?>
         <a href="<?php echo $blog->url_linked;?>" id="chunkblog" target="<?php echo $blog->target_link;?>"> <strong><?php echo $blog->title_link;?></strong> </a>
          <br />
		   
        
         <span id="linkblog"> <?php echo $blog->url_linked;?> </span> <br />
         <?php endforeach; ?>
         <?php endif;?>
      </div>
      
        <?php
 		  endforeach;
 		?>
 </div> 
 
 <?php 
     }else{ echo 'No data';} #end Blog Result
 } #style Horizontal Else
 ?>
 
  