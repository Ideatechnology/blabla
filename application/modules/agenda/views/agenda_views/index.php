<div style="padding:20px;">
<h1 class="judul">Agenda</h1><hr / style="border:solid 1px #FF3300">


<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Tanggal</th>
<th>Waktu</th>
<th>Tempat</th>
<th>Acara</th>
<th>PJ/Pelaksanan</th>
</tr>
</thead>
<tbody>
<?php 
if($relatedPosts){
?>
<?php foreach($relatedPosts as $row_post){ ?>
<tr>
<td style="width:100px"><?php echo  date("d M Y", strtotime($row_post->tgl_agenda));?></td>
<td style="width:120px"><?php echo  $row_post->time_start;?> - <?php echo  $row_post->time_ends;?></td>
<td><a href="<?php echo site_url("agenda/detail/".$row_post->id_agenda);?>"><?php echo  $row_post->judul_agenda;?></a></td>
<td><?php echo  word_limiter(strip_tags($row_post->isi_agenda),10);?></td>
<td><?php echo  $row_post->penanggung_jawab;?></td>
</tr>
<?php 
}
}
?>
</tbody>
</table>

<div id="pagination-digg">
<?php echo $this->pagination->create_links(); ?>
</div>
	

</div>
