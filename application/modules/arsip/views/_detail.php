
<?php 
if ($this->session->userdata('site_lang')=="english"): 
$judul_kategori=$kategori->kategori_english;
else:
$judul_kategori=$kategori->kategori;
endif;

?>


<h1 class="judul"> <?php echo $judul_kategori;?></h1>
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
<table class="table table-bordered table-striped">
  <tr>
    <th><?php echo lang('file_form_field_file');?></th>
    <td>: <?php echo $this->session->userdata('site_lang')=="indonesia"?$arsip->judul:$arsip->judul_english;?></td>
  </tr>
  <tr>
    <th><?php echo lang('file_form_field_keterangan');?></th>
    <td>: <?php echo $this->session->userdata('site_lang')=="indonesia"?$arsip->isi_arsip:$arsip->isi_arsip_english;?></td>
  </tr>
<!-- 
 <tr>
  	<th><?php echo lang('file_form_field_publisher');?></th>
    <td>: <?php echo $arsip->publisher;?></td>
    </tr>
   <tr>
  	<th><?php echo lang('file_form_field_penulis');?></th>
    <td>: <?php echo $arsip->penulis;?></td>
    </tr>
    <tr>
  	<th><?php echo lang('file_form_field_tahun');?></th>
    <td>: <?php echo $arsip->tahun;?></td>
    </tr>
	-->
  <tr>
  	<th><?php echo lang('file_form_field_tanggal');?></th>
    <td>: <?php echo $arsip->tgl_arsip;?></td>
    </tr>
	<tr>
  	<th><?php echo lang("file_form_field_download");?></th>
    <td>: <?php echo $arsip->download;?></td>
    </tr>
	
	
</table>
<br />

<div class="btn-group">
 <a href="<?php echo site_url('arsip/categories/'.str_replace('=','',base64_encode($kategori->id)))."/".url_title(strtolower($judul_kategori),'dash');
				;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-home "></span> <?php echo lang('file_back');?> </a>
 <a href="<?php echo base_url();?>dmdocuments/<?php echo $arsip->file_data;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download"></span> Download </a>

<?php

$atts = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0',
			  'class'	   => 'btn btn-default btn-xs',
            );

echo anchor_popup('arsip/view/'.$arsip->id, '<span class="glyphicon glyphicon-eye-open"></span> View', $atts);

?>




</div>
