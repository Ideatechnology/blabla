<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-danger fade in">
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
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="form-group <?php echo form_error('judul') ? 'error' : ''; ?>">
				<?php echo form_label('Judul'. lang('bf_form_label_required'), 'templates_judul', array('class' => 'col-sm-2 control-label') ); ?>
			<div class="col-sm-5">
					<input id='templates_judul' class="form-control" type='text' name='templates_judul' maxlength="100" value="<?php echo set_value('templates_judul', isset($templates['judul']) ? $templates['judul'] : ''); ?>" />
					<span class='error'><?php echo form_error('judul'); ?></span>
				</div>
			</div>

			<div class="form-group <?php echo form_error('pembuat') ? 'error' : ''; ?>">
				<?php echo form_label('Pembuat'. lang('bf_form_label_required'), 'templates_pembuat', array('class' => 'col-sm-2 control-label') ); ?>
				<div class="col-sm-5">
					<input id='templates_pembuat' class="form-control" type='text' name='templates_pembuat' maxlength="50" value="<?php echo set_value('templates_pembuat', isset($templates['pembuat']) ? $templates['pembuat'] : ''); ?>" />
					<span class='error'><?php echo form_error('pembuat'); ?></span>
				</div>
			</div>

			<div class="form-group <?php echo form_error('folder') ? 'error' : ''; ?>">
				<?php echo form_label('Folder'. lang('bf_form_label_required'), 'templates_folder', array('class' => 'col-sm-2 control-label') ); ?>
				<div class="col-sm-5">
					<input id='templates_folder' class="form-control" type='text' name='templates_folder' maxlength="50" value="<?php echo set_value('templates_folder', isset($templates['folder']) ? $templates['folder'] : ''); ?>" />
					<span class='error'><?php echo form_error('folder'); ?></span>
				</div>
			</div>
				
				
	
						<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					"Y" => "Ya",
					"N" => "Tidak",
			
				);

				echo form_dropdown('templates_aktif', $options, set_value('templates_aktif', isset($templates['aktif']) ? $templates['aktif'] : ''), 'Aktif');
			?>		
				
		

			<div class="form-group <?php echo form_error('gambar') ? 'error' : ''; ?>">
				<?php echo form_label('Gambar'. lang('bf_form_label_required'), 'templates_gambar', array('class' => 'col-sm-2 control-label') ); ?>
			<div class="col-sm-5">
					<input id='templates_gambar' class="form-control" type='text' name='templates_gambar' maxlength="255" value="<?php echo set_value('templates_gambar', isset($templates['gambar']) ? $templates['gambar'] : ''); ?>" />
					<span class='error'><?php echo form_error('gambar'); ?></span>
				</div>
			</div>

		 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('templates_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/theme/templates', lang('templates_cancel'), 'class="btn btn-warning"'); ?>
				
			</div></div>
		</fieldset>
    <?php echo form_close(); ?>
</div>