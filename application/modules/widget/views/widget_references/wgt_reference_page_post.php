<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.title, b.post_category, b.more_status, b.id as post_id, b.style_widget from bf_widget a, bf_widget_post b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  }
?>

<?php echo form_open($this->uri->uri_string(),"id='pagepost' class='form-vertical'"); ?>
<fieldset>
<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

			<div class="control-group">
			<?php echo form_label('Judul :', 'Judul', array('class' => 'control-label') ); ?>
				<div class='controls'>
					 <input name="title" type="text" value="<?php echo (isset($data->title) ?  $data->title : '');?>" />	
				</div>
			</div>
            
            <div class="control-group">
			<?php echo form_label('Category :', ' Category', array('class' => 'control-label') ); ?>
				<div class='controls'>
					  <?php echo form_dropdown('category', $optCategory['category'], (isset($data->post_category) ? $data->post_category : ''));?>
				</div>
			</div>
            
            <div class="control-group">
				<div class="controls">
					<label class="checkbox" for="remember_me">
						<input name="more_status" type="checkbox" value="1" <?php echo isset($data->more_status) && $data->more_status==1 ? 'checked':'';?> /> 
						<span class="inline-help">Include Post List</span>
					</label>
				</div>
			</div>
            
             <div class="control-group">       
                    <input type="radio" name="style_widget" id="style_widget" value="0" <?php echo isset($data->style_widget) && $data->style_widget==0 ? 'checked':'';?>/> <span class="inline-help">Style Default</span><br />
                     <input type="radio" name="style_widget" id="style_widget" value="1" <?php echo isset($data->style_widget) && $data->style_widget==1 ? 'checked':'';?>/><span class="inline-help">Style WP  </span>  
					</label><br /><br />
                     <span class='help-inline'> <strong>Use style options</strong> :  <br /><em>Tidak memilih Style, dianggap default.</em></span>
				
            </div>
           
       <div class="form-actions">       
       <a href="#" class="delete">Delete</a> 
                    
		<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
       <input name="post_tipe" type="hidden" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
       <input name="post_id" type="hidden" value="<?php echo isset($data->id) ? $data->post_id : '';?>" />
       <input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />        </div>        
                       
 </fieldset>                   
 
<?php echo form_close(); ?>

