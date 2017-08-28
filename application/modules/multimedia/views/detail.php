
<div  class="bg-newsevent">

<h1 style="text-align:left"><?php echo $row->judul;?></h1>

<?php
$url=explode("=",$row->file_multimedia);
?>
 <iframe width="633px" height="356px" src="https://www.youtube.com/embed/<?php echo $url[1];?>" frameborder="0" allowfullscreen></iframe>
<div class="well" style="width:100%">
<p><span class="glyphicon glyphicon-time"></span> <?php echo lang("video_uploaddate");?> : <?php echo date("d M Y", strtotime($row->tgl_multimedia));?> | <?php echo lang("video_by");?> <?php echo $row->author;?></p>
<p><?php echo ($this->session->userdata("site_lang")=="indonesia")?$row->isi:$row->isi_english;?></p>
</div>


<?php if($query): ?>
<h1><?php echo lang("video_other");?></h1>
<hr />

  <ul class="media-list">
<?php foreach($query as $row): ?>
<li class="media">		
<h3>
<a href="<?php echo site_url("multimedia/detail/".$row->id);?>"><?php echo ($this->session->userdata("site_lang")=="indonesia")?$row->judul:$row->judul_english;?></a>
</h3>
<p>
<?php echo lang('video_uploaddate')?> : <?php echo date("d M Y", strtotime($row->tgl_multimedia));?> | <?php echo lang("video_by");?> <?php echo $row->author;?>

</p>
<a  href="<?php echo site_url("multimedia/detail/".$row->id);?>" title="<?php echo character_limiter($row->judul, 20);?>">
<img class="img-polaroid img-thumbnail pull-left" style="width:300px;height:169px;margin-right:10px;" src="<?php echo $row->gambar_multimedia;?>" alt="<?php echo $row->judul;?>" />
</a>
<div class="media-body">

<p>
<?php echo ($this->session->userdata("site_lang")=="indonesia")?$row->isi:$row->isi_english;?>
</p>

</div> 

<?php endforeach; ?>

</ul>
<?php endif; ?>


</div>
	

    

    