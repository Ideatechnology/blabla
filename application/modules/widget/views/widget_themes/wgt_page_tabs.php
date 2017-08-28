<?php
 $this->load->library('widget/widget_custom');
 $tabs = $this->widget_custom->widget_tabs($widgets->id_widget);
 
   
   $array ='';
    foreach($tabs as $arr){ 
      
	  $array = $array ."'". $arr->colomn_tabs ."',"; 
    }
     $str = rtrim($array,"\,");	

?>
  
<div class="kotak_box"> 
<ul class="nav nav-tabs" >
<?php 
$no=1;
foreach($tabs as $rtabs){  ?>
<li <?php echo ($no==1)?'class="active"':'';?>><a href='#tab<?php echo $rtabs->colomn_tabs;?>' data-toggle="tab"><?php echo $rtabs->title_tabs;?></a></li>
<?php 
$no++;
} ?>
</ul>	


<div class="tab-content"> 
<?php 
$no2=1;
foreach($tabs as $r2){  ?>
        
        <div class="tab-pane <?php echo ($no2==1)?'active':'';?>" id='tab<?php echo $r2->colomn_tabs;?>'>
        
<?php  
   $tabsrel = $this->widget_custom->widget_tabs_related( $r2->post_category, $r2->colomn_tabs,  $r2->limit_p );
	if($tabsrel){
   foreach($tabsrel as $row):
?>

<h5>
<a href="<?php echo site_url('post/read/'.date('Y', strtotime($row->created_on)).'/'.$row->id.'/'.url_title($row->judul,'dash').'/berita');?>" id="chunktabs"> <?php echo $row->judul;?></a>
</h5>
<span class="muted"><?php echo date("d M Y", strtotime($row->created_on));?></span>
<p><?php echo word_limiter( strip_tags($row->isi),10);?></p>	 

		 
<?php 
 endforeach;
 
	}else{
	   echo 'No related Post Found';	
	}
 ?>
 </div>

<?php
$no2++;
}
?> 
</div>
 </div> 
