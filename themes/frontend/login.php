
 <?php echo theme_view('head'); ?>

    <?php echo theme_view('header'); ?>


    
 <?php
        echo isset($content) ? $content : Template::content();
    ?>


    <?php echo theme_view('footer_bawah'); ?>

    