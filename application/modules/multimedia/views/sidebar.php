<div class="well">
                    <h4><?php echo lang('bf_video_search');?></h4>
						 <?php echo form_open($this->uri->uri_string(),array("id"=>"formfilter","name"=>"formfilter","class"=>"","method"=>"get")); ?>    	
   
				   <div class="input-group">
                        <input type="text" name="keyword" value="<?php echo $this->input->get('keyword');?>" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
					<?php echo form_close(); ?>
                    <!-- /.input-group -->
                </div>
				
				
<div class="well">
                    <h4><?php echo lang("video_category");?></h4>
                     <?php $this->multimedia_model->kategori_multimedia("list-unstyled categorysidebar",$this->session->userdata('site_lang'));?>
					</div>
                