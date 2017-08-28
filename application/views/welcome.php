<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo base_url();?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
  
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Tasikmalaya Kab</title>
<style>
 /*MORPH*/
            .morph {
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                -ms-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }
            .morph:hover {
                border-radius: 50%;
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
    a,a:visited,a:focus, a:hover {
        color:#fff !important;
        cursor: pointer;
        text-decoration: none
    }
    
   html, body{
        background-color:#000
    }
    


html,
body {
    height: 100%;
}



.carousel,
.item,
.active {
    height: 100%;
}

.carousel-inner {
    height: 100%;
}

/* Background images are set within the HTML using inline CSS, not here */

.fill {
    width: 100%;
    height: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

#form_search{

  margin:50px auto;
  width:50%;

}

#gambar{
  width:100px;
}

@media(max-width:767px){
  html,
body {
  position: relative;


}
#form_search{

  margin:50px auto;
  width:80%;

}
#title{
  margin-bottom:20px;
}
#gambar{
  width:80%;
}

#nav{
 position: absolute;
    top: 10px;
    z-index: 15;
    width: 100%;
    padding-left: 0;
    text-align: center;
  

}

}


     
 </style> 
  
    <!-- Bootstrap -->
    <link href="<?php echo Template::theme_url("welcome/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>



</style>
  <link rel="stylesheet" href="<?php echo Template::theme_url("font-awesome/css/font-awesome.min.css");?>">


  </head>
  <body>


              <a href="#menumantep"  style="color:#fff;position:absolute;z-index: 995;left:48%;top:15%;font-size:64px;-webkit-animation: bounce 1.2s ease-out;
  -moz-animation: bounce 800ms ease-out;
  -o-animation: bounce 800ms ease-out;
  animation: bounce 1.2s ease-out;text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);" id="menumantep"><i class="fa fa-angle-double-down" id="menuutama" rel="tooltip" data-original-title="Klik Menu Utama" data-placement="bottom" aria-hidden="true"></i></a>



 
<div style="position:relative;height:100%;width:100%">

      <nav class="navbar-fixed-top hidden-xs" id="top" role="navigation">
    <div style="padding:10px;" align="center">
    <img src="<?php echo Template::theme_url("welcome/logo.png");?>" class="img-responsive">
    </div>

        <!--  <?php echo form_open("search","method='get' id='form_search' style='margin: 20px auto;' class='visible-xs hidden-md hidden-sm hidden-lg'"); ?>
      <div class="input-group">
        <input type="text" value="" class="form-control" name="keyword" placeholder="Telusuri informasi yang ada website">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit" name="cari">Cari</button>
        </span>
      </div><!-- /input-group -->
        <?php //echo form_close(); ?>
          
        <div style="background: rgba(0, 0, 0, 0.53); color:#FFFFFF;padding:10px;display:none" id="icon-test" class="container-fluid hidden-xs" align="center">
    <div class="row">
    
    <?php if($icon): ?>
    <?php foreach($icon as $icon_row): ?>
    <div class="col-md-2 col-sm-4 col-xs-6">
      <a href="<?php echo $icon_row->link;?>">
        <img src="<?php echo base_url("application/modules/icon/files/".$icon_row->file);?>" style="width:100px;" class="morph">
       
      </div>
    <?php endforeach; ?>
    <?php endif; ?>


         
       
      </div>
    </div>
<!--
    <?php echo form_open("search","method='get' id='form_search' class='hidden-xs'"); ?>
      <div class="input-group">
        <input type="text" value="" class="form-control" name="keyword" placeholder="Telusuri informasi yang ada website">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit" name="cari">Cari</button>
        </span>
      </div><!-- /input-group -->
        <?php //echo form_close(); ?>
      </nav>


      
	 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" >


<div id="nav" class="hidden-lg hidden-md hidden-sm">

 <div style="padding:10px;" align="center">
    <img src="<?php echo Template::theme_url("welcome/logo.png");?>" class="img-responsive">
    </div>

          <!--<?php echo form_open("search","method='get' id='form_search' style='margin: 20px auto;' class='visible-xs hidden-md hidden-sm hidden-lg'"); ?>
      <div class="input-group">
        <input type="text" value="" class="form-control" name="keyword" placeholder="Telusuri informasi yang ada website">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit" name="cari">Cari</button>
        </span>
      </div><!-- /input-group -->
        <?php //echo form_close(); ?>

      <div style="background: rgba(0, 0, 0, 0.53); color:#FFFFFF;padding:10px;"   align="center">
    <div class="row">
    
    <?php if($icon): ?>
    <?php foreach($icon as $icon_row): ?>
    <div class="col-md-2 col-sm-4 col-xs-6">
      <a href="<?php echo $icon_row->link;?>">
        <img src="<?php echo base_url("application/modules/icon/files/".$icon_row->file);?>" id="gambar"  class="morph img-responsive">
        <br><p id="title"><?php echo $icon_row->title;?></p></a>
      </div>
    <?php endforeach; ?>
    <?php endif; ?>


         
       
      </div>
    </div>
          
         

      </div>

      <div class="carousel-inner anim" role="listbox">
        
        


      <?php if($slider):?>
        <?php $no=1; ?>
        <?php foreach($slider as $slider_row): ?>
          <?php if($no==1): ?>
        <div class="item active">
          
             <div class="fill" style="background-image:url('<?php echo base_url("application/modules/gambardepan/files/".$slider_row->file);?>');"></div>

           <div class="carousel-caption hidden-xs"> <h3><?php echo $slider_row->title;?></h3> <p><?php echo $slider_row->keterangan;?></p> </div>
           
        </div>
      <?php else: ?>
        <div class="item">
      
         <div class="fill" style="background-image:url('<?php echo base_url("application/modules/gambardepan/files/".$slider_row->file);?>');"></div>

            <div class="carousel-caption hidden-xs"> <h3><?php echo $slider_row->title;?></h3> <p><?php echo $slider_row->keterangan;?></p> </div>
            
        </div>
      <?php endif; ?>
        <?php $no++; ?>
      <?php endforeach; ?>
    <?php endif; ?>

        
      </div>
     
    </div><!-- /.carousel -->

	
	
	
	

	
	
	</div>

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Template::theme_url("welcome/js/bootstrap.min.js");?>"></script>

    <script>

    $("#menumantep").click(function(){

    $("#icon-test").fadeIn();
    $("#menumantep").hide();

});

    $('#menuutama').tooltip().eq(0).tooltip('show').tooltip('disable').one('mouseout', function() {
  $(this).tooltip('enable');
});

setTimeout(function() {
 $('#menuutama').tooltip().eq(0).tooltip('hide').tooltip('enable');
}, 5000);

    </script>

  </body>
</html>

<?php if(settings_item('site.setPengumuman')=="aktif"):?> 

<?php if($pengumuman): ?>	
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });



</script>

	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
       
          <?php 
          foreach($pengumuman as $pengumuman_row): ?>
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <a href="<?php echo site_url("blog/".$pengumuman_row->id."-".url_title($pengumuman_row->judul));?>" style="color:#000 !important"><?php echo $pengumuman_row->judul;?></a>
            
 
          </h4>
        </div>
        <div class="modal-body">
            
          <div >
            <?php if($pengumuman_row->image_data!=""): ?>
            <img src="<?php echo base_url("application/modules/post/images/".$pengumuman_row->image_data);?>" style="width:100%">
              <?php endif; ?> 
              <p>
             <a href="<?php echo site_url("blog/".$pengumuman_row->id."-".url_title($pengumuman_row->judul));?>" style="color:#000 !important">
              <?php echo $pengumuman_row->slug_judul;?>
            </a>
          </p>
            
            </div>

             </div>
        <?php endforeach; ?>
       
       
      </div>
      
    </div>
  </div>
<?php endif; ?>
<?php endif; ?>