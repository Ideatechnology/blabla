<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Album_model extends BF_Model {

	protected $table_name	= "album_foto";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;

	protected $field_indonesia = array(
							  "kategori",
							  "ket",
							  );
	protected $field_english  = array(
							  "kategori_english",
							  "ket_english",
							  );

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
			"field"		=> "kategori_kategori",
			"label"		=> "lang:kategori_form_field_kategori",
			"rules"		=> "required|max_length[50]"
		),
		
		array(
			"field"		=> "kategori_ket",
			"label"		=> "lang:kategori_form_field_keterangan",
			"rules"		=> "max_length[255]"
		),

		
		array(
			"field"		=> "kategori_type_kategori",
			"label"		=> "lang:kategori_form_field_type",
			"rules"		=> "required|max_length[20]"
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;



	//--------------------------------------------------------------------

	/**
	 * Query untuk select where
	 *
	 * @return void
	 */
	function select_where_type($type=""){

	/* rekomendasi type
	artikel,berita,agenda,multimedia,link,forum,arisp,gallery,buletin,Scientific sessions
	*/

	#jika type nol bray
	if($type!="")
	$this->db->where('type_kategori' , $type );

	$records=$this->db->from($this->table_name)->where('deleted' ,0)->get()->result();
	return $records;

	}

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
	public function select($offset=0,$limit=0,$id="")
	{

		$field=$this->field_multi_bahasa($this->bahasa());

		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		$this->db->where($this->table_name.".deleted",0);

		$this->db->select($this->table_name.'.*,'
		.$this->table_name.".".$field[0]." as judul_bahasa");

		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}
		return $records;

	}

	//--------------------------------------------------------------------

	/**
	 * Query untuk select where
	 *
	 * @return void
	 */
	function select_where_type_in($type=array()){

	/* rekomendasi type
	artikel,berita,agenda,multimedia,link,forum,arisp,gallery,buletin,Scientific sessions
	*/

	#jika type nol bray
	if($type!="")
	$this->db->where_in('type_kategori' ,$type);

	$records=$this->db->from($this->table_name)->where('deleted' ,0)->get()->result();
	return $records;

	}


	//--------------------------------------------------------------------

	/**
	 * Query untuk select where
	 *
	 * @return void
	 */
	 function getNameTable(){

		return $this->table_name;

	 }



}
