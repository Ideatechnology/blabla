<?php
if (isset($pages))
{
	$pages = (array) $pages;
}
$id = isset($pages['id']) ? $pages['id'] : '';
?>
<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-danger fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('pages_judul_message');?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;
?>

<div class="admin-box">



<div class="tab-content" style="padding-top:10px;">
  <div class="tab-pane active" id="indonesia">
<div class="form-group <?php echo form_error('pages_judul') ? 'error' : ''; ?>">
<div class='controls'>
<input name="pages_judul" required class="form-control" type="text"  value="<?php echo set_value('pages_judul', isset($pages["judul"]) ? $pages["judul"] : ''); ?>"
 placeholder="Masukan Judul" />
  <span class='error'><?php echo form_error('pages_judul'); ?></span>
</div>
</div>

<div class="form-group <?php echo form_error('pages_isi') ? 'error' : ''; ?>">
<div class='controls'>
<textarea id="editor1" cols="" rows="" name="pages_isi"><?php echo set_value('pages_isi',isset($pages["isi"]) ? $pages["isi"] : '')?></textarea>
  <span class='error'><?php echo form_error('pages_isi'); ?></span>
</div>
</div>
</div>



</div>




</div>
