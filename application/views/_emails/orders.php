


<div style="background:#d4d3d2;margin:0px;padding:0px;font-family:Tahoma;font-size:11px"><div class="adM">
	</div><table align="center" bgcolor="#cccccc" cellpadding="10" cellspacing="1" style="width:750px;border:9px solid #bbbbbb;font-size:11px">
    	<tbody>
        <tr>
        <td bgcolor="#ffffff">
        <table width="100%">
        <tbody><tr>

							<td width="65%">
							<img src="<?php echo base_url();?>application/modules/sosmed/files/<?php echo $getSosmed->logo;?>" width="166" border="0" height="105" class="CToWUd"></td>

							<td align="center" width="35%" style="font-family:Tahoma;font-size:11px">

								<p>

							    Email: <a href="mailto:<?php echo $meta_billing->email;?>" target="_blank"><?php echo $meta_billing->email;?></a>

									Telp / SMS:<?php echo $meta_billing->phone;?> <a href="<?php echo site_url("konfirmasi-pembayaran");?>"><strong><?php echo site_url("konfirmasi-pembayaran");?></strong></a>

								</p>

							</td>

						</tr>

			</tbody></table>

		  <table border="0" cellspacing="0" style="border:1px solid #cccccc;padding:10px;line-height:17px">

						<tbody>
                        	<tr>
                        	<td style="font-family:Tahoma;font-size:11px">Kepada Yth. <b>Sdr/i. (<?php echo $meta_current_user->display_name;?>) </b>Terima kasih atas kepercayaan Anda Berbelanja di Toko Online <?php echo $getSosmed->nama_perusahaan;?>.
                              <p>Kami akan memproses order Anda setelah kami menerima bukti atau pembayaran yang telah Anda lakukan.</p>
                            <p>Bila dalam waktu 3 hari dari tanggal order kami tidak menerima bukti atau info pembayaran dari Anda, kami menganggap Anda telah membatalkan order Anda. Silahkan untuk mendaftar ulang kembali bila Anda ingin melakukan atau melanjutkan proses order yang telah Anda lakukan. ( <a href="<?php echo base_url();?>"><?php echo base_url();?></a> )</p>
                            </td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                           	  <td style="font-family:Tahoma;font-size:11px">
                                	<strong style="color:#cc0000;font:bold 14px/20px Arial;border-top:1px solid #ccc;border-bottom:1px solid #ccc;margin:0 0 10px 0;width:100%;display:block;padding:3px 0">RINCIAN BIAYA ORDER</strong>
                                    Berikut adalah rincian biaya order anda:
                                	

                                <table cellspacing="1" width="100%" cellpadding="5" style="background:#cccccc;font-size:12px">
			<tbody><tr>
				<td style="background-color:#777;color:#fff;font-weight:bold;text-align:center;padding:5px 10px" width="60%">Description</td>
				<td style="background-color:#777;color:#fff;font-weight:bold;text-align:center;padding:5px 10px" width="20%">Price</td>
					<td style="background-color:#777;color:#fff;font-weight:bold;text-align:center;padding:5px 10px" width="20%">Subtotal</td>
			</tr>
			<?php 
			  $total=0;
  $subtotalberat=0;
  $totalberat=0;
   $total_rp=0;
  foreach($sql2 as $s){
     // rumus untuk menghitung subtotal dan total		
  
	if($s["diskon2"] > 0)
	$hargadiskon = "<br />".lang("bf_before")." <br /><span style='text-decoration: line-through;'>".format_rupiah($s['harga'])."</span>";
	else
	$hargadiskon = "";
	
		if($s["operators2"]!="")
		$operators=$s["operators2"];
		else
		$operators="";
	
   //$subtotalberat = $s['berat'] * $s['jumlah']; // total berat per item produk 
   //$totalberat  = $totalberat + $subtotalberat; // grand total berat all produk yang dibeli
		if($s["harga_tambah"]!=0):
			$price=format_rupiah($s["harga_tambah"]);
			if($s["operators"]=="+"):
				$harga=$s['harga2']+$s["harga_tambah"];
			else:
				$harga=$s['harga2']-$s["harga_tambah"];
			endif;
			$subtotal    =$harga * $s['jumlah'];
			$total       = $total + $subtotal;
			$subtotal_rp = $subtotal;    
			$total_rp    = $total;    

		else:
			$price="";
			$harga       = $s['harga2'];
			$subtotal    =$harga * $s['jumlah'];
			$total       = $total + $subtotal;
			$subtotal_rp = $subtotal;    
			$total_rp    = $total;    
		endif;
		
		$nama_produk=$this->session->userdata('site_lang')=="english"?$s["nama_produk_english"]:$s["nama_produk"];
		
			?>
			<tr bgcolor="#ffffff">
					<td style="border-width:1px 0px 0px 1px"><?php echo $nama_produk;?>
					<br />Size : <?php
					echo $s["size"]." ".$s["color"]." ".$operators." ".$price;
					?>
					| Jumlah : <?php echo $s["jumlah"];?>
					| Diskon : <?php echo $s["diskon2"] ;?> %
					
					
					</td>
					<td style="border-width:1px 1px 0px" align="right"><?php echo format_rupiah($harga)." ".$hargadiskon;?></td>
					<td style="border-width:1px 1px 0px" align="right"><?php echo format_rupiah($subtotal_rp);?></td>
				</tr>
				<?php } 
				
				 $ongkoskirim1=@$ongkos;
  $ongkoskirim=$ongkoskirim1;

  $grandtotal    = $total + $ongkoskirim; 

  $ongkoskirim_rp = format_rupiah($ongkoskirim);
  $ongkoskirim1_rp = format_rupiah($ongkoskirim1); 
  $grandtotal_rp  = format_rupiah($grandtotal);    
				
				?>
				
				<tr>
               
				
				<td colspan="2" style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px"><div align="right">Sub Total :&nbsp;</div></td>
				<td  style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px" align="right"><?php echo format_rupiah($total_rp);?></td>
			</tr>
			<tr>
				<td colspan="2" style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px"><div align="right">Ongkos Kirim :&nbsp;</div></td>
				<td  style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px" align="right"><?php echo $ongkoskirim_rp;?></td>
			</tr>
			<tr>
				<td colspan="2" style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px"><div align="right">Metode Pengiriman :&nbsp;</div></td>
				<td  style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px" align="right"><?php echo $pengiriman;?></td>
			</tr>
			
			
			
			<tr>
				<td colspan="2" style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px"><div align="right">Total :&nbsp;</div></td>
				<td  style="background-color:#777;color:#fff;font-weight:bold;text-align:right;padding:5px 10px" align="right"><?php echo $grandtotal_rp;?></td>
			</tr>
		</tbody></table></td>
                            </tr>
                            <tr>
                            	<td style="font-family:Tahoma;font-size:11px">
                                	
                                    	<strong style="color:#cc0000;font:bold 14px/20px Arial;border-top:1px solid #ccc;border-bottom:1px solid #ccc;margin:0 0 10px 0;width:100%;display:block;padding:3px 0">REKENING TUJUAN</strong>
                                        Anda dapat melakukan pembayaran ke nomor rekening berikut.
         
                 <table align="center" cellspacing="0" width="100%" cellpadding="5" style="border:1px solid #121d3b;font-family:Tahoma;font-size:11px">
				<tbody>
				<tr bgcolor="#425A98">
						<td style="border-width:1px 0px 0px 1px" width="30%">BankName</td>
						<td style="border-width:1px 1px 0px" width="70%">: Bank <?php echo $orders->bank;?></td>
					</tr>
					
					<tr>
						<td bgcolor="#ebf0fe">Account Number</td>
						<td bgcolor="#ebf0fe">: <?php echo $bank["rekening"];?></td>
					</tr>
					<tr>
						<td bgcolor="#c8d4f4">Account Holder</td>
						<td bgcolor="#c8d4f4">: <?php echo $bank["nama"];?></td>
					</tr>
					</tbody>
				</table>
                 <br>

                                </td>
                            </tr>
                            <tr>
                            	<td style="font-family:Tahoma;font-size:11px">
                                	<strong style="color:#cc0000;font:bold 14px/20px Arial;border-top:1px solid #ccc;border-bottom:1px solid #ccc;margin:0 0 10px 0;width:100%;display:block;padding:3px 0">KONFIRMASI PEMBAYARAN</strong>
                                    Setelah melakukan pembayaran, silakan konfirmasi melalui (silahkan pilih salah
satu yang paling mudah bagi anda ),
Sertakan ( Nama Anda (spasi) ID Produk (spasi) Nama Bank (spasi) Jumlah
Pembayaran Anda, Contoh ( Wildan J Saputra SRBDST-4456 BCA 175.000 ).
                                    <ol>
                    	<li>Email ke <a href="mailto:<?php echo $meta_billing->email;?>" target="_blank"><?php echo $meta_billing->email;?></a></li>
                        <li>SMS ke nomor <a href="tel:<?php echo $meta_billing->phone;?>" value="<?php echo $meta_billing->phone;?>" target="_blank"><?php echo $meta_billing->phone;?></a></li>
                        <li>Pengisian form konfirmasi melalui web di <a href="<?php echo site_url("konfirmasi-pembayaran");?>"><strong><?php echo site_url("konfirmasi-pembayaran");?></strong></a></li>
                    </ol>
                   
                                </td>
                            </tr>
                            <tr>
                            	
                            </tr>
                            <tr>
                            	<td>
                                	<strong style="color:#cc0000;font:bold 14px/20px Arial;border-top:1px solid #ccc;border-bottom:1px solid #ccc;margin:0 0 10px 0;width:100%;display:block;padding:3px 0">DATA DIRI ANDA</strong>
                       <table align="center" cellspacing="1" width="100%" cellpadding="5" style="background:#cccccc;font-family:Tahoma;font-size:11px">

								   
						<tbody>   
 <tr bgcolor="#FFFFFF">
							<td width="30%">No Order ID </td>
							<td width="70%">: <?php echo $orders->no_order;?></td>
						</tr>    						
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Nama Lengkap</td>
							<td width="70%">: <?php echo $meta_current_user->display_name;?></td>
						</tr>                        
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Alamat</td>
							<td width="70%">: <?php echo $meta_current_user->street_name;?></td>
						</tr>
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Kota</td>
							<td width="70%">: <?php echo $this->produk_model->getKota($meta_current_user->kota);?></td>
						</tr>
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Propinsi</td>
							<td width="70%">: <?php echo $this->produk_model->getProvinsi($meta_current_user->provinsi);?></td>
						</tr>
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Kodepos</td>
							<td width="70%">: <?php echo @$meta_current_user->kode_pos;?></td>
						</tr>                                               
                        <tr bgcolor="#FFFFFF">
							<td width="30%">Telpon HP</td>
							<td width="70%">: <?php echo @$meta_current_user->phone;?></td>
						</tr>                        
							<tr><td width="30%">Email</td>
							<td width="70%">: <?php echo $meta_current_user->email;?></td>
						</tr></tbody></table></td></tr>
                        

					</tbody></table>
                   <span style="font-family:Tahoma;font-size:11px">Terima kasih atas perhatian dan kepercayaan Anda Berbelanja di Toko Online Kami.</span>
                                </td>
                            </tr>
                            <tr>
                           	  <td style="font-family:Tahoma;font-size:11px">
                                <hr noshade="" size="1" color="#cccccc">
                               	  <p><b><?php e(settings_item('site.title'));?></b> | Office:  <?php echo $getSosmed->alamat;?> | Phone: <?php echo $getSosmed->telp;?> |
Email: <a href="<?php echo $getSosmed->email;?>"><?php echo $getSosmed->email;?></a>
| Facebook: <a href="<?php echo $getSosmed->url_fb;?>"><?php echo $getSosmed->url_fb;?></a> | Twitter: <a href="<?php echo $getSosmed->url_twitter;?>"><?php echo $getSosmed->url_twitter;?></a>.</p>

                                </td>
                            </tr>

					</tbody></table><div class="yj6qo"></div><div class="adL">

				

			

		
</div></div>