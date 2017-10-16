<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends BF_Model {

	protected $table_name	= "post_meta";
	protected $key			= "id";
	protected $soft_deletes	= true;
	protected $date_format	= "datetime";
	protected $table_name_kategori	= "m_kategori";
	protected $table_name_comment	= "comments";
	
	protected $field_indonesia = array(
							  "judul",
							  "slug_judul",
							  "isi",
							  "kategori",
							  "ket",
							
							  );
	protected $field_english  = array(
							   "judul_english",
							  "slug_judul_english",
							  "isi_english",
							  "kategori_english",
							  "ket_english",
							  );

	protected $log_user 	= FALSE;

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
			"field"		=> "post_judul",
			"label"		=> "lang:post_form_judul",
			"rules"		=> "required|max_length[255]"
		),
		array(
			"field"		=> "post_slug_judul",
			"label"		=> "lang:post_form_slug_judul",
			"rules"		=> "required|max_length[700]"
		),
		
		array(
			"field"		=> "post_isi",
			"label"		=> "lang:post_form_isi",
			"rules"		=> "required"
		),
		array(
			"field"		=> "post_post_category",
			"label"		=> "lang:post_form_category",
			"rules"		=> "required|max_length[10]"
		),
		array(
			"field"		=> "post_image_data",
			"label"		=> "lang:post_form_image",
			"rules"		=> "max_length[255]"
		),
	
		array(
			"field"		=> "post_file_data",
			"label"		=> "lang:post_form_file",
			"rules"		=> "max_length[255]"
		),
		array(
			"field"		=> "post_author",
			"label"		=> "lang:post_form_slug_author",
			"rules"		=> "required|max_length[50]"
		),
		array(
			"field"		=> "post_status_tampil",
			"label"		=> "lang:post_form_status",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "post_flag_comments",
			"label"		=> "lang:post_form_comment",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "post_image_data_desc",
			"label"		=> "lang:post_form_image_desc",
			"rules"		=> "max_length[255]"
		),
		array(
			"field"		=> "post_modified_on",
			"label"		=> "lang:post_form_modified",
			"rules"		=> ""
		),
		array(
			"field"		=> "post_created_on",
			"label"		=> "lang:post_form_created",
			"rules"		=> ""
		),
		array(
			"field"		=> "post_deleted",
			"label"		=> "lang:post_form_deleted",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "post_baca",
			"label"		=> "lang:post_form_baca",
			"rules"		=> "max_length[11]"
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

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
	 * Query untuk select join kategori
	 *
	 * @return void
	 */
	public function select_join($offset=0,$limit=0,$id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		$this->db->where($this->table_name.".deleted",0);				
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[3].' as kategori_bahasa,'
		.$this->table_name.".".$field[0]." as judul_post_bahasa,".$this->table_name.".".$field[1]." as slug_judul_post_bahasa,"
		.$this->table_name.".".$field[2]." as isi_post_bahasa,".$this->table_name.".image_data");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');					
		$this->db->order_by("created_on","desc");
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	public function select_public($offset=0,$limit=0,$id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".post_category",$id);
		$this->db->where($this->table_name.".deleted",0);	
		$this->db->where($this->table_name.".status_tampil",0);			
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[3].' as kategori_bahasa,'
		.$this->table_name.".".$field[0]." as judul_post_bahasa,".$this->table_name.".".$field[1]." as slug_judul_post_bahasa,"
		.$this->table_name.".".$field[2]." as isi_post_bahasa");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');					
		$this->db->order_by($this->table_name.".created_on","desc");
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}


	public function post_all($offset,$limit,$order_by){


		$field=$this->field_multi_bahasa($this->bahasa());	
		
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[3].' as kategori_bahasa,'
		.$this->table_name.".".$field[0]." as judul_post_bahasa,".$this->table_name.".".$field[1]." as slug_judul_post_bahasa,"
		.$this->table_name.".".$field[2]." as isi_post_bahasa");
		$this->db->where($this->table_name.".deleted",0);	
		$this->db->where($this->table_name.".status_tampil",0);			
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');
		$this->db->order_by($this->table_name.".".$order_by,"desc");
		
		$records = $this->db->get($this->table_name,$limit,$offset);

		return $records;
	}
	
	public function post_categories($id_kategori,$offset,$limit,$order="created_on"){


		$field=$this->field_multi_bahasa($this->bahasa());	
		

		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[3].' as kategori_bahasa,'
		.$this->table_name.".".$field[0]." as judul_post_bahasa,".$this->table_name.".".$field[1]." as slug_judul_post_bahasa,"
		.$this->table_name.".".$field[2]." as isi_post_bahasa");
		$this->db->where($this->table_name.".post_category",$id_kategori);
		$this->db->where($this->table_name.".deleted",0);	
		$this->db->where($this->table_name.".status_tampil",0);			
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');
		$this->db->order_by($this->table_name.".".$order,"desc");
		
		
		$records = $this->db->get($this->table_name,$limit,$offset);

		return $records;
	}

	/**
	 * Query untuk select join kategori trash
	 *
	 * @return void
	 */
	public function select_join_trash($offset=0,$limit=0,$id="")
	{
		  
		$field=$this->field_multi_bahasa($this->bahasa());	
		
		if($id!="")$this->db->where($this->table_name.".".$this->key,$id);
		$this->db->where($this->table_name.".deleted",1);				
		$this->db->select($this->table_name.'.*, '.$this->table_name_kategori.'.'.$field[3].' as kategori_bahasa,'
		.$this->table_name.".".$field[0]." as judul_post_bahasa,".$this->table_name.".".$field[1]." as slug_judul_post_bahasa,"
		.$this->table_name.".".$field[2]." as isi_post_bahasa");
		$this->db->join($this->table_name_kategori,$this->table_name_kategori.'.id='.$this->table_name.'.post_category');					
		
		if ($offset >= 0 AND $limit > 0) {
			$records = $this->db->get($this->table_name,$limit,$offset);
		} else {
			$records = $this->db->get($this->table_name);
		}					
		return $records;

	}
	
	/**
	 * Query untuk update custome
	 *
	 * @return void
	 */
	public function update_custome($id,$data)
	{
		
		$this->db->where($this->key,$id);
		$update= $this->db->update($this->table_name, $data);
		return $update;
		
	}
	
	/**
	 * Query delete permanen
	 *
	 * @return void
	 */
	public function delete_custome($id)
	{
		
		$this->db->where($this->key,$id);
		$result = $this->db->delete($this->table_name);
		return $result;
		
	}
	
	public function select_comment_post($post){
		
		$query=$this->db->where("kolom_posts",$post)->from($this->table_name_comment)->order_by("id","desc")->get()->result();
		return $query;
		
		
	}
	
	public function delete_comment_post($id){

		$this->db->where("id",$id);
		$result = $this->db->delete($this->table_name_comment);		
		return $result;
	}
	
	public function kategori_post($style="",$bahasa="indonesia"){
	  $this->db->where('type_kategori in("post")');
		  $categoriterkait  = $this->db->from('m_kategori')->where( 'deleted',0)->get()->result();
		  
		  
		  
		  
	 echo "<ul class='".$style."'>";
                               if($categoriterkait){
								foreach($categoriterkait as $categoriterkait_row):
								
								
								
								
								$jml=$this->db->query("select count(*) as jumlah from bf_post_meta where post_category='".$categoriterkait_row->id."'")->row();
								
								if($jml->jumlah > 0){
								
								if($bahasa=="indonesia"){
								$judul=$categoriterkait_row->kategori;
								}else{
								$judul=$categoriterkait_row->kategori_english;
								}
								
								echo "<li>";
								echo "<a href=' ".site_url('post/'.$categoriterkait_row->id.
								"-".url_title(strtolower($categoriterkait_row->kategori),'dash'))."'>";
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
