<?php

  if($Posts){
  
  //translate
		if ($this->session->userdata('site_lang')=="english"): 
		$b_judul = $Posts->judul_english; 
		$b_isi = $Posts->isi_english;
		$tgl = "Date : ";
		$wb = "Write By : ";
		$rd = "Read : ";
		$kat = "Category  : ";
		$ktg=$kategori->kategori_english;
		else : 
		$b_judul = $Posts->judul; 
		$b_isi = $Posts->isi;
		$tgl = "Tanggal Posting : ";
		$wb = "Penulis : ";
		$rd = "Dibaca : ";
		$kat = "Kategori  : ";
		$ktg=$kategori->kategori;
		endif;
  

?>

<br />
<h2><?php echo $b_judul;?></h2>
<p class="lead">
                    <?php echo $wb; ?> <?php echo $Posts->author;?>
                </p>
<hr />
<p><span class="glyphicon glyphicon-time"></span> 
<?php echo $tgl; ?><?php echo  date("d M Y H:i", strtotime($Posts->created_on));?>  Wib 
| <?php echo $rd; ?> <?php echo $Posts->baca;?> |
<?php echo $kat; ?> <a href="<?php echo site_url("post/categories/".str_replace('=','',base64_encode($kategori->id))."/".url_title(strtolower($ktg),'dash'));?>"><?php echo $ktg;?></a> 
		
</p>
<hr />

<center>				  
<?php 
if($Posts->set_img=="thumb" && $Posts->set_img!="none" ):
echo ($Posts->image_data!="" && $Posts->image_data!="noimage.png")?img(array($path_image.image_thumb($Posts->image_data),"style"=>"margin:0px 10px 10px 0px;width:100%","class"=>"pull-left img-thumbnail thumbnail")):''; 
endif; 

if($Posts->set_img=="full" && $Posts->set_img!="none" ):
echo ($Posts->image_data!="" && $Posts->image_data!="noimage.png")?img(array($path_image.$Posts->image_data,"style"=>"margin-bottom:20px;width:100%","class"=>"img-thumbnail thumbnail")):''; 
echo ($Posts->image_data_desc!="")?'<p class="text-center">Keterangan Foto : '.$Posts->image_data_desc.'</p>':"";
endif;
?>
</center>

<?php 
#isi text
echo ($Posts->isi!="")?$b_isi:$Posts->slug_judul;
?>
        

<div style="clear:both"></div>

<div style="clear:both"></div>

<!-- 
UNTUK POSTINGAN TERKAIT
-->
<?php if($terkait): ?>
<br />
<h1 style="text-align:left"><?php echo lang('post_related');?><hr /></h1>
<dl class="uk-description-list-line">
<?php foreach($terkait as $row_terkait){
//translate
		if ($this->session->userdata('site_lang')=="english"): 
		$b_judul1 = $row_terkait->judul_english; 
		$b_slug_judul = $row_terkait->slug_judul_english;
		$tgl1 = "Date : ";
		$selengkapnya = "Read more...";
		else : 
		$b_judul1 = $row_terkait->judul; 
		$b_slug_judul = $row_terkait->slug_judul;
		$tgl1 = "Tanggal : ";
		$selengkapnya = "Selengkapnya..";
		endif;

 ?>
<dt>

<h4 class="uk-text-bold">
<a style="color:#000" href="<?php echo site_url('blog/'.$row_terkait->id.'-'.url_title($b_judul1, 'dash'));?>">
<?php echo $b_judul1;?></a>
</h4>
</dt>


<dd>

<?php 
$img=explode(".",$row_terkait->image_data);
echo ($row_terkait->image_data!="" && $row_terkait->image_data!="noimage.png")?img(array($path_image.image_thumb($row_terkait->image_data),"style"=>"float:left;width:150px;margin-right:15px;","class"=>"img-thumbnail")):''; ?>
<?php echo $tgl1; ?>  
<?php echo date("d M Y H:i:s", strtotime($row_terkait->created_on));?> Wib<br />
<?php echo $b_slug_judul;?>

</dd>
<div style="clear:both"></div>
 
 <?php } ?>
                              
    </dl>
<?php endif; ?>
 

 
<?php 
#jika ada komentar
  if($Posts->flag_comments == 1 ):
	  echo modules::run('post/comments/index');
  endif;
?>
           	
      
<?php
}else{
  echo '<p> '.lang('post_msgnoposting').'</p>';  
}
?> 


