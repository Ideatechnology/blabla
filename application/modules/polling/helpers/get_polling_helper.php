<?php
function polling_count($parentID){
  $ci =& get_instance();
  					
	$literal = $ci->db->query('SELECT COALESCE(SUM(jawab1), 0)+COALESCE(SUM(jawab2), 0)+COALESCE(SUM(jawab3), 0)+COALESCE(SUM(jawab4), 0)+COALESCE(SUM(jawab5), 0)  as jml_poll FROM (bf_polling_count) WHERE id_polling = '.$parentID)->row();	
 			
   if($literal->jml_poll){
	   return $literal->jml_poll;
   }else{
	    return 0;   
   }
}


//getFCColor method helps return a color from arr_FCColors array. It uses
//cyclic iteration to return a color from a given index. The index value is
//maintained in FC_ColorCounter

function getFCColor() 
{
    //We also initiate a counter variable to help us cyclically rotate through
//the array of colors.
$FC_ColorCounter=0;

$arr_FCColors[0] = "1941A5" ;//Dark Blue
$arr_FCColors[1] = "AFD8F8";
$arr_FCColors[2] = "F6BD0F";
$arr_FCColors[3] = "8BBA00";
$arr_FCColors[4] = "A66EDD";
$arr_FCColors[5] = "F984A1" ;
$arr_FCColors[6] = "CCCC00" ;//Chrome Yellow+Green
$arr_FCColors[7] = "999999" ;//Grey
$arr_FCColors[8] = "0099CC" ;//Blue Shade
$arr_FCColors[9] = "FF0000" ;//Bright Red 
$arr_FCColors[10] = "006F00" ;//Dark Green
$arr_FCColors[11] = "0099FF"; //Blue (Light)
$arr_FCColors[12] = "FF66CC" ;//Dark Pink
$arr_FCColors[13] = "669966" ;//Dirty green
$arr_FCColors[14] = "7C7CB4" ;//Violet shade of blue
$arr_FCColors[15] = "FF9933" ;//Orange
$arr_FCColors[16] = "9900FF" ;//Violet
$arr_FCColors[17] = "99FFCC" ;//Blue+Green Light
$arr_FCColors[18] = "CCCCFF" ;//Light violet
$arr_FCColors[19] = "669900" ;//Shade of green

	//accessing the global variables
	global $FC_ColorCounter;
	
	//Update index
	$FC_ColorCounter++;
	//Return color
	return($arr_FCColors[$FC_ColorCounter % count($arr_FCColors)]);
}

function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
  
 ?>