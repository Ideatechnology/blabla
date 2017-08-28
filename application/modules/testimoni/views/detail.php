<h1 class="judul"><?php echo lang('guesbook_judulpublic');?></h1><hr / style="border:solid 1px #FF3300">

<div class="alert alert-info">
<?php echo lang('guesbook_datecreated');?> : <?php echo $rows->tgl_kirim ?><br />
Email :  <?php echo $rows->email ?><br />
<h6><?php echo lang('guesbook_name');?> : <?php echo $rows->pengirim ?></h6>
<p><?php echo $rows->komentar ?></p>
<h6><?php echo lang('guesbook_answered');?> : <?php echo $rows->penjawab ?></h6>
<p><?php echo $rows->jawaban ?></p>
<p><a href="<?php echo site_url("guesbook"); ?>"><?php echo lang('guesbook_back');?></a></p>
</div>

<h4><i class="icon-question-sign"></i> <?php echo lang('guesbook_commentanswer');?> (<?php echo $jumlah;?>) </h4><hr />
<?php if($gs): ?>
<ul class="media-list">
<?php
  foreach($gs as $komen){	 
?>


<li class="media">
<div class="media-body">
<h5 class="media-heading"><a href="<?php echo site_url("guesbook/detail/".$komen->id); ?>"><?php echo $komen->pengirim;?></a></h5>
<em><small> <i class="icon-calendar icon-blue"></i> <?php echo lang('guesbook_datecreated');?> : <?php echo $komen->tgl_kirim;?><br /></small></em>
<h6><?php echo lang('guesbook_question');?></h6>
<p >
<?php echo word_limiter($komen->komentar,50);?>
 ...<a href="<?php echo site_url("guesbook/detail/".$komen->id); ?>"><?php echo lang('guesbook_more');?></a>
</p>
<hr />
</div>
</li>

                                                
<?php } ?>
</ul>
<?php
   else:
	   echo lang('guesbook_msgnoresult');
  endif;
?>
                       
                      
<div id="pagination-digg"><?php echo $links;?></div><br />
                                              
           