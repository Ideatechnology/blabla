<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('agenda_judul_message');?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;


$can_delete	= $this->auth->has_permission('Agenda.Content.Delete');
$can_edit		= $this->auth->has_permission('Agenda.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);
$num_columns=5;
?>


<div class="admin-box">
<h3>Agenda</h3>

<?php echo form_open($this->uri->uri_string()); ?>  
<table class="table table-striped"  id="datatable">
<thead>
<tr>
<?php if ($can_delete && $has_records) : ?>
<th class="column-check"><input class="check-all" type="checkbox" /></th>
<?php endif;?>		
<th><?php echo lang('form_field_judul');?></th>
<th><?php echo lang('form_field_time');?></th>
<th><?php echo lang('form_field_tanggal');?></th>
<th><?php echo lang('form_field_kategori');?></th>
</tr>
</thead>
<tbody>

<?php
if($has_records){
	foreach($records as $record){
?>
								
<tr>
<?php if ($can_delete) : ?>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
<?php endif;?>
<td><a href="<?php echo site_url(SITE_AREA.'/plugin/agenda/edit/'.$record->id);?>"><strong><?php echo $record->judul_agenda_bahasa;?></strong></a></td>
<td><?php echo $record->time_start.' - '.$record->time_ends;?></td>
<td><?php echo date("d M Y", strtotime($record->tgl_agenda));?></td>
<td><?php echo $record->kategori_bahasa;?></td>
</tr>
                                    
<?php
	  }
  }
?>			
</tbody>
<tfoot>
<?php if ($can_delete) : ?>
<tr>
    <td colspan="<?php echo $num_columns; ?>">
        <?php echo lang('bf_with_selected'); ?>
        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('agenda_delete_confirm'))); ?>')" />
    </td>
</tr>
<?php endif; ?>
</tfoot>
 </table>
 <?php echo form_close(); ?>
</div> 