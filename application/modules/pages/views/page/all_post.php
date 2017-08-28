<?php
$num_columns	= 6;
?>  
<div class="admin-box">
<?php echo form_open($this->uri->uri_string(),array("id"=>"formfilter","name"=>"formfilter")); ?>     
<table class="table table-striped table-bordered"  id="datatable">
    <thead>
    <tr>
    <th class="column-check"><input class="check-all" type="checkbox" /></th>
    <th><?php echo lang('page_form_judul');?></th>
    <th><?php echo lang('page_form_author');?></th>
    <th><?php echo lang('page_form_status');?></th>
    <th><?php echo lang('page_form_modified_on');?></th>
    <th><?php echo lang('page_form_created_on');?></th>
    </tr>
    </thead>
<tbody>

<?php 
if($listView){
  foreach($listView as $list){
?>
                              
<tr>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $list->id; ?>" /></td>
            
<td>
<div class="navigated" style=" height:25px;">
<a href="<?php echo site_url(SITE_AREA .'/content/pages/edit/'.$list->id);?>">
<strong><?php echo $list->judul;?></strong></a>
</div>
</td>
<td><?php echo $list->author;?></td>
<td style="font-weight:bold;">
<?php echo $list->status_tampil==0 ? 'Publish' : '';?>
<span style="color:#C30;">
<?php echo $list->status_tampil==1 ? 'As Draft' : '';?>
</span>
</td>
<td><?php echo $list->created_on;?></td>
<td><?php echo $list->modified_on;?></td>
</tr>
                            
<?php
}
}
?>					
</tbody>
<tfoot>
<tr>
<td colspan="<?php echo $num_columns; ?>">
<?php echo lang('bf_with_selected'); ?>

<?php if($this->uri->segment(5) == 'trash'):?>
<input type="submit" name="restore" id="retore-me" class="btn btn-success" value="<?php echo lang("page_column_restore");?>" onclick="return confirm('<?php e(js_escape(lang("page_delete_restore"))); ?>')" />
<input type="submit" name="deletepermanent" id="deletepermanent-me" class="btn btn-danger" value="<?php echo lang("page_column_deleted_permanent");?>" onclick="return confirm('<?php e(js_escape(lang("page_delete_permanent_confirm"))); ?>')" />
<?php else: ?>
<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang("page_column_deleted");?>" onclick="return confirm('<?php e(js_escape(lang("page_delete_confirm"))); ?>')" />
<?php endif;?>

</td>
</tr> 
</tfoot>
</table>
<?php echo form_close();?>
</div>


     