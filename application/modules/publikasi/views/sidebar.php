<div style="margin-top:100px;">

<h2 style="border-bottom: 2px solid #e94f1d;margin-bottom:20px;padding-left:5px;padding-right:5px;">Kategori<h2>
  <div class="panel panel-default">
    <div class="panel-body" style="padding:10px;">

      
    	 <?php if($kategori_publikasi): ?>

        <?php foreach($kategori_publikasi as $kategori_publikasi_row): ?>

          <div class="media"> 
            <div class="media-left"> 
              <a href="<?php echo site_url("publikasi/index/".$kategori_publikasi_row->id);?>"> 
              <?php if($kategori_publikasi_row->gambar==""): ?>
                  <img class="media-object" src="<?php echo Template::theme_url("img/magazine.png");?>" data-holder-rendered="true" style="width: 64px; height: 64px;"> 
                <?php else: ?>
                  <img class="media-object" src="<?php echo base_url()."assets/publikasi/images/".$kategori_publikasi_row->gambar;?>" data-holder-rendered="true" style="width: 64px; height: 64px;"> 
                <?php endif; ?>
             
              </a> 
            </div> 
            <div class="media-body"> 
              <h4 class="media-heading"><a href="<?php echo site_url("publikasi/index/".$kategori_publikasi_row->id);?>"> <?php echo $kategori_publikasi_row->kategori;?></a></h4> 
             <small> Jumlah ( <?php echo $kategori_publikasi_row->jumlah;?> )</small>
            </div> 
          </div>

      <?php endforeach; ?>

    <?php endif; ?>

</div>
</div>


</div>