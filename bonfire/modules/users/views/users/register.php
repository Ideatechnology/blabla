<?php

$validation_errors = validation_errors();
$errorClass = ' hash-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?>
<style>
p.already-registered {
    text-align: center;
}
</style>

<?php 
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

<section id="register">
    <h1 class="page-header" style="margin-left:100px;"><?php echo lang('us_sign_up'); ?></h1>
 

    <div class="row">
            	<div class="col-xs-12">
            <?php echo form_open('register', array('class' => "form-horizontal","autocomplete" => "off ","data-ajax"=>"false")); ?>
				<?php Template::block('user_fields', 'user_fields', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form');
                ?>
                <!-- Start of User Meta -->
        
				<?php $this->load->view('users/user_meta', array('frontend_only' => true)); ?>
                <!-- End of User Meta -->
				<div class="form-group ">
	<label class="col-xs-4 control-label" for="kode_pos"></label>
	<div class="col-xs-5">
		  <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      Ketikan Kode di bawah ini:
      <?php echo $captchaHtml;  ?>
      <input type="text" class="form-control" value="<?php echo set_value("CaptchaCode");?>" required name="CaptchaCode" id="CaptchaCode" />  
		
	</div>
</div>
				

                <hr />
					<div class="form-group">
    <div class="col-xs-offset-4 col-xs-10">

                    <input type="submit" name="register" class="btn btn-primary ui-btn ui-btn-b" value="<?php echo lang('us_register') ; ?>" />
                    <?php echo lang('us_already_registered'); ?>
                <?php echo anchor('/login', lang('bf_action_login')); ?>
                </div></div>
				
            <?php echo form_close(); ?>
           </div>
    </div>
</section>