			   <nav class="navbar navbar-default" role="navigation" style="margin-bottom:0px;">

    <!-- Brand and toggle get grouped for better mobile display -->
      <?php if (isset($toolbar_title)) : ?>
	<div class="navbar-header">
      <a class="navbar-brand" href="#" style="margin-left:15px;">
			<?php echo $toolbar_title ?>
	  </a>
    </div>
		<?php endif; ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav navbar-right" style="margin-top:5px;margin-right:5px;">
     <?php Template::block('sub_nav', ''); ?>
	  
      </ul>
    </div><!-- /.navbar-collapse -->

</nav>