<?php

$validation_errors = validation_errors();
$errorClass = ' hash-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?><?php 
$inline='
    $("#provinsi").change(function(){
        $("#loading").show();   
        var provinsi= this.value;
        $.get("'.site_url("users/getkabkot").'/"+provinsi,function(data,status){
        $("#kota").html(data);
        $("#loading").hide();           

        });
        
    });
    ';

    Assets::add_js( $inline, 'inline' );

    ?>
<style>
p.already-registered {
    text-align: center;
}
</style>
<?php if($this->input->get("action")=="daftar"){ ?>
<section id="register">
    <h1 class="page-header" style="margin-left:100px;"><?php echo lang('us_sign_up'); ?> Affiliate</h1>
 
    <div class="row-fluid">
            	<div class="col-xs-12">
            <?php echo form_open('affiliates-program?action=daftar', array('class' => "form-horizontal", 'autocomplete' => 'off',"data-ajax"=>"false" )); ?>
				<?php Template::block('user_fields', 'user_fields', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form');
                ?>
                <!-- Start of User Meta -->
                <?php $this->load->view('users/user_meta', array('frontend_only' => true)); ?>
                <!-- End of User Meta -->
				
	
<div class="form-group <?php echo iif(form_error('rekening'), $errorClass); ?>">
    <label class="col-xs-4 control-label required" for="rekening">No. Rekening *</label>
    <div class="col-xs-5">
        <input class="<?php echo $controlClass; ?>" required type="text" id="rekening" onkeypress="return harusangka(event)" name="rekening" value="<?php echo set_value('rekening', isset($user) ? $user->no_rekening : ''); ?>" />
        <span class="hash-error"><?php echo form_error('rekening'); ?></span>
    </div>
</div>

<div class="form-group <?php echo iif(form_error('nama_pemilik_bank'), $errorClass); ?>">
    <label class="col-xs-4 control-label required" for="nama_pemilik_bank">Nama Pemilik Bank *</label>
    <div class="col-xs-5">
        <input class="<?php echo $controlClass; ?>" required type="text" id="nama_pemilik_bank" name="nama_pemilik_bank" value="<?php echo set_value('nama_pemilik_bank', isset($user) ? $user->nama_pemilik_bank : ''); ?>" />
        <span class="hash-error"><?php echo form_error('nama_pemilik_bank'); ?></span>
    </div>
</div>

<div class="form-group <?php echo iif(form_error('bank'), $errorClass); ?>">
    <label class="col-xs-4 control-label required" for="bank">Bank *</label>
    <div class="col-xs-5">
      
		<?php 
		$bank=array("BANK BCA"=>"BANK BCA","BANK MANDIRI"=>"BANK MANDIRI","BANK BRI"=>"BANK BRI","BANK BNI"=>"BANK BNI");
		?>
		<select id="bank" name="bank" class="<?php echo $controlClass; ?>" required>
		<option value="">--Pilih  Bank--</option>
		<?php 
		foreach($bank as $keybank=>$valuebank): 
		?>
		<option value="<?php echo $keybank;?>" <?php isset($user) && $user->bank==$valuebank ? 'selected' : '';?>><?php echo $valuebank;?></option>
		<?php
		endforeach;
		?>
		</select>
		
        <span class="hash-error"><?php echo form_error('bank'); ?></span>
    </div>
</div>

				<div class="form-group ">
	<label class="col-xs-4 control-label" for="kode_pos"></label>
	<div class="col-xs-5">
		  <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      Ketikan Kode di bawah ini:
      <?php echo $captchaHtml;  ?>
      <input type="text" class="form-control" value="<?php echo set_value("CaptchaCode");?>" required name="CaptchaCode" id="CaptchaCode" />  
		
	</div>
</div>
				
					<div class="form-group">
    <div class="col-xs-offset-4 col-xs-10">
                    <input type="submit" name="register" class="btn btn-primary" value="<?php echo lang('us_register') ; ?>" />
                    <?php echo lang('us_already_registered'); ?>
                <?php echo anchor('/login', lang('bf_action_login')); ?>
                </div></div>
				
            <?php echo form_close(); ?>
           </div>
    </div>
</section>



<?php }else{ ?>

<style>
.landing-container {
margin: 20px auto;
width: 520px;
font-family: Georgia,Times,Serif;
}
 #header-title {
padding: 0px 0 20px 0;
}
#page-central-header {
border-bottom: 1px solid #ccc;
font-family: Georgia,Times,Serif;
}
element.style {
}
#page-central-header {
border-bottom: 1px solid #ccc;
}
#page-central-header {
width: 960px;
text-align: center;
}
.coltextpop{
text-align:center;
margin-top:20px;
}

</style>


<div id="page-central-header">

  <div id="header-title">
    <h1>Affiliates Program</h1>
  </div>
  
</div>
<div class="landing-container">
  <div class="topImage"><img src="<?php echo Template::theme_url("images/affiliates2.gif");?>" title="Join the SERBADISTRO affiliates program" alt="Join the SERBADISTRO affiliates program"></div>
  
  <h2>Join the SERBADISTRO affiliates program</h2>
  
  <hr color="#CCCCCC" width="171">
  
  <p class="firstpara">SERBADISTRO is part of the award-winning NET-A-PORTER family.<br>We are currently accepting applications from the highest-quality fashion and lifestyle<br>websites to join our affiliate program. As a member of the program you can earn<br>commission when your visitors buy<br>from SERBADISTRO.</p>
  
  <h3>THE BENEFITS OF JOINING</h3>
  
  <ul>
    <li>Competitive commission on net sales, excluding shipping, taxes and returns</li>
    <li>Eligibility for commission on sales originating from your site within 30 days</li>
    <li>It is free to join</li>
    <li>Real time reporting and sales tracking</li>
    <li>A dedicated SERBADISTRO Affiliate team for information and advice</li>
  </ul>
  
  <p>For more information, please read our terms &amp; conditions.</p>
  
  <h3>THE ROLE OF AN AFFILIATE</h3>
  
  <p>Promote SERBADISTRO on your site by:</p>
  
  <ul>
    <li>Placing our ads, banners and links on your site</li>
    <li>Accessing our product data feed and promoting key products to give your readers access to every single item on SERBADISTRO</li>
  </ul>
  
  <h3>HOW TO APPLY</h3>
  
  <p>Simply fill in our short application form.We will review the application to ensure that your website is suitable. We will then contact you to let you know the outcome of your application.</p>
  
  <ul>
    <li>We will review the application to ensure that your website is suitable</li>
    <li>We will then contact you to let you know the outcome of your application.<br>For more information, please read our <a href="javascript:help('/Help/TermsandConditions');" title="terms and conditions">terms &amp; conditions</a>.</li>
  </ul>
  
  <div class="coltextpop"><a href="<?php echo site_url("affiliates-program");?>?action=daftar" id="apply_now"><img src="<?php echo Template::theme_url("images/applynow.gif");?>" title="Apply now" alt="Apply now"></a> </div>
</div>

<?php } ?>