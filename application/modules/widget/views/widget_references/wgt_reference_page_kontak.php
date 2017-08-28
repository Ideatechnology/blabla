<?php
  if(isset($sort_no)){
     $data = $this->db->query('	select a.*, b.url_logo, b.id as post_id, b.logo_title,b.alamat,b.telp,b.fax,b.email
							  	from bf_widget a, bf_widget_kontak b
								where
								a.id_widget = b.id and
								a.sort_no ='.$sort_no.' and
								a.column_sidebar = '.$column_sidebar.' order by id desc')->row();
     
  }

?>

<?php echo form_open($this->uri->uri_string(),"id='pagekontak' class='form-vertical'"); ?>
<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

			<div class="control-group">
			<?php echo form_label('Url Logo Image', ' Url Logo Image', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input name="url_logo" type="text" value="<?php echo isset($data->url_logo) ? $data->url_logo :'';?>" 
                    style="height:17px;"/>
					<em>assets/images_name/image.png</em>
				</div>
			</div>
            
            <div class="control-group">
			<?php echo form_label('Title Logo', ' Url Logo Image', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input name="logo_title" type="text" 
                    value="<?php echo isset($data->logo_title) ? $data->logo_title :'';?>" />
				</div>
			</div>
            
            <div class="control-group">
			<?php echo form_label('Alamat', ' Alamat', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<textarea name="alamat" style="height:32px;"><?php echo isset($data->alamat) ? $data->alamat :'';?></textarea>
					<em>ex : jl. Sudirman Blok E Sukaluyu-Bandung 40123</em>
                </div>
			</div>
            
            <div class="control-group">
			<?php echo form_label('Fax', ' Fax', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input name="fax" type="text" value="<?php echo isset($data->fax) ? $data->fax :'';?>" />
                </div>
			</div>
            
             <div class="control-group">
			<?php echo form_label('Telp', 'Telp', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input name="telp" type="text" value="<?php echo isset($data->telp) ? $data->telp :'';?>" />
                    <em>ex : (022) 354645</em>
                </div>
			</div>
            
              <div class="control-group">
			<?php echo form_label('Email', 'Email', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input name="email" type="text" value="<?php echo isset($data->email) ? $data->email :'';?>" />
                </div>
			</div>
            
<div class="form-actions">      

&nbsp; <a href="#" class="delete">Delete</a> 
&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_tipe" type="hidden" value="<?php echo isset($data->post_id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->post_id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
     </div>                       
<?php echo form_close(); ?>

