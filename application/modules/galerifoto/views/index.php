
<style>
.thumb {
    margin-bottom: 10px;
}
</style>
<div style="padding:0px 0px 0px 0px">

<h1 class="judul">Gallery Foto</h1>
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
<div class="row">
<?php

if($gs):

foreach($gs as $rows){
if($rows->jumgaleri>0){

if ($this->session->userdata('site_lang')) {
			if($this->session->userdata('site_lang')=="indonesia")
			$albumfoto=$rows->kategori;
			else
			$albumfoto=$rows->kategori_english;

        } else {
        	$albumfoto=$rows->kategori;

        }

  	?>

<div class="col-lg-4 col-md-4 col-xs-6 thumb">
       
 <a class="thumbnail" title="<?php echo $rows->title_foto;?>" href="<?php echo site_url("galerifoto/detail/".$rows->id_kategori);?>">
                  <div style="height:200px;background-repeat:no-repeat;background-image:url('<?php echo base_url()."/application/modules/galerifoto/images/".$rows->file_foto;?>');background-size:cover">
                  </div>
                  
                  <div style="height:50px;margin-top:5px;">
      <p style="text-align:center"> <?php echo $albumfoto;?></p>
     </div>
                </a>

       </div>

  <?php } }  ?>

  <?php

  else : echo '<em>Mohon maaf, belum ada album foto</em>' ;

 endif;

 ?>
</div>
 <div style="clear:both"></div>
<div class="pagination"><?php echo $links;?></div>

</div>
