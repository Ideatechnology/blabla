<div class="container">
<script src="<?php echo Template::theme_url('charts/FusionCharts.js'); ?>"></script> 
<h1 class="judul_kotak_fullborder">Polling</h1>

    <?php if($this->session->flashdata("error_captcha2")): ?>
	  <div class="alert alert-danger">
	  <?php echo $this->session->flashdata("error_captcha2");?>
	  </div>
	  <?php endif; ?>
 <?php
  
   #i guess this polling..
   $width = '680';
   $height = '350';
   
   

	$chartType = 'Column2D';
 
   $chart = new FusionCharts($chartType, $width, $height);
   
        $caption = ($this->session->userdata("site_lang")=="english")?@$poll->judul_english:@$poll->judul;
		$xAxisName = 'Daftar Pilihan Jajak Pendapat';
		$yAxisName = lang('polling_jumlahsuara');
		$decimalPrecision = '0';
		$formatNumberScale = '0';
		$showNames = '1';
		
		//jawaban 1
		if($this->session->userdata("site_lang")=="english"){
			$jawab1=$poll->jawab1_english;
			$jawab2=$poll->jawab2_english;
			$jawab3=$poll->jawab3_english;
			$jawab4=$poll->jawab4_english;
			$jawab5=$poll->jawab5_english;
		}else{
			$jawab1=$poll->jawab1;
			$jawab2=$poll->jawab2;
			$jawab3=$poll->jawab3;
			$jawab4=$poll->jawab4;
			$jawab5=$poll->jawab5;
		}
		
		$strXML = "
		<graph caption='".$caption."' xAxisName='' yAxisName='".$yAxisName."' decimalPrecision='".$decimalPrecision."' formatNumberScale='".$formatNumberScale."'>";
		
		$color_array = array('1'=>'F00','2'=>'099','3'=>'AFD8F8','4'=>'F6BD0F','5'=>'F8BE0F');
		
 		if(!empty($poll->jawab1)){ 
  	       $strXML .= "<set name='".@$jawab1."' value='".@$poll_count->jawab1."' color='F00' />";
		}
		
		if(!empty($poll->jawab2)){ 
			$strXML .= "<set name='".@$jawab2."' value='".@$poll_count->jawab2."' color='099' />";
		}
		
		if(!empty($poll->jawab3)){ 
		 	$strXML .= "<set name='".@$jawab3."' value='".@$poll_count->jawab3."' color='AFD8F8' />";
		}
		
		if(!empty($poll->jawab4)){ 
		    $strXML .= "<set name='".@$jawab4."' value='".@$poll_count->jawab4."' color='F6BD0F' />";
		}
		   
		if(!empty($poll->jawab5)){  
		   $strXML .= "<set name='".@$jawab5."' value='".@$poll_count->jawab5."' color='F8BE0F' />";
		}
		   
  			 
		 
 		$strXML .= "</graph>";
		
 	    #render From NON Ajax POST
		$chart = $chart->renderChartHTML(Template::theme_url('charts/FCF_'.$chartType.'.swf'), '', $strXML, 'chartId', $width, $height);
 	 
?>
 <div class="charting">
	<?PHP echo $chart; ?>
</div>

</div>