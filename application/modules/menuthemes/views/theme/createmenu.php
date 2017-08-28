
<div class="row">
<div class="col-md-4">


<div class="admin-box">

	<h3>Konfigurasi Menu Website</h3>
<hr />




	<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
	                
                     <div class="form-group">
                        <label for="name" class="control-label">Lokasi Menu *</label>
                        
                             <select name="lokasi_menu" id="lokasi_menu" class="form-control" required>
                               <option value="">Select Location</option>
                               <?php
							    foreach($dropdown as $drop):
								
								switch($drop->tipe_lokasi){
								case "1":
								$tipelokasi="Depan";
								break;
								case "2":
								$tipelokasi="Belakang";
								break;
								case "3":
								$tipelokasi="Bawah";
								break;
									}
	 
								
							   ?>
                               <option value="<?php echo $drop->id;?>" <?php echo isset($retrive->location_index) && $retrive->location_index ==$drop->id ? 'selected' : ''?>><?php echo $drop->menu_lok." [ ".$tipelokasi." ] ";?></option>
                               <?php endforeach; ?>
                             </select>
                        
                    </div>

                    <div class="form-group">
              <label for="name" class="control-label">Parent Menu</label>
              <select name="menu_parent_id" id="menu_parent_id" required="required" class="form-control">
              <?php if($this->uri->segment(4)!="edit"): ?>
              <option value="0">--Menu Induk--</option>
            <?php else: ?>
              <?php 
               $parentid=isset($retrive->parent_id)?$retrive->parent_id:"";
               $lokasi = isset($retrive->location_index)?$retrive->location_index:"";
                display_children(0, 1,$parentid,$lokasi);
              ?>
              <?php endif; ?>
              </select>
              
              </div>
                    
					 <div class="form-group">
                        <label for="name" class="control-label">Nama Menu *</label>
                        
                             <input name="name" class="form-control" required type="text" id="name" value="<?php echo isset($retrive->name) ? $retrive->name : '';?>" />
							
                    </div>

                    
                    <div class="form-group">
                        
                        <label for="name" class="control-label">Pilih Salah Satu Options</label>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="3%"> <input type="radio" onclick="pilih1()"  <?php  echo isset($retrive->url_module) && $retrive->url_module !='' ? 'checked' : ''?> required  name="opt1" value="1"/></td>
                                <td width="97%" valign="bottom">Module Links<em> ( External Module )</em></td>
                              </tr>
                             
                              <tr>
                                <td><input type="radio" onclick="pilih2()" <?php  echo isset($retrive->url_kategori) && $retrive->url_kategori!=0 ? 'checked' : ''?> name="opt1" value="2"/> </td>
                                <td valign="bottom">Categories Post <em>( Halaman Berdasarkan Kategori Post)</em></td>
                              </tr>
							         
							  <tr>
                                <td><input type="radio" onclick="pilih7()" <?php  echo isset($retrive->url_kategori_arsip) && $retrive->url_kategori_arsip!=0 ? 'checked' : ''?> name="opt1" value="7"/> </td>
                                <td valign="bottom">Categories Arsip <em>( Halaman Berdasarkan Kategori Arsip)</em></td>
                              </tr>	
                              <!--
                                <tr>
                                <td><input type="radio" onclick="pilih3()" <?php  echo isset($retrive->url_kategori_produk) && $retrive->url_kategori_produk!=0 ? 'checked' : ''?> name="opt1" value="3"/> </td>
                                <td valign="bottom">Categories Produk <em>( Halaman Berdasarkan Kategori Produk)</em></td>
                              </tr>
							                 -->
                              <tr>
                                <td><input type="radio" onclick="pilih4()" <?php  echo isset($retrive->url_blank) &&  $retrive->url_blank=='#' ? 'checked' : ''?> name="opt1" value="4"/></td>
                                <td valign="bottom">Blank Content <em>( Current Page # )</em></td>
                              </tr>
                               <tr>
                                <td><input type="radio" onclick="pilih5()" <?php  echo isset($retrive->url_pages) &&  $retrive->url_pages!=0 ? 'checked' : ''?> name="opt1" value="5"/> </td>
                                <td valign="bottom">Pages<em> ( Pilihan Dari Pages)</em></td>
                              </tr>
							    <tr>
                                <td><input type="radio" onclick="pilih6()" <?php  echo isset($retrive->url_link) &&  $retrive->url_link!="" ? 'checked' : ''?> name="opt1" value="6"/> </td>
                                <td valign="bottom">Url Link<em> ( Contoh : http://google.com )</em></td>
                              </tr>
                            </table>
                      
                    </div>
					
					 <div class="form-group" id="pilihan6" style="display: <?php  echo isset($retrive->url_link)  && $retrive->url_link !='' ? '' : 'none';?>;">
                         <label for="name" class="control-label">URL Link</label>
                       
                        <input name="url_link" class="form-control"  type="text" id="url_link" value="<?php echo isset($retrive->url_link) ? $retrive->url_link : '';?>" style="width:400px;" />
						</div>
                    
                    <div class="form-group" id="pilihan1" style="display: <?php  echo isset($retrive->url_module)  && $retrive->url_module !='' ? '' : 'none';?>;">
                         <label for="name" class="control-label">Module Link</label>
                              <?php 
                              $datamodule=array(
                          							  "home/index"=>"Beranda",
                          						    "contact"=>"Contact Us",
                                          "users/login"=>"Login",
                                          "agenda"=>"Agenda",
                                          "galerifoto"=>"Galeri Foto",
                                          );
                              ?>
                             <select name="url_module" class="form-control">
                              <?php foreach($datamodule as $keymodule=>$valuemodule): ?>
                               <option value="<?php echo $keymodule;?>" <?php echo isset($retrive->url_module) && @$retrive->url_module==$keymodule ? 'selected' : '';?> ><?php echo $valuemodule;?></option> 
                            <?php endforeach; ?>
                             </select>
                             
                             
                      
                    </div>
                    
                      <div class="form-group" id="pilihan2" style="display:<?php  echo isset($retrive->url_kategori) && $retrive->url_kategori!=0 ? '' : 'none';?>;">
                    
                        <label for="name" class="control-label">Categories Post</label>
                             <select name="url_kategori" class="form-control">
                              <option value="">--Pilih</option>
                              <?php if($categories){ ?>
                                 <?php foreach($categories as $cat){ ?>
                                     <option value="<?php echo $cat->id;?>" <?php echo isset($retrive->url_kategori) && $cat->id == $retrive->url_kategori ? 'selected' :''?>><?php echo $cat->kategori;?></option>
                                 <?php }?>
                              <?php } ?>
                             </select>  
                        
                    </div>
					
					     <div class="form-group" id="pilihan3" style="display:<?php  echo isset($retrive->url_kategori_produk) && $retrive->url_kategori_produk!=0 ? '' : 'none';?>;">
                    
                        <label for="name" class="control-label">Categories Produk</label>
                             <select name="url_kategori_produk" class="form-control">
                              <option value="">--Pilih</option>
                              <?php if($categoriesproduk){ ?>
                                 <?php foreach($categoriesproduk as $cat){ ?>
                                     <option value="<?php echo $cat->id;?>" <?php echo isset($retrive->url_kategori_produk) && $cat->id == $retrive->url_kategori_produk ? 'selected' :''?>><?php echo $cat->kategori;?></option>
                                 <?php }?>
                              <?php } ?>
                             </select>  
                        
                    </div>
					
			<div class="form-group" id="pilihan7" style="display:<?php  echo isset($retrive->url_kategori_arsip) && $retrive->url_kategori_arsip!=0 ? '' : 'none';?>;">
                    
                        <label for="name" class="control-label">Categories Arsip</label>
                       
                             <select name="url_kategori_arsip" class="form-control">
                              <option value="">--Pilih</option>
                              <?php if($categoriesarsip){ ?>
                                 <?php foreach($categoriesarsip as $catarsip){ ?>
                                     <option value="<?php echo $catarsip->id;?>" <?php echo isset($retrive->url_kategori_arsip) && $catarsip->id == $retrive->url_kategori_arsip ? 'selected' :''?>><?php echo $catarsip->kategori;?></option>
                                 <?php }?>
                              <?php } ?>
                             </select>  
                        
                    </div>
					
       
                    
                    <div class="form-group" id="pilihan5" style="display:<?php  echo isset($retrive->url_pages) &&  $retrive->url_pages!=0 ? '' : 'none';?>;">
                        <label for="name" class="control-label">Pages</label>
                            <input name="hideSetPages" type="hidden" value="<?php echo isset($retrive->url_pages) ? $retrive->url_pages : '';?>" />
                             <input name="url_pages" class="form-control" type="text" id="url_pages" value="<?php echo call_pages(isset($retrive->url_pages) ? $retrive->url_pages : '');?>" style="width:350px;"/>
								<br />
						 
									<!-- Button trigger modal -->
									<a class="btn btn-primary" href="<?php echo site_url('admin/theme/menuthemes/set_pages_get')?>" data-toggle="modal" data-target="#myModalPages">
									Pilih Pages
										</a>


							
                             <br /><br /><em>Mengambil dari Pages Data</em>
                         
                    </div>
                    
                     <div class="form-group">
                        <label for="name" class="control-label">Keterangan</label>
                          <input name="description" type="text" id="description" class="form-control" value="<?php echo isset($retrive->description) ? $retrive->description : '';?>" />
								<p class="help-block">Bahasa Indonesia </p>
					
                    </div>
                    
                    
                    
					   <div class="form-group">
                        <label for="name" class="control-label">Akses Menu</label>
                        <select name="akses_menu" required="required" class="form-control">
                        	<option value="">--Pilih Akses Menu---</option>
                            <option value="0" <?php echo @$retrive->id_role==0 ? 'selected' : '';?>>Publik</option>
                             <option value="1" <?php echo @$retrive->id_role==1 ? 'selected' : '';?>>Harus Login</option>
                   
                        </select>
                    </div>

              
                   
				  <div class="form-group">
                       <input type="submit" name="submit" class="btn btn-primary" value="Simpan Menu" />
                        <a href="<?php echo site_url("admin/theme/menuthemes/create_menu");?>" class="btn btn-danger">Batal</a>
                    </div> </div>
     <?php echo form_close(); ?>
 
 </div>
 <div class="col-md-8">

<?php $this->load->view("listmenu"); ?>

</div>
</div>


<!-- Modal Page-->
<div class="modal fade" id="myModalPages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style="height:500px;width: 900px; ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div> 
    </div>
</div> <!-- /.modal -->
