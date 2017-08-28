
 <?php echo theme_view('head'); ?>

    <?php echo theme_view('header'); ?>

   

    
<section class="content">
<div class="container">
<div class="row">
<div class="col-md-4">
<br />
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Terbaru</a></li>
  <li><a href="#profile" data-toggle="tab">Terpopuler</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
    
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
  <div class="tab-pane" id="profile">...</div>
 
</div>
</div>
     <div class="col-md-8">           
 <?php
        echo isset($content) ? $content : Template::content();
    ?>
    </div>

     </div>
     </div>
</section>



    <?php echo theme_view('footer_bawah'); ?>

    