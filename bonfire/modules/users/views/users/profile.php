<?php

$validation_errors = validation_errors();
$errorClass = ' has-error';
$controlClass = 'form-control';
$fieldData = array(
    'errorClass'    => $errorClass,
    'controlClass'  => $controlClass,
);

?>
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
<section id="profile">

<div class="row-fluid">
    	<div class="col-xs-12">
		
	<h1 class="page-header" style="margin-left:100px;"><?php echo lang('us_edit_profile'); ?></h1>
    <?php if ($validation_errors) : ?>
    <div class="alert alert-danger">
        <?php echo $validation_errors; ?>
    </div>
    <?php endif; ?>
    <?php if (isset($user) && $user->role_name == 'Banned') : ?>
    <div data-dismiss="alert" class="alert alert-error">
        <?php echo lang('us_banned_admin_note'); ?>
    </div>
    <?php endif; ?>
	

</div></div>
	<div class="row-fluid">
    	<div class="col-xs-12">
            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal', 'autocomplete' => 'off',"data-ajax"=>"false")); ?>
                <?php Template::block('user_fields', 'user_fields', $fieldData); ?>
                <?php
                // Allow modules to render custom fields
                Events::trigger('render_user_form', $user );
                ?>
                <!-- Start User Meta -->
                <?php $this->load->view('users/user_meta', array('frontend_only' => true));?>
                <!-- End of User Meta -->
				
				<?php if($this->auth->role_id()==7): ?>
					
<div class="form-group <?php echo iif(form_error('rekening'), $errorClass); ?>">
    <label class="col-xs-4 control-label required" for="rekening">No. Rekening *</label>
    <div class="col-xs-5">
        <input class="<?php echo $controlClass; ?>" required type="text" id="rekening" name="rekening" value="<?php echo set_value('rekening', isset($user) ? $user->no_rekening : ''); ?>" />
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
        <input class="<?php echo $controlClass; ?>" required type="text" id="bank" name="bank" value="<?php echo set_value('bank', isset($user) ? $user->bank : ''); ?>" />
        <span class="hash-error"><?php echo form_error('bank'); ?></span>
    </div>
</div>
<?php endif; ?>
				
				<hr />
                
				<div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
                    <input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('bf_action_save') . ' ' . lang('bf_user'); ?>" />
                    <?php echo lang('bf_or') . ' ' . anchor('/', lang('bf_action_cancel')); ?>
                </div></div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>