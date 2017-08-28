<?php
if (isset($pages))
{
	$pages = (array) $pages;
}
$id = isset($pages['id']) ? $pages['id'] : '';
?>



<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang("page_judul_publish");?></h3>
      </div>
      <div class="panel-body" style="padding:0px;">
      
<table class="table">
<tr>
<td>
<?php echo lang("page_judul_status");?> 
</td>
<td>
<strong><?php echo isset($pages["status_tampil"]) && $pages["status_tampil"]==0 ? 'Publish' : 'Draft';?></strong></td>
</td>
</tr>
<tr>
<td>
<?php echo lang("page_form_author");?>
</td>
<td>
 <input name="pages_author" 
type="text" 
value="<?php echo set_value('pages_author',isset($pages["author"]) ? $pages["author"] :$current_user->display_name)?>" class="form-control" style="width:90px;" />
</td>
</tr>
<tr>
<td>
Date 
</td>
<td>

<strong><?php echo date("Y-m-d");?></strong>
</td>
</tr>
<tr>
<td>
Upload File 
</td>
<td>
<input type="file" name="file_attachment">

<?php if(isset($pages["files"])): ?>
<p>
<a href="<?php echo base_url()."assets/page/files/".$pages["files"];?>" target="_blank">Download File</a>
</p>

<a href="<?php echo site_url("admin/content/pages/edit/".$this->uri->segment(5)."?hapus=true");?>" onclick="return confirm('apakah yakin akan dihapus?');" class="btn btn-xs btn-warning">Hapus File</a>

<?php endif; ?>

</td>
</tr>
<tr>
<td colspan="2">

<input type="submit" name="save" id="publish" value="Publish" class="btn btn-primary" />

<?php echo lang('bf_or'); ?>


<input type="submit" name="save" id="draft" value="As Draft" class="btn btn-primary" />
</td>
</tr>

</table>
	  
      </div>
    </div>






   