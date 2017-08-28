<div class="admin-box">

<h3><?php echo lang("galeri_judul_form")?></h3>

<?php echo form_open_multipart($this->uri->uri_string()."?kategori=".$this->input->get("kategori"), 'class="form-vertical"'); ?>

<div class="control-group <?php echo form_error('galeri_id_album') ? 'error' : ''; ?>">
<?php echo form_label(lang('galeri_form_id_album'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<select name="galeri_id_album" class="form-control">
   <option value=""></option>
    <?php if($categories){ ?>
	<?php foreach( $categories as $rows): ?>
       <option value="<?php echo $rows->id;?>" <?php echo (isset($value->id_album) && $value->id_album == $rows->id || @$_POST["galeri_id_album"]==$rows->id ? 'selected' : '');?>><?php echo $rows->kategori;?></option>
    <?php endforeach; ?>
	<?php } ?>
    </select>
     <span class='help-inline'><?php echo form_error('galeri_id_album'); ?></span>
	</div>
</div>
   
<div class="control-group <?php echo form_error('galeri_title_foto') ? 'error' : ''; ?>">
	<?php echo form_label(lang('galeri_form_judul')."  ". lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
	<div class='controls'>
	  <input type="text" name="galeri_title_foto" class="form-control" id="galeri_title_foto" value="<?php echo set_value("galeri_title_foto",isset($value->title_foto) ? $value->title_foto :'') ; ?>" />
      <span class='help-inline'><?php echo form_error('galeri_title_foto'); ?></span>
	</div>
</div>



<div class="control-group <?php echo form_error('galeri_isi_desc') ? 'error' : ''; ?>">
	<?php echo form_label(lang('galeri_form_deskripsi')."  ", '', array('class' => 'control-label') ); ?>
	<div class='controls'>
	  <textarea id="wysiwyg" cols="" rows="" name="galeri_isi_desc"><?php echo set_value("galeri_isi_desc",isset($value->isi_desc) ? $value->isi_desc : '')?></textarea>
      <span class='help-inline'><?php echo form_error('galeri_isi_desc'); ?></span>
	</div>
</div> 


        
<div class="control-group <?php echo form_error('userfile') ? 'error' : ''; ?>">
	<?php echo form_label(lang('galeri_form_foto'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
	<div class='controls'>
	  <input type="file" name="userfile" id="photogallery" onchange="return ValidateFileUpload2()" /> 
      <span class='help-inline'><?php echo form_error('userfile'); ?></span>
      <span class='help-inline'><?php echo lang('galeri_form_foto_desc'); ?></span>
    <p>        
    <?php 
    if(isset($value->file_foto)){
	    $img=explode(".",$value->file_foto);
	    echo ($value->file_foto!="")?img(array("src"=>$path_image.$img[0].".".$img[1],"style"=>"width:200px;")):""; 
    }
    ?>
    </p>
	</div>
</div>        
  
<div class="form-actions">
<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('galeri_action_edit'); ?>"  />
<?php echo lang('bf_or'); ?>
<?php echo anchor(SITE_AREA .'/plugin/galerifoto?kategori='.$this->input->get("kategori"), "Kembali", 'class="btn btn-warning"'); ?>
</div>
<?php echo form_close();?>
</div>