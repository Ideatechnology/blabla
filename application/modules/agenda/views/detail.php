<div style="padding:20px;">
<h1 class="judul">Agenda</h1><hr / style="border:solid 1px #FF3300">
<div class="kotak_box">

<h4><?php echo $rows->kategori_bahasa?> - <?php echo $rows->judul_agenda_bahasa;?> </h4>

<i class="icon-calendar icon-blue"></i> <?php echo lang('form_field_tanggal');?> : <?php echo date("Y M D", strtotime($rows->tgl_agenda));?> <br />
<i class="icon-time icon-blue"></i> <?php echo lang('form_field_time');?> :<?php echo $rows->time_start ." s/d ". $rows->time_ends;?><br />
<i class="icon-user icon-blue"></i> Penanggung Jawab :<?php echo $rows->penanggung_jawab;?><br />
<i class="icon-group-user icon-blue"></i> Bidang :<?php echo $rows->kategori;?>

<br />
<p><?php echo $rows->isi_agenda_bahasa;?> 
                                                
<p><a href="<?php echo site_url("agenda");?>"><?php echo lang('bf_go_back');?></a></p>

</div> 

</div> 