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

<h1 class="judul"><?php echo $page_title;?></h1>
<hr />



<?php
$has_users = isset($users) && is_array($users) && count($users);

			if ($has_users) :?>

<form role="search" method="get">

<div class="col-xs-6" style="padding-left:0px">
 <div class="input-group">
      <input type="text" name="keyword"
			class="form-control" placeholder="Search"
			value="<?php echo @$_GET["keyword"]?$_GET["keyword"]:"";?>">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" ><?php echo $tombolcari;?></button>
      </span>
    </div><!-- /input-group -->
 </div><!-- /input-group -->

</form>
<br />

	 <table id="tSortablex" class="table table-bordered dataTable" width="100%">

		<tbody>


			<?php
				foreach ($users as $user) :
			?>
			<tr>
				<td>
                    <h4 style="font-size:16px"><?php echo $this->session->userdata('site_lang')=="indonesia"?$user->judul:$user->judul_english;?></h4>
                    <p><?php echo lang('file_form_field_tanggal');?> : <?php echo date("d M Y", strtotime($user->tgl_arsip));?></p>
                     <em><?php echo $this->session->userdata('site_lang')=="indonesia"?$user->isi_arsip:$user->isi_arsip_english;?><br /><br /></em>

<!--<?php#echo base_url();?>dmdocuments/<?php#echo $user->file_data;?>
--><div class="btn-group btn-group-xs">
	<a class="btn btn-default" target="_blank" href="<?php echo "http://www.kemendagri.go.id/media/".$user->filepath;?>">
    <span class="glyphicon glyphicon-download"></span> <?php echo lang('file_download');?></a>


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


<img src="<?php echo base_url();?>assets/img/nodata.png">


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


<!--
	<div class="produkhukumitem">
        <p class="titleundang"><a href="http://ww2.kemendagri.go.id/main/page/detailprodukhukum/undang-undang-tentang-industri-pertahanan">UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 16 TAHUN 2012 TENTANG INDUSTRI PERTAHANAN</a></p>
        <table>
            <tbody><tr>
                <td valign="top">Tanggal Terbit</td>
                <td valign="top">:</td>
                <td valign="top">2012-11-22</td>
            </tr>
            <tr>
                <td valign="top">Nomor</td>
                <td valign="top">:</td>
                <td valign="top"></td>
            </tr>
            <tr>
                <td valign="top">Tentang</td>
                <td valign="top">:</td>
                <td valign="top"><p>UNDANG-UNDANG TENTANG INDUSTRI PERTAHANAN</p></td>
            </tr>
            <tr>
                <td valign="top">Document</td>
                <td valign="top">:</td>
                <td valign="top"><a href="http://ww2.kemendagri.go.id/media/documents/2012/11/22/u/u/uu_no.16-2012.pdf" target="_blank" class="documentlink">UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 16 TAHUN 2012 TENTANG INDUSTRI PERTAHANAN</a></td>
            </tr>
        </tbody></table>
    </div>
	-->
