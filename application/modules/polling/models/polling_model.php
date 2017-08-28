<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Polling_model extends BF_Model {

	protected $table_name	= "polling";
	protected $key			= "id";
	
	protected $field_indonesia = array(
							  "judul",
							  "jawab1",
							  "jawab2",
							   "jawab3",
							   "jawab4",
							   "jawab5"
							  );
	protected $field_english  = array(
							  "judul_english",
							  "jawab1_english",
							  "jawab2_english",
							   "jawab3_english",
							   "jawab4_english",
							   "jawab5_english"
							  );
							  
	
							  
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
		array(
			"field"		=> "polling_judul",
			"label"		=> "lang:polling_form_field_judul",
			"rules"		=> "required"
		),
		
		array(
			"field"		=> "polling_jawab1",
			"label"		=> "lang:polling_form_field_jawab1",
			"rules"		=> "required"
		),
		array(
			"field"		=> "polling_jawab2",
			"label"		=> "lang:polling_form_field_jawab2",
			"rules"		=> "required"
		),
		array(
			"field"		=> "polling_jawab3",
			"label"		=> "lang:polling_form_field_jawab3",
			"rules"		=> "max_length[255]"
		),
		
		array(
			"field"		=> "polling_jawab4",
			"label"		=> "lang:polling_form_field_jawab4",
			"rules"		=> "max_length[255]"
		),
		array(
			"field"		=> "polling_jawab5",
			"label"		=> "lang:polling_form_field_jawab5",
			"rules"		=> "max_length[255]"
		),
		
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	

	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

	}//end __construct()
	
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
	 * Query untuk select join kategori
	 *
	 * @return void
	 */
	public function select_join($offset=0,$limit=0,$id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);				
		$this->db->select($this->table_name.'.*,
		'.$this->table_name.".".$field[0]." as judul_polling_bahasa,
		".$this->table_name.".".$field[1]." as jawab1_polling_bahasa,
		".$this->table_name.".".$field[2]." as jawab2_polling_bahasa,
		".$this->table_name.".".$field[3]." as jawab3_polling_bahasa,
		".$this->table_name.".".$field[4]." as jawab4_polling_bahasa,
		".$this->table_name.".".$field[5]." as jawab5_polling_bahasa
		");
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	function getTable(){
		
		return 	$this->table_name;
		
	}
	
	
	public function getID_Publish(){

		$query = $this->db->where("flag_polling",1)->get($this->table_name)->row();
		return $query;
	
	}

	//get count polling publihs 
	public function getCountPublish(){

		$row = $this->getID_Publish();
		$query = $this->db->select_sum("jawab1")
						   ->select_sum("jawab2")
						   ->select_sum("jawab3")
						   ->select_sum("jawab4")
						   ->select_sum("jawab5")
						   ->where("id_polling",$row->id)
						  ->get($this->table_name_count)->row();
		return $query;

	}

	//get count polling publihs 
	public function getCountPublishParam($id){

		$query = $this->db->select_sum("jawab1")
						   ->select_sum("jawab2")
						   ->select_sum("jawab3")
						   ->select_sum("jawab4")
						   ->select_sum("jawab5")
						   ->where("id_polling",$id)
						  ->get($this->table_name_count)->row();
		return $query;

	}

	//get id count polling 
	public function cekCountPolling($id,$ip){

		$query = $this->db->where("id_polling",$id)
						  ->where("ip_address",$ip)
						  ->where("tanggal",date("Y-m-d"))
						  ->get($this->table_name_count)
						  ->num_rows();
		return $query;	
	
	}

	//insert ke polling count 
	public function insert_polling($data=array()){

		$insert = $this->db->insert($this->table_name_count,$data);
		return $insert;

	}
	

	
	

}
