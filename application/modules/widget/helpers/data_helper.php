<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	function reference_map($array, $as_key, $as_value) {
		$map = array();
		foreach($array as $it) {
			$map[$it->$as_key] = $it->$as_value;
		}
 		return $map;
	}
	
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	 function formatUang2($input) {
    	$result = ''; $revCount = 0;

    	for( $i = strlen($input) - 1; $i >= 0; $i-- ) {
    		if($revCount == 3) {
    			$result = '.'.$result;
    			$revCount = 0;
    		}
    		$char = substr( $input, $i, 1 );
    		$result = $char.$result;
    		$revCount++;
		}

    	$result = $result;
    	return $result;
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