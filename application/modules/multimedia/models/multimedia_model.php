<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Multimedia_model extends BF_Model {

	protected $table_name	= "multimedia";
	protected $table_name_kategori	= "m_kategori";
	protected $key			= "id";
	
	protected $field_indonesia = array(
							  "judul",
							  "isi",
							  "kategori",
							   "ket",
							  );
	protected $field_english  = array(
							  "judul_english",
							  "isi_english",
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
			"field"		=> "video_category",
			"label"		=> "lang:video_form_field_category",
			"rules"		=> "required"
		),
		array(
			"field"		=> "video_judul",
			"label"		=> "lang:video_form_field_judul",
			"rules"		=> "required"
		),
		
		array(
			"field"		=> "video_deskripsi",
			"label"		=> "lang:video_form_field_keterangan",
			"rules"		=> ""
		),
		
		array(
			"field"		=> "video_embedyoutube",
			"label"		=> "lang:video_form_field_embed",
			"rules"		=> "required"
		),
		array(
			"field"		=> "video_linkimage",
			"label"		=> "lang:video_form_field_linkimage",
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
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[2].' as kategori_bahasa,'.$this->table_name.".".$field[0]." as judul_multimedia_bahasa,".$this->table_name.".".$field[1]." as isi_multimedia_bahasa");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.multimedia_category');					
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	
		public function kategori_multimedia($style="",$bahasa="indonesia"){
	  $this->db->where('type_kategori in("multimedia")');
		  $categoriterkait  = $this->db->from('m_kategori')->where( 'deleted',0)->get()->result();
		  
	 echo "<ul class='".$style."'>";
                               if($categoriterkait){
								foreach($categoriterkait as $categoriterkait_row):
								
								$jml=$this->db->query("select count(*) as jumlah from bf_multimedia where multimedia_category='".$categoriterkait_row->id."'")->row();
								
								if($jml->jumlah > 0){
								
								if($bahasa=="indonesia"){
								$judul=$categoriterkait_row->kategori;
								}else{
								$judul=$categoriterkait_row->kategori_english;
								}
								
								echo "<li>";
								echo "<a href=' ".site_url('multimedia/index/'.$categoriterkait_row->id).
								"/".url_title(strtolower($categoriterkait_row->kategori),'dash')."'>";
								echo "<span class='glyphicon glyphicon-chevron-right'></span> ";
								echo $judul." (".$jml->jumlah.")</a></li>";
								
								}
								
							     endforeach;   
								 
								 }else{
								 echo "<li>Belum ada Kategori</li>";
								 }
                            echo "</ul>";
	
	}
	
	
	

	
	

}
