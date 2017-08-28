<div class="pages bg-newsevent">
<?php
 if($pages){

		$tgl = "Date : ";
		$wb = "Posted By : ";
		$rd = "Read : ";
		

?>


<h1><?php echo @$pages->judul_page_bahasa;?></h1> 
<hr />	  
 
<?php echo @$pages->isi_page_bahasa;?> 

	
<?php if(@$pages->files!=""): ?>
<p>
<a href="<?php echo base_url()."assets/page/files/".$pages->files;?>" target="_blank">Download File</a>
</p>
<?php endif; ?>

<?php }else{?>

<div class="alert alert-info fade in">
<a class="close" data-dismiss="alert">×</a>
<p><b>Maaf, Halaman Belum Ada Postingan.</b></p>
</div> 

<?php } ?> 
    
	
	
	</div>
	
	