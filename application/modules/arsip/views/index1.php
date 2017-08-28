<h2 class="judul_kotak_fullborder">Regulasi</h2><br />
<ul class="nav nav-tabs" >
	<li<?php echo $filter_type == 'all' ? ' class="active"' : ''; ?>><?php echo anchor($index_url, 'Semua'); ?></li>
		<li class="<?php echo $filter_type == 'kat' ? 'active ' : ''; ?>dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
			echo 'Filter Kategori';
			echo isset($filter_role) ? ": $filter_role" : '';
			?>
			<span class="caret light-caret"></span>
		</a>
		<ul class="dropdown-menu">
			<?php foreach ($roles as $role) : ?>
			<li><?php echo anchor($index_url . 'kat-' . $role->id, $role->kategori); ?></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
<?php
$has_users = isset($users) && is_array($users) && count($users);

?>
	 <table id="tSortablex" class="table table-bordered dataTable" width="100%" cellpadding="10"> 

		<tbody>
			<?php
			if ($has_users) :
				foreach ($users as $user) :
			?>
			<tr>
				<td style="padding:10px;">
                    <h4><?php echo $user->judul;?></h4>
               <p>
<b>Publisher</b> : <?php echo $user->publisher;?>&nbsp;
<b>Penulis</b> : <?php echo $user->penulis;?>&nbsp;
<b>Tahun</b> : <?php echo $user->tahun;?>
</p>
                     <?php echo ($user->isi_arsip!="")?$user->isi_arsip."<br /><br />":"";?>
<?php
  $name = base_url().'application/modules/arsip/files/'.$user->file_data;
?>

<p>
<a class="btn btn-warning btn-mini" href="<?php echo $name; ?>">Download</a>
</p>
                </td>
			</tr>
			<?php
				endforeach;
			else :
			?>
			<tr>
				<td>Data Regulasi Kosong</td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>


 
<div id="pagination-digg">
<?php
echo $this->pagination->create_links();
?>
</div>