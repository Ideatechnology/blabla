<?php

$num_columns	= 4;
$can_delete	= $this->auth->has_permission('Kategori.Content.Delete');
$can_edit		= $this->auth->has_permission('Kategori.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">

    
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped" id="id="<?php isset($has_records)?"datatable":"";?>"">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th><?php echo lang('kategori_form_field_kategori');?></th>
					<th><?php echo lang('kategori_form_field_keterangan');?></th>
		
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('kategori_delete_confirm'))); ?>')" />
                        <input type="submit" name="restore" id="delete-me" class="btn btn-success" value="<?php echo lang('bf_action_restore'); ?>" onclick="return confirm('<?php echo lang('kategori_restore_confirm');?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/plugin/agenda/editkategori/' . $record->id, '<span class="icon-pencil"></span>' .  $record->kategori); ?></td>
				<?php else : ?>
					<td><?php e($record->kategori); ?></td>
				<?php endif; ?>
					<td><?php e($record->ket) ?></td>

				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>"><?php echo lang('kategori_no_records');?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>