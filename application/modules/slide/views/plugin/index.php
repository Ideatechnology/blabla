<?php

$validation_errors = validation_errors();

echo $this->session->set_userdata("upload_session_image");
if ($validation_errors) :
?>
<div class="alert alert-block alert-danger fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('slide_judul_message'); ?></h4>
	<?php echo $validation_errors; ?>
	
</div>
<?php
endif;

$num_columns	= 3;
$can_delete	= $this->auth->has_permission('Slide.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Slide.Plugin.Edit');
$has_records	= isset($ListView) && is_array($ListView) && count($ListView);

?>
<div class="admin-box">
<h3><?php echo lang("slide_manage");?></h3>

<?php echo form_open($this->uri->uri_string()); ?>      
<table class="table table-striped" id="datatable">
<thead>
<tr>
    <?php if ($can_delete && $has_records) : ?>
	<th class="column-check"><input class="check-all" type="checkbox" /></th>
	<?php endif;?>
	<th><?php echo lang("slide_form_title_slides")?></th>
	<th><?php echo lang("slide_form_link_slide")?></th>
	<th><?php echo lang("slide_form_image")?></th>
	
</tr>
</thead>
<tbody>
                                
<?php
if($has_records){
	foreach($ListView as $list){
	$stat=$list->deleted==0?"<span class='label label-success'>Publis</span>'":"<span class='label label-danger'>Unpublish</span>";
?>								      
<tr >
<?php if ($can_delete) : ?>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $list->id; ?>" /></td>
<?php endif;?>
<td><a href="<?php echo site_url(SITE_AREA.'/plugin/slide/edit/'.$list->id);?>"><?php echo $list->title;?></a>
<br /><?php echo $stat;?>
</td>
<td><?php echo character_limiter($list->link,10);?></td>
<td><?php echo img(array($path_file.$list->file,"style"=>'width:200px;')); ?></td>
</tr>
<?php 
    }
}
?>					
</tbody>
<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('slide_delete_confirm'))); ?>')" />
							  <input type="submit" name="publish" id="headline" class="btn btn-success tooltips" data-toggle="tooltip" title="Digunakan untuk set status publish" value="Publish" onclick="return confirm('<?php e(js_escape("apakah yakin akan dipublish ?")); ?>')" />
			 <input type="submit" name="unpublish" id="headline" class="btn btn-danger tooltips" data-toggle="tooltip" title="Digunakan untuk set status unpublish" value="Unpublish" onclick="return confirm('<?php e(js_escape("apakah yakin akan diunpublish ?")); ?>')" />
	
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
<?php endif; ?>
</table>

<?php echo form_close(); ?>
</div> 


