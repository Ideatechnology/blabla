
 <?php echo theme_view('head'); ?>

    <?php echo theme_view('header'); ?>

   

    
<section class="content">
<div class="container">
<div class="row">

     <div class="col-md-8">           
 <?php
        echo isset($content) ? $content : Template::content();
    ?>
    </div>
    <div class="col-md-4">
 <?php echo theme_view('sidebar'); ?>

</div>

     </div>
     </div>
</section>



    <?php echo theme_view('footer_bawah'); ?>

    