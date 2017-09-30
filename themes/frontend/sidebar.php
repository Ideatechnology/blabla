
<div class="panel panel-default">
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

<h2>Artikel</h2>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#artikelterbaru" data-toggle="tab">Terbaru</a></li>
  <li><a href="#artikelterpopuler" data-toggle="tab">Terpopuler</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="artikelterbaru">
    
    <div class="list-group">
                  
      <a href="" class="list-group-item">

        <h4 class="list-group-item-heading">Menjaga Profesionalisme Praktik Kedokteran</h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> 28 Mei 2017</small>
  <br>
        Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat           </p> 
        
      </a>
            
      <a href="" class="list-group-item">

        <h4 class="list-group-item-heading">Menjaga Profesionalisme Praktik Kedokteran </h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> 28 Mei 2017</small>
  <br>
        Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat           </p> 
        
      </a>
             </div>

  </div>
  <div class="tab-pane" id="artikelterpopuler">...</div>
 
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
    
    <div class="list-group">
                  
      <a href="" class="list-group-item">

        <h4 class="list-group-item-heading">Menjaga Profesionalisme Praktik Kedokteran</h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> 28 Mei 2017</small>
  <br>
        Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat           </p> 
        
      </a>
            
      <a href="" class="list-group-item">

        <h4 class="list-group-item-heading">Menjaga Profesionalisme Praktik Kedokteran </h4>
       
        <p class="list-group-item-text">
        <small><i class="fa fa-calendar"></i> 28 Mei 2017</small>
  <br>
        Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat           </p> 
        
      </a>
             </div>

  </div>
  <div class="tab-pane" id="kegiatanterpopuler">...</div>
 
</div>
