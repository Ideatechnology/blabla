<?php // Change the css classes to suit your needs
	if( isset($permissions) ) {
		$permissions = (array)$permissions;
	}
	$id = isset($permissions['permission_id']) ? "/".$permissions['permission_id'] : '';
?>

<div class="admin-box">

	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
	<fieldset>
		<legend><?php echo lang('permissions_details') ?></legend>

		<div class="form-group <?php echo form_has_error('name') ? 'error' : ''; ?>">
			<label for="name" class="control-label col-xs-2"><?php echo lang('permissions_name') ?></label>
	    	<div class="col-xs-5">
	    	    <input id="name" type="text" name="name" class="form-control" maxlength="30" value="<?php echo set_value('name', isset($permissions['name']) ? $permissions['name'] : ''); ?>"  />
	    	    <span class="help-inline"><?php echo form_error('name'); ?></span>
			</div>
		</div>

		<div class="form-group <?php echo form_has_error('description') ? 'error' : ''; ?>">
			<label for="description" class="control-label col-xs-2"><?php echo lang('permissions_description') ?></label>
	        <div class="col-xs-5">
		        <input id="description" class="form-control" type="text" name="description" maxlength="100" value="<?php echo set_value('description', isset($permissions['description']) ? $permissions['description'] : ''); ?>"  />
		        <span class="help-inline"><?php echo form_error('description'); ?></span>
			</div>
		</div>

		<div class="form-group">
			<label for="status" class="control-label col-xs-2"><?php echo lang('permissions_status') ?></label>
			<div class="col-xs-5">
				<select name="status" id="status" class="form-control">
					<option value="active" <?php echo set_select('status', 'active') ?>><?php echo lang('permissions_active') ?></option>
					<option value="inactive" <?php echo set_select('status', 'inactive') ?>><?php echo lang('permissions_inactive') ?></option>
				</select>
			</div>
		</div>

	 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
			<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('permissions_save');?>" /> or
			<?php echo anchor(SITE_AREA .'/settings/permissions', lang('bf_action_cancel')); ?>
		</div></div>

	</fieldset>
	<?php echo form_close(); ?>

</div>