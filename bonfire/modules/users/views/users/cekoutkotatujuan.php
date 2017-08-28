<?php

$validation_errors = validation_errors();
$errorClass = ' has-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?>
<section id="profile">

<h1 style="color: rgb(44, 43, 41);
font-size: 30px;"><?php echo lang('us_cekregister1');?></h1>
<hr />

    <?php if ($validation_errors) : ?>
    <div class="alert alert-danger">
        <?php echo $validation_errors; ?>
    </div>
    <?php endif; ?>
    <?php if (isset($user) && $user->role_name == 'Banned') : ?>
    <div data-dismiss="alert" class="alert alert-danger">
        <?php echo lang('us_banned_admin_note'); ?>
    </div>
    <?php endif; ?>
	
  <?php
  $jsinline ='    
      var whois = null;
  $("input[name=\'bank\']").click(function() {
    whois = this.value;
    
    if(whois == "BCA"){
      $("#bank_bca").show();
      $("#bank_mandiri").hide();
      $("#bank_bri").hide();
      $("#bank_bni").hide();
    }else if(whois == "MANDIRI"){
      $("#bank_bca").hide();
      $("#bank_mandiri").show();
      $("#bank_bri").hide();
      $("#bank_bni").hide();
    }else if(whois == "BRI"){
      $("#bank_bca").hide();
      $("#bank_mandiri").hide();
      $("#bank_bri").show();
      $("#bank_bni").hide();
    }else if(whois == "BNI"){
      $("#bank_bca").hide();
      $("#bank_mandiri").hide();
      $("#bank_bri").hide();
      $("#bank_bni").show();
    }
    
  }); 


      var whois2 = null;
  $("input[name=\'pengiriman\']").click(function() {
    whois2 = this.value;
    var kota= $("#kota").val();
     $.get("'.site_url("produk/updatepengirim").'", { id:'.$user->id.',whois2:whois2,kota:kota }, function(data) {
        $("#total_pengiriman").text(data.total_kirim);
        $("#pengiriman").text(data.type_kirim);
    }, "json");


}); 

  $("#account").click(function() {
    
    var nama= $("#display_name").val();

    $.get("'.site_url("produk/updateaccount").'", { id:'.$user->id.',nama:nama }, function(data) {
        $("#nama").text(data.nama);
    }, "json");


  });

$("#kota").change(function() {

    var provinsi= $("#provinsi").val();
    var kota= $("#kota").val();
    var tanggal_lahir= $("#tanggal_lahir").val();
    var jenis_kelamin= $("#jenis_kelamin").val();
    var street_name= $("#street_name").val();
     var phone= $("#phone").val();
    var kode_pos= $("#kode_pos").val();
     var type_kirim= $("input[name=\'pengiriman\']").val();

    $.get("'.site_url("produk/updatealamat").'", {type_kirim:type_kirim,id:'.$user->id.',provinsi:provinsi,kota:kota,tanggal_lahir:tanggal_lahir,jenis_kelamin:jenis_kelamin,street_name:street_name,phone:phone,kode_pos:kode_pos }, function(data) {
        $("#telp").text(data.phone);
        $("#prov").text(data.provinsi);
        $("#kot").text(data.kota);
        $("#alamat").text(data.street_name);
        $("#pos").text(data.kode_pos);
        $("#total_pengiriman").text(data.total_kirim);
    }, "json");

});


  $("#kirimalamat").click(function() {

    var provinsi= $("#provinsi").val();
    var kota= $("#kota").val();
    var tanggal_lahir= $("#tanggal_lahir").val();
    var jenis_kelamin= $("#jenis_kelamin").val();
    var street_name= $("#street_name").val();
     var phone= $("#phone").val();
    var kode_pos= $("#kode_pos").val();
     var type_kirim= $("input[name=\'pengiriman\']").val();

    $.get("'.site_url("produk/updatealamat").'", {type_kirim:type_kirim,id:'.$user->id.',provinsi:provinsi,kota:kota,tanggal_lahir:tanggal_lahir,jenis_kelamin:jenis_kelamin,street_name:street_name,phone:phone,kode_pos:kode_pos }, function(data) {
        $("#telp").text(data.phone);
        $("#prov").text(data.provinsi);
        $("#kot").text(data.kota);
        $("#alamat").text(data.street_name);
        $("#pos").text(data.kode_pos);
        $("#total_pengiriman").text(data.total_kirim);
    }, "json");

  });

 

';

 Assets::add_js($jsinline, 'inline' );

?>

	
		<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'autocomplete' => 'off',"data-ajax"=>"false")); ?>
         
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        <span class="counter"> 1 </span>   <?php echo lang('us_account_cek');?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
	
          
		         <?php Template::block('user_fields', 'user_fields_kotatujuan', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form', $user );
					?>
  </div>

   <div class="panel-footer">
<a data-toggle="collapse" data-parent="#accordion" id="account" href="#collapseThree" class="btn btn-warning">
        <span class="glyphicon glyphicon-chevron-right"></span> Lanjut
        </a>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <span class="counter"> 2 </span> Alamat
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
		   <!-- Start User Meta -->
                <?php $this->load->view('users/user_meta_kotatujuan', array('frontend_only' => true));?>
                <!-- End of User Meta -->
	
   </div>

   <div class="panel-footer">
<a data-toggle="collapse" data-parent="#accordion" id="kirimalamat" href="#collapseKirim" class="btn btn-warning">
        <span class="glyphicon glyphicon-chevron-right"></span> Lanjut
        </a>
          </div>

    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseKirim">
          <span class="counter"> 3 </span> Pengiriman
        </a>
      </h4>
    </div>
    <div id="collapseKirim" class="panel-collapse collapse">
      <div class="panel-body">
        <input type="radio" value="jne-regular" name="pengiriman" checked> JNE Regular<br />
         <input type="radio" value="jne-yes" name="pengiriman"> JNE Yes<br />
         <input type="radio" value="tiki-regular" name="pengiriman"> Tiki Regular<br />
        <input type="radio" value="tiki-yes" name="pengiriman"> Tiki Yes<br />
         <input type="radio" value="pos-biasa" name="pengiriman"> POS Biasa<br />
         <input type="radio" value="pos-kilat" name="pengiriman"> POS Kilat<br />
        <hr />
        <p>
         <strong> TOTAL : <span id="total_pengiriman"><?php echo format_rupiah($total_pengiriman);?></span> </strong>
        </p>

   </div>

   <div class="panel-footer">
<a data-toggle="collapse" data-parent="#accordion" id="kirimpengirim" href="#collapseBank" class="btn btn-warning">
        <span class="glyphicon glyphicon-chevron-right"></span> Lanjut
        </a>
          </div>

    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseBank">
          <span class="counter"> 4 </span> Pilih Pembayaran dan Finish
        </a>
      </h4>
    </div>
    <div id="collapseBank" class="panel-collapse collapse">
      <div class="panel-body">
	
       
       <?php if(!empty($getSosmed->bank_bca)): ?>
       <input type="radio" value="BCA" name="bank" checked> Bank BCA &nbsp;
     <?php endif; ?>
      <?php if(!empty($getSosmed->bank_mandiri)): ?>
		   <input type="radio" value="MANDIRI" name="bank"> Bank Mandiri&nbsp;
        <?php endif; ?>
        <?php if(!empty($getSosmed->bank_bri)): ?>
       <input type="radio" value="BRI" name="bank"> Bank BRI&nbsp;
        <?php endif; ?>
        <?php if(!empty($getSosmed->bank_bni)): ?>
       <input type="radio" value="BNI" name="bank"> Bank BNI&nbsp;
        <?php endif; ?>

<div id="bank_bca">
	 <br />

<p>
Langkah pembayaran dengan Manual Transfer BCA :
</p>
<ol style="list-style: initial;">
<li>Catatlah Nomer Order yang tercantum di email billing/penagihan yang kami kirimkan.</li>
<li>Datang ke ATM BCA terdekat, mengunakan Mobile Banking atau login ke www.klikbca.com.</li>
<li>Transfer jumlah total ke account :<br>
<span class="important">Nama </span><span class="important"> : <?php echo $getSosmed->an_bank_bca;?><br>
NoRek : <?php echo $getSosmed->bank_bca;?></span></li>
<li>Jangan lupa untuk memasukkan Nomer Order di keterangan.</li>
<li>Simpan struk, sms /email sebagai bukti.</li>
<li>Konfirmasi pembayaran anda ke <?php echo $getSosmed->telp;?> atau bisa menggunakan form <a href="<?php echo site_url("konfirmasi-pembayaran");?>">konfirmasi pembayaran</a> yang ada di website kami.</li>
<li>Jika anda menerima email tentang pembayaran sudah diterima atau status order anda sudah menjadi Processing maka pengiriman Kamu akan segera di-proses.</li>
<li>Apabila dalam 1x24 jam kami belum menerima pembayaran anda, maka sistem kami akan secara otomatis membatalkan pesanan tersebut.</li>
</ol>

</div>

<div id="bank_mandiri" style="display:none">
   <br />
<p>
Langkah pembayaran dengan Manual Transfer MANDIRI :
</p>
<ol style="list-style: initial;">
<li>Catatlah Nomer Order yang tercantum di email billing/penagihan yang kami kirimkan.</li>
<li>Datang ke ATM MANDIRI terdekat, mengunakan Mobile Banking atau login ke www.bankmandiri.co.id.</li>
<li>Transfer jumlah total ke account :<br>
<span class="important">Nama </span><span class="important"> : <?php echo $getSosmed->an_bank_mandiri;?><br>
NoRek : <?php echo $getSosmed->bank_mandiri;?></span></li>
<li>Jangan lupa untuk memasukkan Nomer Order di keterangan.</li>
<li>Simpan struk, sms /email sebagai bukti.</li>
<li>Konfirmasi pembayaran anda ke <?php echo $getSosmed->telp;?> atau bisa menggunakan form <a href="<?php echo site_url("konfirmasi-pembayaran");?>">konfirmasi pembayaran</a> yang ada di website kami.</li>
<li>Jika anda menerima email tentang pembayaran sudah diterima atau status order anda sudah menjadi Processing maka pengiriman Kamu akan segera di-proses.</li>
<li>Apabila dalam 1x24 jam kami belum menerima pembayaran anda, maka sistem kami akan secara otomatis membatalkan pesanan tersebut.</li>
</ol>

</div>

<div id="bank_bri" style="display:none">
   <br />

<p>
Langkah pembayaran dengan Manual Transfer BRI :
</p>
<ol style="list-style: initial;">
<li>Catatlah Nomer Order yang tercantum di email billing/penagihan yang kami kirimkan.</li>
<li>Datang ke ATM BRI terdekat, mengunakan Mobile Banking atau login ke www.bri.co.id.</li>
<li>Transfer jumlah total ke account :<br>
<span class="important">Nama </span><span class="important"> : <?php echo $getSosmed->an_bank_bri;?><br>
NoRek : <?php echo $getSosmed->bank_bri;?></span></li>
<li>Jangan lupa untuk memasukkan Nomer Order di keterangan.</li>
<li>Simpan struk, sms /email sebagai bukti.</li>
<li>Konfirmasi pembayaran anda ke <?php echo $getSosmed->telp;?> atau bisa menggunakan form <a href="<?php echo site_url("konfirmasi-pembayaran");?>">konfirmasi pembayaran</a> yang ada di website kami.</li>
<li>Jika anda menerima email tentang pembayaran sudah diterima atau status order anda sudah menjadi Processing maka pengiriman Kamu akan segera di-proses.</li>
<li>Apabila dalam 1x24 jam kami belum menerima pembayaran anda, maka sistem kami akan secara otomatis membatalkan pesanan tersebut.</li>
</ol>




</div>

<div id="bank_bni" style="display:none">
   <br />
<p>
Langkah pembayaran dengan Manual Transfer BNI :
</p>
<ol style="list-style: initial;">
<li>Catatlah Nomer Order yang tercantum di email billing/penagihan yang kami kirimkan.</li>
<li>Datang ke ATM BNI terdekat, mengunakan Mobile Banking atau login ke www.BNI.co.id.</li>
<li>Transfer jumlah total ke account :<br>
<span class="important">Nama </span><span class="important"> : <?php echo $getSosmed->an_bank_bni;?><br>
NoRek : <?php echo $getSosmed->bank_bni;?></span></li>
<li>Jangan lupa untuk memasukkan Nomer Order di keterangan.</li>
<li>Simpan struk, sms /email sebagai bukti.</li>
<li>Konfirmasi pembayaran anda ke <?php echo $getSosmed->telp;?> atau bisa menggunakan form <a href="<?php echo site_url("konfirmasi-pembayaran");?>">konfirmasi pembayaran</a> yang ada di website kami.</li>
<li>Jika anda menerima email tentang pembayaran sudah diterima atau status order anda sudah menjadi Processing maka pengiriman Kamu akan segera di-proses.</li>
<li>Apabila dalam 1x24 jam kami belum menerima pembayaran anda, maka sistem kami akan secara otomatis membatalkan pesanan tersebut.</li>
</ol>

</div>


   </div>

   <div class="panel-footer">
<input type="submit" name="save" class="btn btn-primary" value="Selesai Belanja" />
          </div>

    </div>
  </div>
  
    

  
  
</div>

            <?php echo form_close(); ?>


</section>