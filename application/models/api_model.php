<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends BF_Model {

  function __construct(){
  }

 

  //searc
  function searching($keyword=""){

    $datakeyword = array();
    
      $sql ="
      SELECT s.*
      FROM
          (
          ";

      $sql .= "
              SELECT id as id,judul as judul,isi as isi,image_data as gambar,created_on as tgl,CAST('post' as char(50)) as tip,CAST('".site_url()."' as char(100)) as url,CAST('Jurnal Media' as char(100)) as nama_situs,CAST('application/modules/post/images/' as char(300)) as path FROM `bf_post_meta` WHERE status_tampil=0 and deleted=0 and judul like '%".$keyword."%' OR isi like '%".$keyword."%'
              UNION ALL
              SELECT id as id,judul as judul,isi as isi,null as gambar,created_on as tgl,CAST('page' as char(50)) as tip,CAST('".site_url()."' as char(100)) as url,CAST('Jurnal Medika' as char(100)) as nama_situs,CAST('' as char(300)) as path FROM `bf_pages_meta` WHERE status_tampil=0 and deleted=0 and judul like '%".$keyword."%' OR isi like '%".$keyword."%'
            ";
         
    $sql .="
          ) s
          ORDER BY s.judul desc
          limit 100
            ";

            $query = $this->db->query($sql)->result_array();
           foreach($query as $row){

             $datakeyword[] = array('id' => $row['id'],
                       "judul"=>$row['judul'],
                       "isi"=>$row['isi'],
                       "tgl"=>$row["tgl"],
                       "path"=>$row["path"],
                        "gambar"=>$row["gambar"],
                       "nama_situs"=>$row["nama_situs"],
                       "url"=>$row["url"],
                       "tipe"=>$row["tip"]
                       );


           }

    return $datakeyword;

  }




}

?>
