<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($tanyajawab))
{
	$tanyajawab = (array) $tanyajawab;
}
$id = isset($tanyajawab['id']) ? $tanyajawab['id'] : '';

?>
<div class="admin-box">
	<h3>tanyajawab</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('gbip') ? 'error' : ''; ?>">
				<?php echo form_label('Gbip', 'tanyajawab_gbip', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbip' type='text' name='tanyajawab_gbip' maxlength="15" value="<?php echo set_value('tanyajawab_gbip', isset($tanyajawab['gbip']) ? $tanyajawab['gbip'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbip'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbname') ? 'error' : ''; ?>">
				<?php echo form_label('Gbname'. lang('bf_form_label_required'), 'tanyajawab_gbname', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbname' type='text' name='tanyajawab_gbname' maxlength="40" value="<?php echo set_value('tanyajawab_gbname', isset($tanyajawab['gbname']) ? $tanyajawab['gbname'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbname'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbmail') ? 'error' : ''; ?>">
				<?php echo form_label('Gbmail'. lang('bf_form_label_required'), 'tanyajawab_gbmail', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbmail' type='text' name='tanyajawab_gbmail' maxlength="60" value="<?php echo set_value('tanyajawab_gbmail', isset($tanyajawab['gbmail']) ? $tanyajawab['gbmail'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbmail'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbmailshow') ? 'error' : ''; ?>">
				<?php echo form_label('Gbmailshow', 'tanyajawab_gbmailshow', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='tanyajawab_gbmailshow'>
						<input type='checkbox' id='tanyajawab_gbmailshow' name='tanyajawab_gbmailshow' value='1' <?php echo (isset($tanyajawab['gbmailshow']) && $tanyajawab['gbmailshow'] == 1) ? 'checked="checked"' : set_checkbox('tanyajawab_gbmailshow', 1); ?>>
						<span class='help-inline'><?php echo form_error('gbmailshow'); ?></span>
					</label>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbloca') ? 'error' : ''; ?>">
				<?php echo form_label('Gbloca'. lang('bf_form_label_required'), 'tanyajawab_gbloca', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbloca' type='text' name='tanyajawab_gbloca' maxlength="50" value="<?php echo set_value('tanyajawab_gbloca', isset($tanyajawab['gbloca']) ? $tanyajawab['gbloca'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbloca'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbpage') ? 'error' : ''; ?>">
				<?php echo form_label('Gbpage', 'tanyajawab_gbpage', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbpage' type='text' name='tanyajawab_gbpage' maxlength="150" value="<?php echo set_value('tanyajawab_gbpage', isset($tanyajawab['gbpage']) ? $tanyajawab['gbpage'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbpage'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbvote') ? 'error' : ''; ?>">
				<?php echo form_label('Gbvote', 'tanyajawab_gbvote', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbvote' type='text' name='tanyajawab_gbvote' maxlength="10" value="<?php echo set_value('tanyajawab_gbvote', isset($tanyajawab['gbvote']) ? $tanyajawab['gbvote'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbvote'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbtext') ? 'error' : ''; ?>">
				<?php echo form_label('Gbtext'. lang('bf_form_label_required'), 'tanyajawab_gbtext', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'tanyajawab_gbtext', 'id' => 'tanyajawab_gbtext', 'rows' => '5', 'cols' => '80', 'value' => set_value('tanyajawab_gbtext', isset($tanyajawab['gbtext']) ? $tanyajawab['gbtext'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('gbtext'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbdate') ? 'error' : ''; ?>">
				<?php echo form_label('Gbdate', 'tanyajawab_gbdate', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbdate' type='text' name='tanyajawab_gbdate' maxlength="1" value="<?php echo set_value('tanyajawab_gbdate', isset($tanyajawab['gbdate']) ? $tanyajawab['gbdate'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbdate'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbtitle') ? 'error' : ''; ?>">
				<?php echo form_label('Gbtitle', 'tanyajawab_gbtitle', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tanyajawab_gbtitle' type='text' name='tanyajawab_gbtitle' maxlength="50" value="<?php echo set_value('tanyajawab_gbtitle', isset($tanyajawab['gbtitle']) ? $tanyajawab['gbtitle'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gbtitle'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('gbcomment') ? 'error' : ''; ?>">
				<?php echo form_label('Gbcomment', 'tanyajawab_gbcomment', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'tanyajawab_gbcomment', 'id' => 'tanyajawab_gbcomment', 'rows' => '5', 'cols' => '80', 'value' => set_value('tanyajawab_gbcomment', isset($tanyajawab['gbcomment']) ? $tanyajawab['gbcomment'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('gbcomment'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('published') ? 'error' : ''; ?>">
				<?php echo form_label('Published', 'tanyajawab_published', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='tanyajawab_published'>
						<input type='checkbox' id='tanyajawab_published' name='tanyajawab_published' value='1' <?php echo (isset($tanyajawab['published']) && $tanyajawab['published'] == 1) ? 'checked="checked"' : set_checkbox('tanyajawab_published', 1); ?>>
						<span class='help-inline'><?php echo form_error('published'); ?></span>
					</label>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('tanyajawab_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/tanyajawab', lang('tanyajawab_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>