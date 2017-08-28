<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_search extends BF_Model {

  var $db2 = NULL;
  function __construct(){
    $CI = &get_instance();
    $this->db2 = $CI->load->database('db2', TRUE);  
  }

  //untuk get data bilbilo menjadi array
  public function getDatabase_Bilbilo($offset=0,$limit){

  	$query = $this->db2->query("select mst_gmd.gmd_name,biblio.*,mst_place.place_name 
                    from biblio 
                    inner join mst_gmd on biblio.gmd_id=mst_gmd.gmd_id
                    inner join mst_place on mst_place.place_id=biblio.publish_place_id
                    where title like '%".$this->input->get("keywords")."%' 
  							    order by biblio_id desc 
  	 							limit ".$offset.",".$limit."")->result();
  	return $query;


  }


  //untuk get jumlah bilbilo
  public function getDatabase_jumlahBilbilo(){
  	
  	$query = $this->db2->query("select * from biblio where
  							   title like '%".$this->input->get("keywords")."%'")->num_rows();
  	return $query;	
  
  }

  //untuk get id bilbilo
  public function getID_Bilbilo($id){

    $query = $this->db2->query("select mst_gmd.gmd_name,biblio.*,mst_place.place_name,mst_publisher.publisher_name 
                    from biblio 
                    inner join mst_gmd on biblio.gmd_id=mst_gmd.gmd_id
                    inner join mst_place on mst_place.place_id=biblio.publish_place_id 
                    inner join mst_publisher on mst_publisher.publisher_id=biblio.publisher_id
                    where biblio_id='".$id."'")->row();
    return $query;

  }

  //untuk get topik 
  public function getTopik($id_bilblio){

    $query = $this->db2->join("mst_topic","mst_topic.topic_id=biblio_topic.topic_id")
                       ->where("biblio_id",$id)
                       ->get("biblio_topic")
                       ->result();

    $topik = "";
    if(isset($query)):
        foreach($query as $query_row):
           $topik .= "- ".$query_row->topic."<br />";
        endforeach;  
    endif;

    return $topik;

  }

  //get author 
  public function getAuthor($id_bilblio){
      
      $query = $this->db2->join("mst_author","mst_author.author_id=biblio_author.author_id")
                         ->where("biblio_id",$id_bilblio)
                         ->get("biblio_author")
                         ->result();
      $author = "";
      if(isset($query)):
        foreach($query as $query_row):
            $author .= $query_row->author_name." - ";
        endforeach;
      endif;

      return $author;
  
  }

  //get attachment 
  public function getAttachment($id_bilblio){

      $query = $this->db2->join("files","files.file_id=biblio_attachment.file_id")
                        ->where("biblio_id",$id_bilblio)
                        ->get("biblio_attachment")
                        ->result();

      return $query;
  
  }


}