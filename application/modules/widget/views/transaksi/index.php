<?php
  //Do not Remove This Config
 $widget_sidebar = config_array();

  for($i=1; $i<=count($widget_sidebar); $i++):
   
?>
<div id="console"></div>


<div class="admin-box" id="onduty" style="min-height:0;">
<h3 style="font-size:13px;">WGT <?php echo $widget_sidebar[$i];?> <span style="float:right; cursor:pointer;" class="cool"><img src="<?php echo Template::theme_url('images/addnew.png'); ?>" /></span></h3>
 
   <div class="column" id="column<?php echo $i;?>" style="display:none;">
		 <div class="dragbox" id="item10009" style='' >
			<div style="display:none;height:146px;overflow: auto;">
            <h2>Handle 4</h2>
			<div class="dragbox-content"> 
 			</div>
            </div>
		</div>
        
              <?php
		  $widget_models =  $this->widget_get->widget_model($i);
		  
		  if($widget_models){
			  foreach($widget_models as $column){
				  #extract h2 title,
				  $h2 = explode('_', $column->tipe_widget);
				   
				  $h2_ = '';
				  for($j=0; $j<count($h2); $j++){
					 $h2_ = $h2_."&nbsp;".$h2[$j];
 				  }
 		?>
            <div  class="dragbox" id="item<?php echo $column->id_referen_widget;?>" parentlog="<?php echo $column->sort_no;?>">
               <h2><?php echo $h2_;?></h2>
               <div class="dragbox-content" <?php echo ($column->collapse==1)?"style='display:none;'":""?>> 
				 <?php 
				  #print widget form
				  $data['sort_no']=$column->sort_no;
				  $data['column_sidebar']=$column->column_sidebar;
  				  $this->widget_get->widget_forms($column->tipe_widget, $data);
				?>
                    
               </div>
             </div> 
             
        <?php
			  }
		  }
	    ?>
       
    </div> 
</div>
<?php endfor;?>
 
 