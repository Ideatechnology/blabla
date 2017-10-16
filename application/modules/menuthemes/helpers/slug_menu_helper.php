<?php

function get_data_menu($bagian){
  $ci =& get_instance();
  $resultqueryhirarki = $ci->db->query("SELECT * FROM bf_meta_menu where location_index='".$bagian."' 
   ORDER BY rang asc");

	foreach($resultqueryhirarki->result() as $rowhirarki) {
		$data[$rowhirarki->parent_id][] = $rowhirarki;
	}
	return $data;  
	  
}

function get_menu_count($id){
  $ci =& get_instance();
  
  $result = $ci->db->query("SELECT count(*) as jml
   FROM bf_meta_menu where parent_id='".$id."'")->row();

	return $result->jml;  
	  
}
  

  
  function get_menu($data, $parent = 0) {
	
	static $i = 1;
	$tab = str_repeat("\t\t", $i);
	 $ci =& get_instance();
$html="";
	if (isset($data[$parent])) {
		$html .= "\n$tab<ul class='".(($parent!=0)?"dropdown-menu":"nav navbar-nav")."'>";
		$i++;
		
		foreach ($data[$parent] as $v) {
			
			$jml=get_menu_count($v->id);
			
			$child = get_menu($data, $v->id);
			
		
			$html .= "\n\t$tab<li ".(($parent==0 && $jml > 0)?"class='dropdown'":"").">";
			
			
			$dropdown = (($parent==0 && $jml > 0)?"class='dropdown-toggle' data-toggle='dropdown'":"");
			$caret =(($parent==0 && $jml > 0)?"<b class='caret'></b>":"");
			
			#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
			if($v->url_module!=''):
					$html .= "<a href='#' ".$dropdown.">{$v->name} ".$caret."</a>";
			endif;
			
			#Cek apabila dia berstatus blank			    
			if($v->url_blank =='#'):
				$html .=  "<a href='#' ".$dropdown.">{$v->name} ".$caret."</a>";
			endif;
			
			#Cek apabila dia berstatus pages			
			if($v->url_pages !='' && $v->url_pages!=0):
			  #cek untuk menu level 3
			  if($parent <> 0 && $jml > 0):
				  $html .="<a href='".site_url()."/pages/index/".str_replace('=','',base64_encode($v->id))."'>    
						  {$v->name}</a>";
			  else:
				 $pages = $ci->db->from('pages_meta')->where('id', $v->url_pages)->get()->row();
				 $html .=  "<a href='".site_url('pages/detail/'.date("Y",strtotime(@$pages->created_on)).'/'.
				 $v->url_pages.'/'.url_title(@$pages->judul, 'dash'))."' ".$dropdown.">{$v->name} ".$caret."</a>";
			  endif;
			endif;
								
			#Cek apabila dia berstatus posting kategori
			if($v->url_kategori!='' && $v->url_kategori!=0):
			   $html .=  "<a href='".site_url('post/categories/'.str_replace('=','',
			   base64_encode($v->url_kategori)))."/".url_title(strtolower($v->name),'dash')."' ".$dropdown.">
			   {$v->name} 
			   ".$caret."</a>";
			endif;
			
			#Cek apabila dia berstatus posting 			
		   if($v->url_posts!='' && $v->url_posts!=0):
		 	#parsing/restrive Post data
			$rows = $ci->db->from('post_meta')->where('id', $v->url_posts)->get()->row();
			if($rows):
				$html .=  "<a href='".site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.
				$v->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($v->name,'dash')."' ".$dropdown.">
				{$v->name} ".$caret."</a>";
			endif;
		  endif;
		  
							
			if ($child) {
				$i--;
				$html .= $child;
				$html .= "\n\t$tab";
			}
			
			$html .= '</li>';
		}
		$html .= "\n$tab</ul>";
		return $html;
	}else {
		return false;
	}
	
}

function get_slug_lokasi_list($type){
     $ci =& get_instance();
    $lokasimenu=$ci->db->from('menu_lokasi')->where('tipe_lokasi', 2)->order_by('list_urutan', 'ASC')->get()->result();

    if($lokasimenu):

            echo '<div class="accordion" id="leftMenu">';
           
            $no2=1;
            foreach($lokasimenu as $rowlokasimenu):
            if($no2==1){
            $in="";
            }else{
            $in="in";
            }
          
             echo '
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#'.$rowlokasimenu->id.'">
                      '.$rowlokasimenu->menu_lok.'
                    </a>
                  </div>
                  <div style="height: auto;" id="'.$rowlokasimenu->id.'" class="accordion-body collapse '.$in.'">
                    <div class="accordion-inner" style="padding: 0;margin: 0">
              ';      

                
			 echo get_slug_menu_list($rowlokasimenu->id);
               
               echo '     </div>
                  </div>
                </div>';
               
                    $no2++;
                    endforeach; 
               
               echo ' </div>';

    endif; 

}

function get_slug_menu_list($location_index){
	 
	 
	 $ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$literal = $ci->db->from('meta_menu')->where(array('parent_id' => 0, 'location_index' => $location_index))->order_by('rang')->get();
		$numRows = $literal->num_rows();
 		 
			 
 			   $url_active = explode('-', end($ci->uri->segments));
			  #jika uri segmen terakhir yang dikirim dari browser lebih dari 3, maka, gak usah dianggap.
					  #soalnya kita cuman mau nge GET menu saja..
					  $url='';
					  for($i=0; $i<count($url_active); $i++){
						 $url .= "".$url_active[$i]." "; 
					  } 
					 
 				echo "<ul class='nav nav-list'>";
				    $active='';
					
					 
					foreach($literal->result() as $row):
					    $literal2 = $ci->db->from('meta_menu')->where(array('parent_id' => $row->id, 'location_index' => $location_index))
						                  ->order_by('rang')->get();
						$numR = $literal2->num_rows();
					    if($numR ==0):
						#parsing last uri agar pas di klik masih pada posisi menu yang sama
						//if(rtrim($url) == strtolower($row->name)){ echo "<li class='active'>"; }else{ echo "<li>";} 
						 if(rtrim($url) == strtolower($row->name)){ echo "<li>"; }else{ echo "<li>";} 
						 
 							
							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($row->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	echo "<a href='".site_url($row->url_module)."'>{$row->name}</a>";
 							endif;
						    
							if($row->url_blank =='#'){
								echo "<a href='#'>{$row->name}</a>";
							}
							
							if($row->url_pages !='' && $row->url_pages!=0){
								 $pages = $ci->db->from('pages_meta')->where('id', $row->url_pages)->get()->row();
								 echo "<a href='".site_url('pages/detail/'.date("Y",strtotime($pages->created_on)).'/'.$row->url_pages.'/'.url_title($pages->judul, 'dash'))."'>{$row->name}</a>";
							}
							
							#categories
							if($row->url_kategori!='' && $row->url_kategori!=0):
							   //Menu Tidak ditampilkan
							   echo "<a href='".site_url('post/categories/'.str_replace('=','',base64_encode($row->url_kategori)))."/".url_title(strtolower($row->name),'dash')."'>{$row->name}</a>";
							endif;
							
							if($row->url_posts!='' && $row->url_posts!=0):
							  #parsing/restrive Post data
							  $rows = $ci->db->from('post_meta')->where('id', $row->url_posts)->get()->row();
							  if($rows):
 							  echo "<a href='".site_url('post/read/'.date("Y",strtotime($rows->tgl_post)).'/'.$row->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($row->name,'dash')."'>{$row->name}</a>";
							      
							  endif;
							endif;
							
  							 else:
							     //show_slug($row->id, $row->location_index);
								 echo "<li><a href='".site_url()."/pages/index/".str_replace('=','',base64_encode($row->id))."'>{$row->name} </a>";
								  
						    endif;
						   
						echo "</li>";
					endforeach;
					
				echo "</ul>";
			 
  }
  
  
  function get_slug_lokasi_list_sitemap($type){
     $ci =& get_instance();
	 
	 $ci->load->model('menuthemes/menu_lokasi_model', null, true);
	 $result=$ci->menu_lokasi_model->select()->result();
	 
     $lokasimenu=$ci->menu_lokasi_model->select()->result();
	
    if($lokasimenu):

            echo '
			<div class="accordion" id="leftMenu1">
			
';

$idactive="";
//jika post
if($ci->uri->segment(1)=="post"):
	if($ci->uri->segment(2)=="categories"):
	 $ci->db->where('url_kategori' ,str_replace('=','',base64_decode($ci->uri->segment(3))));
	else:
	
	$exceptmenu=$ci->db->where('url_posts',$ci->uri->segment(4))->from("meta_menu")->get()->row();
	if($exceptmenu){
	
	$ci->db->where('url_posts' ,$ci->uri->segment(4));
	}else{
	
	$postid = $ci->db->where('id',$ci->uri->segment(4))->from("post_meta")->get()->row();
	$ci->db->where('url_kategori' ,$postid->post_category);
	
	}
	
	
	endif;
	
//jika page
elseif($ci->uri->segment(1)=="pages"):
	if($ci->uri->segment(2)=="index"):
		$ci->db->where('meta_menu.id' ,str_replace('=','',base64_decode($ci->uri->segment(3))));
	else:
		$ci->db->where('url_pages' ,$ci->uri->segment(4));
	endif;
//jika module
else:
	$ci->db->where('url_module' ,$ci->uri->segment(1));
endif; 

$getmenu = $ci->db->from('meta_menu')->select("menu_lokasi.id as id_lokasi,meta_menu.id as id_menu,menu_lokasi.tipe_lokasi,meta_menu.parent_id")
								 		 ->join("menu_lokasi","meta_menu.location_index=menu_lokasi.id")
										 ->where("meta_menu.flag_hide",0)
										 ->where("tipe_lokasi",2)
										 ->order_by("rang","asc")
										 ->get()
										 ->row();

										 			
foreach($lokasimenu as $rowlokasimenu):

if(@$getmenu->id_lokasi==$rowlokasimenu->id)
$active="in";
else
$active="";


echo '
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu1" href="#site'.$rowlokasimenu->id.'">
      <span class="glyphicon glyphicon-folder-open"></span> &nbsp; '.$rowlokasimenu->menu_lok_bahasa.'
	 
      </a>
    </div>
    <div id="site'.$rowlokasimenu->id.'" class="accordion-body  '.$active.'">
      <div class="accordion-inner" style="padding: 0;margin: 0">';
        get_slug_menu_list_sitemap($rowlokasimenu->id);
      echo '</div>
    </div>
  </div>
  ';
  endforeach;
  echo '
</div>';
		

    endif; 

}

function get_slug_menu_list_sitemap($location_index){
	 
	 
	 $ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		$literal = $ci->menu_model->select($location_index);
		$numRows = $literal->num_rows();
 		 
		   
		   $idactive="";
			//jika post
			if($ci->uri->segment(1)=="post"):
				if($ci->uri->segment(2)=="categories"):
					 $ci->db->where('url_kategori' ,str_replace('=','',base64_decode($ci->uri->segment(3))));
				else:
				$exceptmenu=$ci->db->where('url_posts',$ci->uri->segment(4))->from("meta_menu")->get()->row();
	if($exceptmenu){
	
	$ci->db->where('url_posts' ,$ci->uri->segment(4));
	}else{
	
	$postid = $ci->db->where('id',$ci->uri->segment(4))->from("post_meta")->get()->row();
	$ci->db->where('url_kategori' ,$postid->post_category);
	
	}
	
				endif;
	
				//jika page
				elseif($ci->uri->segment(1)=="pages"):
				if($ci->uri->segment(2)=="index"):
				$ci->db->where('meta_menu.id' ,str_replace('=','',base64_decode($ci->uri->segment(3))));
				else:
				$ci->db->where('url_pages' ,$ci->uri->segment(4));
				endif;
				//jika module
				else:
				$ci->db->where('url_module' ,$ci->uri->segment(1));
				endif; 

				$getmenu = $ci->db->from('meta_menu')->select("menu_lokasi.id as id_lokasi,meta_menu.id as id_menu,menu_lokasi.tipe_lokasi,meta_menu.parent_id")
								 		 ->join("menu_lokasi","meta_menu.location_index=menu_lokasi.id")
										 ->where("tipe_lokasi",2)
										 ->order_by("rang","asc")
										 ->get()
										 ->row();
		   
					$aktifmenu="";
					 echo "<ul class='nav nav-list'>";
					  $active='';
					foreach($literal->result() as $row):
					    $literal2 = $ci->db->from('meta_menu')->where(array('parent_id' => $row->id, 'location_index' => $location_index))
						                  ->order_by('rang')->get();
						$numR = $literal2->num_rows();
					    if($numR ==0):
							
							if(@$getmenu->id_menu == $row->id){ 
							echo "<li class='active'>"; 
							$aktifmenu='class="active"';
							}else{ 
							$aktifmenu='';
							echo "<li>";
							} 
						
							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($row->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	echo "<a ".$aktifmenu." href='".site_url($row->url_module)."'>{$row->menu_bahasa}</a>";
 							endif;
							
							if($row->url_link!=''):
							   //Menu Tidak ditampilkan
 							     	echo "<a ".$aktifmenu." href='".$row->url_link."'>{$row->menu_bahasa}</a>";
 							endif;
						    
							if($row->url_blank =='#'){
								echo "<a href='#' ".$aktifmenu.">{$row->menu_bahasa}</a>";
							}
							
							if($row->url_pages !='' && $row->url_pages!=0){
								 $pages = $ci->db->from('pages_meta')->where('id', $row->url_pages)->get()->row();
								 echo "<a ".$aktifmenu." href='".site_url('pages/detail/'.date("Y",strtotime(@$pages->created_on)).'/'.@$row->url_pages.'/'.url_title(@$pages->judul, 'dash'))."'>".@$row->menu_bahasa."</a>";
							}
							
							#categories
							if($row->url_kategori!='' && $row->url_kategori!=0):
							   //Menu Tidak ditampilkan
							   echo "<a ".$aktifmenu." href='".site_url('post/categories/'.str_replace('=','',base64_encode($row->url_kategori)))."/".url_title(strtolower($row->name),'dash')."'>{$row->menu_bahasa}</a>";
							endif;
							
							#categories arsip
							if($row->url_kategori_arsip!='' && $row->url_kategori_arsip!=0):
							   //Menu Tidak ditampilkan
							   echo "<a ".$aktifmenu." href='".site_url('arsip/categories/'.str_replace('=','',base64_encode($row->url_kategori_arsip)))."/".url_title(strtolower($row->name),'dash')."'>{$row->menu_bahasa}</a>";
							endif;
							
							if($row->url_posts!='' && $row->url_posts!=0):
							  #parsing/restrive Post data
							  $rows = $ci->db->from('post_meta')->where('id', $row->url_posts)->get()->row();
							  if($rows):
 							  echo "<a ".$aktifmenu." href='".site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$row->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($row->name,'dash')."'>{$row->menu_bahasa}</a>";
							      
							  endif;
							endif;
							
  							 else:
							    
							  if(@$getmenu->id_menu == @$row->id){ 
							  echo "<li class='active'>"; 
							  $aktifmenu="class='active'";
							  }else{ 
							  echo "<li>";
							  $aktifmenu="";
							  } 
							  echo "<a ".$aktifmenu." href='".site_url()."/pages/index/".str_replace('=','',base64_encode(@$row->id))."'> {$row->menu_bahasa} </a>";
								
						    endif;
							
						
						   
					echo "</li>";
					endforeach;
					
				echo "</ul>";
			 
  }
  
  function get_slug_lokasi_footer($offset=0,$limit=5,$location_index){
  $ci =& get_instance();
 	 $ci->load->model('menuthemes/menu_lokasi_model', null, true);
	 $result=$ci->menu_lokasi_model->select_footer($offset,$limit,$location_index)->result();
	 $jumlah=$ci->menu_lokasi_model->select_footer($offset,$limit,$location_index)->num_rows();
	 
	 foreach($result as $row_result):
	 
	 echo '
		<div class="block-title" >
                    '.strtoupper($row_result->menu_lok_bahasa).'</div><div class="block-content" >';
                    get_slug_menu_list_footer($row_result->id);
                echo '
                  </div>
	 ';
	 
	 endforeach;
	
	
  }

function get_slug_menu_list_footer($parent){
	 
	 	$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		
		$ci->load->library("users/auth");
		
		if($ci->auth->is_logged_in()){
		$role=$ci->auth->role_id();
		}else{
		$role=0;	
		}
		
		$query=$ci->menu_model->selectMultiple(56);
		
							foreach($query->result() as $row){
								$menu_items[] =(object) array('id'=>$row->id,
																				'name'=>$row->menu_bahasa, 
																				'parent_menu_id'=>$row->parent_id,
																				"url_module"=>$row->url_module,
																				"url_posts"=>$row->url_posts,
																				"url_kategori"=>$row->url_kategori,
																				"url_blank"=>$row->url_blank,
																				"url_pages"=>$row->url_pages,
																				"id_role"=>$row->id_role,
																				"url_link"=>$row->url_link,
																				"url_kategori_arsip"=>$row->url_kategori_arsip,
																				"url_kategori_produk"=>$row->url_kategori_produk
																				);
								
							}

                //create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId->parent_menu_id;
                }
                //assign the menu items to the global array to use in the function
                $menuItems = $menu_items;
                
							
                        $has_childs = false;
                
                        //this prevents printing 'ul' if we don't have subcategories for this category
                       
                        //use global array variable instead of a local variable to lower stack memory requierment
                        foreach($menuItems as $key => $value)
                        {
						
							
						
						
						
                            if ($value->parent_menu_id == $parent) 
                            {


							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($value->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($value->url_module);
 							endif;
							
							if($value->url_link!=''):
							      	$link = $value->url_link;
 							endif;
						    
							if($value->url_blank =='#'){
								$link= "#";
							}
							
							if($value->url_pages !='' && $value->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $value->url_pages)->get()->row();
								$link= site_url('pages/detail/'.@$value->url_pages."-".url_title(strtolower($pages->judul)));
								 
							}
							
							#categories post
							if($value->url_kategori!='' && $value->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/'.$value->url_kategori."-".url_title(strtolower($value->name),'dash'))."";
						}
							
							#categories arsip
							if($value->url_kategori_arsip!='' && $value->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($value->url_kategori_arsip)))."/".url_title(strtolower($value->name),'dash');
							endif;
							
							#categories produk
							if($value->url_kategori_produk!='' && $value->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$value->url_kategori_produk."-".url_title(strtolower($value->name),'dash'));
							endif;
							
							if($value->url_posts!='' && $value->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $value->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$value->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($value->name,'dash');
							 endif;
							
                                //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul class="dropdown-menu" data-role="listview">';
                                  }
                                }
                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                
								if($value->id_role==0){
								echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
                                }else{
									 if($value->id_role==$role){
									echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
        	
									 }
								}
								
								}
                                
								else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
								if($value->id_role==0){
                                  echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . '</a>';
                                }else{
									if($value->id_role==$role){
									echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . '</a>';
									}
								}
								}
                                
								else
                                {
									if($value->id_role==0){
                                  echo '<a href="'.$link.'">' . $value->name ;
								  }else{
								  if($value->id_role==$role){
									 echo '<a href="'.$link.'">' . $value->name ;
								  }
								  }
                                }
                                
							
                                
                                //call function again to generate nested list for subcategories belonging to this category
                                echo '</a> /';
                            }
                        }
						
						
				
						
						
				
			 
  }

  function header_menu_top(){

  		$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		$query=$ci->menu_model->selectMultiple(54);


			echo " <ul class='nav nav-pills pull-right menutop'>";	
		foreach($query->result() as $row){


										#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($row->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($row->url_module);
 							endif;
							
							if($row->url_link!=''):
							      	$link = $row->url_link;
 							endif;
						    
							if($row->url_blank =='#'){
								$link= "#";
							}
							
							if($row->url_pages !='' && $row->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $row->url_pages)->get()->row();
								$link= site_url('pages/detail/'.@$row->url_pages."-".url_title(strtolower($pages->judul)));
								 
							}
							
							#categories post
							if($row->url_kategori!='' && $row->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/categories/'.str_replace('=','',base64_encode($row->url_kategori)))."/".url_title(strtolower($row->menu_bahasa),'dash')."";
						}
							
							#categories arsip
							if($row->url_kategori_arsip!='' && $row->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($row->url_kategori_arsip)))."/".url_title(strtolower($row->menu_bahasa),'dash');
							endif;
							
							#categories produk
							if($row->url_kategori_produk!='' && $row->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$row->url_kategori_produk."-".url_title(strtolower($row->menu_bahasa),'dash'));
							endif;
							
							if($row->url_posts!='' && $row->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $row->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$row->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($row->menu_bahasa,'dash');
							 endif;
							

				 echo "<li><a href='".$link."'>
   						<span class='".$row->icon." MainTopBarIcon'></span>
   						".$row->menu_bahasa."<br /><small style='font-weight: normal;'>".$row->keterangan_bahasa."</small></a></li>";

		}	
		echo "</ul>";

  }
  
    //multiple level
                function generate_menu_multiple2($parent)
                {
				
			$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		
		$ci->load->library("users/auth");
		
		if($ci->auth->is_logged_in()){
		$role=$ci->auth->role_id();
		}else{
		$role=0;	
		}
		
		$query=$ci->menu_model->selectMultiple(7);
		
							foreach($query->result() as $row){
								$menu_items[] =(object) array('id'=>$row->id,
																				'name'=>$row->menu_bahasa, 
																				'parent_menu_id'=>$row->parent_id,
																				"url_module"=>$row->url_module,
																				"url_posts"=>$row->url_posts,
																				"url_kategori"=>$row->url_kategori,
																				"url_blank"=>$row->url_blank,
																				"url_pages"=>$row->url_pages,
																				"id_role"=>$row->id_role,
																				"url_link"=>$row->url_link,
																				"url_kategori_arsip"=>$row->url_kategori_arsip,
																				"url_kategori_produk"=>$row->url_kategori_produk
																				);
								
							}

                //create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId->parent_menu_id;
                }
                //assign the menu items to the global array to use in the function
                $menuItems = $menu_items;
                
							
                        $has_childs = false;
                
                        //this prevents printing 'ul' if we don't have subcategories for this category
                       $no_menu = 1;
                        //use global array variable instead of a local variable to lower stack memory requierment
                        foreach($menuItems as $key => $value)
                        {
						
							
						
						
						
                            if ($value->parent_menu_id == $parent) 
                            {


							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($value->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($value->url_module);
 							endif;
							
							if($value->url_link!=''):
							      	$link = $value->url_link;
 							endif;
						    
							if($value->url_blank =='#'){
								$link= "#";
							}
							
							if($value->url_pages !='' && $value->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $value->url_pages)->get()->row();
								$link= site_url('pages/detail/'.@$value->url_pages."-".url_title(strtolower(@$pages->judul)));
								 
							}
							
							#categories post
							if($value->url_kategori!='' && $value->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/'.$value->url_kategori."-".url_title(strtolower($value->name),'dash'))."";
						}
							
							#categories arsip
							if($value->url_kategori_arsip!='' && $value->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($value->url_kategori_arsip)))."/".url_title(strtolower($value->name),'dash');
							endif;
							
							#categories produk
							if($value->url_kategori_produk!='' && $value->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$value->url_kategori_produk."-".url_title(strtolower($value->name),'dash'));
							endif;
							
							if($value->url_posts!='' && $value->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $value->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$value->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($value->name,'dash');
							 endif;
							
                                //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul class="dl-submenu" data-role="listview">
									';
									
									if($no_menu==1){
									echo '<li class="dl-back"><a href="#">back</a></li>
									';
									}
                                  }
                                }
                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                
								if($value->id_role==0){
								echo '<li><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
                                }else{
									 if($value->id_role==$role){
									echo '<li><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
        	
									 }
								}
								
								}
                                
								else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
								if($value->id_role==0){
                                  echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
                                }else{
									if($value->id_role==$role){
									echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
									}
								}
								}
                                
								else
                                {
									if($value->id_role==0){
                                  echo '<li ><a href="'.$link.'">' . $value->name . '</a>';
								  }else{
								  if($value->id_role==$role){
									 echo '<li><a href="'.$link.'">' . $value->name . '</a>';
								  }
								  }
                                }
                                
								generate_menu_multiple2($value->id);
                                
                                //call function again to generate nested list for subcategories belonging to this category
                                echo '</li>';
                            }
							$no_menu++;
                        }
						
						
						
                        if ($has_childs === true) echo '</ul>';
						
						echo " </li>";
						
						
						
						
						
						
                }
  
  
  //multiple level
                function generate_menu_multiple($parent,$mobile=false)
                {
				
			$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		
		$ci->load->library("users/auth");
		
		if($ci->auth->is_logged_in()){
		$role=$ci->auth->role_id();
		}else{
		$role=0;	
		}
		
		$query=$ci->menu_model->selectMultiple(7);
		
							foreach($query->result() as $row){
								$menu_items[] =(object) array('id'=>$row->id,
																				'name'=>$row->menu_bahasa, 
																				'parent_menu_id'=>$row->parent_id,
																				"url_module"=>$row->url_module,
																				"url_posts"=>$row->url_posts,
																				"url_kategori"=>$row->url_kategori,
																				"url_blank"=>$row->url_blank,
																				"url_pages"=>$row->url_pages,
																				"id_role"=>$row->id_role,
																				"url_link"=>$row->url_link,
																				"url_kategori_arsip"=>$row->url_kategori_arsip,
																				"url_kategori_produk"=>$row->url_kategori_produk
																				);
								
							}

                //create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId->parent_menu_id;
                }
                //assign the menu items to the global array to use in the function
                $menuItems = $menu_items;
                
							
                        $has_childs = false;
                
                        //this prevents printing 'ul' if we don't have subcategories for this category
                       
                        //use global array variable instead of a local variable to lower stack memory requierment
                        foreach($menuItems as $key => $value)
                        {
						
							
						
						
						
                            if ($value->parent_menu_id == $parent) 
                            {


							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($value->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($value->url_module);
 							endif;
							
							if($value->url_link!=''):
							      	$link = $value->url_link;
 							endif;
						    
							if($value->url_blank =='#'){
								$link= "#";
							}
							
							if($value->url_pages !='' && $value->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $value->url_pages)->get()->row();
								$link= site_url('pages/detail/'.@$value->url_pages."-".url_title(strtolower(@$pages->judul)));
								 
							}
							
							#categories post
							if($value->url_kategori!='' && $value->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/'.$value->url_kategori."-".url_title(strtolower($value->name),'dash'))."";
						}
							
							#categories arsip
							if($value->url_kategori_arsip!='' && $value->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($value->url_kategori_arsip)))."/".url_title(strtolower($value->name),'dash');
							endif;
							
							#categories produk
							if($value->url_kategori_produk!='' && $value->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$value->url_kategori_produk."-".url_title(strtolower($value->name),'dash'));
							endif;
							
							if($value->url_posts!='' && $value->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $value->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$value->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($value->name,'dash');
							 endif;
							


							if($mobile==false){
                                //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul class="dropdown-menu" data-role="listview">';
                                  }
                                }


                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                
								if($value->id_role==0){
								echo '<li class="parent"><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
                                }else{
									 if($value->id_role==$role){
									echo '<li class="parent"><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
        	
									 }
								}
								
								}
                                
								else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
								if($value->id_role==0){
                                  echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
                                }else{
									if($value->id_role==$role){
									echo '<li class="dropdown-submenu"><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
									}
								}
								}
                                
								else
                                {
									if($value->id_role==0){
                                  echo '<li ><a href="'.$link.'">' . $value->name . '</a>';
								  }else{
								  if($value->id_role==$role){
									 echo '<li><a href="'.$link.'">' . $value->name . '</a>';
								  }
								  }
                                }
                                
                                //mobile
                                }else{


                                	 //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul class="nav navmenu-nav" style="background: rgb(52, 58, 64);">';
                                  }
                                }


                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                
								if($value->id_role==0){
								echo '<li class="parent"><a  href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
                                }else{
									 if($value->id_role==$role){
									echo '<li class="parent"><a  href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
        	
									 }
								}
								
								}
                                
								else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
								if($value->id_role==0){
                                  echo '<li ><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
                                }else{
									if($value->id_role==$role){
									echo '<li ><a href="'. $link.'">' . $value->name . ' <b class="caret"></b></a>';
									}
								}
								}
                                
								else
                                {
									if($value->id_role==0){
                                  echo '<li ><a href="'.$link.'">' . $value->name . '</a>';
								  }else{
								  if($value->id_role==$role){
									 echo '<li><a href="'.$link.'">' . $value->name . '</a>';
								  }
								  }
                                }
                                

                                }



								generate_menu_multiple($value->id,$mobile);
                                
                                //call function again to generate nested list for subcategories belonging to this category
                                echo '</li>';
                            }
                        }
						
						
						
                        if ($has_childs === true) echo '</ul>';
						
						echo " </li>";
						
						
						
						
						
						
                }
				
				  function generate_menu_multiple_left($parent)
                {
				
			$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		
		$ci->load->library("users/auth");
		
		if($ci->auth->is_logged_in()){
		$role=$ci->auth->role_id();
		}else{
		$role=0;	
		}
		
		$query=$ci->menu_model->selectMultiple(55);
		
							foreach($query->result() as $row){
								$menu_items[] =(object) array('id'=>$row->id,
																				'name'=>$row->menu_bahasa, 
																				'parent_menu_id'=>$row->parent_id,
																				"url_module"=>$row->url_module,
																				"url_posts"=>$row->url_posts,
																				"url_kategori"=>$row->url_kategori,
																				"url_blank"=>$row->url_blank,
																				"url_pages"=>$row->url_pages,
																				"id_role"=>$row->id_role,
																				"url_link"=>$row->url_link,
																				"url_kategori_arsip"=>$row->url_kategori_arsip,
																				"url_kategori_produk"=>$row->url_kategori_produk
																				);
								
							}

                //create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId->parent_menu_id;
                }
                //assign the menu items to the global array to use in the function
                $menuItems = $menu_items;
                
							
                        $has_childs = false;
                
                        //this prevents printing 'ul' if we don't have subcategories for this category
                       
                        //use global array variable instead of a local variable to lower stack memory requierment
                        foreach($menuItems as $key => $value)
                        {
						
							
						
						
						
                            if ($value->parent_menu_id == $parent) 
                            {


							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($value->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($value->url_module);
 							endif;
							
							if($value->url_link!=''):
							      	$link = $value->url_link;
 							endif;
						    
							if($value->url_blank =='#'){
								$link= "#";
							}
							
							if($value->url_pages !='' && $value->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $value->url_pages)->get()->row();
								$link= site_url('pages/detail/'.@$value->url_pages."-".url_title(strtolower($pages->judul)));
								 
							}
							
							#categories post
							if($value->url_kategori!='' && $value->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/'.$value->url_kategori."-".url_title(strtolower($value->name),'dash'))."";
						}
							
							#categories arsip
							if($value->url_kategori_arsip!='' && $value->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($value->url_kategori_arsip)))."/".url_title(strtolower($value->name),'dash');
							endif;
							
							#categories produk
							if($value->url_kategori_produk!='' && $value->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$value->url_kategori_produk."-".url_title(strtolower($value->name),'dash'));
							endif;
							
							if($value->url_posts!='' && $value->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $value->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$value->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($value->name,'dash');
							 endif;
							
                                //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul>';
                                  }
                                }
                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                
								if($value->id_role==0){
								echo '<li><a href="'. $link.'">' . $value->name . '<span class="fa arrow"></span></a>';
                                }else{
									 if($value->id_role==$role){
									echo '<li><a  href="'. $link.'">' . $value->name . '<span class="fa arrow"></span></a>';
        	
									 }
								}
								
								}
                                
								else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
								if($value->id_role==0){
                                  echo '<li><a href="'. $link.'">' . $value->name . '</a>';
                                }else{
									if($value->id_role==$role){
									echo '<li><a href="'. $link.'">' . $value->name . '</a>';
									}
								}
								}
                                
								else
                                {
									if($value->id_role==0){
                                  echo '<li><a href="'.$link.'">' . $value->name . '</a>';
								  }else{
								  if($value->id_role==$role){
									 echo '<li><a href="'.$link.'">' . $value->name . '</a>';
								  }
								  }
                                }
                                
								generate_menu_multiple_left($value->id);
                                
                                //call function again to generate nested list for subcategories belonging to this category
                                echo '</li>';
                            }
                        }
						
						
						
                        if ($has_childs === true) echo '</ul>';
						
						echo " </li>";
						
						
						
						
						
						
                }
				
				
				
				//multiple level
                function generate_menu_multiple_mobile($parent)
                {
				
			$ci =& get_instance();
	
	 
	 ## Show the top parent elements from DB
		######################################
		$ci->load->model('menuthemes/menu_model', null, true);
		$query=$ci->menu_model->selectMultiple(7);
		
							foreach($query->result() as $row){
								$menu_items[] =(object) array('id'=>$row->id,
																				'name'=>$row->menu_bahasa, 
																				'parent_menu_id'=>$row->parent_id,
																				"url_module"=>$row->url_module,
																				"url_posts"=>$row->url_posts,
																				"url_kategori"=>$row->url_kategori,
																				"url_blank"=>$row->url_blank,
																				"url_pages"=>$row->url_pages,
																				"url_link"=>$row->url_link,
																				"url_kategori_arsip"=>$row->url_kategori_arsip,
																				"url_kategori_produk"=>$row->url_kategori_produk
																				);
								
							}

                //create an array of parent_menu_ids to search through and find out if the current items have an children
                foreach($menu_items as $parentId)
                {
                  $parentMenuIds[] = $parentId->parent_menu_id;
                }
                //assign the menu items to the global array to use in the function
                $menuItems = $menu_items;
                
							
                        $has_childs = false;
                
                        //this prevents printing 'ul' if we don't have subcategories for this category
                       
                        //use global array variable instead of a local variable to lower stack memory requierment
                        foreach($menuItems as $key => $value)
                        {
						
							
						
						
						
                            if ($value->parent_menu_id == $parent) 
                            {


							#Cek apabila dia module ID dan Bukan Tipe dari POST tabels maka,
							if($value->url_module!=''):
							   //Menu Tidak ditampilkan
 							     	$link = site_url($value->url_module);
 							endif;
							
							if($value->url_link!=''):
							      	$link = $value->url_link;
 							endif;
						    
							if($value->url_blank =='#'){
								$link= "#";
							}
							
							if($value->url_pages !='' && $value->url_pages!=0){
									 $pages = $ci->db->from('pages_meta')->where('id', $value->url_pages)->get()->row();
								$link= site_url('pages/detail/'.date("Y",strtotime(@$pages->created_on)).'/'.@$value->url_pages."/".$value->parent_menu_id);
								 
							}
							
							#categories post
							if($value->url_kategori!='' && $value->url_kategori!=0){
							   //Menu Tidak ditampilkan
							   $link=site_url('post/categories/'.str_replace('=','',base64_encode($value->url_kategori)))."/".url_title(strtolower($value->name),'dash')."";
						}
							
							#categories arsip
							if($value->url_kategori_arsip!='' && $value->url_kategori_arsip!=0):
							    $link=site_url('arsip/categories/'.str_replace('=','',base64_encode($value->url_kategori_arsip)))."/".url_title(strtolower($value->name),'dash');
							endif;
							
							#categories produk
							if($value->url_kategori_produk!='' && $value->url_kategori_produk!=0):
							    $link=site_url('produk-kategori/'.$value->url_kategori_produk."-".url_title(strtolower($value->name),'dash'));
							endif;
							
							if($value->url_posts!='' && $value->url_posts!=0):
							  #parsing/restrive Post data
							   $rows = $ci->db->from('post_meta')->where('id', $value->url_posts)->get()->row();
							   $link=site_url('post/read/'.date("Y",strtotime($rows->created_on)).'/'.$value->url_posts.'/'.url_title($rows->judul, 'dash'))."/".url_title($value->name,'dash');
							 endif;
							
                                //if this is the first child print '<ul>'
                                if ($has_childs === false)
                                {
                                  //don't print '<ul>' multiple times  
                                  $has_childs = true;
                                  if($parent != 0)
                                  {
                                    echo '<ul data-role="listview" >';
                                  }
                                }
                                
                                if($value->parent_menu_id == 0 && in_array($value->id, $parentMenuIds))
                                {
                                  echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="'. $link.'">' . $value->name . '<b class="caret"></b></a>';
                                }
                                else if($value->parent_menu_id != 0 && in_array($value->id, $parentMenuIds))
                                {
                                  echo '<li class="dropdown-submenu"><a href="'. $link.'"> ' . $value->name . '</a>';
                                }
                                else
                                {
								if($value->parent_menu_id == 0 )
                                  echo '<li><a href="'.$link.'" data-ajax="false">' . $value->name . '</a>';
								  else
								   echo '<li><a href="'.$link.'" data-ajax="false">&nbsp;&nbsp; &#187; ' . $value->name . '</a>';
                                }
                                generate_menu_multiple_mobile($value->id);
                                
                                //call function again to generate nested list for subcategories belonging to this category
                                echo '</li>';
                            }
                        }
                        if ($has_childs === true) echo '</ul>';
						
						echo " </li>";
                }


 
?>