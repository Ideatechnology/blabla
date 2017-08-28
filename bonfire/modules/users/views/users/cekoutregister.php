<?php

$validation_errors = validation_errors();
$errorClass = ' hash-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?>
<style>
p.already-registered {
    text-align: center;
}
.page-header{
padding:20px;
background:#5E90AF;
color:#fff
}
</style>
<section id="register" >

    <div class="row-fluid">
            	<div class="col-xs-6">
				<div class="box_curl">
				  <h2 class="page-header" style=""><?php echo lang('us_cekregister2');?></h2>
            <?php echo form_open('cekoutregister', array('class' => "form-vertical",'style'=>'padding: 10px 40px;', 'autocomplete' => 'off',"data-ajax"=>"false")); ?>
				<?php Template::block('user_fields', 'user_fields_cekout', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form');
                ?>
                
					<div class="form-group">
                    <input type="submit" name="register" class="btn btn-primary" value="<?php echo lang('us_register') ; ?>" />
              
             </div>
				
				
            <?php echo form_close(); ?>
			</div>
           </div>
		   	<div class="col-xs-6">
			
			
			<h2 class="page-header" style="margin-left: 30px;
margin-right: 33px;
margin-bottom: 0px;"><?php echo lang('us_cekregister3');?> </h2>
			
<div id="login">


	<?php if($this->uri->segment(2)==""):?>
	
	<?php echo form_open('cekoutregister', array('autocomplete' => 'off','class'=>'form-signin')); ?>
 <div class="">
 
 <img class="profile-img" src="<?php echo Template::theme_url("images/photo.png");?>">
 
		<div class="form-group <?php echo iif( form_error('login') , 'error') ;?>">
			
				<input style="width: 95%" class="form-control" required type="text" name="login" id="login_value" value="<?php echo @$_POST["login"]; ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
			
		</div>

		<div class="form-group <?php echo iif( form_error('password') , 'hash-error') ;?>">
				<input style="width: 95%" type="password" required class="form-control" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
		</div>

		<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
			
			<div class="checkbox">
    <label>
      	<input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3" /> <?php echo lang('us_remember_note'); ?>
    </label>
  </div>
			
		<?php endif; ?>


		<div class="form-group">
		
				<input class="btn btn-lg btn-primary btn-block" type="submit" name="log-me-in" id="submit" value="<?php e(lang('us_let_me_in')); ?>" tabindex="5" />
		</div>
		
	</div>
	<?php echo form_close(); ?>


	<p style="text-align: center">
		
		<br/><?php echo anchor('/cekoutregister/forgot_password', lang('us_forgot_your_password')); ?>
	</p>
	
	<?php elseif($this->uri->segment(2)=="reset_password"): ?>

	
<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>

	<input type="hidden" name="user_id" value="<?php echo $user->id ?>" />

	<div class="form-group <?php echo iif( form_error('password2') , 'hash-error') ;?>">
		<label class="control-label" for="password"><?php echo lang('bf_password'); ?></label>
		<div class="">
			<input class="form-control" required type="password" name="password2" id="password" value="" placeholder="Password...." />
			    <span class="hash-error"><?php echo form_error('password2'); ?></span>
		</div>
	</div>

	<div class="form-group <?php echo iif( form_error('pass_confirm2') , 'hash-error') ;?>">
		<label class="control-label" for="pass_confirm"><?php echo lang('bf_password_confirm'); ?></label>
		<div class="">
			
			<input class="form-control" type="password" required name="pass_confirm2" id="pass_confirm" value="" placeholder="<?php echo lang('bf_password_confirm'); ?>" />
				<span class="hash-error"><?php echo form_error('pass_confirm2'); ?></span>
		</div>
	</div>

	<div class="form-group">
	<div class="">
			<input class="btn btn-lg btn-primary btn-block" type="submit" name="set_password" id="submit" value="<?php e(lang('us_set_password')); ?>"  />
		</div>
	</div>

<?php echo form_close(); ?>
	
	
	<p style="text-align: center">
		
		<br/><?php echo anchor('/cekoutregister', "Silakan Login ?"); ?>
	</p>

	
	<?php else: ?>
	
<?php echo form_open("/cekoutregister/forgot_password", array('class' => "form-signin", 'autocomplete' => 'off')); ?>


<?php if (validation_errors()) : ?>
	<div class="alert alert-danger fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php endif; ?>

	<div class="form-group <?php echo iif( form_error('email2') , 'hash-error'); ?>">
		<label class="control-label required" for="email"><?php echo lang('bf_email'); ?> *</label>
		<div class="">
			<input class="form-control" required type="email" name="email2" id="email2" value="<?php echo set_value('email2') ?>" />
		</div>
	</div>

<div class="form-group">
    <div class="">
			<input class="btn btn-lg btn-primary btn-block" type="submit" name="send" value="<?php e(lang('us_send_password')); ?>" />
		</div>
	</div>

<?php echo form_close(); ?>

<p style="text-align: center">
		
		<br/><?php echo anchor('/cekoutregister', "Silakan Login ?"); ?>
	</p>

<?php endif;?>
	
	
</div>
			
			
			
			
			</div>
			
			<div class="col-xs-4">
		

			</div>
    </div>
</section>