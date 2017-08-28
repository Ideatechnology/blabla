
  <!--
  <div class="panel-heading" >Pilihan</div>
  <div class="panel-body">
    	<div class="list-group">
  <a href="#" class="list-group-item">
    Beranda
  </a>
  <a href="#" class="list-group-item">Reservasi Online</a>
</div>
</div>
-->


<h3><i class="fa fa-fw fa-book"></i> Pilih Jenis Koleksi</h3>
      	<div class="list-group">
        <?php foreach($kategori_ebook as $kategori_row): ?>
  <a href="<?php echo site_url("ebook/index/".$kategori_row->id);?>" class="list-group-item">
    <?php echo $kategori_row->kategori; ?>

  </a>
<?php endforeach; ?>
  </div>

<!--
<h3><i class="fa fa-fw fa-picture-o"></i> Galeri Kegiatan</h3>
    -->  
  

