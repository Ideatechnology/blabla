
<div class="panel panel-default" style="margin-top:20px;">
   <div class="panel-heading"><h4>Dari Redaksi     <i class="fa fa-angle-right pull-right"></i></h4></div>
  
  <div class="panel-body">


<?php if($redaksi): ?>
  <?php foreach($redaksi as $redaksi_row): ?>
<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="<?php echo site_url("blog/".$redaksi_row->id."-".url_title($redaksi_row->judul));?>">
      <?php echo $redaksi_row->judul;?></a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name"><?php echo $redaksi_row->author;?></span> 

       
 <i class="fa fa-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          <?php echo date("d M Y H:i",strtotime($redaksi_row->created_on));?>      </time>
       </p>
      </div>
    </div>
      <?php endforeach; ?>
<?php endif; ?>


    </div>
    <div class="panel-footer"><a href="<?php echo site_url("post/107-dari-redaksi");?>" class="btn btn-warning">+ Selengkapnya</a></div>
    </div>


<div class="panel panel-default">
  <div class="panel-heading"><h4>Editorial     <i class="fa fa-angle-right pull-right"></i></h4></div>
  
  <div class="panel-body">

<?php if($editorial): ?>
  <?php foreach($editorial as $redaksi_row): ?>
<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="<?php echo site_url("blog/".$redaksi_row->id."-".url_title($redaksi_row->judul));?>">
      <?php echo $redaksi_row->judul;?></a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name"><?php echo $redaksi_row->author;?></span> 

       
 <i class="fa fa-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          <?php echo date("d M Y H:i",strtotime($redaksi_row->created_on));?>      </time>
       </p>
      </div>
    </div>
        <?php endforeach; ?>
<?php endif; ?>

</div>
 <div class="panel-footer"><a href="<?php echo site_url("post/104-editorial");?>" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

<div class="panel panel-default">
  <div class="panel-heading"><h4>Kolom  <i class="fa fa-angle-right pull-right"></i></h4></div>
  <div class="panel-body">

<?php if($kolom): ?>
  <?php foreach($kolom as $redaksi_row): ?>
<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="<?php echo site_url("blog/".$redaksi_row->id."-".url_title($redaksi_row->judul));?>">
      <?php echo $redaksi_row->judul;?></a>
      </h4>
        <p>

         
           <i class="fa fa-user"></i>
      <span itemprop="name"><?php echo $redaksi_row->author;?></span> 

       
 <i class="fa fa-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          <?php echo date("d M Y H:i",strtotime($redaksi_row->created_on));?>      </time>
       </p>
      </div>
    </div>

      <?php endforeach; ?>
<?php endif; ?>

    </div>
     <div class="panel-footer"><a href="<?php echo site_url("post/97-kolom");?>" class="btn btn-warning">+ Selengkapnya</a></div>
   
    </div>

<h2>Artikel Penelitian</h2>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#artikelterbaru" data-toggle="tab">Terbaru</a></li>
  <li><a href="#artikelterpopuler" data-toggle="tab">Terpopuler</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="artikelterbaru">
      <?php if($artikel_terbaru): ?>
    <div class="list-group">
              
      <?php foreach($artikel_terbaru as $artikel_terbaru_row): ?>

      <a href="<?php echo site_url("blog/".$artikel_terbaru_row->id."-".url_title($artikel_terbaru_row->judul));?>" class="list-group-item">

        <h4 class="list-group-item-heading"><?php echo $artikel_terbaru_row->judul;?></h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> <?php echo date("d M Y H:i",strtotime($artikel_terbaru_row->created_on));?></small>
  <br>
        <?php echo word_limiter(strip_tags($artikel_terbaru_row->isi),30); ?>           </p> 
        
      </a>

        <?php endforeach; ?>
            
    
             
             </div>
           <?php endif; ?>

  </div>
  <div class="tab-pane" id="artikelterpopuler">
    

     <?php if($artikel_terpopuler): ?>
    <div class="list-group">
              
      <?php foreach($artikel_terpopuler as $artikel_terpopuler_row): ?>

      <a href="<?php echo site_url("blog/".$artikel_terpopuler_row->id."-".url_title($artikel_terpopuler_row->judul));?>" class="list-group-item">

        <h4 class="list-group-item-heading"><?php echo $artikel_terpopuler_row->judul;?></h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> <?php echo date("d M Y H:i",strtotime($artikel_terpopuler_row->created_on));?></small>
  <br>
         <?php echo word_limiter(strip_tags($artikel_terpopuler_row->isi),30); ?>           </p> 
        
      </a>

        <?php endforeach; ?>
            
    
             
             </div>
           <?php endif; ?>

  </div>
 
</div>



<h2>Kegiatan</h2>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#kegiatanterbaru" data-toggle="tab">Terbaru</a></li>
  <li><a href="#kegiatanterpopuler" data-toggle="tab">Terpopuler</a></li>
  
</ul>


<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="kegiatanterbaru">
      
      <?php if($kegiatan_terbaru): ?>
    <div class="list-group">
                  
      <?php foreach($kegiatan_terbaru as $kegiatan_terbaru_row): ?>

      <a href="<?php echo site_url("blog/".$kegiatan_terbaru_row->id."-".url_title($kegiatan_terbaru_row->judul));?>" class="list-group-item">

        <h4 class="list-group-item-heading"><?php echo $kegiatan_terbaru_row->judul;?></h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> <?php echo date("d M Y H:i",strtotime($kegiatan_terbaru_row->created_on));?></small>
  <br>
         <?php echo word_limiter(strip_tags($kegiatan_terbaru_row->isi),30); ?>          </p> 
        
      </a>
    <?php endforeach; ?>

            
     
             </div>

           <?php endif; ?>

  </div>
  <div class="tab-pane" id="kegiatanterpopuler">
    
      <?php if($kegiatan_terpopuler): ?>
    <div class="list-group">
                  
      <?php foreach($kegiatan_terpopuler as $kegiatan_terpopuler_row): ?>

      <a href="<?php echo site_url("blog/".$kegiatan_terpopuler_row->id."-".url_title($kegiatan_terpopuler_row->judul));?>" class="list-group-item">

        <h4 class="list-group-item-heading"><?php echo $kegiatan_terpopuler_row->judul;?></h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> <?php echo date("d M Y H:i",strtotime($kegiatan_terpopuler_row->created_on));?></small>
  <br>
        <?php echo word_limiter(strip_tags($kegiatan_terpopuler_row->isi),30); ?>          </p> 
        
      </a>
    <?php endforeach; ?>

            
     
             </div>

           <?php endif; ?>


  </div>
 
</div>
