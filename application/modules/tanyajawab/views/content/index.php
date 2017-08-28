<?php

$num_columns	= 5;
$can_delete	= $this->auth->has_permission('Tanyajawab.Content.Delete');
$can_edit		= $this->auth->has_permission('Tanyajawab.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">

	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					<th>Kontak</th>
					<th>Konten</th>
					<th>Tanggal</th>
					<th>Published</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('tanyajawab_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
					if($record->published==1){
						$style = '';
					}else{
						$style = 'class="danger"';
					}

				?>
				<tr <?php echo $style;?>>
					<?php if ($can_delete) : ?>
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
					<?php endif;?>
					
					<td>
					Nama Lengkap : 
<?php echo anchor(SITE_AREA . '/content/tanyajawab/edit/' . $record->id, '<span class="icon-pencil"></span>' .  $record->gbname); ?> <br />
						<?php echo $record->gbmail!=""?"Email : ".$record->gbmail."<br />":"";?> 
						<?php echo $record->gbloca!=""?"Alamat : ".$record->gbloca."<br />":"";?>
						<?php echo $record->gbpage!=""?"Wesbite :".$record->gbpage."<br />":"";?> 

					</td>
					<td>
					<?php $record->gbtitle!=""?"<strong>Subjek : </strong>".$record->gbtitle."<br />":""; ?>
					<p><strong>Pertanyaan : </strong><?php e($record->gbtext) ?></p>
					<?php echo $record->gbcomment!=""?"<strong>Jawaban : </strong>".$record->gbcomment:""; ?>

					</td>
					<td style="width:200px;">
					<?php echo date("d M Y",strtotime($record->gbdate))." <br />Jam ".date("H:i",strtotime($record->gbdate)); ?>
					</td>
					<td><?php 
						if($record->published==1){
								echo "<span class='label label-success'>Publish</span>";
						}else{
								echo "<span class='label label-danger'>Tidak Publish</span>";
						}
					
					?></td>
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
		<?php 
		echo $this->pagination->create_links();
		?>
	<?php echo form_close(); ?>
</div>