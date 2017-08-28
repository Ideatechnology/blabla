
<div class="alert alert-info fade in">
<a class="close" data-dismiss="alert">×</a>
<p>
<b>Lokasi Menu dimanfaatkan untuk melakukan set default tiap-tiap menu, setiap menu yang anda miliki akan otomatis di kelompokkan sesuai dengan settingan tiap menu yang anda lakukan.</b>
</p>
<p>Isilah Form Ini dengan tujuan peruntukkannya, kemudian kelompokkan dengan melakukan Tambah menu disisi samping.</p> 
</div>
        
        
<div class="admin-box">
	<h3><?php echo $toolbar_title ?></h3>

	<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
	 <div class="col-sm-5" style="margin-left:0px;padding-left:0px;">
					 <div class="form-group">
                        <label for="name" class="control-label">Location Menu [ Indonesia ] * </label>
                     
                             <input name="menu_lok" class="form-control" type="text" required id="menu_lok" value="<?php echo isset($Flist->id) ? $Flist->menu_lok : '';?>" />
                     
					 </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Location Menu [ English ] *</label>
                             <input name="menu_lok_english" class="form-control" required type="text" id="menu_lok_english" value="<?php echo isset($Flist->id) ? $Flist->menu_lok_english : '';?>" />
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label ">Position Location *</label>
                                <select name="tipe_lokasi" class="form-control" required>
                                 <option value="">Pilih Tipe Lokasi</option>
                                 <option value="1" <?php echo isset($Flist->tipe_lokasi) &&  $Flist->tipe_lokasi ==1 ?  'selected' : '';?>>Depan</option>
                                 <option value="2" <?php echo isset($Flist->tipe_lokasi) &&  $Flist->tipe_lokasi ==2 ?  'selected' : '';?>>Belakang</option>
								   <option value="3" <?php echo isset($Flist->tipe_lokasi) &&  $Flist->tipe_lokasi ==3 ?  'selected' : '';?>>Footer</option>
                              </select>
                    </div>
               <div class="form-group">

                       <input type="submit" name="submit" class="btn btn-primary" value="<?php echo isset($Flist->id) ? 'update' : 'simpan' ;?>" />
</div>
</div>
     <?php echo form_close(); ?>
 </div>
 
<div style="clear:both"></div>
 
<h3><?php echo $toolbar_title ?></h3>
<div class="alert alert-info fade in">
<p><strong>Lakukan Drag & Drop Pada Menu dibawah ini untuk memindahkan posisi.</strong></p>
</div>
<div id="contentLeft">
<ul style="margin-left:0px;padding-left:0px;">
<?php
 $i=0;
     foreach ($ListView as $list){
	 
	 switch($list->tipe_lokasi){
	 case "1":
		$tipelokasi="Depan";
	 break;
	 case "2":
		$tipelokasi="Atas";
	 break;
	 case "3":
		$tipelokasi="Bawah";
	 break;
	 }
	 
?>
<li id="recordsArray_<?php echo $list->id; ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td ><?php echo $list->menu_lok." <span style='color:red'>[ ".$tipelokasi." ] </span>"; ?></td>
    <td> <div class="pull-right">
	<a href="<?php echo site_url('admin/theme/menuthemes/create_location/id/'.$list->id);?>" class="btn btn-primary">Edit</a> 
	<a href="<?php echo site_url('admin/theme/menuthemes/create_location/hapus/'.$list->id);?>" class="btn btn-primary" onclick="return confirm('apakah yakin akan dihapus ?')">Hapus</a>
	
	<?php if($list->tipe_lokasi==2): ?>
	<?php if($list->flag_hide==0): ?>
	<a href="<?php echo site_url('admin/theme/menuthemes/create_location/hide/'.$list->id);?>" class="btn btn-primary" onclick="return confirm('apakah yakin akan disembunyikan ?')">Hide</a>
	<?php else: ?>
	<a href="<?php echo site_url('admin/theme/menuthemes/create_location/show/'.$list->id);?>" class="btn btn-primary" onclick="return confirm('apakah yakin akan ditampilkan ?')">Show</a>
	<?php endif; ?>
	<?php endif; ?>
	
	
	</div></td>
   
  </tr>
</table>
</li>
<?php $i++; } ?>
</ul>
</div>
          
	 
 