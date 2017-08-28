
 <?php
  $this->load->helper('form');
  $this->load->library('widget/widget_custom');
  
  $poll = $this->widget_custom->widget_polling($widgets->id_widget);
  
  if($poll){
  
   ?> 
 <h2 class="judul_kotak">Polling</h2>
   <div class="kotak_box"> 
		<p><?php echo $poll->judul;?></p>
	
  <?php echo form_open(site_url('polling'),"style=''"); ?>
  <input type="hidden" value="<?php echo base64_encode($poll->id) ;?>" name="strid" />
 
         <ul class="nav nav-tabs nav-stacked">
    <?php if(!empty($poll->jawab1)){;?>
   <li><input name="poll" type="radio" value="1" /> &nbsp;<?php echo $poll->jawab1;?></li>
    <?php }if(!empty($poll->jawab2)){;?>
   <li><input name="poll" type="radio" value="2" /> &nbsp;<?php echo $poll->jawab2;?></li>
    <?php }if(!empty($poll->jawab3)){;?>
    <li><input name="poll" type="radio" value="3" /> &nbsp;<?php echo $poll->jawab3;?></li>
    <?php }if(!empty($poll->jawab4)){;?>
    <li><input name="poll" type="radio" value="4" /> &nbsp;<?php echo $poll->jawab4;?></li>
    <?php }if(!empty($poll->jawab5)){;?>
   <li><input name="poll" type="radio" value="5" /> &nbsp;<?php echo $poll->jawab5;?></li>
    <?php }?>
	</ul>
	      <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      
	<br />
	<input type="submit" value="Pilih" class="btn btn-primary">
	 <a href="<?php echo site_url('polling');?>" class="btn" btn-primary>Hasil Polling</a>

   <?php echo form_close(); ?>
</div>
 <?php } ?>

 