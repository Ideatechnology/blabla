<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.title, b.id as post_id, b.status_list from bf_widget a, bf_widget_arsip b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pagearsip' class='form-vertical'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

	  <div class="control-group">
			<?php echo form_label('Title :', 'Title :', array('class' => 'control-label') ); ?>
				<div class='controls'>
					  <input name="title" type="text" value="<?php echo isset($data->title) ? $data->title :'';?>" />
<em> Pilih Salah Satu Option Dibawah ini :</em>	
				</div>
			</div>    
            
             <div class="control-group">
			<input type="radio" name="status_list" value="1" <?php echo isset($data->status_list) && $data->status_list==1? 'checked' :'';?>/> Show List By Month-Years<br />
             <input type="radio" name="status_list" value="2" <?php echo isset($data->status_list) && $data->status_list==2 ? 'checked' :'';?>/> Show List page Archives
			</div>                     

                            


 <div class="form-actions">                                   
&nbsp; <a href="#" class="delete">Delete</a> 
<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->post_id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->post_id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
 </div>
                             
<?php echo form_close(); ?>

