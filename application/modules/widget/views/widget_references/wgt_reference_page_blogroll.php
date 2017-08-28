<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.link_category, b.link_name, b.id as post_id, b.tooltip_descr from bf_widget a, bf_widget_blogroll b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pageblogroll' class='form-vertical'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

 		<div class="control-group">
			<?php echo form_label('Kategori :', 'Kategori :', array('class' => 'control-label') ); ?>
				<div class='controls'>
	<?php echo form_dropdown('category', $optBlogCategory, (isset($data->link_category) ? $data->link_category : ''));?>
				</div>
			</div>    
            
        
        <div class="control-group">
			<input type="checkbox" name="link_name" value="1" <?php echo isset($data->link_name) && $data->link_name==1? 'checked' :'';?>/>Link Name <br />
            <input type="checkbox" name="tooltip_descr" value="1" <?php echo isset($data->tooltip_descr) && $data->tooltip_descr==1 ? 'checked' :'';?>/>Tooltips Description
			</div>    

 <div class="form-actions">  
<a href="#" class="delete">Delete</a> 
&nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
 <input name="post_tipe" type="hidden" value="<?php echo isset($data->post_id) ? 'update' : 'simpan';?>" />
 <input name="post_id" type="hidden" value="<?php echo isset($data->post_id) ? $data->post_id : '';?>" />
 <input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
 </div>  
<?php echo form_close(); ?>

