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

if (isset($publikasi))
{
	$publikasi = (array) $publikasi;
}
$id = isset($publikasi['id_publikasi']) ? $publikasi['id_publikasi'] : '';

?>
<div class="admin-box">
	
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-vertical"'); ?>
		<fieldset>

			<div class="form-group <?php echo form_error('nama_publikasi') ? 'error' : ''; ?>">
				<?php echo form_label('Judul Media'. lang('bf_form_label_required'), 'publikasi_nama_publikasi', array('class' => 'control-label') ); ?>
					<input id='publikasi_nama_publikasi' required="required" class="form-control" style="width:50%" type='text' name='publikasi_nama_publikasi' maxlength="200" value="<?php echo set_value('publikasi_nama_publikasi', isset($publikasi['nama_publikasi']) ? $publikasi['nama_publikasi'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('nama_publikasi'); ?></span>
				
			</div>

			<div class="form-group <?php echo form_error('deskripsi') ? 'error' : ''; ?>">
				<?php echo form_label('Deskripsi'. lang('bf_form_label_required'), 'publikasi_deskripsi', array('class' => 'control-label') ); ?>
					<?php echo form_textarea( array('id'=>'editor1','name' => 'publikasi_deskripsi','style'=>'width:50%','class'=>'form-control', 'rows' => '5', 'cols' => '80', 'value' => set_value('publikasi_deskripsi', isset($publikasi['deskripsi']) ? $publikasi['deskripsi'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('deskripsi'); ?></span>
				
			</div>

			<div class="form-group <?php echo form_error('tanggal') ? 'error' : ''; ?>">
				<?php echo form_label('Tanggal', 'publikasi_tanggal', array('class' => 'control-label') ); ?>
					<input id='publikasi_tanggal' class="form-control" type='text' style="width:20%;position: relative; z-index: 100000;" name='publikasi_tanggal'  value="<?php echo set_value('publikasi_tanggal', isset($publikasi['tanggal']) ? $publikasi['tanggal'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('tanggal'); ?></span>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				/*$options = array(
				);

				echo form_dropdown('publikasi_id_kategori', $options, set_value('publikasi_id_kategori', isset($publikasi['id_kategori']) ? $publikasi['id_kategori'] : ''), 'Kategori'. lang('bf_form_label_required'));
				*/
			?>

			<div class="form-group <?php echo form_error('publikasi_id_kategori')?'error':'';?>">

				<?php echo form_label('Kategori','publikasi_id_kategori',array('class'=>'control-label'));?>
				<select name="publikasi_id_kategori" id="publikasi_id_kategori" class="form-control" style="width:30%;" required="required"> 
					<option value="">--Pilih Kategori--</option>
					<?php if($kategori): ?>
					<?php foreach($kategori as $kategori_row): ?>
						<option value="<?php echo $kategori_row->id;?>" <?php echo @$publikasi['id_kategori']==$kategori_row->id?"selected":"";?>><?php echo $kategori_row->kategori;?></option>
					<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>

			<div class="form-group <?php echo form_error('file_pdf') ? 'error' : ''; ?>">
				<?php echo form_label('File Pdf', 'publikasi_file_pdf', array('class' => 'control-label') ); ?>
					<input type="file" name="publikasi_file_pdf">
					<span class='help-inline'><?php echo form_error('file_pdf'); ?></span>

					<?php if(@$publikasi['file_pdf']!="") :?>
					<br />
						<a target="_blank" class="btn btn-primary btn-xs" href="<?php echo base_url();?>assets/publikasi/files/<?php echo $publikasi['file_pdf'];?>">
						Download : <?php echo @$publikasi['file_pdf'];?>
						</a>
						<br />
					<?php endif; ?>
			</div>

			


			<div class="form-group <?php echo form_error('gambar') ? 'error' : ''; ?>">
				<?php echo form_label('Gambar', 'publikasi_gambar', array('class' => 'control-label') ); ?>
					<input type="file" name="publikasi_gambar">
					<span class='help-inline'><?php echo form_error('gambar'); ?></span>
					<?php if(@$publikasi['gambar']!="") :?>
					<br />
						<img src="<?php echo base_url();?>assets/publikasi/images/<?php echo $publikasi['gambar'];?>" style="width:200px;">
					<?php endif; ?>
			</div>
			<br />
			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="Simpan"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/plugin/publikasi', lang('publikasi_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>