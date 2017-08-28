<?php echo form_open(SITE_AREA."/plugin/testimoni/isiJawab", 'class="form-horizontal"'); ?>

<input type="hidden" value="<?php echo $this->uri->segment(5);?>" name="id">
<input type="hidden" value="<?php echo @$forum->email;?>" name="email">
<input type="hidden" value="<?php echo @$forum->komentar;?>" name="pertanyaan">
<input type="hidden" value="<?php echo $current_user->display_name;?>" name="penjawab">
<input type="hidden" value="<?php echo @$forum->pengirim;?>" name="pengirim">

<div class="admin-box">

<h3><?php echo lang("guesbook_judul_jawab")?></h3>
<table class="table">
<tr>
<td><?php echo lang("guesbook_form_tanggal")?></td>
<td><?php echo date('d M Y', strtotime($forum->tgl_kirim));?></td>
</tr>
<tr>
<td><?php echo lang("guesbook_form_pengirim")?></td>
<td><?php echo $forum->pengirim;?></td>
</tr>
<tr>
<td>Email </td>
<td><?php echo $forum->email;?></em></td>
</tr>
<tr>
<td><?php echo lang("guesbook_form_komentar")?></td>
<td> 
<?php echo $forum->komentar; ?>
</td>
</tr>

<tr>
<td><?php echo lang("guesbook_form_jawab").lang('bf_form_label_required')?></td>
<td> 
<textarea name="jawab" class="form-control" data-val="true" data-val-required="<?php echo lang('bf_required_note').lang('guesbook_form_jawab');?>" style="height: 200px"><?php echo isset($forum->jawaban) ? $forum->jawaban :'' ; ?></textarea>
 <br />
     <span class="field-validation-valid text-error" data-valmsg-for="jawab" data-valmsg-replace="true"></span>
</td>
</tr>

</table>

<div class="form-actions">
<input name="newKategory" type="submit" class="btn btn-primary" value="<?php echo lang("guesbook_action_kirim")?>" />
&nbsp;
<a class="btn btn-primary" href="<?php echo site_url(SITE_AREA."/plugin/testimoni/approve");?>"><?php echo lang("bf_go_back")?></a>
</div>
</div>

<?php echo form_close();?>