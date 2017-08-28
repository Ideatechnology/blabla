<style>
.thumb {
    margin-bottom: 10px;
}
</style>
<div style="padding:10px 0px 0px 0px">

<h1 class="judul"><a href="<?php echo site_url("galerifoto");?>">Gallery Photo
 &#187; <?php echo $galerifoto[0]->kategori;?></a></h1>

<hr / style="border:solid 1px #FF3300">
<div class='section'>
                  <div class='addthis_toolbox addthis_default_style'>
                  <a class='addthis_button_preferred_1'></a>
                  <a class='addthis_button_preferred_2'></a>
                  <a class='addthis_button_preferred_3'></a>
                  <a class='addthis_button_preferred_4'></a>
                  <a class='addthis_button_compact'></a>
                  <a class='addthis_counter addthis_bubble_style'></a>
                  </div>
                  <script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8aab4674f1896a'></script>
                  </div>
<br />
   <!-- The container for the list of example images -->



<div class="row">

  <?php foreach($galerifoto as $row){ ?>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail fancybox" data-fancybox-group="gallery" title="<?php echo $row->title_foto;?>" href="<?php echo base_url()."application/modules/galerifoto/images/".$row->file_foto;?>">
                  <div style="height:200px;background-repeat:no-repeat;background-image:url('<?php echo base_url()."application/modules/galerifoto/images/".$row->file_foto;?>');background-size:cover">

                  </div>
                </a>
            </div>

             <?php } ?>
        </div>


</div>
