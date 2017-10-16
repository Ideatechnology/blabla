
<div class="navmenu navmenu-inverse navmenu-fixed-left offcanvas" style="z-index: 1031;">
    <a class="navmenu-brand" href="#" style="border-bottom:1px solid #706c6c">MENU UTAMA</a>

    <ul class="nav navmenu-nav metismenu" id="menu1">
`
    <?php
                //untuk menampilkan menu top
                 generate_menu_multiple(0,true);
            ?>

      </ul>
     
    
</div>

<nav class="navbar navbar-default nav_menu_top" role="navigation">
  <div class="container" id="kotak-cart-register">
    
<div class="row">
<div class="col-md-3 col-sm-4  hidden-xs">
<form class="hidden-sm" method="get" action="<?php echo site_url("search/index");?>" role="search" style="padding: 0px 0px;
    margin: 20px 0px 10px 0px;">
         
      <input type="text" class="form-control form-cari" value="<?php echo $this->input->get("keyword");?>" name="keyword" placeholder=" Search" style="">
     
 


      </form>

</div>
<div class="col-md-5 col-sm-4 col-xs-12">

  <button type="button" class="navbar-toggle collapsed"  data-toggle="offcanvas" data-target=".navmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

<h5 class="text-center judul-website">

<img src="<?php echo Template::theme_url("slider/LogoFooter.png");?>" style="width:150px;">
</h5>

</div>

<div class="col-md-4 hidden-sm hidden-xs">

<div class="nav-atas">

<a href="#" style="background: transparent !important;"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> 0 22975159</a>
     
          <?php if (empty($current_user)) : ?>
        
         <a href="<?php echo site_url("users/login"); ?>" class="btn btn-default" style="border-radius: 10px;
    padding: 8px 30px;
    color: #767171 !important;
    font-size: 14px;">LOGIN</a>
          
          
      <a href="<?php echo site_url('users/register'); ?>" class="btn btn-default" style="border-radius: 10px;
    padding: 8px 30px;
    color: #767171 !important;
    font-size: 14px;">REGISTER</a>

          </div>
        <?php else: ?>
           <a href="<?php echo site_url('users/profile'); ?>" class="btn btn-default" style="border-radius: 10px;
    padding: 8px 30px;
    color: #767171 !important;
    font-size: 14px;">PROFILE</a>
     <a href="<?php echo site_url('logout'); ?>" class="btn btn-default" style="border-radius: 10px;
    padding: 8px 30px;
    color: #767171 !important;
    font-size: 14px;">LOGOUT</a>
        <?php endif; ?>
              



</div>


</div>
   
 
      

  
        
     

 
    </div>
   
    

    

  </div>
</nav>

     <nav class="navbar navbar-default nav_menu_utama navbar-static-top hidden-xs hidden-sm" id="nav_bar" role="navigation"  style="background-color: #FFF;">


  <div class="container" id="kotak-cart-register">

  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target=".navmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="#"><img src="<?php echo Template::theme_url("logo.png");?>" id="logo" alt="" style="display:none">
                    </a>
                </div>
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu-utama-navbar-collapse-1">
       <ul class="nav menu_utama navbar-nav">
       <?php
                //untuk menampilkan menu top
                 generate_menu_multiple(0);
            ?>
          </ul>
      
    
     
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>


