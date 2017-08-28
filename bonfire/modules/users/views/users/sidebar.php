<div class="panel panel-default" style="margin-top:100px;">
  <div class="panel-heading">Produk Yang Kamu Pesan</div>
  <div class="panel-body">
  
  <?php
    foreach($this->cart->contents() as $r){
  
  $hargadisc   = format_rupiah($r["price"]);
	if($r["diskon"] > 0)
		$hargaafter='<span style="text-decoration: line-through;">'.lang('bf_before').' '.format_rupiah($r["hargaafter"]).'</span>';
    else
		$hargaafter="";
	
	$dataproduk=$this->db->query("select * from bf_produk inner join bf_m_kategori on bf_produk.id_kategori=bf_m_kategori.id where id_produk='".$r["id"]."'")->row();
	$namaproduk=$this->session->userdata('site_lang')=="english"?$dataproduk->nama_produk_english:$dataproduk->nama_produk;
	$namakategori=$this->session->userdata('site_lang')=="english"?$dataproduk->kategori_english:$dataproduk->kategori;
	
	$subtotal=format_rupiah($r['subtotal']);
	?>  
    <?php echo $namaproduk;?><br />
  	<?php echo $r["qty"];?> x <?php echo $subtotal;?><br />
  	All Size : <?php if ($this->cart->has_options($r['rowid']) == TRUE): 
	   foreach ($this->cart->product_options($r['rowid']) as $option_name => $option_value): 
   echo $option_name.'  '.$option_value.' ';
	endforeach; 
	endif;
	?>
  	<hr />  
  <?php } ?>

  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">Info Alamat Pengiriman</div>
  <div class="panel-body">
  	 <p><strong>Alamat</strong></p>
  	 <p>
  	 		<span id="nama"><?php echo @$user->display_name;?></span><br />
  	 		<span id="telp"><?php echo @$user->phone;?></span><br />
  	 		<span id="prov"><?php echo @$getprovinsi->nama;?></span> <br />
  	 		<span id="kot"><?php echo @$getkota->nama_kota;?> </span><br />
  	 		<span id="alamat"><?php echo @$user->street_name;?></span> <span id="pos"><?php echo $user->kode_pos;?></span><br />
  	 </p>
  	 <hr />
    <p><strong>Metode Pengiriman</strong></p>
     <p id="pengiriman">
    <?php
    if(@$jasa_pengiriman=="tiki-regular")
			echo "TIKI REGULAR";
		else if(@$jasa_pengiriman=="tiki-yes")
			echo "TIKI YES";
		else if(@$jasa_pengiriman=="jne-regular")
			echo "JNE REGULAR";	
		else if(@$jasa_pengiriman=="jne-yes")
			echo "JNE YES";
		else if(@$jasa_pengiriman=="pos-biasa")
			echo "POS BIASA";
		else if(@$jasa_pengiriman=="pos-kilat")
			echo "POS KILAT";
		?>
   </p>
  </div>
</div>