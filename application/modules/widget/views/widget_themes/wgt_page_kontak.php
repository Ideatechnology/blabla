 <?php
  $this->load->library('widget/widget_custom');
  $kontak = $this->widget_custom->widget_kontak($widgets->id_widget);
  
  ?>
  
  <h2 class="judul_kotak">Contact</h2>
  <div class="kotak_box"> 
 <?php if($kontak->url_logo!=""): ?>
 <img src="<?php echo base_url().@$kontak->url_logo;?>" /><br />
 <?php endif; ?>
                
    <address>
    <strong><?php echo @$kontak->logo_title;?></strong><br>
   <?php echo @$kontak->alamat;?><br />
    <abbr title="Phone">Phone:</abbr> <?php echo @$kontak->telp;?><br />
    <abbr title="Fax">Fax:</abbr> <?php echo @$kontak->fax;?>
    </address>
     
    <address>
    <strong>Email</strong><br>
    <a href="mailto:#"><?php echo @$kontak->email;?></a>
    </address>
    
    </div>
             
         
        