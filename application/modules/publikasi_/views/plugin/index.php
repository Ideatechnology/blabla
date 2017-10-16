<?php

$num_columns	= 7;
$can_delete	= $this->auth->has_permission('Publikasi.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Publikasi.Plugin.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	
	  <?php echo form_open($this->uri->uri_string(),'method="get" class="form-inline"'); ?>
	  Pilih Kategori :
		<select name="kategori" class="form-control">
		<option value="">--Pilih Kategori--</option>

	<?php if($kategori): ?>
		<?php foreach($kategori as $kategori_row):?>
			<option value="<?php echo $kategori_row->id;?>"><?php echo $kategori_row->kategori;?></option>

	<?php endforeach; ?>

	<?php endif; ?>
	</select>

      <button type="submit" class="btn btn-default">Cari</button>
	
	<?php echo form_close(); ?>
	<hr />
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					<th>Gambar</th>
					<th>Nama Publikasi</th>
					<th>Deskripsi</th>
					<th>Tanggal</th>
					<th>Kategori</th>
					
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('publikasi_delete_confirm'))); ?>')" />
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
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id_publikasi; ?>" /></td>
					<?php endif;?>

					<td style="text-align:center"><img src="<?php echo base_url()."assets/publikasi/images/".$record->gambar_cover;?>"></td>
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/plugin/publikasi/edit/' . $record->id_publikasi, '<span class="icon-pencil"></span>' .  $record->nama_publikasi); ?></td>
				<?php else : ?>
					<td><?php e($record->nama_publikasi); ?></td>
				<?php endif; ?>
					<td><?php e(word_limiter(strip_tags($record->deskripsi)),20) ?></td>
					<td><?php e(date("d M Y H:i",strtotime($record->tanggal))) ?></td>
					<td><?php e($record->kategori) ?></td>
					
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>