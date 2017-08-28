<?php
if (isset($video))
{
	$video = (array) $video;
}
$id = isset($video['id']) ? $video['id'] : '';
?>
<div class="admin-box">

<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-vertical"'); ?>

<div class="form-group <?php echo form_error('video_category') ? 'error' : ''; ?>">
  <?php echo form_label(lang('video_form_field_category').lang('bf_form_label_required'), 'video_form_field_category', array('class' => 'control-label') ); ?>
  <div class='controls'>
      <select name="video_category" data-val="true" class="form-control" data-val-required="<?php echo lang('bf_required_note').lang('video_form_field_category');?>">
		  <option value=""><?php echo lang('select_video');?> </option>
          <?php if($categories){ ?>
          <?php foreach( $categories as $rows): ?>
              <option value="<?php echo $rows->id;?>" <?php echo (isset($video["multimedia_category"]) && $video["multimedia_category"] == $rows->id ? 'selected' : '');?>>
              <?php echo $rows->kategori;?>
              </option>
          <?php endforeach; ?>
          <?php } ?>
      </select>
         <span class="field-validation-valid text-error" data-valmsg-for="video_category" data-valmsg-replace="true"></span>
 <span class='help-inline'><?php echo form_error('video_category'); ?></span>
  </div>
</div>


<div class="form-group <?php echo form_error('video_judul') ? 'error' : ''; ?>">
  <?php echo form_label(lang('video_form_field_judul')."  ".lang('bf_form_label_required'), 'video_form_field_judul', array('class' => 'control-label') ); ?>
  <div class='controls'>
      <input type="text" name="video_judul" class="form-control" id="video_judul" value="<?php echo isset($video["judul"]) ? $video["judul"] :'' ; ?>" />
  	   <span class='help-inline'><?php echo form_error('video_judul'); ?></span>
  </div>
</div>



<div class="form-group <?php echo form_error('video_deskripsi') ? 'error' : ''; ?>">
  <?php echo form_label(lang('video_form_field_keterangan')."  ", 'video_form_field_keterangan', array('class' => 'control-label') ); ?>
  <div class='controls'>
      <textarea id="editor1" cols="" class="form-control" rows="" name="video_deskripsi"><?php echo isset($video["isi"]) ? $video["isi"] : ''?></textarea>
      <span class='help-inline'><?php echo form_error('video_deskripsi'); ?></span>
  </div>
</div>



<div class="form-group <?php echo form_error('video_embedyoutube') ? 'error' : ''; ?>">
  <?php echo form_label(lang('video_form_field_embed').lang('bf_form_label_required'), 'video_form_field_embed', array('class' => 'control-label') ); ?>
  <div class='controls'>
      <input type="text" class="form-control" name="video_embedyoutube" value="<?php echo isset($video["file_multimedia"]) ? $video["file_multimedia"] : ''?>" class="span10">
<span class='help-inline'><?php echo form_error('video_embedyoutube'); ?></span>
<span class='help-inline'><?php echo lang('video_form_field_embed_desc'); ?></span>
  </div>
</div>

<div class="form-group <?php echo form_error('video_linkimage') ? 'error' : ''; ?>">
  <?php echo form_label(lang('video_form_field_linkimage').lang('bf_form_label_required'), 'video_form_linkimage', array('class' => 'control-label') ); ?>
  <div class='controls'>
     <input type="text" name="video_linkimage" class="form-control" value="<?php echo isset($video["gambar_multimedia"]) ? $video["gambar_multimedia"] : ''?>" class="span10">
 <span class='help-inline'><?php echo form_error('video_linkimage'); ?></span>
 <span class='help-inline'><?php echo lang('video_linkimage_desc'); ?></span>
  </div>
</div>


<div class="form-group">
  <input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('video_action_edit') ; ?>"  />
  <?php echo lang('bf_or'); ?>
  <?php echo anchor(SITE_AREA .'/plugin/multimedia', lang('video_cancel'), 'class="btn btn-warning"'); ?>
</div> 

<?php echo form_close();?> 
</div>


