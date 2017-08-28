
<?php

$num_columns	= 8;
$can_delete	= $this->auth->has_permission('Post.Content.Delete');
$can_edit		= $this->auth->has_permission('Post.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	 <?php echo form_open($this->uri->uri_string(),array("id"=>"formfilter","name"=>"formfilter")); ?>    	
     Filter Kategori :  <select name="kategori"  onchange="document.getElementById('formfilter').submit();">
                    	<option value="">Pilih Kategori</option>
                        <?php foreach($kategori as $row_kategori): ?>
                        <option value="<?php echo $row_kategori->id;?>" 
						<?php echo ($row_kategori->id==@$_POST["kategori"])?"selected":"";?>>
						<?php echo $row_kategori->kategori;?>
                        </option>
                        <?php endforeach; ?>
                    </select>
      <?php echo form_close(); ?>
        
       <?php echo form_open($this->uri->uri_string()); ?>            
		<table class="table table-striped" id="datatable">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Judul</th>
					<th>Post Category</th>
					<th>Author</th>
					<th>Status</th>
                    <th>Comment</th>
					<th>Modified On</th>
					<th>Created On</th>
					</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('post_delete_confirm'))); ?>')" />
                        <input type="submit" name="publish" id="publus-me" class="btn btn-success" value="Restore" onclick="return confirm('Yakin akan direstore ? ')" />
					                    
                    </td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/post/edit/' . $record->id, '<span class="icon-pencil"></span>' .  word_limiter($record->judul,3)); ?></td>
				<?php else : ?>
					<td><?php e(word_limiter($record->judul,3)); ?></td>
				<?php endif; ?>
					<td><?php e($this->kategori_model->find_by('id', $record->post_category)->kategori) ?></td>
					
					<td><?php e($record->author) ?></td>
					<td><?php e(($record->status_tampil==1)?"Draft":"Publish") ?></td>
                    <td class="text-center">
                    <?php echo anchor(SITE_AREA . '/content/post/comment/'.$record->id,
					jumlah_komentar($record->id)); ?>
                    </td>
					<td><?php e($record->modified_on) ?></td>
					<td><?php e($record->created_on) ?></td>
						</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
  

</div>



