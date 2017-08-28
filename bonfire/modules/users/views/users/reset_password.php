	<div class="page-header">
		<h1>Reset Your Password</h1>
	</div>

	<div class="alert alert-info fade in">
		<h4 class="alert-heading"><?php echo lang('us_reset_password_note'); ?></h4>
	</div>


<div class="row">
	<div class="col-xs-12">

<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>

	<input type="hidden" name="user_id" value="<?php echo $user->id ?>" />

	<div class="form-group <?php echo iif( form_error('password') , 'hash-error') ;?>">
		<label class="col-xs-3 control-label" for="password"><?php echo lang('bf_password'); ?></label>
		<div class="col-xs-3">
			<input class="form-control" type="password" name="password" id="password" value="" placeholder="Password...." />
			    <span class="hash-error"><?php echo form_error('password'); ?></span>
		
		</div>
	</div>

	<div class="form-group <?php echo iif( form_error('pass_confirm') , 'hash-error') ;?>">
		<label class="col-xs-3 control-label" for="pass_confirm"><?php echo lang('bf_password_confirm'); ?></label>
		<div class="col-xs-3">
			
			<input class="form-control" type="password" name="pass_confirm" id="pass_confirm" value="" placeholder="<?php echo lang('bf_password_confirm'); ?>" />
				<span class="hash-error"><?php echo form_error('pass_confirm'); ?></span>
		</div>
	</div>

	<div class="form-group">
	<div class="col-xs-offset-2 col-xs-10">
			<input class="btn btn-primary" type="submit" name="set_password" id="submit" value="<?php e(lang('us_set_password')); ?>"  />
		</div>
	</div>

<?php echo form_close(); ?>

	</div>
</div>
