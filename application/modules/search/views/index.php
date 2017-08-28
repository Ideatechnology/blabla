<div class="row">
  <div class="col-md-6">
  <h2>Hasil Pencarian <br /><small>Sekitar <?php echo $jumlah;?> hasil ditemukan</small></h2><br />
</div>
  <div class="col-md-6">
  
    <?php echo form_open("search","method='get'"); ?>

      <div class="input-group">
        <input type="text" value="<?php echo $this->input->get("keyword");?>" class="form-control" name="keyword" placeholder="Telusuri informasi yang ada didesa">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit" name="cari">Cari</button>
        </span>
      </div><!-- /input-group -->
      <?php echo form_close(); ?>
    </div><!-- /.col-lg-6 -->
<br />
</div>

<div class="row">
<div class="col-md-8">




<?php if($jumlah > 0): ?>
  <?php
  $gambar = "";
  $url = "";

  foreach($query as $row):
    if($row["tipe"]=="produk"){
      $gambar = cek_image_produk($row["path"],$row["gambar"]);
      $url = $row["url"]."produk-detail/75/".$row["id"]."-".url_title($row["judul"]);
    }elseif($row["tipe"]=="post"){
      $gambar = cek_image($row["path"],$row["gambar"]);
        $url = $row["url"]."blog/".$row["id"]."-".url_title($row["judul"]);
    }else{
      $gambar = "";
        $url = $row["url"]."pages/detail/".$row["id"]."-".url_title($row["judul"]);
    }

    ?>


 <div class="produkhukumitem">
        <p class="titleundang"><a href="<?php echo $url;?>"><?php echo $row["judul"];?></a></p>
        <div class="publisherstyle">
            Tanggal Publikasi: <?php echo date("d M Y",strtotime($row["tgl"]));?> <?php echo date("H:i",strtotime($row["tgl"]));?>
        </div>
        <?php if($gambar!=""): ?>
                <p><img src="<?php echo $gambar;?>" class="newsthumbnail"></p>
							 <?php endif; ?>
							 <p> <?php echo strip_tags(word_limiter($row["isi"],60)); ?></p>
            
            
               <a class="selengkapnya" href="<?php echo $url;?>">Selengkapnya</a>
            
        
    </div>



    <?php endforeach; ?>
  <?php else: ?>
    <div class="alert alert-info">Keyword tidak ditemukan..</div>
    <?php endif; ?>


</div>
</div>
