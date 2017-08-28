<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('kategori_judul_message'); ?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

$num_columns	= 3;
$can_delete	= $this->auth->has_permission('Testimoni.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Testimoni.Plugin.Approve');
$has_records	= isset($approve) && is_array($approve) && count($approve);

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

<p>Jumlah : <?php echo @$totalapprove;?></p>

<?php echo form_open($this->uri->uri_string()); ?>  
<table class="table table-striped table-bordered">
<thead>
  <tr>
      <?php if ($can_delete && $has_records) : ?>
<th class="column-check"><input class="check-all" type="checkbox" /></th>
<?php endif;?>	
      <th><?php echo lang("guesbook_form_komentar")?></th>
      <th><?php echo lang("guesbook_form_pengirim")?></th>
  </tr>
</thead>
<tbody>

<?php 
if($has_records){
    foreach($approve as $list){
?>

<tr>
      <?php if ($can_delete) : ?>
<td class="column-check" style="width:10px;"><input type="checkbox" name="checked[]" value="<?php echo $list->id; ?>" /></td>
<?php endif;?>
   
<td style="width:500px;"> 

        <a href="<?php echo site_url("admin/plugin/testimoni/jawab/".$list->id);?>">  <?php echo $list->komentar;?></a> 
       <?php
       //echo $list->jawaban;
       ?>
  </td>
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
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('guesbook_delete_confirm'))); ?>')" />
					    <input type="submit" name="unapprove" id="approve-me" class="btn btn-success" value="<?php echo lang('guesbook_unapprove'); ?>" onclick="return confirm('<?php e(js_escape(lang('guesbook_unapprove_confirm'))); ?>')" />
					
                    </td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
</table>
</div>
  <?php echo $this->pagination->create_links(); ?>  