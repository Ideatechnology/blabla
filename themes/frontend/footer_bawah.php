

<section class="baperin_ah2k">
<div class="container">
<img src="<?php echo Template::theme_url("slider/LogoFooter.png");?>">
</div>
</section>


<?php if($banner_link): ?>
<section class="client_banner">

<!--<h2 class="text-center">Dukungan Kami</h2>-->
<div class="container">
<!-- Set up your HTML -->
<div class="owl-carousel owl-theme" id="owl-carousel">

<?php foreach($banner_link as $banner_link_row): ?>
    <div class="item"><a target="" href="<?php echo $banner_link_row->link;?>"><img src="<?php echo base_url("application/modules/link/files/".$banner_link_row->file);?>"></a></div>
  
<?php endforeach; ?>

      
</div>
</div>
</section>
<?php endif; ?>


<footer class="footer" style="margin-top:20px;">

   <div style="margin-bottom:10px;padding:0px 20px 10px 10px;-webkit-box-shadow: 0px -4px 3px rgba(0, 0, 0, 0.2);
    -moz-box-shadow:    0px -4px 3px rgba(0, 0, 0, 0.2);
    box-shadow:         0px -4px 3px rgba(0, 0, 0, 0.2);">
       
      <div class="container">

        <div class="row">
        <div class="col-md-8 col-sm-8">
           

                 <div class="row footer-menu">
                  <div class="col-md-6 col-xs-12">
                <h3>Kontak</h3>
                    <ul class="nav nav-pills nav-stacked ">
                       <li class=" "><a href="#" target="_self"><i class=""></i> <i class="fa fa-map-marker fa-1x"></i>  JL. MATRAMAN RAYA JAKARTA TIMUR 13150
</a></li><li class=" "><a href="#" target="_self"><i class=""></i>  <i class="fa fa-phone"></i> 22975159</a></li><li class=" "><a href="#" target="_self"><i class=""></i> <i class="fa fa-envelope"></i> PO. BOX 2479/KBY - Jakarta 12042</a></li>                      
                      
                    </ul>
                </div>
               <div class="col-md-6 col-xs-12">
                <h3>Menu Utama</h3>
                <div class="row">
                <div class="col-md-6 col-xs-6">
                    <ul class="nav nav-pills nav-stacked ">
                      
                        <li class=" "><a href="#" target=""><i class="fa fa-angle-right"></i> SUPLEMEN</a></li><li class=" "><a href="#" target="_self"><i class="fa fa-angle-right"></i> KOLOM</a></li><li class=" ">                      
                     
                    </ul>
                    </div>

                       <div class="col-md-6 col-xs-6">
              
                    <ul class="nav nav-pills nav-stacked ">
                     <li class=" "><a href="#" target="_self"><i class="fa fa-angle-right"></i> DARI REDAKSI</a></li>
                    <li> <a href="#" target="_self"><i class="fa fa-angle-right"></i> ARTIKEL</a></li>                      
                    
                    </ul>
                </div>

                    </div>
                </div>
             
              

              </div>
          </div>
         <div class="col-md-4 col-sm-4">
          
          
            <h4 style="margin-top:30px;">Di Sponsori Oleh </h4>
            <div class="socials-wrap" style="margin-left: 0px;">
                    
                   
         

            <img src="<?php echo Template::theme_url("slider/secure.png");?>"  style="width:100px;">

          </div>
          
   
          </div>
          
        </div>
      </div>

      </div>
      <div style="background-color: #000!important;">
       <div class="container">
      
        <div class="row">
        <div class="col-md-12">
            <div class="footer-left ">
              <br />


            <p style="color:#fff;text-align: center">Copyright © 2017 Jurnal Medika</p>
</div>
          </div>
          

        </div>

      </div>
      </div>
    </footer>



 <style type="text/css" style="display: none !important;">
	
	body {
		overflow-x: hidden;
	}
     
</style>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo Template::theme_url("js/jquery.min.js");?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo Template::theme_url("js/bootstrap.min.js");?>"></script>
    <script src="<?php echo Template::theme_url("plugins/owl/dist/owl.carousel.min.js");?>"></script>
      <script src="<?php echo Template::theme_url("js/bootstrapValidator.min.js");?>"></script>
          <script src="<?php echo Template::theme_url("plugins/metis/metisMenu.js");?>"></script>
      <script src="<?php echo Template::theme_url("js/jasny-bootstrap.min.js");?>"></script>
  
    <script>

    $(document).ready(function() {
  $('#menu1').metisMenu();

  $("#sidebarproduk").click(function(){
      $(".sidebaroduk").toggle();
  });

$('#owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

$('#owl-carousel-produk').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});


  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
    if ($(window).scrollTop() > 180) {
      $('#nav_bar').addClass('navbar-fixed-top');
      $("#logo").show();
    }
    if ($(window).scrollTop() < 181) {
      $('#nav_bar').removeClass('navbar-fixed-top');
      $("#logo").hide();
    }
  });



     
 
});

    </script>

<script>

/* lazyload.js (c) Lorenzo Giuliani
 * MIT License (http://www.opensource.org/licenses/mit-license.html)
 *
 * expects a list of:  
 * `<img src="blank.gif" data-src="my_image.png" width="600" height="400" class="lazy">`
 */

!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);

</script>



 <?php echo Assets::js(); ?>



  </body>
</html>
