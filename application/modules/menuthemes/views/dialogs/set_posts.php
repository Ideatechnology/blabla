 <script src="<?php echo Template::theme_url('js/bootstrap-dataTables.js'); ?>"></script>
<link href="<?php echo Template::theme_url('css/bootstrap-dataTables.css'); ?>" rel="stylesheet" type="text/css" />

     <script>
				 $(document).ready(function(){
				
						$('#datatabledialog').dataTable({
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
                
<table class="table table-striped table-bordered" id="datatabledialog">
<thead>
    <tr>
        <th>Posts Name</th>
        <th>Status Type</th>
        <th>Actions </th>
    </tr>
</thead>
<tbody>
<?php
  $i=0;
  foreach ( $ListView as $list){
?>
<tr>
  <td><?php echo $list->judul;?></td>
  <td>
  <?php echo $list->status_tampil==0 ? 'Publish' : '';?>
  <?php echo $list->status_tampil==3 ? 'As Draft' : '';?>
   </td>
   <td>
  <button onClick="Pilih('<?php echo $list->id.",".mysql_real_escape_string($list->judul)."";?>')" type="button" class="btn btn-mini">Pilih</button>
 
  </td>
</tr>
 <?php $i++; } ?>
</tbody>
<tfoot>
<tr><td colspan="3"></td></tr>
</tfoot>
 </table>
