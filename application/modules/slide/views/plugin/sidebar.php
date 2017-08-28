
<div class="admin-box">

<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-vertical"'); ?>
 
<h3><?php echo lang("slide_judul_form");?></h3>

<div class="form-group <?php echo form_error('slide_title') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_title_slides'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="text" required name="slide_title" class="form-control" id="slide_title" value="<?php echo set_value("slide_title",isset($value->title) ? $value->title :'') ; ?>" />
<span class='hash-error'><?php echo form_error('slide_title'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('slide_link') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_link_slide'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="text" required name="slide_link" class="form-control" id="slide_link_slide" value="<?php echo set_value("slide_link",isset($value->link) ? $value->link :'') ; ?>" />
<span class='hash-error'><?php echo form_error('slide_link'); ?></span>
</div>
</div>


<div class="form-group <?php echo form_error('slide_keterangan') ? 'error' : ''; ?>">
<?php echo form_label('Keterangan '. lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
    <textarea  name="slide_keterangan" class="form-control" id="slide_keterangan"><?php echo set_value("slide_keterangan",isset($value->keterangan) ? $value->keterangan :'') ; ?></textarea>
<span class='hash-error'><?php echo form_error('slide_keterangan'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('userfile') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_image'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="file" id="fileslide" <?php echo $this->uri->segment(4)=="edit"?"":"required";?> name="userfile" accept="image/*" />
<span class='hash-error'><?php echo form_error('userfile'); ?></span>
<span class='help-block'><?php echo lang('slide_form_image_desc'); ?></span>
<br />
<?php echo isset($value->file_slide) ? img(array($path_file.$value->file,"width"=>"200px")) : ''?>
</div>
</div>

<div class="form-actions">
<input type="submit" name="save" id="save" class="btn btn-primary" value="<?php echo lang('slide_action_edit'); ?>"  />
<?php echo lang('bf_or'); ?>
<?php echo anchor(SITE_AREA .'/plugin/slide', lang('slide_cancel'), 'class="btn btn-warning"'); ?>    
</div>

<?php echo form_close();?>
</div>
 
 
