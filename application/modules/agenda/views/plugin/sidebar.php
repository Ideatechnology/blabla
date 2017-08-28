<?php
if (isset($agenda))
{
	$agenda = (array) $agenda;
}
$id = isset($agenda['id']) ? $agenda['id'] : '';
?>
<div class="admin-box">
 <h3>Form Input</h3>
 
 <?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
 
<div class="control-group <?php echo form_error('agenda_post_category') ? 'error' : ''; ?>">
  <?php echo form_label(lang('form_field_kategori'). lang('bf_form_label_required'), 'post_category', array('class' => 'control-label') ); ?>
  <div class='controls'>
		<select name="agenda_post_category" class="form-control">
         <option value=""><?php echo lang('select_kategori');?></option>
         <?php
		    if($categories){
				foreach( $categories as $rows):
		  ?>
         <option value="<?php echo $rows->id;?>" <?php echo (isset($agenda["post_category"]) && $agenda["post_category"] || @$_POST["agenda_post_category"] == $rows->id ? 'selected' : '');?>><?php echo $rows->kategori;?></option>
         <?php
			endforeach;
			}
		  ?>
       </select>     
      <span class='help-inline'><?php echo form_error('agenda_post_category'); ?></span>
  </div>
</div>


<div class="control-group <?php echo form_error('agenda_judul_agenda') ? 'error' : ''; ?>">
  <?php echo form_label(lang('form_field_judul')." [ ".lang('bf_lang_indonesia')." ] ". lang('bf_form_label_required'), 'agenda_judul_agenda', array('class' => 'control-label') ); ?>
  <div class='controls'>
	<input type="text" class="form-control" name="agenda_judul_agenda" id="agenda_judul_agenda" value="<?php echo set_value('agenda_judul_agenda', isset($agenda["judul_agenda"]) ? $agenda["judul_agenda"] : ''); ?>" />
         <span class="help-block"><em><?php echo lang('form_field_judul_desc');?></em></span>
      <span class='help-inline'><?php echo form_error('agenda_judul_agenda'); ?></span>
  </div>
</div>

<div class="control-group <?php echo form_error('agenda_judul_agenda_english') ? 'error' : ''; ?>">
  <?php echo form_label(lang('form_field_judul_english')." [ ".lang('bf_lang_english')." ] ", 'agenda_judul_agenda_english', array('class' => 'control-label') ); ?>
  <div class='controls'>
	<input type="text" class="form-control" name="agenda_judul_agenda_english" id="agenda_judul_agenda_english" value="<?php echo set_value('agenda_judul_agenda_english', isset($agenda["judul_agenda_english"]) ? $agenda["judul_agenda_english"] : ''); ?>" />
      <span class="help-block"><em><?php echo lang('form_field_judul_desc');?></em></span>
      <span class='help-inline'><?php echo form_error('agenda_judul_agenda_english'); ?></span>
       
  </div>
</div>


<div class="control-group <?php echo form_error('agenda_tgl_agenda') ? 'error' : ''; ?>">
  <?php echo form_label(lang('form_field_tanggal').lang('bf_form_label_required'), 'agenda_tgl_agenda', array('class' => 'control-label') ); ?>
  <div class='controls'>
	   <input type="text" name="agenda_tgl_agenda" id="tgl_agenda" class="agenda_date form-control" value="<?php echo set_value('agenda_tgl_agenda', isset($agenda["tgl_agenda"]) ? $agenda["tgl_agenda"] : ''); ?>" />
      <span class='help-inline'><?php echo form_error('agenda_tgl_agenda'); ?></span>
       <span class="help-block"><em><?php echo lang('form_field_tanggal_desc');?></em></span>
  </div>
</div>


<div class="control-group <?php echo form_error('agenda_time_start') && form_error('agenda_time_ends') ? 'error' : ''; ?>">
  <?php echo form_label(lang('form_field_time'). lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
  <div class='controls'>
<div class="row">	  
	  <div class="col-xs-6">
	  <input type="text" name="agenda_time_start" class="form-control" id="agenda_time_start" value="<?php echo set_value('agenda_time_start', isset($agenda["time_start"]) ? $agenda["time_start"] : ''); ?>"  />
       
		</div>
<div class="col-xs-6">
	        
	  <input type="text" name="agenda_time_ends" id="agenda_time_ends" class="form-control" value="<?php echo set_value('agenda_time_ends', isset($agenda["time_ends"]) ? $agenda["time_ends"] : ''); ?>" />
</div>    
</div>  
	  <span class='help-inline'><?php echo form_error('agenda_time_start'); ?> <?php echo form_error('agenda_time_ends'); ?></span>
       <span class="help-block"><em><?php echo lang('form_field_time_desc');?></em></span>
  
  </div>
</div>


<div class="control-group">
  <div class='controls'>
	  <textarea id="wysiwyg" cols="" rows="" name="agenda_isi_agenda"><?php echo set_value('agenda_isi_agenda', isset($agenda["isi_agenda"]) ? $agenda["isi_agenda"] : ''); ?></textarea>
  	  <span class="help-block"><em><?php echo lang('form_field_desc')." [ ".lang('bf_lang_indonesia')." ] ";?></em></span>
  </div>
</div> 

<div class="control-group">
  <div class='controls'>
	  <textarea id="wysiwyg_english" cols="" rows="" name="agenda_isi_agenda_english"><?php echo set_value('agenda_isi_agenda_english', isset($agenda["isi_agenda_english"]) ? $agenda["isi_agenda_english"] : ''); ?></textarea>
  	  <span class="help-block"><em><?php echo lang('form_field_desc_english')." [ ".lang('bf_lang_english')." ] ";?></em></span>
  </div>
</div> 

<div class="control-group <?php echo form_error('penanggung_jawab') && form_error('penganggung_jawab') ? 'error' : ''; ?>">
  <?php echo form_label("Penanggung Jawab". lang('bf_form_label_required'), '', array('class' => 'control-label') ); ?>
  <div class='controls'>
	   <input type="text" name="penanggung_jawab" class="form-control" id="" value="<?php echo set_value('penanggung_jawab', isset($agenda["penanggung_jawab"]) ? $agenda["penanggung_jawab"] : ''); ?>"  />
   </div>
</div>
<br />
    
<div class="form-actions">
  <input type="submit" name="save" class="btn btn-primary" value="<?php echo isset($arsip["id"]) ? lang('agenda_action_create') :lang('agenda_action_edit') ; ?>"  />
  <?php echo lang('bf_or'); ?>
  <?php echo anchor(SITE_AREA .'/plugin/agenda', lang('agenda_cancel'), 'class="btn btn-warning"'); ?>
  
</div> 

 
 <?php echo form_close();?>
   
 </div>


 