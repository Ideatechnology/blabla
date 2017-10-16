<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>
<style>
    #login {
    max-width: 350px;
    padding: 19px 29px 14px 29px;
    margin: 40px auto 20px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
#login h2 {
    font-size: 31.5px;
    line-height: 40px;
    margin-bottom: 10px;
}
    
</style>
<div id="login">
  <?php echo Template::message(); ?>	
	<?php echo form_open('login', array('autocomplete' => 'off','class'=>'form-signin uk-form',"data-ajax"=>"false")); ?>
 <div class="">

<?php
		if (validation_errors()) :
	?>
	
				<?php echo validation_errors(); ?>
	<?php endif; ?>

     <h2>Silakan Login</h2>
		<div class="form-group <?php echo iif( form_error('login') , 'error') ;?>">
			
				<input style="width: 95%" class="form-control" required type="text" name="login" id="login_value" value="<?php echo @$_POST["login"]; ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
			
		</div>
		<br />
		<div class="form-group <?php echo iif( form_error('password') , 'hash-error') ;?>">
				<input style="width: 95%" type="password" required class="form-control" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
		</div>
<br />
		<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
			
			<div class="checkbox">
    <label>
      	<input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3" /> <?php echo lang('us_remember_note'); ?>
    </label>
  </div>
			
		<?php endif; ?>
<br />

		<div class="form-group">
		
				<input class="btn btn-primary" type="submit" name="log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="5" />
		</div>
		
	</div>
	<?php echo form_close(); ?>

	<?php // show for Email Activation (1) only
		if ($this->settings_lib->item('auth.user_activation_method') == 1) : ?>
	<!-- Activation Block -->
			<p style="text-align: left" class="well">
				<?php echo lang('bf_login_activate_title'); ?><br />
				<?php
				$activate_str = str_replace('[ACCOUNT_ACTIVATE_URL]',anchor('/activate', lang('bf_activate')),lang('bf_login_activate_email'));
				$activate_str = str_replace('[ACTIVATE_RESEND_URL]',anchor('/resend_activation', lang('bf_activate_resend')),$activate_str);
				echo $activate_str; ?>
			</p>
	<?php endif; ?>

	<!--<p style="text-align: center">
		
		<br/><?php echo anchor('/forgot_password', lang('us_forgot_your_password')); ?>
	</p>
	-->
</div>
<br /><br /><br />