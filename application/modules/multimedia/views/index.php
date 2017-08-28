<?php
if ($this->session->userdata('site_lang')=="english"): 
	
		$tgl1 = "Date : ";
		$selengkapnya = "Read more...";
		else : 
		$tgl1 = "Tanggal Posting : ";
		$selengkapnya = "Selengkapnya";
		endif;
		?>

  <div class="breadcrumb"><a style="text-decoration:none" href="<?php echo site_url();?>"><?php echo lang('bf_home');?></a> - <a href="<?php echo site_url("multimedia");?>">Video </a> - 
   <?php echo isset($rowcategories)?" ".$rowcategories."":"";?>
</div>

<?php if($gs): ?>

<?php foreach($gs as $komen){ ?>

 <div class="produkhukumitem">
        <p class="titleundang"><a href="<?php echo site_url("multimedia/detail/".$komen->id);?>"><?php echo ($this->session->userdata("site_lang")=="indonesia")?$komen->judul:$komen->judul_english;?></a></p>
        <div class="publisherstyle">
            Tanggal Publikasi: <?php echo date("d M Y", strtotime($komen->tgl_multimedia));?>  | Oleh <?php echo $komen->author;?>
        </div>
			
                <p><img src="<?php echo $komen->gambar_multimedia;?>" class="newsthumbnail"></p>
							 
							 <p><?php echo ($this->session->userdata("site_lang")=="indonesia")?$komen->isi:$komen->isi_english;?></p>
            
            
               <a class="selengkapnya" href="<?php echo site_url("multimedia/detail/".$komen->id);?>">Selengkapnya</a>
            
        
    </div>


<?php } ?>

<?php
else:
	echo lang("video_msgnoresult");
endif;
?>


<div id="pagination-digg"><?php echo $links;?></div>
