
 <?php echo theme_view('head'); ?>

    <?php echo theme_view('header'); ?>

<section class="content">
<!-- untuk banner slide home -->
<?php if($slide):?>
  <div class="kotak-slide-home">

  

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                
                  <?php 
                  $no_slider = 1;
                  foreach($slide as $slide_row): ?>   
                    <div class="item <?php if($no_slider==1){ echo "active"; }?> ">
                   <a  href="<?php echo $slide_row->link;?>"> 
                   <img src="<?php echo base_url("application/modules/slide/files/".$slide_row->file);?>" style="width: 100%;">
                   </a>
                </div>
              <?php 
              $no_slider++;
              endforeach;?>
                                
                                
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>

  


</div>
<?php endif; ?>


<div class="container">
<div class="row">
<div class="col-md-8">

<div class="row">
<div class="col-md-7">
<br />
<div class="panel panel-default">
  <div class="panel-body">

<h3><a href="">Pengaruh repens Agropyron di Stone Ginjal dan Ureter Batu Persepsi Pasien of Pain</a></h3>
<p><i class="fa fa-user"></i> Admin <i class="fa fa-calendar"></i> 28 Mei 2017  <span class="label label-success">Artikel Penelitian</span></p>
<p style="text-align: justify;">NUGROHO PURNOMO

DAN ZULFIKAR ALI

Divisi Urologi, Departemen Bedah, Fakultas Kedokteran Universitas Indonesia, Rumah Sakit Cipto Mangunkusumo Rujukan
nyeri pinggang pada pasien batu ginjal dan ureter batu membutuhkan obat cepat dan tepat. Berbagai obat-obatan telah diteliti sebagai edukasi sakit di batu ginjal dan pasien ureter batu. Sebagian besar pasien nyeri pinggang yang diresepkan obat NSAID. Efek samping dari NSAID dalam hal gastroin estinal, ginjal. </p>
<a href="" class="btn btn-warning">Read More</a>
</div>
</div>
</div>
<div class="col-md-5">
<br />
<div class="panel panel-warning">
  <div class="panel-heading">More News</div>
  <div class="panel-body">
    <a href="">
      Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat


    </a><br />
    <i class="fa fa-user"></i> Admin <i class="fa fa-calendar"></i> 28 Mei 2017  <span class="label label-success">Artikel Penelitian</span>
    <hr />
    <a href="">
      Hubungan ANTARA Homosistein DENGAN Kepadatan Mineral Tulang Berdasarkan Usia dan Jenis Kelamin PADA Orang Dewasa Sehat


    </a><br />
    <i class="fa fa-user"></i> Admin <i class="fa fa-calendar"></i> 28 Mei 2017  <span class="label label-success">Artikel Penelitian</span>




  </div>
  <div class="panel-footer"><a href="" class="btn btn-warning">Index News</a></div>
</div>


</div>

</div>

<!-- banner iklan -->
<center>
<img src="<?php echo Template::theme_url("img/Baner-tengah-ok.gif");?>" class="img-responsive" style="width:100%">
</center>
<br />
<div class="row">

<div class="col-md-6">

<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Dari Redaksi <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Waspadai Virus Zika</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>



    </div>
    <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>
    </div>

</div>


<div class="col-md-6">

<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Editorial <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>

</div>
<div class="row">


<div class="col-md-6">

<div class="panel panel-default">
  <div class="panel-body artikel-body">

<h4>Saripati <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>

<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Artikel Penelitian  <i class="fa fa-angle-right pull-right"></i></h4>
<hr />
<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>

</div>
<div class="row">

<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Artikel Konsep  <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>


<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Fokus   <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>

</div>
<div class="row">


<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Studi Kasus    <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>


</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>

</div>

</div>


<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Penyegaran Kompetensi     <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Problematika Kesehatan Wanita Usia Lanjut</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

</div>
 <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>
   
</div>

</div>

</div>


<div class="panel panel-default">
  <div class="panel-body artikel-body">
<h4>Kolom     <i class="fa fa-angle-right pull-right"></i></h4>
<hr />

<div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Waspadai Virus Zika</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

    <div class="media">
           
      <div class="media-body">
        <h4 class="media-heading"> <a  href="#">
      Waspadai Virus Zika</a>
      </h4>
        <p>

          <i class="fa fa-user"></i>
      <span itemprop="name">Website Administrator</span> 

       <i class="fa fa-folder"></i>
                  <span itemprop="genre">Edisi No 10 Vol XLII - 2016</span>
       
 <i class="icon-calendar"></i>
        <time datetime="2016-11-03T05:55:33+00:00" itemprop="datePublished">
          03 November 2016        </time>
       </p>
      </div>
    </div>

    </div>
     <div class="panel-footer"><a href="" class="btn btn-warning">+ Selengkapnya</a></div>
   
    </div>


<!-- banner iklan -->
<center>
<img src="<?php echo Template::theme_url("img/Bnaer-bawah.gif");?>" class="img-responsive" style="width:100%">
</center>



</div>

<div class="col-md-4">

 <?php echo theme_view('sidebar'); ?>

</div>

</div>
</div>


</section>
    <?php echo theme_view('footer_bawah'); ?>

    
