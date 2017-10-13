<?php

function jumlah_komentar($id){

  $ci =& get_instance();
  $literal = $ci->db->query('select count(*) as jumlah from bf_comments where kolom_posts="'.$id.'"')->row();
  return  $literal->jumlah;

}

function images_thumbnail($data){

$pecah=explode(".",$data);

$images=@$pecah[0]."_thumb.".@$pecah[1];

return $images;

}

function cek_image($url,$image){
  if($image!=""){
  if (file_exists($url.$image)) {
  	return base_url()."application/modules/post/images/".$image;
  }else{
  	return base_url()."assets/img/no_image.png";
  }
}else{
  return base_url()."assets/img/no_image.png";
}
}

function cek_image_produk($url,$image){
  if($image!=""){
  if (file_exists($url.$image)) {
  	return base_url()."application/modules/produk/images/".$image;
  }else{
  	return base_url()."assets/images/no_image.gif";
  }
}else{
  return base_url()."assets/images/no_image.gif";
}
}

?>
