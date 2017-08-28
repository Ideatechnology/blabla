
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Link_model extends BF_Model {

	protected $table_name	= "link";
	protected $table_name_kategori	= "";
	protected $key			= "id";
	protected $soft_deletes	= FALSE;
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
			"field"		=> "link",
			"label"		=> "Link",
			"rules"		=> "required|max_length[255]"
		),
		array(
			"field"		=> "title",
			"label"		=> "Title",
			"rules"		=> "required|max_length[255]"
		),
		
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;
	

	/**
	 * Query untuk select join kategori
	 *
	 * @return void
	 */
	public function select($offset=0,$limit=0,$id="")
	{
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		
		$this->db->select("*");
	
		if ($offset >= 1 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	public function getLink($limit=1,$tipe="link"){
	
		$slide=$this->db->query("select * from bf_".$this->table_name." where tipe='".$tipe."' and deleted=0 order by id desc limit ".$limit)->result();
		return $slide;
	
	}
	
	
	
	
	
	
}