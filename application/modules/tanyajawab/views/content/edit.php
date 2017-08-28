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
<div class="alert alert-info">Jika Pesan ini dibalas maka otomatis akan terpublish</div>
<div class="admin-box  col-md-6">
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

		<table class="table" >
		<tr>
			<th>IP</th>
			<td> : <?php echo $tanyajawab['gbip']; ?></td>
		</tr>
		<tr>
			<th>Nama Lengkap</th>
			<td> : <?php echo $tanyajawab['gbname']; ?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td> : <?php echo $tanyajawab['gbmail']; ?></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td> : <?php echo $tanyajawab['gbloca']; ?></td>
		</tr>
		<tr>
			<th>Link </th>
			<td> : <?php echo $tanyajawab['gbpage']; ?></td>
		</tr>
		<tr>
			<th>Tanggal </th>
			<td> : <?php echo $tanyajawab['gbdate']; ?></td>
		</tr>
		<tr>
			<th>Subjek </th>
			<td> : <?php echo $tanyajawab['gbtitle']; ?></td>
		</tr>
		</table>



			<div class="control-group <?php echo form_error('gbtext') ? 'error' : ''; ?>">
				<?php echo form_label('Pertanyaan'. lang('bf_form_label_required'), 'tanyajawab_gbtext', array('class' => 'control-label') ); ?>
				<hr />
				<div class='controls'>
					<?php echo $tanyajawab['gbtext']; ?>
					
				</div>
			</div>
			<hr />

			<div class="control-group <?php echo form_error('gbcomment') ? 'error' : ''; ?>">
				<?php echo form_label('Jawaban', 'tanyajawab_gbcomment', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'tanyajawab_gbcomment', 'id' => 'tanyajawab_gbcomment', 'rows' => '5', 'cols' => '80', 'value' => set_value('tanyajawab_gbcomment', isset($tanyajawab['gbcomment']) ? $tanyajawab['gbcomment'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('gbcomment'); ?></span>
				</div>
			</div>
<hr />
			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="Jawab"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/tanyajawab', lang('tanyajawab_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Tanyajawab.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('tanyajawab_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('tanyajawab_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>