		<?php 
		foreach ($meta_fields as $field):?>
					
					
					
			<?php

					if($field["name"]!="state" and $field["name"]!="country" and $field["name"]!="kota"){
					?>
					
					<div class="form-group">
    <label class="col-xs-2 text-right"><?php echo $field["label"]; ?> :</label>
    <div class="col-xs-5">
 					
					<?php
						echo @$user->$field["name"];
						?>
						    </div>
</div>
						
						<?php
						}
			
	
			

			?>


		<?php endforeach; ?>
