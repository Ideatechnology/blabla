<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.id as post_id, b.jml_views,b.flag_animation from bf_widget a, bf_widget_banners b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='pagebanners' class='form-vertical'"); ?>

<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

			<div class="control-group">
			<?php echo form_label('Pilih Salah Satu Option Dibawah ini :', ' Pilih Salah Satu Option Dibawah ini :', array('class' => 'control-label') ); ?>
				<div class='controls'>
					     <select name="jml_views" id="jml_views">
       <option value="0">All</option>
       <option value="1" <?php echo isset($data->jml_views) && $data->jml_views==1 ?  'selected' : '';?>>1</option>
       <option value="2" <?php echo isset($data->jml_views) && $data->jml_views==2 ?  'selected' : '';?>>2</option>
       <option value="3" <?php echo isset($data->jml_views) && $data->jml_views==3 ?  'selected' : '';?>>3</option>
       <option value="4" <?php echo isset($data->jml_views) && $data->jml_views==4 ?  'selected' : '';?>>4</option>
       <option value="5" <?php echo isset($data->jml_views) && $data->jml_views==5 ?  'selected' : '';?>>5</option>
     </select>
				</div>
			</div>
            
            <div class="control-group">
			   <input type="radio" name="flag_animation" value="1" <?php echo isset($data->flag_animation) && $data->flag_animation==1 ? 'checked' :'';?>/> Show Animations<br />
        <input type="radio" name="flag_animation" value="0" <?php echo isset($data->flag_animation) && $data->flag_animation==0 ? 'checked' :'';?>/> No Animations
			</div>


 <div class="form-actions">      

   <a href="#" class="delete">Delete</a> 
    &nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
   <input name="post_tipe" type="hidden" value="<?php echo isset($data->post_id) ? 'update' : 'simpan';?>" />
   <input name="post_id" type="hidden" value="<?php echo isset($data->post_id) ? $data->post_id : '';?>" />
   <input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
  
  </div>
                           
<?php echo form_close(); ?>

