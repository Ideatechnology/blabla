<?php

  $this->load->library('widget/widget_custom');
  $sc = $this->widget_custom->widget_social($widgets->id_widget);
  if($sc):
?>
  <h2 class="judul_kotak">Sosial Media</h2>
<div class="kotak_box">
<ul class="nav nav-pills nav-stacked">
<li><a href="<?php echo $sc->fb_url.$sc->facebook;?>" style="color:#06F;text-shadow: 0 0px 0px rgba(0,0,0,.4);"><img src="<?php echo assets_path();?>images/icon_social/facebook.jpg" > Facebook</a></li>
<li><a href="<?php echo $sc->tw_url.$sc->twitter;?>" style="color:#06F;text-shadow: 0 0px 0px rgba(0,0,0,.4);"><img src="<?php echo assets_path();?>images/icon_social/twitter.gif"> Twitter</a>
</li>
</ul>
</div>  
  <?php endif; ?>

  
 