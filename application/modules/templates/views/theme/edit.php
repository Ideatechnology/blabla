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

if (isset($templates))
{
	$templates = (array) $templates;
}
$id = isset($templates['id_templates']) ? $templates['id_templates'] : '';

?>
<div class="admin-box">
	<h3>templates</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('judul') ? 'error' : ''; ?>">
				<?php echo form_label('Judul'. lang('bf_form_label_required'), 'templates_judul', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='templates_judul' type='text' name='templates_judul' maxlength="100" value="<?php echo set_value('templates_judul', isset($templates['judul']) ? $templates['judul'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('judul'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('pembuat') ? 'error' : ''; ?>">
				<?php echo form_label('Pembuat'. lang('bf_form_label_required'), 'templates_pembuat', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='templates_pembuat' type='text' name='templates_pembuat' maxlength="50" value="<?php echo set_value('templates_pembuat', isset($templates['pembuat']) ? $templates['pembuat'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('pembuat'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('folder') ? 'error' : ''; ?>">
				<?php echo form_label('Folder'. lang('bf_form_label_required'), 'templates_folder', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='templates_folder' type='text' name='templates_folder' maxlength="50" value="<?php echo set_value('templates_folder', isset($templates['folder']) ? $templates['folder'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('folder'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					30 => 30,
				);

				echo form_dropdown('templates_aktif', $options, set_value('templates_aktif', isset($templates['aktif']) ? $templates['aktif'] : ''), 'Aktif');
			?>

			<div class="control-group <?php echo form_error('gambar') ? 'error' : ''; ?>">
				<?php echo form_label('Gambar'. lang('bf_form_label_required'), 'templates_gambar', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='templates_gambar' type='text' name='templates_gambar' maxlength="255" value="<?php echo set_value('templates_gambar', isset($templates['gambar']) ? $templates['gambar'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('gambar'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('templates_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/transaksi/templates', lang('templates_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Templates.Transaksi.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('templates_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('templates_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>