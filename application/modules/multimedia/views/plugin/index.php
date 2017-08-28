<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('video_judul_message');?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;


$can_delete	= $this->auth->has_permission('Multimedia.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Multimedia.Plugin.Edit');
$has_records	= isset($records) && is_array($records) && count($records);
$num_columns=4;
?>

<div class="alert alert-block alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo lang('video_judul_message');?>
</div>

<div class="admin-box">

<?php echo form_open($this->uri->uri_string()); ?>  
<table class="table table-striped"  id="datatable">
<thead>
  <tr>
  	  <?php if ($can_delete && $has_records) : ?>
	  <th class="column-check"><input class="check-all" type="checkbox" /></th>
	  <?php endif;?>		
	  <th><?php echo lang('video_form_field_judul');?></th>
	  <th><?php echo lang('video_form_field_linkimage');?></th>
	  <th><?php echo lang('video_form_field_category');?></th>
  </tr>
</thead>
<tbody>

<?php 
if($has_records){
	foreach($records as $record){
	$publis=$record->flag==0?"style='color:red'":"";
?>
								  
<tr <?php echo $publis;?>>
<?php if ($can_delete) : ?>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id ?>" /></td>
<?php endif;?>
 <td>
<a <?php echo $publis;?> href="<?php echo site_url('admin/plugin/multimedia/edit/'.$record->id);?>">
<strong><?php echo word_limiter($record->judul_multimedia_bahasa,4);?></strong></a>
</td>
<td><img src="<?php echo $record->gambar_multimedia;?>" style="width:150px;"></td>
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
        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('video_delete_confirm'))); ?>')" />
    	      <input type="submit" name="publish" id="headline" class="btn btn-success tooltips" data-toggle="tooltip" title="Digunakan untuk set status publish" value="Publish" />
			 <input type="submit" name="unpublish" id="headline" class="btn btn-danger tooltips" data-toggle="tooltip" title="Digunakan untuk set status unpublish" value="Unpublish" />
					    		    
	</td>
</tr>
<?php endif; ?>
</tfoot>	
</table>  
<?php echo form_close(); ?>                                       
</div>                                      
						  
                                    				
                                   
					
 

 