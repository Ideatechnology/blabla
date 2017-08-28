<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Perhatian</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

$num_columns	= 3;
$can_delete	= $this->auth->has_permission('Testimoni.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Testimoni.Plugin.Approve');
$has_records	= isset($unapprove) && is_array($unapprove) && count($unapprove);

?>
<div class="admin-box">

	 <?php echo form_open($this->uri->uri_string(),array("id"=>"formfilter","name"=>"formfilter","class"=>"form-search form-inline","method"=>"get")); ?>    	
     <div class="form-group">
	 <input type="text" placeholder="Masukan Tanggal" class="form-control search-query tenggang_date" name="tanggal" value="<?php echo isset($_GET["tanggal"])?$_GET["tanggal"]:"";?>">
    
	</div>
<div class="form-group">
    <input type="text" placeholder="Masukan Kata Kunci Comment" class="form-control search-query" style="width:400px" name="keyword" value="<?php echo isset($_GET["keyword"])?$_GET["keyword"]:"";?>">
    <button type="submit" class="btn">Search</button>
  </div>
     <?php echo form_close(); ?>

<hr />

<p>Jumlah : <?php echo @$total;?></p>

<?php echo form_open($this->uri->uri_string()); ?>  
<table class="table table-striped table-bordered" >
<thead>
  <tr>
      <?php if ($has_records) : ?>
<th class="column-check"><input class="check-all" type="checkbox" /></th>
<?php endif;?>	
      <th><?php echo lang("guesbook_form_komentar")?></th>
       <th>Email</th>
      <th><?php echo lang("guesbook_form_pengirim")?></th>
  </tr>
</thead>
<tbody>
 <?php 
    if($has_records){
        foreach($unapprove as $list){
 ?>
   <tr>
<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $list->id; ?>" /></td>

    <td style="width:500px;">
          <?php echo $list->komentar;?> 
    </td>
    
    <td><?php echo $list->email;?></td>

   <td><strong><?php echo $list->pengirim;?></strong><br />  <?php echo lang("guesbook_form_tanggal")?> : 
   <?php echo date('d M Y', strtotime($list->tgl_kirim));?> <?php echo date('H:i', strtotime($list->tgl_kirim));?> </td>
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
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('guesbook_delete_confirm'))); ?>')" />
					    <input type="submit" name="approve" id="approve-me" class="btn btn-success" value="Approve" onclick="return confirm('<?php e(js_escape(lang('guesbook_approve_confirm'))); ?>')" />
					
                    </td>
				</tr>
			</tfoot>
			<?php endif; ?>
</table>
     <?php echo form_close(); ?>
</div>

  <?php echo $this->pagination->create_links(); ?>  