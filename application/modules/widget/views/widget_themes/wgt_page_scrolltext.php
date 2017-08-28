


<?php
  $this->load->library('widget/widget_custom');
   
  $text = $this->widget_custom->widget_scrolltext($widgets->id_widget);

  if($text['animation']==2){
?>
   <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
   <?php 
    if($this->session->userdata('site_lang')) {
		if($this->session->userdata('site_lang')=="indonesia")
		echo $text['scrolltext'];
		else
		echo $text['scrolltext_english'];
		
   }else{
 	echo $text['scrolltext'];
   	
	}
   ?></marquee>
<?php } ?>
 
