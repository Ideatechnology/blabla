<div class="container">

<h2>Detail Tanya Jawab</h2>
<hr />
<div class="row">
<div class="col-md-8">
<table class="table table-bordered">
<tr>
<td>Nama Lengkap </td>
<td>: <?php echo $detail->gbname;?></td>
</tr>
<tr>
<td style="width:200px;">Tanggal </td>
<td>: <?php echo date("d M Y",strtotime($detail->gbdate));?> Jam <?php echo date("H:i",strtotime($detail->gbdate));?></td>
</tr>
<tr>
<td>Subjek </td>
<td>: <?php echo $detail->gbtitle;?></td>
</tr>
<tr>
<td>Alamat </td>
<td>: <?php echo $detail->gbloca;?></td>
</tr>
<tr>
<td>Email</td>
<td>: <?php echo $detail->gbmail;?></td>
</tr>
<tr>
<td>Link Website</td>
<td>: <?php echo $detail->gbpage;?></td>
</tr>
<tr>
<td>Pertanyaan</td>
<td>: <?php echo $detail->gbtext;?></td>
</tr>

<tr>
<td>Jawaban</td>
<td>: <?php echo $detail->gbcomment;?></td>
</tr>

</table>
<a href="<?php echo site_url("tanyajawab");?>" class="btn btn-primary">Kembali</a>
</div>
</div>

</div>
<br />