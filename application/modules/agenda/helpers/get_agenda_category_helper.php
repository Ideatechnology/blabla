<?php
function categories_agenda($parentID){
  $ci =& get_instance();
   
  $literal = $ci->db->select('kategori')->from('m_kategori')->where(array('id ' => $parentID))->get()->row();
  return  $literal->kategori;
}
  
 ?>