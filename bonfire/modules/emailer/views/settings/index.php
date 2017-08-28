<?php
$controlClass = 'form-control';
?>
<div class="admin-box">



	<?php echo form_open(SITE_AREA .'/settings/emailer', 'class="form-horizontal"'); ?>

	<fieldset>
		<legend>General Settings</legend>
		<br />
		<div class="form-group <?php echo form_error('sender_email') ? 'error' : '' ?>">
			<label class="col-xs-2 control-label" for="sender_email"><?php echo lang('em_system_email'); ?></label>
			<div class="col-xs-5">
				<input type="email" name="sender_email" class="<?php echo $controlClass;?>" id="sender_email" class="input-xlarge" value="<?php echo set_value('sender_email', $sender_email)  ?>" />
				<?php if (form_error('sender_email')) echo '<span class="help-inline">'. form_error('sender_email') .'</span>'; ?>
				<p class="help-block"><?php echo lang('em_system_email_note'); ?></p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-xs-2 control-label" for="mailtype"><?php echo lang('em_email_type'); ?></label>
			<div class="col-xs-5">
				<select name="mailtype" id="mailtype" class="<?php echo $controlClass;?>">
					<option value="text" <?php echo set_select('mailtype', 'text', $mailtype == 'text'); ?>>Text</option>
					<option value="html" <?php echo set_select('mailtype', 'html', $mailtype == 'html'); ?>>HTML</option>
				</select>
			</div>
		</div>

		<div class="form-group <?php echo form_error('protocol') ? 'error' : ''; ?>">
			<label class="col-xs-2 control-label" for="server_type"><?php echo lang('em_email_server'); ?></label>
			<div class="col-xs-5">
				<select name="protocol" id="server_type" class="<?php echo $controlClass;?>">
					<option <?php echo set_select('protocol', 'mail', $protocol == 'mail'); ?>>mail</option>
					<option <?php echo set_select('protocol', 'sendmail', $protocol == 'sendmail'); ?>>sendmail</option>
					<option value="smtp" <?php echo set_select('protocol', 'smtp', $protocol == 'smtp'); ?>>SMTP</option>
				</select>
	    	    <span class="help-inline"><?php echo form_error('protocol'); ?></span>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend><?php echo lang('em_settings'); ?></legend>
		<!-- PHP Mail -->
		<div id="mail" class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
			<p class="intro"><?php echo lang('em_settings_note'); ?></p>
		</div>	</div>

		<!-- Sendmail -->
		<div id="sendmail" class="form-group <?php echo form_error('mailpath') ? 'error' : ''; ?>" style="padding-top: 27px">
			<label  class="col-xs-2 control-label" for="mailpath">Sendmail <?php echo lang('em_location'); ?></label>
			<div class="col-xs-5">
				<input type="text" name="mailpath" id="mailpath" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('mailpath', $mailpath) ?>" />
				<span class="help-inline"><?php echo form_error('mailpath'); ?></span>
			</div>
		</div>

		<!-- SMTP -->
		<div id="smtp" style="padding-top: 27px">

			<div class="form-group <?php echo form_error('smtp_host') ? 'error' : ''; ?>">
				<label class="col-xs-2 control-label" for="smtp_host">SMTP <?php echo lang('em_server_address'); ?></label>
				<div class="col-xs-5">
					<input type="text" name="smtp_host" id="smtp_host" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('smtp_host', $smtp_host) ?>" />
		    	    <span class="help-inline"><?php echo form_error('smtp_host'); ?></span>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-2 control-label" for="smtp_user">SMTP <?php echo lang('bf_username'); ?></label>
				<div class="col-xs-5">
					<input type="text" name="smtp_user" id="smtp_user" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('smtp_user', $smtp_user) ?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-2 control-label" for="smtp_pass">SMTP <?php echo lang('bf_password'); ?></label>
				<div class="col-xs-5">
					<input type="password" name="smtp_pass" id="smtp_pass" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('smtp_pass', $smtp_pass) ?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-2 control-label" for="smtp_port">SMTP <?php echo lang('em_port'); ?></label>
				<div class="col-xs-5">
					<input type="text" name="smtp_port" id="smtp_port" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('smtp_port', $smtp_port) ?>" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-2 control-label" for="smtp_timeout">SMTP <?php echo lang('em_timeout_secs'); ?></label>
				<div class="col-xs-5">
					<input type="text" name="smtp_timeout" id="smtp_timeout" class="input-xlarge <?php echo $controlClass;?>" value="<?php echo set_value('smtp_timeout', $smtp_timeout) ?>" />
				</div>
			</div>
		</div>
	</fieldset>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="save" class="btn btn-primary" value="<?php e(lang('em_save_settings')); ?>" />
	</div></div>
<br />
	<?php echo form_close(); ?>
</div>

<!-- Test Settings -->
<div class="admin-box">
	<h3><?php echo lang('em_test_header'); ?></h3>
<hr />
	<?php echo form_open(SITE_AREA .'/settings/emailer/test', array('class' => 'form-horizontal', 'id'=>'test-form')); ?>
		<fieldset>
		
			<div class="form-group">
				<label class="col-xs-2 control-label" for="test-email"><?php echo lang('bf_email'); ?></label>
				<div class="col-xs-5">
					<input type="email" name="email" class="<?php echo $controlClass;?>" id="test-email" value="<?php echo set_value('test_email', settings_item('site.system_email')) ?>" />
<br />				
				<input type="submit" name="test" class="btn btn-primary" value="<?php echo lang('em_test_button'); ?>" />
				</div>
			</div>
		</fieldset>

		<div id="test-ajax"></div>

	<?php echo form_close(); ?>
</div>
