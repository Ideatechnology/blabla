<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Polling</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;


$can_delete	= $this->auth->has_permission('Polling.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Polling.Plugin.Edit');
$has_records	= isset($records) && is_array($records) && count($records);
$num_columns=4;
?>


<div class="admin-box">
<h3><?php echo lang('polling_judul_table');?></h3>

<?php echo form_open($this->uri->uri_string()); ?>  
<table class="table table-striped"  id="datatable">
<thead>
<tr>
<?php if ($can_delete && $has_records) : ?>
<th class="column-check"><input class="check-all" type="checkbox" /></th>
<?php endif;?>		
<th><?php echo lang('polling_form_field_judul');?></th>
<th>Action</th>

</tr>
</thead>
<tbody>

<?php
if($has_records){
	foreach($records as $record){
		if($record->flag_polling==0){
			$status="<span class='label label-danger'>Not Publish</span>";	
		}else{
			$status="<span class='label label-success'>Publish</span>";
		}
?>
								
<tr>
<?php if ($can_delete) : ?>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
<?php endif;?>
<td><a href="<?php echo site_url(SITE_AREA.'/plugin/polling/edit/'.$record->id);?>"><strong><?php echo $record->judul_polling_bahasa;?></strong></a>
<p>
<?php echo $status;?>
</p>
</td>
<td>
<a href="<?php echo site_url("admin/plugin/polling/publish/".$record->id);?>" onclick="return confirm('Apakah yakin akan dipublish')" class="btn btn-success btn-sm">Publish</a>
</td>


</tr>
                                    
<?php
	  }
  }
?>			
</tbody>

 </table>
 

<?php if ($can_delete) : ?>

        <?php echo lang('bf_with_selected'); ?>
        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(lang('polling_delete_confirm')); ?>')" />
        
        
 
<?php endif; ?>

 
 <?php echo form_close(); ?>
</div> 