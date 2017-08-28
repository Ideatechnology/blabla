
<div class="admin-box">

<?php echo form_open_multipart("/admin/plugin/arsip/create/".$this->uri->segment(5), 'class="form-vertical"'); ?>

<div class="form-group <?php echo form_error('file_judul') ? 'error' : ''; ?>">
<?php echo form_label("Judul". lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="text" required name="file_judul" class="form-control" id="file_judul" value="<?php echo set_value("file_judul",isset($arsip->judul) ? $arsip->judul :'') ; ?>" />
<span class='hash-error'><?php echo form_error('file_judul'); ?></span>
</div>
</div>

<div class="form-group">
<label class="control-label">Kategori</label>
<div class="controls">
	<select name="file_kategori" required="required" class="form-control">
	<option value="">--Pilih Kategori--</option>
	<?php if($categories): ?>
		<?php foreach($categories as $categories_row): ?>
			
			<option value="<?php echo $categories_row->id;?>" <?php echo $categories_row->id==@$arsip->post_category?"selected":"";?>><?php echo $categories_row->kategori;?></option>

		<?php endforeach; ?>
	<?php endif; ?>
	</select>
</div>
</div>

<div class="form-group <?php echo form_error('file_isi_arsip') ? 'error' : ''; ?>">
<?php echo form_label('Keterangan '. lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
    <textarea required name="file_isi_arsip" style="height:200px;" class="form-control" id="file_isi_arsip"><?php echo set_value("file_isi_arsip",isset($arsip->isi_arsip) ? $arsip->isi_arsip :'') ; ?></textarea>
<span class='hash-error'><?php echo form_error('file_isi_arsip'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('userfile') ? 'error' : ''; ?>">
<?php echo form_label("File PDF". lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="file" id="file_attachment" <?php echo $this->uri->segment(4)=="edit"?"":"required";?> name="file_attachment"  />
<span class='hash-error'><?php echo form_error('userfile'); ?></span>
<br />

<?php if(@$arsip->file_data!=""): ?>
<p>

	<a target="_blank" href="<?php echo base_url();?>application/modules/arsip/files/<?php echo $arsip->file_data;?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</a>

</p>
<?php endif; ?>

</div>
</div>


<hr />

<div class="form-actions">
<input type="submit" name="save" id="save" class="btn btn-primary" value="Simpan"  />
<?php echo lang('bf_or'); ?>
<?php echo anchor(SITE_AREA .'/plugin/arsip', "Batal", 'class="btn btn-warning"'); ?>
</div>

<?php echo form_close();?>
</div>
