<h1 class="judul"><?php echo lang('file_judulundang');?></h1>
<hr / style="border:solid 1px #FF3300">
<div class='section'>    
                  <div class='addthis_toolbox addthis_default_style'>
                  <a class='addthis_button_preferred_1'></a>
                  <a class='addthis_button_preferred_2'></a>
                  <a class='addthis_button_preferred_3'></a>
                  <a class='addthis_button_preferred_4'></a>
                  <a class='addthis_button_compact'></a>
                  <a class='addthis_counter addthis_bubble_style'></a>
                  </div>
                  <script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8aab4674f1896a'></script>
                  </div>



<form class="navbar-form navbar-right" role="search" method="get">

  <div class="form-group ">
    <input type="text" name="keyword" class="form-control col-xs-2" placeholder="Search" value="<?php echo @$_GET["keyword"]?$_GET["keyword"]:"";?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>




<ul class="nav nav-tabs" >
	<li<?php echo $filter_type == 'all' ? ' class="active"' : ''; ?>><?php echo anchor($index_url, lang('file_semua')); ?></li>
		<li class="<?php echo $filter_type == 'kat' ? 'active ' : ''; ?>dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
			echo lang('file_filter');
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
	 <table id="tSortablex" class="table table-bordered dataTable" width="100%"> 

		<tbody>
			<?php
			if ($has_users) :
				foreach ($users as $user) :
			?>
			<tr>
				<td>
                    <h4><?php echo $this->session->userdata('site_lang')=="indonesia"?$user->judul:$user->judul_english;?></h4>
                    <p><?php echo lang('file_form_field_tanggal');?> : <?php echo date("d M Y", strtotime($user->tgl_arsip));?></p>
                     <em><?php echo $this->session->userdata('site_lang')=="indonesia"?$user->isi_arsip:$user->isi_arsip_english;?><br /><br /></em>


<div class="btn-group btn-group-xs">
	<a class="btn btn-default" href="<?php echo base_url();?>dmdocuments/<?php echo $user->file_data;?>">
    <span class="glyphicon glyphicon-download"></span> <?php echo lang('file_download');?></a>
   <?php

$atts = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0',
			  'class'	   => 'btn btn-default',
            );

echo anchor_popup('arsip/view/'.$user->id, '<span class="glyphicon glyphicon-eye-open"></span> View', $atts);

?>
 
</div>
                </td>
			</tr>
			<?php
				endforeach;
			else :
			?>
			<tr>
				<td>
                <div class="alert alert-danger">
                Data Regulasi Kosong
                </div>
                </td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>


 
<div id="pagination-digg">
<?php
echo $this->pagination->create_links();
?>
</div>