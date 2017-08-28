<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.title, b.text_isi, b.id as post_id from bf_widget a, bf_widget_text b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pagetext' class='form-vertical'"); ?>
<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />
<fieldset>                  

		<div class="control-group">
			<?php echo form_label('Title :', 'Title :', array('class' => 'control-label') ); ?>
				<div class='controls'>
					 <input name="title" type="text" value="<?php echo (isset($data->title) ?  $data->title : '');?>" />
				</div>
			</div>
            
          <div class="control-group">
			<?php echo form_label('My Text : ', 'My Text :  :', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea name="text_isi" id="text_isi" style="height:100px;"><?php echo (isset($data->text_isi) ?  $data->text_isi : '');?></textarea>
				</div>
			</div>  


          <div class="form-actions">   
                  <a href="#" class="delete">Delete</a> </td>
                  &nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
                  <input name="post_tipe" type="hidden" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
          </div>
          
<input name="post_id" type="hidden" value="<?php echo isset($data->id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
</fieldset>
<?php echo form_close(); ?>

