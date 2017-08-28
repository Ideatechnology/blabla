<?php
function get_posts($parentID){
  $ci =& get_instance();
   
  $literal = $ci->db->from('bit_post_meta')->where(array('id ' => $parentID))->get()->row();
  return  $literal;

}

function get_pages($parentID){
  $ci =& get_instance();
   
  $literal = $ci->db->from('pages_meta')->where(array('id ' => $parentID))->get()->row();
  return  $literal;
  
}

function collapsenav($id){ 
	    
		$ci =& get_instance();
        $ci->load->database();
	 
		    $query = $ci->db->query('select * from bf_pages_meta where parent_id="'.$id.'" order by judul asc');  // Query database
			 $rowquery= $ci->db->query('select * from bf_pages_meta where id="'.$id.'" and parent_id=0 order by judul asc')->row();
			
			$result = '<ul id="menuaccordion" class="nav2 nav nav-sidebar">';
			
			if(count($rowquery)>0){
			$result .="<li><a style='text-decoration:none;' href='".site_url('pages/detailparent/'.date("Y",strtotime(@$rowquery->created_on)).'/'.
				$rowquery->id.'/'.url_title(@$rowquery->judul, 'dash'))."'>".$rowquery->judul."</a></li>";
				}
			foreach($query->result() as $row){
				
				$haschild = $ci->db->get_where('bf_pages_meta', array('parent_id' => $row->id)); // Check apakah tersangka punya anak?
				$row_child = $haschild->num_rows();
				
					if($row_child == 0){ // Kalo ternyata ga punya anak, eksekusi tanpa anaknya...hehe
					$result .= '<li>
							   <a href="'.site_url('pages/detailparent/'.date("Y",strtotime(@$row->created_on)).'/'.
				$row->id.'/'.url_title(@$row->judul, 'dash')).'" style="text-decoration:none;">'.$row->judul.'</a>';
						}else{ // Kalo ternyata punya
					$result .= '<li class="expandable">kkkkk<div class="hitarea expandable-hitarea"></div>
 								<a href="'.site_url('pages/detailparent/'.date("Y",strtotime(@$row->created_on)).'/'.
				 $row->id.'/'.url_title(@$row->judul, 'dash')).'" style="text-decoration:none;">'.$row->judul.'</a>
 								';
					$result .= collapsenav($row->id);  //Ambil lagi fungsi menu dengan id induk
					}
				$result .= '</li>';
			}
			$result .= '</ul>';
			
			return $result; 
	}

function display_children($parent, $level,$selected) {



    $result = mysql_query("SELECT a.id,a.parent_id, a.judul, Deriv1.Count FROM `bf_pages_meta` a  LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `bf_pages_meta` GROUP BY parent_id) Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id=" . $parent);
	
   
	
	$indent = str_repeat('-', $level);
    $tpl = '<option value="%s" %s>%s</option>';

    while ($row = mysql_fetch_assoc($result)) {
	
		
		
		if($selected!=""):
		 if($row['id']==$selected) 
			$pilih="selected";
		else
			$pilih="";
		else:
			 if($row['id']==@$_POST["pages_parent_id"]) 
			$pilih="selected";
		else
			$pilih="";
		endif;
		

		
        echo sprintf($tpl, $row['id'],$pilih, $indent . $row['judul']);
		

		
        if ($row['Count'] > 0) {
			
            display_children($row['id'], $level + 1);
        }
		
	
    }
}


function collapsenav2($id){ 
	    
		$ci =& get_instance();
        $ci->load->database();
	 
		     $query = $ci->db->query('select * from bf_meta_menu where parent_id="'.$id.'" and url_pages <> 0 and url_pages !=""  order by rang asc');  // Query database
			 
			$result = '<ul id="menuaccordion" class="nav2 nav nav-sidebar">';
			
			foreach($query->result() as $row){
				
				
				
				$haschild = $ci->db->get_where('bf_meta_menu', array('parent_id' => $row->id)); // Check apakah tersangka punya anak?
				$row_child = $haschild->num_rows();
				$parentmulti=$haschild->row();
				$rowquery= $ci->db->query('select * from bf_pages_meta where id="'.$row->url_pages.'"')->row();
				
				if ($ci->session->userdata('site_lang')=="english"): 
				$judul=$row->name_english;
				else:
				$judul=$row->name;
				endif;
				
				
					if($row_child == 0){ // Kalo ternyata ga punya anak, eksekusi tanpa anaknya...hehe
					$result .= '<li >
							   <a href="'.site_url('pages/detail/'.date("Y").'/'.
				$rowquery->id.'/'.$ci->uri->segment(5)).' " style="text-decoration:none;">'.$judul.'</a>';
						}else{ // Kalo ternyata punya
					$result .= '<li class="expandable"><div class="hitarea expandable-hitarea"></div>
 								<a href="'.site_url('pages/detail/'.date("Y").'/'.
				 $rowquery->id.'/'.$ci->uri->segment(5)).'" style="text-decoration:none;">'.$judul.'</a>
 								';
					$result .= collapsenav2($row->id);  //Ambil lagi fungsi menu dengan id induk
					}
				$result .= '</li>';
			}
			$result .= '</ul>';
			
			return $result; 
	}
  
 ?>