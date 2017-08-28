<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function show_list_menu($parentID, $location_index){
  $ci =& get_instance();
   
  $literal = $ci->db->from('meta_menu')->where(array('parent_id ' => $parentID , 'location_index ' => $location_index))->order_by("rang","asc")->get();
  $numRows = $literal->num_rows();
			
			if ($numRows > 0) {
				echo "\n";
				echo "<ol class='dd-list'>\n";
					foreach($literal->result() as $row):
						echo "\n";
						
						echo "<li class='dd-item' data-id='{$row->id}'>\n";
							
								echo "
							<div class='dd-handle dd3-handle'>Drag</div>
							<div class='dd3-content'>{$row->name} ";

							echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/edit/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-pencil'></span> Edit &nbsp;</a> 	
							    <a href='".site_url(SITE_AREA.'/theme/menuthemes/hapus/'.$row->id.'')."'' onclick='return confirm(\"Anda Yakin Ingin Menghapus?\")' class='pull-right'><span class='glyphicon glyphicon-trash'></span> Hapus &nbsp;</a> 	
							  ";

							  if($row->flag_hide==0):
							  echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/hide/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-eye-close'></span> Hide &nbsp;</a>	
								";
								else:
									echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/show/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-eye-open'></span> Show &nbsp;</a>	
								";
									endif;

								echo "
							</div>
							";
						
							// Run this function again (it would stop running when the mysql_num_result is 0
							   show_list_menu($row->id, $row->location_index);
						
						echo "</li>\n";
					endforeach;
				echo "</ol>\n";
			}
  }


function display_children($parent, $level,$selected="",$lokasi=7) {

 $ci =& get_instance();

    $result = $ci->db->query("SELECT a.id,a.parent_id, a.name, Deriv1.Count FROM `bf_meta_menu` a  LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `bf_meta_menu` GROUP BY parent_id) Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id=" . $parent." and a.location_index=".$lokasi." order by a.rang asc");
	
	$indent = str_repeat('-', $level);
    $tpl = '<option value="%s" %s>%s</option>';
     echo "<option value='0'>--Menu Induk--</option>";
	
	 foreach($result->result_array() as $row) {
	 
	
		if($selected!=""):
		 if($row['id']==$selected) 
			$pilih="selected";
		else
			$pilih="";
		else:
			 if($row['id']==@$_POST["menu_parent_id"]) 
			$pilih="selected";
		else
			$pilih="";
		endif;
			
        echo sprintf($tpl, $row['id'],$pilih, $indent . $row['name']);
		
		
        if (@$row['Count'] > 0) {
			
            display_children(@$row['id'], $level + 1);
        }
		
	
    }
}
  
  
  function get_parent_menu_list($location_index){
	 $ci =& get_instance();
	 
	 ## Show the top parent elements from DB
		######################################
		$literal = $ci->db->from('meta_menu')->where(array('parent_id' => 0, 'location_index' => $location_index))->order_by('rang')->get();
		$numRows = $literal->num_rows();
 		
		
		echo "<div class='cf nestable-lists'>\n";
			echo "<div class='dd' id='nestableMenu".$location_index."'>\n\n";
				echo "<ol class='dd-list'>\n";
				
					foreach($literal->result() as $row):
						echo "\n";
						
						echo "<li class='dd-item' data-id='{$row->id}'>";
							
							echo "
							<div class='dd-handle dd3-handle'>Drag</div>
							<div class='dd3-content'>{$row->name} ";

							echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/edit/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-pencil'></span> Edit &nbsp;</a> 	
							    <a href='".site_url(SITE_AREA.'/theme/menuthemes/hapus/'.$row->id.'')."'' onclick='return confirm(\"Anda Yakin Ingin Menghapus?\")' class='pull-right'><span class='glyphicon glyphicon-trash'></span> Hapus &nbsp;</a> 	
							  ";

							  if($row->flag_hide==0):
							  echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/hide/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-eye-close'></span> Hide &nbsp;</a>	
								";
								else:
									echo "
							  <a href='".site_url(SITE_AREA.'/theme/menuthemes/show/'.$row->id.'')."'' class='pull-right'><span class='glyphicon glyphicon-eye-open'></span> Show &nbsp;</a>	
								";
									endif;

								echo "
							</div>
							";
 						
						   show_list_menu($row->id, $row->location_index);
						    
						   
						echo "</li>\n";
					endforeach;
					
				echo "</ol>\n\n";
			echo "</div>\n";
		echo "</div>\n\n";  
  }
  
  
  function call_data_menu($location_index){
	 $ci =& get_instance();
	 $literal = $ci->db->select('meta_menu.*, post_meta.judul')->from('meta_menu')
	                   ->join('post_meta', 'post_meta.id = meta_menu.url_posts', 'left')
 	 				   ->where(array('meta_menu.location_index' => $location_index))->order_by('meta_menu.rang','asc')->get()->result();  
					    
     return  $literal;
   }
   
   function call_post($id){
	 $ci =& get_instance();
	 $literal = $ci->db->from('post_meta')->where(array('id' => $id))->get()->row();  
	 if(isset($literal->judul)){
        return  $literal->judul;  
	 }
   }
   
   
     function call_pages($id){
	 $ci =& get_instance();
	 $literal = $ci->db->from('pages_meta')->where(array('id' => $id))->get()->row();  
	 if(isset($literal->judul)){
        return  $literal->judul;  
	 }
   }
   

?>