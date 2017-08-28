<?php echo form_open($this->uri->uri_string()); ?> 
<div class="alert alert-info">Modul ini digunakan untuk mengaktifkan dan menonaktifkan pengumuman di halaman depan.
</div>

	<div class="control-group <?php echo form_error('polling_judul') ? 'error' : ''; ?>">
  <?php echo form_label("Status Pengumuman". lang('bf_form_label_required'), 'form_field_judul', array('class' => 'control-label') ); ?>
  <div class='controls'>
			
  			<select class="form-control" name="status_pengumuman" style="width:25%">
  				<option value="aktif" <?php if(settings_item('site.setPengumuman')=="aktif")echo "selected";?>>Aktifkan</option>
  				<option value="nonaktif" <?php if(settings_item('site.setPengumuman')=="nonaktif")echo "selected";?>>Nonaktifkan</option>

  			</select>

        <span class='help-inline'>Pilih untuk mengaktifkan dan menonaktifkan</span>
    
  </div>
</div> 
<hr />
 <input type="submit" name="simpan" id="delete-me" class="btn btn-danger" value="Simpan"  />
       

<?php echo form_close(); ?>