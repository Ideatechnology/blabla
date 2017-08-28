<script src="<?php echo Template::theme_url('charts/FusionCharts.js'); ?>"></script> 
<h2 class="judul_kotak_fullborder">Jajak Pendapat / Polling </h2>
    <?php echo "aa".$poll->jawab1; ?>
 <?php
  
   #i guess this polling..
   $width = '480';
   $height = '300';
   
   $val =$this->db->escape_str($this->uri->segment(3));
   

	$chartType = 'Column2D';
 
   $chart = new FusionCharts($chartType, $width, $height);
   
        $caption = @$poll->judul;
		$xAxisName = 'Daftar Pilihan Jajak Pendapat';
		$yAxisName = 'Jumlah Suara';
		$decimalPrecision = '0';
		$formatNumberScale = '0';
		$showNames = '1';
		 
		$strXML = "
		<graph caption='".$caption."' xAxisName='".$xAxisName."' yAxisName='".$yAxisName."' decimalPrecision='".$decimalPrecision."' formatNumberScale='".$formatNumberScale."'>";
		
		$color_array = array('1'=>'F00','2'=>'099','3'=>'AFD8F8','4'=>'F6BD0F','5'=>'F8BE0F');
		
 		if(!empty($poll->jawab1)){ 
  	       $strXML .= "<set name='".$poll->jawab1."' value='".$poll_count->jawab1."' color='F00' />";
		}
		
		if(!empty($poll->jawab2)){ 
			$strXML .= "<set name='".$poll->jawab2."' value='".$poll_count->jawab2."' color='099' />";
		}
		
		if(!empty($poll->jawab3)){ 
		 	$strXML .= "<set name='".$poll->jawab3."' value='".$poll_count->jawab3."' color='AFD8F8' />";
		}
		
		if(!empty($poll->jawab4)){ 
		    $strXML .= "<set name='".$poll->jawab4."' value='".$poll_count->jawab4."' color='F6BD0F' />";
		}
		   
		if(!empty($poll->jawab5)){  
		   $strXML .= "<set name='".$poll->jawab5."' value='".$poll_count->jawab5."' color='F8BE0F' />";
		}
		   
  			 
		 
 		$strXML .= "</graph>";
		
 	    #render From NON Ajax POST
		$chart = $chart->renderChartHTML(Template::theme_url('charts/FCF_'.$chartType.'.swf'), '', $strXML, 'chartId', $width, $height);
 	 
?>
 <div class="charting">
	<?PHP echo $chart; ?>
</div>

<h5>Daftar Jajak Pendapat Terdahulu</h5>   
<hr />
<table class="table table-striped table-bordered">
  <tr>
    <td width="87%" height="29"  class="td_head">Jajak Pendapat</td>
    <td width="13%"  class="td_head">Total Suara</td>
  </tr>

<?php
  $this->load->helper('get_polling');
  if($pollOder){
	   $i=0;
	  $odd='odd';
	  foreach($pollOder as $older){
		  if($odd=='odd'){ $odd='odd';}else{ $odd='';}
?>
    <tr class="<?php echo $odd;?>">
    <td height="27"><?php echo ($i+1).". ". $older->judul;?></td>
    <td>&nbsp;<?php echo polling_count($older->id);?></td>
  </tr>

<?php
    $i++;
	  }
  }
?>
</table> 
