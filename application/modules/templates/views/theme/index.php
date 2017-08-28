<?php

$num_columns	= 6;
$can_delete	= $this->auth->has_permission('Templates.Transaksi.Delete');
$can_edit		= $this->auth->has_permission('Templates.Transaksi.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">

<div class="row">
<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="<?php echo base_url()."application/modules/templates/images/".$record->gambar ?>" style="width: 300px; height: 200px;">
          <div class="caption">
            <h3><?php e($record->judul); ?></h3>
             <p>
             <?php if($record->aktif=="N"): ?>
              <?php echo anchor(SITE_AREA . '/theme/templates/edit/' . $record->id_templates, '<span class="icon-pencil"></span> Aktifkan','class="btn btn-mini btn-primary"'); ?>
             <?php else: ?>
            	<a href="#" class="btn btn-mini btn-success" disabled="disabled" >Sudah Aktif</a> 	
             <?php endif; ?>
          </div>
        </div>
      </div>
      <?php
					endforeach;
				endif;
				?>
    
    </div>

</div>