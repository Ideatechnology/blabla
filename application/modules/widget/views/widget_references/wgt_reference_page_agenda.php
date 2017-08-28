<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.id as id_agenda, b.title_widget from bf_widget a, bf_widget_agenda b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pageagenda'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

 			<div class="control-group">
			  <?php echo form_label('Title', ' Title', array('class' => 'control-label') ); ?>
              <div class="controls">
              <input name="title_widget" type="text" value="<?php echo isset($data->title_widget) ? $data->title_widget : '' ?>"/>
              <span class="inline-help">* Sub Title Sidebar</span>
              </div>
			</div>

<div class="form-actions">      
<a href="#" class="delete">Delete</a> 
<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->id_agenda) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->id_agenda) ? $data->id_agenda : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
</div>   

<?php echo form_close(); ?> 