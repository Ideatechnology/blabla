<div>
	<h1 class="page-header">Publikasi - <?php echo $kategori->kategori;?></h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	
		<?php foreach ($records as $record) : ?>
			
		<div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="<?php echo base_url();?>assets/publikasi/images/<?php echo $record->gambar;?>" style="width: 200px;">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $record->nama_publikasi;?></h4>
        <span class="glyphicon glyphicon-time"></span> <span class="text-muted"><?php echo date("d M Y",strtotime($record->tanggal));?> <?php echo date("H:i",strtotime($record->tanggal));?> Wib</span>
        <p><?php echo word_limiter($record->deskripsi,50);?></p>
        <!--<a href="<?php echo base_url("assets/publikasi/files/".$record->file_pdf);?>" target="_blank" class="btn btn-primary btn-sm">Download</a>
        -->
        <a href="<?php echo site_url("publikasi/detail/".$record->id_publikasi);?>"  class="btn btn-primary btn-sm">Detail</a>
        
      </div>
    </div>
    <hr />

		<?php endforeach; ?>

    <div id="pagination-digg">
<?php echo $this->pagination->create_links(); ?>
</div>
		
<?php endif; ?>