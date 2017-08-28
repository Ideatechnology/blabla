<?php
#SETTING CONFIG COLOUMN LAYOUT
/*
 * Setting Config Layout
 * @Kegunaan file ini adalah untuk menampilkan widget pada coloumn yang sudah di tentukan
 * @default fungsi sebagai berikut :
     $widget = array('1' => 'BIT :: Sidebar',
				     '2' => 'BIT :: BOTTOM SIDEBAR',
				     '3' => 'BIT :: CENTER PAGE'
				   );
 * Array Widget dapat di ubah sesuai dengan yang di inginkan
 * Referensi array widget ini berhubungan langsung dengan Design Layout yang dimiliki.
 *__________________________________________________________________________________________
 *@Sample/Penggunaan :
*/
function config_array(){
    #array setting
	#Pastikan Array index tidak 0
	$widget = array('1' => 'Sidebar Left',
				    '2' => 'Sidebar Right',
					'3' => 'Content Center',
   				   );
   
   return $widget;
}

