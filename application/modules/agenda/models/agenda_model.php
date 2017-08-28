<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Agenda_model extends BF_Model {

	protected $table_name	= "agenda";
	protected $table_name_kategori	= "m_kategori";
	protected $key			= "id";
	
	protected $field_indonesia = array(
							  "judul_agenda",
							  "isi_agenda",
							  "kategori",
							   "ket",
							  );
	protected $field_english  = array(
							  "judul_agenda_english",
							  "isi_agenda_english",
							  "kategori_english",
							   "ket_english",
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
			"field"		=> "agenda_post_category",
			"label"		=> "lang:form_field_kategori",
			"rules"		=> "required"
		),
		array(
			"field"		=> "agenda_judul_agenda",
			"label"		=> "lang:form_field_judul",
			"rules"		=> "required|max_length[255]"
		),
		array(
			"field"		=> "agenda_judul_agenda_english",
			"label"		=> "lang:form_field_judul_english",
			"rules"		=> "required|max_length[255]"
		),
		
		array(
			"field"		=> "agenda_tgl_agenda",
			"label"		=> "lang:form_field_tanggal",
			"rules"		=> "required"
		),
		
		array(
			"field"		=> "agenda_time_start",
			"label"		=> "lang:form_field_time",
			"rules"		=> "required"
		),
		
		array(
			"field"		=> "agenda_time_ends",
			"label"		=> "lang:form_field_time_end",
			"rules"		=> "required"
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
		$this->db->select($this->table_name_kategori.'.kategori, '.$this->table_name.'.id as id_agenda, '.$this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[2].' as kategori_bahasa,'.$this->table_name.".".$field[0]." as judul_agenda_bahasa,".$this->table_name.".".$field[1]." as isi_agenda_bahasa");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');					
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	public function select_join_id($id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->where($this->table_name.".".$this->key,$id);				
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[2].' as kategori_bahasa,'.$this->table_name.".".$field[0]." as judul_agenda_bahasa,".$this->table_name.".".$field[1]." as isi_agenda_bahasa");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');	$records = $this->db->get($this->table_name);
							
		return $records;

	}
	
	
	
	

	
	

}
