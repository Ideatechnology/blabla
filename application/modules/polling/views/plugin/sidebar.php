<?php
if (isset($polling))
{
	$polling = (array) $polling;
}
$id = isset($polling['id']) ? $polling['id'] : '';
?>

<div class="admin-box">
 
<h3><?php echo lang('polling_judul_form');?></h3>
 
<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>


<div class="control-group <?php echo form_error('polling_judul') ? 'error' : ''; ?>">
  <?php echo form_label(lang('polling_form_field_judul')." [ ".lang('bf_lang_indonesia')." ] ". lang('bf_form_label_required'), 'form_field_judul', array('class' => 'control-label') ); ?>
  <div class='controls'>
	<textarea name="polling_judul" class="form-control" id="polling_judul"><?php echo set_value('polling_judul', isset($polling["judul"]) ? $polling["judul"] : ''); ?></textarea>
          <span class="help-block"><?php echo lang("polling_form_field_judul_desc");?></span>
      <span class='help-inline'><?php echo form_error('polling_judul'); ?></span>
    
  </div>
</div>  






<h3><?php echo lang("polling_judul_jawaban");?></h3>
   

<div class="control-group <?php echo form_error('polling_jawab1') ? 'error' : ''; ?>">
  <?php echo form_label("a.".lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
  <div class='controls'>

<input type="text" name="polling_jawab1" class="form-control" id="polling_jawab1" value="<?php echo set_value('polling_jawab1', isset($polling["jawab1"]) ? $polling["jawab1"] : ''); ?>"  placeholder="<?php echo lang("polling_form_field_jawab1")." ".lang('bf_lang_indonesia');?>"/>
   <span class='help-inline'><?php echo form_error('polling_jawab1'); ?></span>
  </div>
</div>    

<div class="control-group <?php echo form_error('polling_jawab2') ? 'error' : ''; ?>">
  <?php echo form_label("b.".lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
  <div class='controls'>
<input type="text" name="polling_jawab2" id="jawab2" value="<?php echo set_value('polling_jawab2', isset($polling["jawab2"]) ? $polling["jawab2"] : ''); ?>"   placeholder="<?php echo lang("polling_form_field_jawab2")." ".lang('bf_lang_indonesia');?>" class="form-control" />
  <span class='help-inline'><?php echo form_error('polling_jawab2'); ?></span>
  </div>
</div>    
    

<div class="control-group <?php echo form_error('polling_form_field_tgl_batas_polling') ? 'error' : ''; ?>">
  <?php echo form_label("c.".lang('bf_form_label_required'), 'polling_form_field_tgl_batas_polling', array('class' => 'control-label') ); ?>
  <div class='controls'>
<input type="text" name="polling_jawab3" id="jawab3" class="form-control" value="<?php echo set_value('polling_jawab3', isset($polling["jawab3"]) ? $polling["jawab3"] : ''); ?>"  placeholder="<?php echo lang("polling_form_field_jawab3")." ".lang('bf_lang_indonesia');?>"/>
 <span class='help-inline'><?php echo form_error('polling_jawab3'); ?></span>
  </div>
</div>    
    

<div class="control-group <?php echo form_error('polling_form_field_tgl_batas_polling') ? 'error' : ''; ?>">
  <?php echo form_label("d.".lang('bf_form_label_required'), 'polling_form_field_tgl_batas_polling', array('class' => 'control-label') ); ?>
  <div class='controls'>
<input type="text" name="polling_jawab4" id="jawab4" class="form-control" value="<?php echo set_value('polling_jawab4', isset($polling["jawab4"]) ? $polling["jawab4"] : ''); ?>"   placeholder="<?php echo lang("polling_form_field_jawab4")." ".lang('bf_lang_indonesia');?>"/>
<span class='help-inline'><?php echo form_error('polling_jawab4'); ?></span>
  </div>
</div>    
    


<div class="control-group <?php echo form_error('polling_form_field_tgl_batas_polling') ? 'error' : ''; ?>">
  <?php echo form_label("e.".lang('bf_form_label_required'), 'polling_form_field_tgl_batas_polling', array('class' => 'control-label') ); ?>
  <div class='controls'>
<input type="text" name="polling_jawab5" id="jawab5" class="form-control" value="<?php echo set_value('polling_jawab5', isset($polling["jawab5"]) ? $polling["jawab5"] : ''); ?>"   placeholder="<?php echo lang("polling_form_field_jawab5")." ".lang('bf_lang_indonesia');?>"/></td><br />
 <span class='help-inline'><?php echo form_error('polling_jawab5'); ?></span>
  </div>
</div>    
    
    <br />
    
<div class="form-actions">
  <input type="submit" name="save" class="btn btn-primary" value="<?php echo isset($polling["id"]) ? lang('polling_action_create') :lang('polling_action_edit') ; ?>"  />
  <?php echo lang('bf_or'); ?>
  <?php echo anchor(SITE_AREA .'/plugin/polling', lang('polling_cancel'), 'class="btn btn-warning"'); ?>
  
</div> 
 <?php echo form_close(); ?>
</div>