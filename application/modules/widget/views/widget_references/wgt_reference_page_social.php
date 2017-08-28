<?php
  if(isset($sort_no)){
     $data = $this->db->query('
				   select a.*, b.id as post_id, b.facebook,b.twitter from bf_widget a, bf_widget_social_media b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  } 
?>
<?php echo form_open($this->uri->uri_string(),"id='page_social' class='form-vertical'"); ?>
<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

		<div class="control-group">
			<?php echo form_label('Facebook NickName :', 'Facebook NickName', array('class' => 'control-label') ); ?>
				<div class='controls'>
			 	<input name="fb" type="text" id="fb" value="<?php echo (isset($data->facebook) ?  $data->facebook : '');?>" />
				<input type="hidden" name="fb_url" value="http://www.facebook.com/" />
				<input type="hidden" name="fb_icon" value="<?php echo base_url();?>assets/images/icon_social/facebook.jpg" />	
				</div>
			</div>                         

		<div class="control-group">
			<?php echo form_label('Twitter NickName :', 'Twitter NickName', array('class' => 'control-label') ); ?>
				<div class='controls'>
            <input name="twitter" type="text" id="twtr" value="<?php echo (isset($data->twitter) ?  $data->twitter : '');?>" />
            <input type="hidden" name="tw_url" value="http://www.twitter.com/" />
            <input type="hidden" name="tw_icon" value="<?php echo base_url();?>assets/images/icon_social/twitter.gif" />	
				</div>
			</div>    



                                
<div class="form-actions">                                   
<a href="#" class="delete">Delete</a> </td>
&nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
</div>
                            
<?php echo form_close(); ?>

