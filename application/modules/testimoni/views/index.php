<div  style="padding:15px;">
<h1><?php echo lang('bf_contact');?> <small> <?php echo lang('bf_contact_more');?></small></h1>

<div class="row">
<div class="col-xs-12">
<?php echo form_open($this->uri->uri_string(), 'class="form-vertical" data-ajax="false" '); ?>      
	<div class="form-group">
 <div class="controls">
    <label><?php echo lang('guesbook_name');?> *</label>
     <input type="text" class="form-control" required name="pengirim" id="pengirim" value="<?php echo set_value('pengirim'); ?>"/>
  </div>
  </div>
  <div class="form-group">
  <div class="controls">
    <label>Email *</label>
      <input type="email"  class="form-control" required name="email" id="email" value="<?php echo set_value('email'); ?>"/>
  </div>
  </div>
  <div class="form-group">
  <div class="controls">
    <label><?php echo lang('guesbook_form_komentar');?> *</label>
       <textarea name="komen" required class="form-control" rows="6"><?php echo set_value('komen'); ?></textarea>
    </div>
	</div>
 <div class="form-group">
 <div class="controls">
      <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
      <?php echo lang('guesbook_msgcaptcha');?>:
      <?php echo $captchaHtml;  ?>
      <input type="text" class="form-control" required name="CaptchaCode" id="CaptchaCode" />  
</div>
</div>
 <div class="form-group">
<input type="submit" name="button" id="button" value="<?php echo lang('guesbook_buttonsend');?>" class="btn btn-primary" />
</div>
<?php echo form_close();?>         


</div>


</div>
</div>





