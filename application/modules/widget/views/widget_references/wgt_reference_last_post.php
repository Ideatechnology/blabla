<?php
   if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.post_category, b.id as post_id,b.title from bf_widget a, bf_widget_post b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.' and
					b.last_post_status=1')->row();
      
  }
?>
<?php echo form_open($this->uri->uri_string(),"id='lastpost' class='form-vertical'"); ?>
 <input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

		<div class="control-group">
			<?php echo form_label('Title', ' Title', array('class' => 'control-label') ); ?>
				<div class='controls'>
					 <input name="title" type="text" value="<?php echo isset($data->title) ? $data->title : '' ?>"/>
				</div>
			</div>
            
            <div class="control-group">
			<?php echo form_label('Category', ' Category', array('class' => 'control-label') ); ?>
				<div class='controls'>
				<?php echo form_dropdown('category',$optCategory['category'], (isset($data->post_category) ? $data->post_category : ''));?>
				</div>
			</div>
                                 


     <div class="form-actions">                         
<a href="#" class="delete">Delete</a> 
<input type="submit" name="button" class="btn btn-primary" 
value="<?php echo isset($data->id_widget) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->id_widget) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->id_widget) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
     </div>                       
<?php echo form_close(); ?>

