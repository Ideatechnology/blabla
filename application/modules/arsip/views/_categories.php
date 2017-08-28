<?php 

if ($this->session->userdata('site_lang')=='indonesia') {
				  if ($this->session->userdata('site_lang')=='indonesia') {
    				$nama_kategori =$kategori->kategori;
					$tombolcari="Cari";
					
							$message="Data Regulasi Kosong";
					}else{
					$nama_kategori=$kategori->kategori_english;
							$tombolcari="Search";
							$message="Regulation Data is Empty";
				
					}
	    } else {
						$tombolcari="Search";
			
							$message="Data Regulasi Kosong";
            		$nama_kategori =$kategori->kategori_english;
        }

?>

<h1 class="judul"><?php echo $nama_kategori;?></h1>
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
<br />

<form role="search" method="get">

<div class="col-xs-6" style="padding-left:0px">
 <div class="input-group">
      <input type="text" name="keyword"  class="form-control" placeholder="Search" value="<?php echo @$_GET["keyword"]?$_GET["keyword"]:"";?>">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" ><?php echo $tombolcari;?></button>
      </span>
    </div><!-- /input-group -->
 </div><!-- /input-group -->

</form>
<br /><br /><br />
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
                    <h4 style="font-size:16px"><?php echo $this->session->userdata('site_lang')=="indonesia"?$user->judul:$user->judul_english;?></h4>
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
 
 <a class="btn btn-default" href="<?php echo site_url("arsip/detail/".$user->id);?>">
	<span class="glyphicon glyphicon-list-alt"></span> Detail
    </a>
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
                <?php echo $message;?>
				
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

<br /><br />