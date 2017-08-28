<!--Komentar Forms-->    
<div class="well">
<?php echo form_open($this->uri->uri_string(), 'class="form-vertical"'); ?>
<input name="uri_string" type="hidden" value="<?php echo urlencode($this->uri->uri_string());?>" />

<?php echo Template::message(); ?>
                    <h4><?php echo lang('comment_form_komentar');?> :</h4>
                    <hr />
					<?php if ($this->auth->is_logged_in() === FALSE) :?>

	<div class="row form-group">
 <div class="col-xs-5">
    <label class="control-label" for="inputName"><?php echo lang('comment_form_nama');?> *</label>
     <input type="text"  required class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>"/>
     <span class='hash-error'><?php echo form_error('name'); ?></span>
	</div>
  </div>
  
  <div class="row form-group">
 <div class="col-xs-5">
    <label class="control-label" for="inputName">Email *</label>
     <input type="email" required class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>"/>
		 <span class='hash-error'><?php echo form_error('email'); ?></span>
	</div>
  </div>

<?php else: ?>
   <input type="hidden" class="input-xlarge" name="name" id="name" value="<?php echo $this->auth->user()->display_name; ?>"/>
    <input type="hidden" class="input-xlarge" name="email" id="email" value="<?php echo $this->auth->user()->email; ?>"/>
<?php endif;?>
					
					
                        <div class="form-group">
                            <textarea name="message" required class="form-control" id="message" style="height:150px"><?php echo set_value('message'); ?></textarea>
   
                        </div>
                     
 <div class=" row form-group ">
  <div class="col-xs-6">
    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />   
<?php echo lang('comment_msgcaptcha');?>
<?php echo $captchaHtml;  ?>
<input type="text" name="CaptchaCode" required class="form-control" id="CaptchaCode" />  
     <span class='hash-error'><?php echo form_error('CaptchaCode'); ?></span>
	</div> </div>

					 <button type="submit" name="send" class="btn btn-primary"><?php echo lang('comment_buttonsend');?></button>	
                    
<?php echo form_close();?>                        

			  </div>
                                                   
<hr />                     
                    
<?php if($komentar): ?>

<?php foreach($komentar as $komen){ 

if ($this->session->userdata('site_lang')=="english"): 
		$tgl1 = "Date : ";
		else : 
		$tgl1 = "Tanggal Posting : ";
		endif;

?>



<div class="media">

                    <a class="pull-left" href="#">
       
						<img class="profile-img media-object" src="<?php echo Template::theme_url("images/photo.png");?>">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $komen->identitas;?>
                            <small><i class="icon-calendar icon-blue"></i>  <?php echo $tgl1;?> 
							 <?php echo date("d M Y", strtotime($komen->tgl_komentar));?> <?php echo date("H:i", strtotime($komen->tgl_komentar));?>
							</small>
                        </h4>
							<?php echo $komen->komentar;?>
					</div>
      </div>        
<hr />	  
<?php } ?>

<?php else: ?>
<div class="alert alert-warning">
<?php echo 'No Comments Results.'; ?>
</div>
<?php endif; ?>
           
 <br /><br />
