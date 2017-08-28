<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends BF_Model {

	protected $table_name	= "meta_menu";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;
	
	protected $field_indonesia = array(
							  "name",
							  "description",
							  );
	protected $field_english  = array(
							  "name_english",
							  "description_english",
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
			"field"		=> "menu_name",
			"label"		=> "lang:menu_form_name",
			"rules"		=> "required|max_length[256]"
		),
        array(
			"field"		=> "menu_url",
			"label"		=> "lang:menu_form_url",
			"rules"		=> "required"
		),
        array(
			"field"		=> "menu_location_index",
			"label"		=> "lang:menu_form_location_index",
			"rules"		=> "required"
		),
         array(
			"field"		=> "menu_description",
			"label"		=> "lang:menu_form_description",
			"rules"		=> "max_length[256]"
		),
        

	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;
	
	
	
	
	/**
	 * Query untuk select where
	 *
	 * @return void
	 */
	 function getNameTable(){
		
		return $this->table_name;
		 
	 }

      #get max urutan
    function getMax(){
        
        $query=$this->db->select("max(rang) as urutan")->where("parent_id",0)->from($this->table_name)->get()->row();
        return ($query->urutan+1);

    }

    #delete custome 
    function delete_custome($id){
        
       $this->db->where($this->key, $id);
	   $call = $this->db->delete($this->table_name);
       return $call;

    }
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
	public function select($lokasi)
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->select($this->table_name.".parent_id,".$this->table_name.".*,".$this->table_name.".".$field[0]." as menu_bahasa,".$this->table_name.".".$this->key);
		$this->where('location_index',$lokasi);
		$this->where('parent_id',0);
		$this->where("flag_hide",0);
		$this->order_by('rang', 'asc');
		
		$records = $this->db->get($this->table_name);
							
		
		return $records;

	}
	
		public function selectMultiple($lokasi)
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->select($this->table_name.".*,".$this->table_name.".".$field[0]." as menu_bahasa,".$this->table_name.".".$field[1]." as keterangan_bahasa,".$this->table_name.".".$this->key);
		$this->where('location_index',$lokasi);
		$this->where("flag_hide",0);
		$this->order_by('rang', 'asc');
		
		$records = $this->db->get($this->table_name);
							
		
		return $records;

	}
	
		public function select_footer()
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->select($this->table_name.".*,".$this->table_name.".".$field[0]." as menu_bahasa,".$this->table_name.".".$this->key);
		$this->where('location_index',3);
		$this->where('parent_id',0);
		$this->where("flag_hide",0);
		$this->order_by('rang', 'asc');
		$this->limit(3);
		
		$records = $this->db->get($this->table_name);
							
		
		return $records;

	}
	
	public function selectParent($lokasi)
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->select($this->table_name.".*,".$this->table_name.".".$field[0]." as menu_bahasa,".$this->table_name.".".$this->key);
		$this->where('parent_id',$lokasi);
		$this->order_by('rang', 'asc');
		
		$records = $this->db->get($this->table_name);
							
		
		return $records;

	}
	
	function indexpage($parentid,$limit,$offset){
	$field=$this->field_multi_bahasa($this->bahasa());	
	$this->db->select($this->table_name.".*,".$this->table_name.".".$field[0]." as menu_bahasa,".$this->table_name.".".$this->key);
	 $subblog = $this->db->from($this->table_name)
		 					  ->where($this->table_name.'.parent_id',$parentid)
							  ->where($this->table_name.'.flag_hide',0)
							  ->or_where($this->table_name.".id",$parentid)
                              ->where($this->table_name.'.url_blank !=','#')
                              ->order_by($this->table_name.".rang","asc")
                              ->limit($limit,$offset)
							  ->get()
							  ->result();
                           return $subblog;
		
	}
	
	
	
}
