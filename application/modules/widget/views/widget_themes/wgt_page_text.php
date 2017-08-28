<?php
  $this->load->library('widget/widget_custom');
   
  $text_meta = $this->widget_custom->widget_text($widgets->column_sidebar, $widgets->sort_no);
     
  if($text_meta){  
     foreach ($text_meta as $text){
?>
 <h2 class="judul_kotak"> <?php echo $text->title;?></h2>
<div class="kotak_box"> 
        
    <?php echo $text->text_isi;?> 
 </div>
<?php
  }
 }
?>

  
 