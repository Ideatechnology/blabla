
<?php
if (isset($post))
{
	$post = (array) $post;
}
$id = isset($post['id']) ? $post['id'] : '';
?>


<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Status Post </h3>
      </div>
      <div class="panel-body" style="padding:0px;">
      
<table class="table">
<tr>
<td>Status 
</td>
<td>
<strong><?php echo isset($post["status_tampil"]) && $post["status_tampil"]==0 ? 'Publish' : 'Draft';?></strong></td>
</td>
</tr>

<tr>
<td>
<?php echo lang('comment_form_tanggal');?>
</td>
<td>
 <input type="text" name="post_created_on" class="post_date form-control" value="<?php echo set_value('post_created_on', isset($post['created_on']) ? $post['created_on'] : date("Y-m-d H:i:s")); ?>">

</td>
</tr>

<tr>
<td>
<?php echo lang("post_form_slug_author");?>
</td>
<td>
    <input id='post_author' type='text' class="form-control" name='post_author' maxlength="50" value="<?php echo set_value('post_author',isset($post["author"]) ? $post["author"] :$current_user->display_name)?>" />
      <span class='error'><?php echo form_error('post_author'); ?></span>
 </td>
</tr>

<tr>
<td colspan="2">
  <input type="submit" id="save" name="save" class="btn btn-primary btn-xs" value="<?php echo lang('post_action_create'); ?>"  />
              <?php echo lang('bf_or'); ?>

  <input type="submit" id="draft" name="save" class="btn btn-primary btn-xs" value="<?php echo lang('post_action_draft'); ?>"  />	
</td>
</tr>

</table>
	  
      </div>
    </div>

<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang("post_form_category");?></h3>
      </div>
      <div class="panel-body" >
      
	  <div class="form-group <?php echo form_error('post_post_category') ? 'error' : ''; ?>">
  <div class='controls'>
  <select id='post_post_category' name='post_post_category' class="form-control"  />
  <?php foreach($kategori as $rowkategori): ?>
  <option value="<?php echo $rowkategori->id;?>" <?php echo (@$_POST['post_post_category']==@$rowkategori->id || @$rowkategori->id==@$post['post_category']) ? "selected" : ''; ?>><?php echo $rowkategori->kategori;?></option>
  <?php endforeach; ?>
  </select>
  <span class='help-inline'><?php echo form_error('post_post_category'); ?></span>
  </div>
</div>
	  
	        </div>
    </div>


	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang("post_form_image");?> </h3>
      </div>
      <div class="panel-body" >

	  <div class="form-group <?php echo form_error('post_image_data') ? 'error' : ''; ?>">
    <?php echo form_label('<span class="help-inline"> ( '.lang("post_form_image_desc").' ( JPG ) max file width : 768x Heigth : 600x )</span>', 'post_image_data', array('class' => 'control-label') ); ?>
    <div class='controls'>
        <input type="file" class="photoInput"  name="post_image_data" id="post_image_data" accept="image/*" /> 
        <span class='help-inline'><?php echo form_error('post_image_data'); ?></span>
          <p>
		  <br />

      <?php if(@$post['image_data']!=""): ?>
      <img src="<?php echo "http://www.kemendagri.go.id/media/".@$post["guid_image"];?>" style="width:100%" class="newsthumbnail">
		  <?php 
          echo (@$post['image_data']!="")?"<a href='".site_url(SITE_AREA . '/content/post/hapusimage/'.$post['id'])."' onclick='return confirm(\"Apakah yakin akan dihapus ?\")'><i class='icon-trash'></i> Hapus</a>":""; ?>
        <?php endif; ?>
          </p>
    </div>
</div>

<div class="form-group <?php echo form_error('post_image_data_desc') ? 'error' : ''; ?>">
<?php echo form_label(lang('post_form_image_desc'), 'post_image_data_desc', array('class' => 'control-label') ); ?>
<div class='controls'>
  <input id='post_image_data_desc' class="span12" type='text' name='post_image_data_desc' maxlength="255" value="<?php echo set_value('post_image_data_desc', isset($post['image_data_desc']) ? $post['image_data_desc'] : ''); ?>" />
  
  <span class='help-inline'><?php echo form_error('post_image_data_desc'); ?></span>
</div>
</div>

<div class="form-group">  
    <div class='controls'>
  <label class="control-label">  <?php echo lang("post_form_set_image_desc");?></label><br />
<input type="radio" name="post_set_img" value="thumb" id="post_set_img" <?php echo (isset($post['set_img']) && $post['set_img'] == "thumb") ? 'checked="checked"' : set_checkbox('post_set_img', "thumb"); ?> />
Thumbnail  &nbsp;
<input type="radio" name="post_set_img" value="full" id="post_set_img" <?php echo (isset($post['set_img']) && $post['set_img'] == "full") ? 'checked="checked"' : set_checkbox('post_set_img', "full"); ?> />
Full
  <input type="radio" name="post_set_img" value="none" id="post_set_img" <?php echo (isset($post['set_img']) && $post['set_img'] == "none") ? 'checked="checked"' : set_checkbox('post_set_img', "none"); ?> />
None  
    </div>
</div>



	        </div>
    </div>
    

			

	

