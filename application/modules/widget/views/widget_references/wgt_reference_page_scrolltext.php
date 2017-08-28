<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.id as post_id, b.flag_animation from bf_widget a, bf_widget_scrolltext b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pagescrolltext' class='form-vertical'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

<div class="control-group">
			<input type="radio" name="flag_animation" value="1" <?php echo isset($data->flag_animation) && $data->flag_animation==1 ? 'checked' :'';?>/> 
Corousel Animation
			</div>
            
            
       <div class="control-group">
<input type="radio" name="flag_animation" value="2" <?php echo isset($data->flag_animation) && $data->flag_animation==2 ? 'checked' :'';?>/> 
Show Standard Animation
			</div>     

 <div class="form-actions">  
&nbsp; <a href="#" class="delete">Delete</a>
&nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->post_id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->post_id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
 </div>
                            
<?php echo form_close(); ?>

