<?php
	Assets::add_css( array(
		'bootstrap.min.css',
		
	));


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo isset($toolbar_title) ? $toolbar_title .' : ' : ''; ?> <?php e($this->settings_lib->item('site.title')) ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="robots" content="noindex" />
	<?php echo Assets::css(null, true); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Template::theme_url('font-awesome/css/font-awesome.css'); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Template::theme_url('css/plugins/morris/morris-0.4.3.min.css'); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Template::theme_url('css/plugins/timeline/timeline.css'); ?>" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo Template::theme_url('css/plugins/dataTables/dataTables.bootstrap.css'); ?>" media="screen" />

	<link rel="stylesheet" type="text/css" href="<?php echo Template::theme_url('css/sb-admin.css'); ?>" media="screen" />

	
	
</head>
<body>
<!--[if lt IE 7]>
		<p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or
		<a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
<![endif]-->


	<noscript>
		<p>Javascript is required to use Bonfire's admin.</p>
	</noscript>

    <div id="wrapper">
<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation"  style="margin-bottom: 0px;">	
		
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
	  <?php echo anchor( '/', "<span class='glyphicon glyphicon-asterisk'></span> ".html_escape($this->settings_lib->item('site.title')), 'class="navbar-brand" target="_blank"' ); ?>
    </div>
				
	 <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url() ?>" target="_blank"><i class="fa fa-eye fa-fw"></i> Lihat Website</a></li>
            
		<li class="dropdown ">
    	  <a href="#"  class="dropdown-toggle " data-toggle="dropdown" title="<?php echo lang('bf_user_settings') ?>">
				  <i class="fa fa-user fa-fw"></i> Anda Login Sebagai :  <?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? ucfirst($current_user->display_name) : ($this->settings_lib->item('auth.use_usernames') ? ucfirst($current_user->username) : $current_user->email); ?>
<b class="caret"></b>						
						</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url(SITE_AREA .'/settings/users/edit') ?>"><?php echo lang('bf_user_settings')?></a></li>
            <li><a href="<?php echo site_url('logout'); ?>"><?php echo lang('bf_action_logout')?></a></li>
         
          </ul>
        </li>
		
      </ul>
	
		  </div>
	</nav><!-- /topbar -->


