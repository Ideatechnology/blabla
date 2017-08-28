<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends BF_Model {

	protected $table_name	= "pages_meta";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;
	
	protected $field_indonesia = array(
							  "judul",
							  "isi",
							 
							
							  );
	protected $field_english  = array(
							   "judul_english",
							  "isi_english",
							  
							  );

	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "created_on";
	protected $modified_field = "modified_on";

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
		array(
			"field"		=> "pages_judul",
			"label"		=> "lang:page_form_judul",
			"rules"		=> "required|max_length[255]"
		),
		
		array(
			"field"		=> "pages_isi",
			"label"		=> "lang:page_form_isi",
			"rules"		=> ""
		),
		
		
		array(
			"field"		=> "pages_author",
			"label"		=> "lang:page_form_author",
			"rules"		=> "required|max_length[50]"
		),
		
		array(
			"field"		=> "pages_modified_on",
			"label"		=> "lang:page_form_modified_on",
			"rules"		=> "max_length[1]"
		),
		array(
			"field"		=> "pages_created_on",
			"label"		=> "lang:page_form_created_on",
			"rules"		=> "max_length[1]"
		),
		array(
			"field"		=> "pages_deleted",
			"label"		=> "lang:page_form_deleted",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "pages_baca",
			"label"		=> "lang:page_form_baca",
			"rules"		=> "max_length[11]"
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	//--------------------------------------------------------------------
	
	//--------------------------------------------------------------------
	/**
	 * Constructor
	 *
	 * @return void
	 */
	function field_multi_bahasa($bahasa){
		
		if($bahasa=="indonesia")
			$field_bahasa=$this->field_indonesia;
		else
			$field_bahasa=$this->field_english;
		
		return $field_bahasa;
		
	}
	
	/**
	 * Constructor
	 *
	 * @return void
	 */
	function bahasa(){
	
	if($this->session->userdata('site_lang'))
		$bahasa=$this->session->userdata('site_lang');
	else
		$bahasa="indonesia";
	
	return $bahasa;	
		
	}
	
	
	/**
	 * Query untuk select 
	 *
	 * @return void
	 */
	public function select_join($offset=0,$limit=0,$id="")
	{
		  
	
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		$this->db->where_in($this->table_name.".deleted",array(0,2));				
		
		$this->db->order_by('created_on', 'DESC');
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->select($this->table_name.'.*,'
		.$this->table_name.".".$field[0]." as judul_page_bahasa,"
		.$this->table_name.".".$field[1]." as isi_page_bahasa")->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->select($this->table_name.'.*,'
		.$this->table_name.".".$field[0]." as judul_page_bahasa,"
		.$this->table_name.".".$field[1]." as isi_page_bahasa")->get($this->table_name);
		}					
		return $records;

	}
	
	/**
	 * Query untuk select trash
	 *
	 * @return void
	 */
	public function select_join_trash($offset=0,$limit=0,$id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		$this->db->where($this->table_name.".deleted",1);				
		$this->db->select($this->table_name.'.*,'
		.$this->table_name.".".$field[0]." as judul_page_bahasa,"
		.$this->table_name.".".$field[1]." as isi_page_bahasa");
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	public function delete_permanent($id){
			$this->db->where($this->key,$id);
			$result = $this->db->delete($this->table_name);
			return $result;
		
	}
	
	

}
