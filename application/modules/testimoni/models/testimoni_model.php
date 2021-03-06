<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimoni_model extends BF_Model {

	protected $table_name	= "testimonial";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;
	
	protected $set_created	= false;
	protected $set_modified = false;

	/*
		Customize the operations of the model without recreating the insert, update,
		etc methods by adding the method names to act as callbacks here.
	 */
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 		= array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	/*
		For performance reasons, you may require your model to NOT return the
		id of the last inserted row as it is a bit of a slow method. This is
		primarily helpful when running big loops over data.
	 */
	protected $return_insert_id 	= TRUE;

	// The default type of element data is returned as.
	protected $return_type 			= "object";

	// Items that are always removed from data arrays prior to
	// any inserts or updates.
	protected $protected_attributes = array();

	/*
		You may need to move certain rules (like required) into the
		$insert_validation_rules array and out of the standard validation array.
		That way it is only required during inserts, not updates which may only
		be updating a portion of the data.
	 */
	protected $validation_rules 		= array(
		/*
        array(
			"field"		=> "kategori_kategori",
			"label"		=> "lang:kategori_form_field_kategori",
			"rules"		=> "required|max_length[50]"
		),
        */
		
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;
	
	
	
	
	//--------------------------------------------------------------------
	
	/**
	 * Query untuk select where
	 *
	 * @return void
	 */
	 function getNameTable(){
		
		return $this->table_name;
		 
	 }

     /**
	 * Query untuk select where
	 *
	 * @return void
	 */
	 function getNews($offset=0,$limit=0){
		
		return $this->db->select("id,pengirim,komentar,tgl_kirim")
                        ->where("status_approve",0)
                        ->from($this->table_name)
                        ->order_by("tgl_kirim","desc")
						->limit($offset,$limit)
                        ->get()
                        ->result();
		 
	 }
	 
	 	 function getNewsCount(){
		
		return $this->db->where("status_approve",0)
                        ->from($this->table_name)
                        ->count_all_results();
		 
	 }

     #get approve
     function getApprove($offset=0,$limit=0){
		
		return $this->db->select("id,pengirim,komentar,tgl_kirim,jawaban")
                        ->where("status_approve",1)
                        ->from($this->table_name)
                        ->order_by("tgl_kirim","desc")
						->limit($offset,$limit)
                        ->get()
                        ->result();
		 
	 }
	 
	  	 function getApproveCount(){
		
		return $this->db->where("status_approve",1)
                        ->from($this->table_name)
                        ->count_all_results();
		 
	 }

     #untuk mengapprove
     function Approve($id){

         return $this->db->where($this->key,$id)
                         ->update($this->table_name,array("status_approve"=>1));
         
     }

      #untuk mengunapprove
     function Unapprove($id){

         return $this->db->where($this->key,$id)
                         ->update($this->table_name,array("status_approve"=>0));
         
     }

     function update_custome($id,$data){

         return $this->db->where("id",$id)->update($this->table_name,$data);
         
     }
	
	
	
	
}
