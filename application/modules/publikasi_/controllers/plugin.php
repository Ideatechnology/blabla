<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * plugin controller
 */
class plugin extends Admin_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Publikasi.Plugin.View');
		$this->load->model('publikasi_model', null, true);
		$this->load->model('kategori/kategori_model');
		$this->lang->load('publikasi');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Template::set_block('sub_nav', 'plugin/_sub_nav');

		#load config
		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config');
		$this->load->helper("text");
		

		Assets::add_module_js('publikasi', 'publikasi.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->publikasi_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('publikasi_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('publikasi_delete_failure') . $this->publikasi_model->error, 'error');
				}
			}
		}

		$this->publikasi_model->select("*,publikasi.gambar as gambar_cover");
		$this->publikasi_model->where("id_kategori",$this->input->get("kategori"));
		$this->publikasi_model->join("m_kategori","m_kategori.id=publikasi.id_kategori");
		$records = $this->publikasi_model->find_all();
		Template::set('records', $records);

	
		$kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);

		Template::set('toolbar_title', 'Manage Media Kemendagri');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a publikasi object.
	 *
	 * @return void
	 */
	public function create()
	{

		
		$this->auth->restrict('Publikasi.Plugin.Create');
		Assets::clear_cache();
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_publikasi())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('publikasi_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'publikasi');

				Template::set_message(lang('publikasi_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/publikasi?kategori='.$this->input->post("publikasi_id_kategori"));
			}
			else
			{
				Template::set_message(lang('publikasi_create_failure') . $this->publikasi_model->error, 'error');
			}
		}
		Assets::add_module_js('publikasi', 'publikasi.js');

		$kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);

		Template::set('toolbar_title', "Tambah Media Kemendagri");
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of publikasi data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);
		Assets::clear_cache();
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');

		if (empty($id))
		{
			Template::set_message(lang('publikasi_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/publikasi');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Publikasi.Plugin.Edit');

			if ($this->save_publikasi('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('publikasi_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'publikasi');

				Template::set_message(lang('publikasi_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('publikasi_edit_failure') . $this->publikasi_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Publikasi.Plugin.Delete');

			if ($this->publikasi_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('publikasi_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'publikasi');

				Template::set_message(lang('publikasi_delete_success'), 'success');

				redirect(SITE_AREA .'/plugin/publikasi');
			}
			else
			{
				Template::set_message(lang('publikasi_delete_failure') . $this->publikasi_model->error, 'error');
			}
		}

		$kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);

		$edit = $this->publikasi_model->find($id);
		Template::set('publikasi', $edit);
		
		Template::set('toolbar_title', "Edit Media Kemendagri");
		Template::set_view('plugin/create');
		Template::render();
	
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_publikasi($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id_publikasi'] = $id;
		}

		$edit=$this->publikasi_model->find($id);

		#Images Library Config
		$this->load->helper('../uploadut');
		$this->load->library('image_lib');
		#End Images Config

		$this->form_validation->set_rules('publikasi_nama_publikasi','Nama Publikasi','required|max_length[200]');
		$this->form_validation->set_rules('publikasi_deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('publikasi_tanggal','Tanggal','');
		$this->form_validation->set_rules('publikasi_id_kategori','Kategori','required');
		$this->form_validation->set_rules('publikasi_file_pdf','File Pdf','');
		$this->form_validation->set_rules('publikasi_gambar','Gambar','max_length[200]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['nama_publikasi']        = $this->input->post('publikasi_nama_publikasi');
		$data['deskripsi']        = $this->input->post('publikasi_deskripsi');
		$data['tanggal']        = $this->input->post('publikasi_tanggal') ? $this->input->post('publikasi_tanggal') : date("Y-m-d H:i:s");
		$data['id_kategori']    = $this->input->post('publikasi_id_kategori');
		
			/**
	 * Summary
	 * untuk upload images
	 */
		
			
		$attachment1 ='';
		#Upload Images
			
 		$config['upload_path'] = $this->upload_config['upload_path_image'];
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if(@$_FILES['publikasi_gambar']['name'] != '') { 
		
		$upload = $this->upload->do_upload('publikasi_gambar');
		
		$attachment1='';
		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
	
		else:
			$this->session->unset_userdata('upload_session_image');
			$imgs = $this->upload->data();
			$attachment1 = $imgs['file_name'];
			
			 //identitas file asli
 			 $im_src = imagecreatefromjpeg($imgs['full_path']);
  			 $src_width = imageSX($im_src);
 			 $src_height = imageSY($im_src);

  			//Simpan dalam versi small 110 pixel
 			 //Set ukuran gambar hasil perubahan
 		 	$width = 400;
 		 	$height = ($width/$src_width)*$src_height;
			//create_thumb($imgs['full_path']);
			//resize_image($imgs['full_path'], $width, $height);
			
			if($type == 'update'){
				@unlink($config['upload_path'].$edit->gambar); 
				#Delete Semua Thumb Terpaut
			 	/*  $linksArray=explode('.', $edit->gambar);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];	
					}
		    	@unlink($config['upload_path'].$the); 
				*/
			}
		$data['gambar'] = $attachment1;	
		endif;
		
		
		}

			/**
	 * Summary
	 * untuk upload file
	 */
	 
	 $config2['upload_path'] = $this->upload_config['upload_path_file'];
	 $config2['allowed_types'] = 'doc|xls|docx|xlsx|ppt|pptx|pdf';
	 $this->load->library('upload', $config2);
	 $this->upload->initialize($config2);
	 
	 if(@$_FILES['publikasi_file_pdf']['name'] != '') { 
	 $upload2 = $this->upload->do_upload('publikasi_file_pdf');
	 $attachment =''; 
	 if($upload2==FALSE):
		$this->session->set_userdata(array("upload_session_file"=>$this->upload->display_errors()));
		
	 else:
	 #remove session 
			$this->session->unset_userdata('upload_session_file');
	 	  if($type == 'update'){
				@unlink($config2['upload_path_file'].$edit->file_pdf); 
			}
			
		$files = $this->upload->data();
		$attachment = $files['file_name'];
		   
	  $data['file_pdf']        = $attachment;
	 endif;
	
	 }

	 	/* if(@$_FILES['publikasi_file_pdf2']['name'] != '') { 
	 $upload2 = $this->upload->do_upload('publikasi_file_pdf2');
	 $attachment =''; 
	 if($upload2==FALSE):
		$this->session->set_userdata(array("upload_session_file"=>$this->upload->display_errors()));
		
	 else:
	 #remove session 
			$this->session->unset_userdata('upload_session_file');
	 	  if($type == 'update'){
				@unlink($config2['upload_path_file'].$edit->file_pdf2); 
			}
			
		$files = $this->upload->data();
		$attachment = $files['file_name'];
		   
	  $data['file_pdf2']        = $attachment;
	 endif;
	
	 }*/

				
		if ($type == 'insert')
		{
			$id = $this->publikasi_model->insert($data);

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
			$return = $this->publikasi_model->update($id, $data);
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
				redirect(SITE_AREA .'/plugin/publikasi/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->kategori_model->error, 'danger');
			}
		}
		
		#list record kategori
		$records = $this->kategori_model->select_where_type("publikasi");
		Template::set('records', $records);
        
        $kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);
        
		
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
			redirect(SITE_AREA .'/plugin/publikasi/kategori');
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

				redirect(SITE_AREA .'/plugin/publikasi/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_delete_failure') . $this->kategori_model->error, 'danger');
			}
		}
		
		#get id kategori
		Template::set('kategori_edit', $this->kategori_model->find($id));
		
		#load config
		Template::set('config_kategori',$this->config->item('type_kategori'));
		

		#list record kategori
		$records = $this->kategori_model->select_where_type("publikasi");
		
		Template::set('records', $records);
        
        $kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);
        
		
		#load template
		Template::set('toolbar_title', "Edit Kategori Publikasi");
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
		
        
        $kategori=$this->kategori_model->select_where_type_in(array('publikasi'));
		Template::set('kategori', $kategori);
        
		$this->db->like("type_kategori","publikasi","before");
		$records = $this->kategori_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		
        $configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		
        Template::set('toolbar_title', lang('kategori_manage_trash'));
		Template::render();
	}

	//--------------------------------------------------------------------


}