<div class="page-header">
	<h1><?php echo lang('us_reset_password'); ?></h1>
</div>

<?php if (validation_errors()) : ?>
	<div class="alert alert-danger fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php endif; ?>

<div class="alert alert-info fade in">
	<?php echo lang('us_reset_note'); ?>
</div>

<div class="row-fluid">
<div class="col-xs-12">

<?php echo form_open($this->uri->uri_string(), array('class' => "form-horizontal", 'autocomplete' => 'off',"data-ajax"=>"false")); ?>

	<div class="form-group <?php echo iif( form_error('email') , 'error'); ?>">
		<label class="col-xs-2 control-label required" for="email"><?php echo lang('bf_email'); ?></label>
		<div class="col-xs-5">
			<input class="form-control" type="text" name="email" id="email" value="<?php echo set_value('email') ?>" />
		</div>
	</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
			<input class="btn btn-primary" type="submit" name="send" value="<?php e(lang('us_send_password')); ?>" />
		</div>
	</div>

<?php echo form_close(); ?>

	</div>
</div>
