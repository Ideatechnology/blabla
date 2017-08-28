<?php

	/**
	 * Untuk Menentukan URL Download
	 *
	 * @return void
	 */
	 
	 function link_download_arsip($type,$id=""){
		
		if($type=="upload")
			$link= base_url()."dmdocuments/".$id;
		else
			$link=$id;
			
		return $link;
		
		 
	 }

?>