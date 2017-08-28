<?php
$num_columns	= 5;
$has_records	= isset($records) && is_array($records) && count($records);
?>

<div class="admin-box">
<h3><?php echo $edit->judul;?></h3>
	
        
<?php echo form_open($this->uri->uri_string()); ?>            
<table class="table" id="datatable">
<thead>
	<tr>
		
		<th class="column-check"><input class="check-all" type="checkbox" /></th>
		<th><?php echo lang("comment_form_nama");?></th>
		<th><?php echo lang("comment_form_email");?></th>
		<th><?php echo lang("comment_form_komentar");?></th>
		<th><?php echo lang("comment_form_tanggal");?></th>

		</tr>
</thead>
		
<tbody>
<?php
if ($has_records) :
  foreach ($records as $record) :
  if($record->approve=="N"):
	//$background="style='background:red;color:white' ";
	$background="background:pink";
  else:
	$background="";
  endif;
?>
<tr style="<?php echo $background;?>">
  <td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->id; ?>" /></td>
  <td><?php e($record->identitas.$record->approve) ?></td>
  <td><?php e($record->email) ?></td>
  <td><?php e($record->komentar) ?></td>
  <td><?php e($record->tgl_komentar) ?></td>
</tr>
<?php endforeach;?>
<?php endif; ?>
</tbody>
            
  <tfoot>
  <tr>
      <td colspan="<?php echo $num_columns; ?>">
          <?php echo lang('bf_with_selected'); ?>
          <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('post_delete_confirm'))); ?>')" />
          <a href="<?php echo site_url(SITE_AREA."/content/post");?>" class="btn btn-warning"><?php echo lang('bf_go_back');?></a>
              <input type="submit" name="approve" id="approve-me" class="btn btn-success" value="Approve" onclick="return confirm('<?php e(js_escape('Apakah yakin akan diapprove')); ?>')" />
                       
      </td>
  </tr>
  
</tfoot>

		</table>
	<?php echo form_close(); ?>
</div>


