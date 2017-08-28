<?php

$validation_errors = validation_errors();

echo $this->session->set_userdata("upload_session_image");


echo $this->session->userdata("message_succes_file");


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
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">


<?php echo form_open($this->uri->uri_string(),"method='get'"); ?>

<select name="kategori" class="form-control">
	<option value="">--Pilih Kategori--</option>
	<?php if($categories): ?>
	<?php foreach($categories as $categories_row): ?>
	<option value="<?php echo $categories_row->id;?>" <?php echo $this->input->get("kategori")==$categories_row->id?"selected":"";?>><?php echo $categories_row->kategori;?></option>
<?php endforeach; ?>
<?php endif; ?>
</select>
<br />
<input type="submit" name="cari" value="cari" class="btn btn-primary">
<?php echo form_close(); ?>

<?php echo form_open($this->uri->uri_string()); ?>
<table class="table table-striped table-bordered" id="datatable">
<thead>
<tr>
    <?php if ($has_records) : ?>
	<th class="column-check"><input class="check-all" type="checkbox" /></th>
	<?php endif;?>
	<th>Judul</th>
	<th>File</th>
</tr>
</thead>
<tbody>

<?php
if($has_records){
	foreach($records as $list){

?>
<tr >
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $list->id; ?>" /></td>
<td><a href="<?php echo site_url(SITE_AREA.'/plugin/arsip/edit/'.$list->id);?>"><?php echo $list->judul;?></a>
</td>
<td><a href="<?php echo "http://www.kemendagri.go.id/media/".$list->filepath;?>" class="btn btn-primary">Download</a></td>
</tr>
<?php
    }
}
?>
</tbody>
<?php if ($has_records) : ?>
			<tfoot>
			
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('slide_delete_confirm'))); ?>')" />
					
					</td>
				</tr>
				
			</tfoot>
<?php endif; ?>
</table>

<?php echo form_close(); ?>
</div>
