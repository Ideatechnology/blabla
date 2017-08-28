<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
 		
		#permission view
		$this->auth->restrict('Agenda.Plugin.View');
		
		#load bahasa
		$this->lang->load('agenda');
		
		#load model
		$this->load->model('agenda_model', null, true);
		$this->load->model('kategori/kategori_model', null, true);
		
		#untuk meload js dan css custome
 		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
		Assets::clear_cache();
		Assets::add_module_css('datatable', 'css/jquery.dataTables.css');
        Assets::add_module_js('datatable', 'js/jquery.dataTables.js');
		Assets::add_module_js('agenda', array('agenda.js'));
		Assets::add_module_css('post', 'css/cleditor.css');
		Assets::add_module_js('post', array('jquery.cleditor.js'));
		
		#pengaturan judul halaman dan side bar
   		Template::set_block('sidebar', 'plugin/sidebar');
		Template::set('toolbar_title',"Agenda");
	   
		
 	}
	
	#view agenda
	public function index() 
	{
 	   
	   #Create agenda
	   if (isset($_POST['save']))
		{
			$this->auth->restrict('Agenda.Plugin.Create');
	   
			if ($insert_id = $this->save_agenda())
			{
				
				Template::set_message(lang('agenda_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/agenda');
			}
			else
			{
				Template::set_message(lang('agenda_create_failure') . $this->agenda_model->error, 'error');
				
			}
		}
		
		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('agenda_delete_success'), 'success');
					
				}
				else
				{
					Template::set_message(lang('agenda_delete_failure') . $this->agenda_model->error, 'error');
				}
			
		}   
	   
	   #Query Agenda
	   $records = $this->agenda_model->select_join()->result();
	   Template::set('records',$records);
	   
	   #Query Kategori
	   $categories = $this->kategori_model->select_where_type("agenda");
	   Template::set('categories',$categories);
	   
	   
	   Template::render('custome_two_left');
 	
	}
	

	#Edit agenda
	public function edit(){
	  
	   $this->auth->restrict('Agenda.Plugin.Edit');
	   
	   $id = $this->uri->segment(5);
	   
	   #jika id kosong
	   if (empty($id))
		{
			Template::set_message(lang('agenda_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/agenda');
		}
	  	
	   #jika data dipost maka di simpan perubahan 
	   
	   if (isset($_POST['save']))
		{
			 $this->auth->restrict('Agenda.Plugin.Edit');

			if ($this->save_agenda('update', $id))
			{
				
				Template::set_message(lang('agenda_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('agenda_edit_failure') . $this->agenda_model->error, 'error');
			}
		}
		
		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('agenda_delete_success'), 'success');
					
				}
				else
				{
					Template::set_message(lang('agenda_delete_failure') . $this->agenda_model->error, 'error');
				}
			
		}  
	   
			
	   #Query Agenda
	   $records = $this->agenda_model->select_join()->result();
	   Template::set('records',$records);
	   
	   #Query Kategori
	   $categories = $this->kategori_model->select_where_type("agenda");
	   Template::set('categories',$categories);
	   
	   #get id agenda
	   Template::set('agenda', $this->agenda_model->find($id));
	   
	   
	   Template::set_view('plugin/index');
	   Template::render('custome_two_left');
 	}
	
	
	
		//--------------------------------------------------------------------
	// !PRIVATE METHODS
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
					
					$result = $this->agenda_model->delete($pid);
					
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
	private function save_agenda($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		
		$data = array('post_category' => $this->input->post('agenda_post_category'),
					  'time_start' => $this->input->post('agenda_time_start'),
					  'time_ends' => $this->input->post('agenda_time_ends'),
					  'tgl_agenda' => $this->input->post('agenda_tgl_agenda'),
					  'judul_agenda' => $this->input->post('agenda_judul_agenda'),
					  'judul_agenda_english' => $this->input->post('agenda_judul_agenda_english'),
					  'isi_agenda' => $this->input->post('agenda_isi_agenda'),
					  'isi_agenda_english' => $this->input->post('agenda_isi_agenda_english'),
					  'author' => $this->auth->identity('username'),
					  'penanggung_jawab'=> $this->input->post('penanggung_jawab')
					);

		if ($type == 'insert')
		{
			$id = $this->agenda_model->insert($data);

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
			$return = $this->agenda_model->update($id, $data);
		}

		return $return;
	}
	
	
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
				redirect(SITE_AREA .'/plugin/agenda/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->kategori_model->error, 'danger');
			}
		}
		
		#list record kategori
		$records = $this->kategori_model->select_where_type("agenda");
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
		$data['kategori_english']        = $this->input->post('kategori_kategori_english');
		$data['ket_english']        = $this->input->post('kategori_ket_english');
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
			redirect(SITE_AREA .'/plugin/agenda/kategori');
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
		
			if ($this->kategori_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kategori_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'kategori');

				Template::set_message(lang('kategori_delete_success'), 'success');

				redirect(SITE_AREA .'/plugin/agenda/kategori');
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
		$records = $this->kategori_model->select_where_type("agenda");
		
		Template::set('records', $records);
		
		#load template
		Template::set('toolbar_title', "Edit Kategori Agenda");
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
		
		$this->db->like("type_kategori","agenda","before");
		$records = $this->kategori_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		$configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		Template::set('toolbar_title', lang('kategori_manage_trash'));
		Template::render();
	}

	
	
	 
}
?>