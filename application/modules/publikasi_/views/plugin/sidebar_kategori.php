<?php

if (isset($kategori_edit))
{
	$kategori_edit = (array) $kategori_edit;
}
$id = isset($kategori_edit['id']) ? $kategori_edit['id'] : '';

?>
<div class="admin-box">

	<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
		<fieldset>

			<div class="form-group <?php echo form_error('kategori_kategori') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_kategori')." [ Bahasa Indonesia ] ". lang('bf_form_label_required'), 'kategori_kategori', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kategori_kategori' class="form-control" type='text' name='kategori_kategori' maxlength="50" value="<?php echo set_value('kategori_kategori', isset($kategori_edit['kategori']) ? $kategori_edit['kategori'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('kategori_kategori'); ?></span>
				</div>
			</div>
            
            <div class="form-group <?php echo form_error('kategori_kategori_english') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_kategori')." [ Bahasa Inggris ] ". lang('bf_form_label_required'), 'kategori_kategori_english', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kategori_kategori_english' class="form-control" type='text' name='kategori_kategori_english' maxlength="50" value="<?php echo set_value('kategori_kategori_english', isset($kategori_edit['kategori_english']) ? $kategori_edit['kategori_english'] : ''); ?>" />
					<span class='hash-error'><?php echo form_error('kategori_kategori_english'); ?></span>
				</div>
			</div>

			<div class="form-group <?php echo form_error('kategori_ket') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_keterangan')." [ Bahasa Indonesia ] ", 'kategori_ket', array('class' => 'control-label') ); ?>
				<div class='controls'>
                <textarea id='kategori_ket' class="form-control" name='kategori_ket' maxlength="255" style="height:100px;"><?php echo set_value('kategori_ket', isset($kategori_edit['ket']) ? $kategori_edit['ket'] : ''); ?></textarea>
					<span class='hash-error'><?php echo form_error('kategori_ket'); ?></span>
				</div>
			</div>
            
            <div class="form-group <?php echo form_error('kategori_ket_english') ? 'error' : ''; ?>">
				<?php echo form_label(lang('kategori_form_field_keterangan')." [ Bahasa Inggris ] ", 'kategori_ket_english', array('class' => 'control-label') ); ?>
				<div class='controls'>
                <textarea id='kategori_ket_english' class="form-control"  name='kategori_ket_english' maxlength="255" style="height:100px;"><?php echo set_value('kategori_ket_english', isset($kategori_edit['ket_english']) ? $kategori_edit['ket_english'] : ''); ?></textarea>
					<span class='hash-error'><?php echo form_error('kategori_ket_english'); ?></span>
				</div>
			</div>

				<input type="hidden" name="kategori_type_kategori" value="publikasi">

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('kategori_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/plugin/publikasi/kategori', lang('kategori_cancel'), 'class="btn btn-warning"'); ?>
			
            <?php if($id!=''): ?>	
			<?php if ($this->auth->has_permission('Kategori.Content.Delete')) : ?>
				<?php echo lang('bf_or'); ?>
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('kategori_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('kategori_delete_record'); ?>
				</button>
			<?php endif; ?>
            <?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>