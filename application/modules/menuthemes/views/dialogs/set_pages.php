 <script src="<?php echo Template::theme_url('js/plugins/dataTables/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo Template::theme_url('js/plugins/dataTables/dataTables.bootstrap.js'); ?>"></script>  
<link href="<?php echo Template::theme_url('css/plugins/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){

	  $('#tSortablex').dataTable({
	  "iDisplayLength": 5,
		  "sPaginationType": "full_numbers",
		  "bInfo": false,
		  "bPaginate": true,
		  "bProcessing": true,
		  "bServerSide": false,
		  "bLengthChange": false,
		  "aoColumns": [
			  { "bSortable": true },null,null
		  ]
	  });

  });
</script>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Data Pages</h4>
            </div>			<!-- /modal-header -->
            <div class="modal-body">

<table class="table table-striped table-bordered" id="tSortablex">
  <thead>
      <tr>
          <th width="24%">Posts Name</th>
          <th width="24%">Status Type</th>
          <th width="25%">Actions </th>
      </tr>
  </thead>
<tbody>
<?php
  $i=0;
  if($ListView){
  foreach ( $ListView as $list){
?>
<tr>
  <td><?php echo $list->judul;?></td>
  <td>
  <?php echo $list->status_tampil==0 ? 'Publish' : '';?>
  <?php echo $list->status_tampil==3 ? 'As Draft' : '';?>
   </td>
   <td>
  <button onClick="Pilihpage('<?php echo $list->id.",".mysql_real_escape_string($list->judul)."";?>')" type="button" class="btn btn-mini">Pilih</button>
 
  </td>
</tr>
 <?php $i++; }  } else{ echo '<div class="alert alert-error">Tidak ada Pages, silahkan buat dahulu..</div>'; } ?>
</tbody>
<tfoot>
<tr><td colspan="3"></td></tr>
</tfoot>
</table>
 </div>			<!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>			<!-- /modal-footer -->
