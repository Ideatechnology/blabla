<?php
  if(isset($sort_no)){
     $data = $this->db->query('
				   select a.*, b.id as post_id, b.title,b.height,b.width  from bf_widget a, bf_widget_multimedia b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='page_multimedia' class='form-vertical'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

		<div class="control-group">
			<?php echo form_label('Judul SideBar', 'Judul SideBar', array('class' => 'control-label') ); ?>
				<div class='controls'>
					 <input name="title" type="text" value="<?php echo (isset($data->title) ?  $data->title : '');?>" />		
				</div>
			</div>
            
         
		<div class="control-group">
			<?php echo form_label('Width', 'Width', array('class' => 'control-label') ); ?>
				<div class='controls'>
			<input name="width" type="text" id="width" value="<?php echo (isset($data->width) ?  $data->width : '');?>" />	
				</div>
			</div>
            
        
        <div class="control-group">
			<?php echo form_label('Height', 'Height', array('class' => 'control-label') ); ?>
			<div class='controls'>
			<input name="height" type="text" id="height" value="<?php echo (isset($data->height) ?  $data->height : '');?>" />
			</div>
	   </div>

 
 <div class="form-actions">                            
<a href="#" class="delete">Delete</a> 
<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
  </div>
                            
<?php echo form_close(); ?>

