<h2 class="judul_kotak_fullborder">Regulasi</h2><br />
    <?php echo form_open($this->uri->uri_string(),'name="myform" method="get" ');?>

<ul class="nav nav-tabs" >
	<li<?php echo $filter_type == 'all' ? ' class="active"' : ''; ?>><?php echo anchor($index_url, "Semua Regulasi"); ?></li>
	<li class="<?php echo $filter_type == 'role_id' ? 'active ' : ''; ?>dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php
			echo 'Filter Kategori';
			echo isset($filter_role) ? ": $filter_role" : '';
			?>
			<span class="caret light-caret"></span>
		</a>
		<ul class="dropdown-menu">
			<?php foreach ($roles as $role) : ?>
			<li><?php echo anchor($index_url . 'kategori-' . $role->id, $role->kategori); ?></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>   

 Kategori File : 
     <select name="archives" onchange="document.myform.submit();" style="width:200px;">
      
      <?php
        print_r($categori);
	   if($categori){
		   foreach($categori as $cat){
		   if($_GET["archives"]==$cat->id):
		?>
      <option value="<?php echo $cat->id;?>" selected><?php echo $cat->kategori;?></option>
      <?php
	     
		   else:
	  ?>
      <option value="<?php echo $cat->id;?>" ><?php echo $cat->kategori;?></option>
      <?php
	  endif;
		   }
	   }
	  ?>
    </select>
    <?php echo form_close();?>


 <table id="tSortablex" class="table table-bordered dataTable" width="100%" cellpadding="10">  

 <tbody>
<?php
  
$no=1;
if($arsip){
	 foreach($arsip as $rows){
?>
<tr>
<td style="padding:10px;">

<h4><?php echo $rows->judul;?></h4>
<p>
<b>Publisher</b> : <?php echo $rows->publisher;?>&nbsp;
<b>Penulis</b> : <?php echo $rows->penulis;?>&nbsp;
<b>Tahun</b> : <?php echo $rows->tahun;?>
</p>
 
 <?php echo ($rows->isi_arsip!="")?$rows->isi_arsip."<br /><br />":"";?>
<?php
  $name = base_url().'application/modules/arsip/files/'.$rows->file_data;
?>

<p>
<a class="btn btn-warning btn-mini" href="<?php echo $name; ?>">Download</a>
</p>
           
</td>
</tr>
<?php
$no++;
	 }
    
     }else{
    ?>     

     <tr>
     <td>Belum ada arsip dalam kategori ini</td>
     </tr>

     <?php 
     }
 
 ?>
 
 </tbody>
</table>

<div id="pagination-digg"><?php echo $links;?></div>

