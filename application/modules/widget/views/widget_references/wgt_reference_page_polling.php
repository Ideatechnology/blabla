<?php
  if(isset($sort_no)){
     $data = $this->db->query('select a.*, b.id as post_id  from bf_widget a, bf_widget_polling b
					where
					a.id_widget = b.id and
					a.sort_no ='.$sort_no.' and
					a.column_sidebar = '.$column_sidebar.'')->row();
     
  }
?>
<?php echo form_open($this->uri->uri_string(),"id='pagepolling' class='form-vertical'"); ?>
<input name="sort_no_identity" type="hidden" value="<?php echo (isset($sort_no) ? $sort_no : '');?>" />

<span class='help-inline'>                        
<em>Polling/Jejak pendapat akan otomatis tampil Berdasarkan daftar yang di publish dan batas tanggal aktif.</em>
</span>

<div class="form-actions">
<a href="#" class="delete">Delete</a> 
&nbsp;&nbsp;&nbsp;<input type="submit" name="button" class="btn btn-primary" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
</div>

<input name="post_tipe" type="hidden" value="<?php echo isset($data->id) ? 'update' : 'simpan';?>" />
<input name="post_id" type="hidden" value="<?php echo isset($data->id) ? $data->post_id : '';?>" />
<input name="coloumn_sidebar" type="hidden" value="<?php echo isset($column_sidebar) ? $column_sidebar :'';?>" />
                            
<?php echo form_close(); ?>

