<div class="container">
<h2>Form Tanya Jawab</h2>
<hr />
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>



<div class="form-group <?php echo form_error('tanyajawab_email') ? 'error' : ''; ?>">
    <label for="tanyajawab_email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" required="required" class="form-control" value="<?php echo set_value("tanyajawab_email");?>" name="tanyajawab_email" id="tanyajawab_email" placeholder="Email">
    </div>
  </div>

  <div class="form-group <?php echo form_error('tanyajawab_nama_lengkap') ? 'error' : ''; ?>">
    <label for="tanyajawab_nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-5">
      <input type="text" required="required" class="form-control" name="tanyajawab_nama_lengkap" id="tanyajawab_nama_lengkap" placeholder="Nama Lengkap" value="<?php echo set_value("tanyajawab_nama_lengkap");?>">
    </div>
  </div>

    <div class="form-group <?php echo form_error('tanyajawab_link') ? 'error' : ''; ?>">
    <label for="tanyajawab_link" class="col-sm-2 control-label">Link Website</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tanyajawab_link" id="tanyajawab_link" placeholder="Link Website" value="<?php echo set_value("tanyajawab_link");?>">
    </div>
  </div>

   <div class="form-group <?php echo form_error('tanyajawab_alamat') ? 'error' : ''; ?>">
    <label for="tanyajawab_alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-5"><textarea required="required" class="form-control" placeholder="Alamat" name="tanyajawab_alamat" id="tanyajawab_alamat"><?php echo set_value("tanyajawab_alamat");?></textarea>
    </div>
  </div>

    <div class="form-group <?php echo form_error('tanyajawab_subjek') ? 'error' : ''; ?>">
    <label for="tanyajawab_subjek" class="col-sm-2 control-label">Subjek</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" required="required" name="tanyajawab_subjek" id="tanyajawab_subjek" placeholder="Subjek" value="<?php echo set_value("tanyajawab_subjek");?>">
    </div>
  </div>

   <div class="form-group <?php echo form_error('tanyajawab_pertanyaan') ? 'error' : ''; ?>">
    <label for="tanyajawab_pertanyaan" class="col-sm-2 control-label">Pertanyaan</label>
    <div class="col-sm-5"><textarea required="required" class="form-control" placeholder="Pertanyaan" name="tanyajawab_pertanyaan" id="tanyajawab_alamat" style="height:200px;"><?php echo set_value("tanyajawab_pertanyaan");?></textarea>
    </div>
  </div>

   <div class="form-group">
 <div class="col-sm-5 col-sm-offset-2">
      <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      Ketik Kode di Bawah :
      <?php echo $captchaHtml;  ?>
      <input type="text" class="form-control" required name="CaptchaCode" id="CaptchaCode" />  
</div>
</div>



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="save" class="btn btn-primary" value="Kirim"  />
				<?php echo anchor('tanyajawab', "Lembali", 'class="btn btn-warning"'); ?>
			
    </div>
  </div>


<?php echo form_close(); ?>
</div>