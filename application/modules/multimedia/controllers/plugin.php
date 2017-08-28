<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		
		$this->load->helper("text");
		#load bahasa
		$this->lang->load('multimedia');
		
		#load model
		$this->load->model('multimedia_model', null, true);
		$this->load->model('kategori/kategori_model', null, true);
		
		#load config
		$this->load->config('config');
		
		#load js dan css
		Assets::clear_cache();
		Assets::add_module_js('multimedia', array('multimedia.js'));
		
		#load judul and sidebar
   		Template::set('toolbar_title',"Video");
		Template::set_block('sidebar', 'plugin/sidebar');
 	}
	
	
	#View Multimedia
 	public function index() 
	{
	
	  //hedline
		if (isset($_POST['publish']))
		{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				$msgheadline="";
				foreach ($checked as $pid)
				{
					
					$result = $this->db->query("update bf_multimedia set flag=1 where id='".$pid."'");
					
					
				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di publish', 'success');
				}
				else
				{
					Template::set_message('gagal di publish '  , 'danger');
				}
			}
			
		
		}
		
		if (isset($_POST['unpublish']))
		{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				$msgheadline="";
				foreach ($checked as $pid)
				{
					
					$result = $this->db->query("update bf_multimedia set flag=0 where id='".$pid."'");
					
					
				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di unpublish', 'success');
				}
				else
				{
					Template::set_message('gagal di unpublish '  , 'danger');
				}
			}
			
		
		}
	 
	
 	     #Create Multimedia
	   if (isset($_POST['save']))
		{
			$this->auth->restrict('Multimedia.Plugin.Create');
	   
			if ($insert_id = $this->save_multimedia())
			{
				
				Template::set_message(lang('video_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/multimedia');
			}
			else
			{
				Template::set_message(lang('video_create_failure') . $this->multimedia_model->error, 'danger');
				
			}
		}
		
		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. "berhasil didelete", 'success');
					
				}
				else
				{
					Template::set_message(lang('multimedia_delete_failure') . $this->multimedia_model->error, 'danger');
				}
			
		}   
	   
	   #Query Multimedia
	   $records = $this->multimedia_model->select_join()->result();
	   Template::set('records',$records);
	   
	   #Query Kategori
	   $categories = $this->kategori_model->select_where_type("multimedia");
	   Template::set('categories',$categories);
	   
	   
	   Template::render('custome_two_left');
	 
	}
	
	
	
	
	#Edit Multimedia
	public function edit(){
		
	   $this->auth->restrict('Multimedia.Plugin.Edit');
	   
	   
	   $id = $this->uri->segment(5);
	   
	   #jika id kosong
	   if (empty($id))
		{
			Template::set_message(lang('video_invalid_id'), 'danger');
			redirect(SITE_AREA .'/plugin/multimedia');
		}
		
			   #jika data dipost maka di simpan perubahan 
	   
	   if (isset($_POST['save']))
		{
			 $this->auth->restrict('Multimedia.Plugin.Edit');

			if ($this->save_multimedia('update', $id))
			{
				
				Template::set_message(lang('video_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('video_edit_failure') . $this->multimedia_model->error, 'danger');
			}
		}
		
				// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('video_delete_success'), 'success');
					
				}
				else
				{
					Template::set_message(lang('video_delete_failure') . $this->multimedia_model->error, 'danger');
				}
			
		}  
	  
	     #Query Multimedia
	   $records = $this->multimedia_model->select_join()->result();
	   Template::set('records',$records);
	   
	   #Query Kategori
	   $categories = $this->kategori_model->select_where_type("multimedia");
	   Template::set('categories',$categories);
	   
	   #get id multimedia
	   Template::set('video', $this->multimedia_model->find($id));
	   
	   Template::set_view('plugin/index');
	   Template::render('custome_two_left');
	    
	   
 	}
	
	
	//--------------------------------------------------------------------
	
	 /**
	 * Summary
	 *
	 * @param String $type Either Delete
	 * 
	 *
	 * 
	 */
	
	private function hapuskan($checked=0){
		
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					
					$result = $this->multimedia_model->delete($pid);
					
				}
				
				return $result;

			}
			
	}
	
	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_multimedia($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		
		$data = array('judul' => $this->input->post('video_judul'),
					  'isi' => $this->input->post('video_deskripsi'),
					  'file_multimedia' => $this->input->post('video_embedyoutube'),
					  'tgl_multimedia' => date('Y-m-d'),
					  'author' => $this->auth->identity('username'),
					  'gambar_multimedia' => $this->input->post('video_linkimage'),
					  'multimedia_category' => $this->input->post('video_category'),
					);

		if ($type == 'insert')
		{
			$id = $this->multimedia_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->multimedia_model->update($id, $data);
		}

		return $return;
	}
	
	/* untuk kategori video */
	function kategori(){
	

		$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'plugin/sidebar_kategori');
		Template::set_block('sub_nav', 'plugin/_sub_nav_kategori');
		
	// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->kategori_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->kategori_model->error, 'danger');
				}
			}
		}
		// Simpan Kategori
		if (isset($_POST['save']))
		{
		
			if ($insert_id = $this->save_kategori())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kategori_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'kategori');

				Template::set_message(lang('kategori_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/multimedia/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->kategori_model->error, 'danger');
			}
		}
		
		#list record kategori
		$records = $this->kategori_model->select_where_type("multimedia");
		Template::set('records', $records);
		

		Template::set('toolbar_title', lang('kategori_manage'));
		Template::render('custome_two_left');
	
	
	}
	
	private function save_kategori($type='insert', $id=0)
	{
		$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['kategori']        = $this->input->post('kategori_kategori');
		$data['ket']        = $this->input->post('kategori_ket');
		$data['type_kategori']        = $this->input->post('kategori_type_kategori');

		if ($type == 'insert')
		{
			$id = $this->kategori_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->kategori_model->update($id, $data);
		}

		return $return;
	}
	
	//edit kategori
	public function editkategori(){
	
	$id = (int) $this->uri->segment(5);
	$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'plugin/sidebar_kategori');
		Template::set_block('sub_nav', 'plugin/_sub_nav_kategori');

		if (empty($id))
		{
			Template::set_message(lang('kategori_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/multimedia/kategori');
		}

		if (isset($_POST['save']))
		{
			

			if ($this->save_kategori('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kategori_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'kategori');

				Template::set_message(lang('kategori_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('kategori_edit_failure') . $this->kategori_model->error, 'danger');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Kategori.Content.Delete');

			if ($this->kategori_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kategori_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'kategori');

				Template::set_message(lang('kategori_delete_success'), 'success');

				redirect(SITE_AREA .'/plugin/multimedia/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_delete_failure') . $this->kategori_model->error, 'danger');
			}
		}
		
		#get id kategori
		Template::set('kategori', $this->kategori_model->find($id));
		
		#load config
		Template::set('config_kategori',$this->config->item('type_kategori'));
		

		#list record kategori
		$records = $this->kategori_model->select_where_type("multimedia");
		
		Template::set('records', $records);
		
		#load template
		Template::set('toolbar_title', "Edit Kategori Video");
		Template::set_view('plugin/kategori');
		Template::render('custome_two_left');

	
	}
	
	
	public function trashkategori()
	{

	$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'plugin/sidebar_kategori');
		Template::set_block('sub_nav', 'plugin/_sub_nav_kategori');
		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$this->db->where("id",$pid);
					$result = $this->db->delete("m_kategori");
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->kategori_model->error, 'danger');
				}
			}
		}
		
		// Restore anything?
		if (isset($_POST['restore']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$this->db->where("id",$pid);
					$data["deleted"]=0;
					$result = $this->db->update("m_kategori",$data);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->kategori_model->error, 'danger');
				}
			}
		}
		
		$this->db->like("type_kategori","multimedia","before");
		$records = $this->kategori_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		$configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		Template::set('toolbar_title', lang('kategori_manage_trash'));
		Template::render();
	}


	
	 
}
?>