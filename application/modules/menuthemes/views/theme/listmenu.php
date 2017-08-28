
<div class="alert alert-info fade in">
<a class="close" data-dismiss="alert">×</a>
<p><b>Untuk Memindahkan Posisi Menu, Anda dapat melakukan Drag dan Drop Pada Menu.</b></p>
</div>

<div class="admin-box">
<h3><?php echo $toolbar_title ?></h3>

<div class="tabbable">

<!-- list menu -->		
<ul class="nav nav-tabs">
<?php
	$no=1;
	//$this->auth->restrict('MenuLevel.Theme.View');
	foreach($location as $loc):
	$active=($no==1)?"active":"";
	
								switch($loc->tipe_lokasi){
								case "1":
								$tipelokasi="Depan";
								break;
								case "2":
								$tipelokasi="Belakang";
								break;
								case "3":
								$tipelokasi="Bawah";
								break;
									}
	
?>
  <li class="<?php echo $active ?>" style="border: 1px solid #ccc;border-bottom:0px">
  <a href="#<?php echo $loc->id;?>" data-toggle="tab">
  <?php echo $loc->menu_lok;?><br />
</a>
  </li>
<?php
	$no++;
  endforeach;
?>
</ul>
        
<!-- list content menu -->
<div class="tab-content">
<?php
	$no=1;
    foreach($location as $loc):
	$active=($no==1)?"active":"";
?>

<!-- Start of Main Settings Tab Pane -->
<div class="tab-pane <?php echo $active;?>" id="<?php echo $loc->id;?>">

<div class="row">         
<div class="col-sm-12"><!--  span4 -->	
   <h4>Drag Dan Drop Menu Dibawah</h4>
      <hr />
   <?php get_parent_menu_list ($loc->id);
   $inline  = '$("#nestableMenu'.$loc->id.'").nestable({group: 1}).on("change", updateOutput);';
   $inline  .='updateOutput($("#nestableMenu'.$loc->id.'").data("output", $("#nestableMenu'.$loc->id.'-output")));'; 
    Assets::add_js( $inline, 'inline' );
   ?>
   
</div><!-- end span4 -->	
</div>

            
</div><!-- end tab pane -->	

<?php
	$no++;
	endforeach;
?>        

</div><!-- end tab content -->	
</div><!-- end tabbable -->	
</div><!-- end admin box -->	
 

