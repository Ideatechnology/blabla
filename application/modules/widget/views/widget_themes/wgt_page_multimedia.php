<?php
  $this->load->library('widget/widget_custom');
   
  $multimed = $this->widget_custom->widget_multimedia($widgets->id_widget);
  
  $video=$this->db->query("select * from bf_multimedia order by id desc")->row();
  
  if($video){
 $urlyoutube=explode("=",$video->file_multimedia);

?>
 
<h2 class="judul_kotak"> <?php echo $multimed['title'];?></h2>
<div class="kotak_box"> 
<iframe width="100%" height="170" src="https://www.youtube.com/embed/<?php echo $urlyoutube[1];?>" frameborder="0" allowfullscreen></iframe>

</div>
        
<?php } ?>