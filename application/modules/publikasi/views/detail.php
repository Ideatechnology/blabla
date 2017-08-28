<h1><?php echo $detail->nama_publikasi;?></h1>
<hr />
<div class="row">
   <div class="col-md-4">
       <center>
      <?php if($detail->gambar==""): ?>
                  <img class="media-object" src="<?php echo Template::theme_url("img/magazine.png");?>" data-holder-rendered="true" style="width: 64px; height: 64px;"> 
                <?php else: ?>
                  <img class="media-object" src="<?php echo base_url()."assets/publikasi/images/".$detail->gambar;?>" data-holder-rendered="true" style="width: 80%;"> 
                <?php endif; ?> 
       </center>
       <br />
       <?php if($detail->file_pdf2==""): ?>
        <a href="<?php echo base_url("assets/publikasi/files/".$detail->file_pdf);?>" class="btn btn-primary btn-lg btn-block">Download</a>
         <?php else: ?>
          <a href="<?php echo base_url("assets/publikasi/files/".$detail->file_pdf);?>" class="btn btn-primary btn-md btn-block">Download 1</a>
       
        <a href="<?php echo base_url("assets/publikasi/files/".$detail->file_pdf2);?>" class="btn btn-primary btn-md btn-block">Download 2</a>
       
         <?php endif; ?>

           <br />
           
            <span class='st_sharethis_large' displayText='ShareThis'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>

       
      </div>
      
    <div class="col-md-8">
           
           <p><span class="glyphicon glyphicon-time"></span> Tanggal : <?php echo date("d M Y",strtotime($detail->tanggal));?>
           <br />
           <span class="glyphicon glyphicon-tag"></span> Kategori : <?php echo @$kategori->kategori;?>
           </p>
          
          <p style="text-align:justify;">
           <?php echo $detail->deskripsi;?>
           </p>
          
           
       </div>   
    
  </div>
  
  
  
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "771bd9a6-f758-4386-ae17-44a2f2f16384", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  