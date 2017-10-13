
<div class="admin-box">

<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-vertical"'); ?>
 
<h3><?php echo lang("slide_judul_form");?></h3>

<div class="form-group <?php echo form_error('title') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_title_slides'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="text" required name="title" class="form-control" id="title" value="<?php echo set_value("title",isset($value->title) ? $value->title :'') ; ?>" />
<span class='hash-error'><?php echo form_error('title'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('link') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_link_slide'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="text" required name="link" class="form-control" id="link" value="<?php echo set_value("link",isset($value->link) ? $value->link :'') ; ?>" />
<span class='hash-error'><?php echo form_error('link'); ?></span>
</div>
</div>

<div class="form-group">
<?php echo form_label("Tipe","",array("class"=>"control-label")); ?>
<div class="controls">
	<select name="tipe" required="required" class="form-control">
		<option value="">--Pilih Tipe--</option>
		<?php 
			$tipe_data = array(1=>"Banner Link",2=>"Iklan");
			foreach($tipe_data as $tipe_data_value): ?>
		
			<option value="<?php echo $tipe_data_value;?>" <?php echo @$value->tipe==$tipe_data_value?"selected":"";?>><?php echo $tipe_data_value;?></option>
		<?php
			endforeach;
		 ?> 
	</select>
</div>
</div>

<div class="form-group <?php echo form_error('keterangan') ? 'error' : ''; ?>">
<?php echo form_label('Keterangan '. lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
    <textarea  name="keterangan" class="form-control" id="slide_keterangan"><?php echo set_value("keterangan",isset($value->keterangan) ? $value->keterangan :'') ; ?></textarea>
<span class='hash-error'><?php echo form_error('keterangan'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('userfile') ? 'error' : ''; ?>">
<?php echo form_label(lang('slide_form_image'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
<div class='controls'>
<input type="file" id="fileslide" <?php echo $this->uri->segment(4)=="edit"?"":"";?> name="userfile" accept="image/*" />
<span class='hash-error'><?php echo form_error('userfile'); ?></span>
<span class='help-block'><?php echo lang('slide_form_image_desc'); ?></span>
<br />
<?php echo isset($value->file_slide) ? img(array($path_file.$value->file,"width"=>"200px")) : ''?>
</div>
</div>

<div class="form-actions">
<input type="submit" name="save" id="save" class="btn btn-primary" value="<?php echo lang('slide_action_edit'); ?>"  />
<?php echo lang('bf_or'); ?>
<?php echo anchor(SITE_AREA .'/plugin/link', lang('slide_cancel'), 'class="btn btn-warning"'); ?>    
</div>

<?php echo form_close();?>
</div>
 
 
