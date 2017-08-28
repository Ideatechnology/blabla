<?php
$validation_errors = validation_errors();
if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading"><?php echo lang('galeri_judul_message'); ?></h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;
$num_columns	= 5;
$can_delete	= $this->auth->has_permission('Galerifoto.Plugin.Delete');
$can_edit		= $this->auth->has_permission('Galerifoto.Plugin.Edit');
$has_records	= isset($ListView) && is_array($ListView) && count($ListView);

Assets::add_js("

$('#kategori').on('change', function() {
  var id_kategori = this.value;
  window.location.href='".site_url("admin/plugin/galerifoto/index")."?kategori='+id_kategori;
});

","inline");

?>
<div class="admin-box">
<h3>Galeri Foto</h3>

<!-- list menu -->
<?php 
	if($categories > 0):
?>	
Pilih album :
<select id="kategori" name="kategori" class="form-control">
  <option value="">--Pilih Album--</option>
<?php
	$no=1;
	foreach($categories as $albm):
	$active=($no==1)?"active":"";
?>
  <option value="<?php echo $albm->id;?>" <?php echo $this->input->get("kategori")==$albm->id?"selected":"";?>>
  <?php echo $albm->kategori;?>
  </option>
<?php
	$no++;
  endforeach;
?>
</select>
<?php 
endif; 
?>
<!--
  DO NOT SIMPLY COPY THOSE LINES. Download the JS and CSS files from the
  latest release (https://github.com/enyo/dropzone/releases/latest), and
  host them yourself!
-->
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<br />
<div class="alert alert-info">
  Silakan untuk drop foto anda disini atau klik
</div>

<!-- Change /upload-target to your upload address -->
<?php if($this->input->get("kategori")): ?>
<?php echo form_open_multipart("admin/plugin/galerifoto/uploadfoto?kategori=".$this->input->get("kategori"), 'class="dropzone"'); ?>

<?php echo form_close(); ?>

<br /><a href="<?php echo current_url();?>?kategori=<?php echo $this->input->get("kategori");?>" class="btn btn-primary">Selesai</a>
<?php endif; ?>
<hr />
<div class="row">
  <?php 
    if($records){
    foreach($records as $list){ 
$publis=$list->flag==0?"":"";
?>		
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">

           <?php 					
  
                $img=explode(".",$list->file_foto);

            ?>

        <div style="background:url('<?php echo base_url().$path_image.$img[0].".".$img[1];?>');background-size:cover;width: 300px; height: 200px;">
          
          </div>
          
    <div class="caption" style="height:200px;">
            <h3><?php echo $list->title_foto!=""?$list->title_foto:"No Title";?></h3>
            <hr />
            <p><a href="<?php echo site_url(SITE_AREA.'/plugin/galerifoto/edit/'.$list->id_galeri."?kategori=".$this->input->get("kategori"));?>" class="btn btn-primary" role="button">Edit</a> 
            <a href="<?php echo site_url(SITE_AREA.'/plugin/galerifoto/hapus/'.$list->id_galeri."?kategori=".$this->input->get("kategori"));?>" onclick="return confirm('apakah yakin akan dihapus')" class="btn btn-danger" role="button">Hapus</a></p>
          </div>
        </div>
      </div>
    <?php } }?>
   
    </div>


 

