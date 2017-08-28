<div class="container">

<div>
	<h1 class="page-header"><span class="glyphicon glyphicon-question-sign
"></span> Tanya Jawab</h1>
</div>

<a href="<?php echo site_url("tanyajawab/form");?>" class="btn btn-primary" style="margin-bottom:20px">Isi Form Tanya Jawab</a>
<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<div class="list-group">		
		<?php foreach ($records as $record) : ?>
			
			<a href="<?php echo site_url();?>tanyajawab/detail/<?php echo $record->id;?>" class="list-group-item">
      <img src="<?php echo Template::theme_url("images/people.png");?>" class="pull-left" style="margin-bottom:50px;">
        <h5 class="list-group-item-heading"><?php echo $record->gbname;?> - Tanggal : <?php echo date("d M Y",strtotime($record->gbdate));?> Jam <?php echo date("H:i",strtotime($record->gbdate));?></h5>
        <p class="list-group-item-text" style="">
        	<strong>Tanya</strong> : <?php echo $record->gbtext;?><br /><br />
        	<strong>Jawab</strong> : <?php echo $record->gbcomment!=""?$record->gbcomment:"Belum di jawab";?>
        </p>
       <div style="clear:both"></div>
      </a>

		<?php endforeach; ?>
		</div>

<div class="custom-pagination pagination-location">
<?php echo $this->pagination->create_links(); ?>
</div>

<?php endif; ?>
</div>