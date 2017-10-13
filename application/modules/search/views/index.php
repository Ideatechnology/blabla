<br />
<div class="row">
  <div class="col-md-6">
  <h2>Hasil Pencarian <br /><small>Sekitar <?php echo $jumlah;?> hasil ditemukan</small></h2>
</div>
  <div class="col-md-6">
  <br /><br />
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
<div class="col-md-12">

<hr />


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
      $gambar = base_url()."assets/img/no_image.png";
        $url = $row["url"]."pages/detail/".$row["id"]."-".url_title($row["judul"]);
    }

    ?>

<div class="media">
  <a class="pull-left" href="#">
     <?php if($gambar!=""): ?>
               <img src="<?php echo $gambar;?>" style="width:150px;" class="media-object img-thumbnail">
               <?php endif; ?>
   
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a style="color:orange;font-weight: bold" href="<?php echo $url;?>"><?php echo $row["judul"];?></a></h4>
     Tanggal Publikasi: <?php echo date("d M Y",strtotime($row["tgl"]));?> <?php echo date("H:i",strtotime($row["tgl"]));?>
       

               <p> <?php echo strip_tags(word_limiter($row["isi"],60)); ?></p>
            
            
               <a class="selengkapnya" href="<?php echo $url;?>">Selengkapnya</a>
            
  </div>
</div>


          <hr /> 
        
 



    <?php endforeach; ?>
  <?php else: ?>
    <div class="alert alert-info">Keyword tidak ditemukan..</div>
    <?php endif; ?>


</div>
</div>
