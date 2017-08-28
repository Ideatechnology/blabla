<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{

	public function __construct()
	{
		parent::__construct();

		Assets::clear_cache();
		#load js dan css
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
		Assets::add_js('jquery-ui-timepicker-addon.js');
		Assets::add_css('jquery-ui-timepicker.css');

		#load js and css

		Assets::add_module_css('datatable', 'css/jquery.dataTables.css');
        Assets::add_module_js('datatable', 'js/jquery.dataTables.js');
		Assets::add_module_css('post', 'css/cleditor.css');
		Assets::add_module_css('arsip', 'css/arsip.css');
		Assets::add_module_js('post', array('js/jquery.cleditor.js'));
		Assets::add_module_js('arsip', array('js/fnReloadAjax.js','js/arsip.js'));

		#load bahasa
		$this->lang->load('arsip');

		#judul dan sidebar
		Template::set('toolbar_title',"File Manager");
		Template::set_block('sidebar', 'plugin/sidebar');

		#configuration
		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config');

		#load model
		$this->load->model('arsip_model', null, true);
		$this->load->helper('arsip');
		$this->load->model('kategori/kategori_model', null, true);

	}


	#View Arsip
	public function index()
	{
 	   $this->auth->restrict('Arsip.Plugin.View');

		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');

				$result= $this->hapuskan($checked);

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('file_delete_success'), 'success');

				}
				else
				{
					Template::set_message(lang('file_delete_failure') . $this->arsip_model->error, 'error');
				}

		}


	   #query tampil arsip
	   $this->arsip_model->where("post_category",$this->input->get("kategori"));
	   $records=$this->arsip_model->select_join()->result();
 	   Template::set('records', $records);

	   #menentukan display
		$display_embed=($this->input->post('file_type')=="embed")?"":"style='display:none'";
		Template::set('display_embed', $display_embed);
		$display_upload=($this->input->post('file_type')=="upload" || $this->input->post('file_type')=="")?"":"style='display:none'";
		Template::set('display_upload', $display_upload);

		#path arsip
		Template::set('upload_path_file',$this->upload_config['upload_path_file']);

	   #query katgori arsip
	   $categories = $this->kategori_model->select_where_type("arsip");
	   Template::set('categories', $categories);


	   Template::set('toolbar_title', "Upload Arsip");
	   Template::render('custome_two_left');

 	}


	#Create Arsip
	public function Create(){


	    if(isset($_POST['save']))
		{
			$id=$this->uri->segment(5);

			if(!empty($id))
				$insert_id = $this->save_arsip('update', $id);
			else
				$insert_id = $this->save_arsip();

			if ($insert_id)
			{

				echo lang('file_create_success');
                Template::set(lang('file_create_success'),"success");
				$this->session->set_flashdata('message_succes_file', lang('file_create_success'));
				redirect(SITE_AREA .'/plugin/arsip?kategori='.$this->input->post("file_kategori").'&cari=cari');



			}
			else
			{

				echo lang('file_create_failure').$this->uri->segment(5) . $this->arsip_model->error;
				echo validation_errors();
				echo $this->session->userdata("upload_session_file");
				redirect(SITE_AREA .'/plugin/arsip?kategori='.$this->input->post("file_kategori").'&cari=cari');



			}
		}

		die;
 	}

	#Edit Arsip
	public function edit(){

	   $this->auth->restrict('Arsip.Plugin.Edit');

	   	$id = $this->uri->segment(5);

	   #jika id kosong
	   if (empty($id))
		{
			Template::set_message(lang('arsip_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/arsip');
		}

		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');

				$result= $this->hapuskan($checked);

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('file_delete_success'), 'success');
					redirect(SITE_AREA .'/plugin/arsip');

				}
				else
				{
					Template::set_message(lang('file_delete_failure') . $this->arsip_model->error, 'error');
				}

		}


	    #parsing into TextFields
		$arsip = $this->arsip_model->find($id);
		Template::set('arsip', $arsip);

		#menentukan display
		$display_embed=($arsip->type=="embed")?"":"style='display:none'";
		Template::set('display_embed', $display_embed);
		$display_upload=($arsip->type=="upload")?"":"style='display:none'";
		Template::set('display_upload', $display_upload);

		#query tampil arsip
	   $records=$this->arsip_model->select_join()->result();
 	   Template::set('records', $records);

	   #query katgori arsip
	   $categories = $this->kategori_model->select_where_type("arsip");
	   Template::set('categories', $categories);

	   #config path file and link download
	   	#path arsip
		Template::set('upload_path_file',$this->upload_config['upload_path_file']);
	   $file=($arsip->type=="embed")?$arsip->file_data:$arsip->file_data;
	   Template::set('link_file',link_download_arsip($arsip->type,$file));
	   Template::set('toolbar_title', "Edit Arsip");
	   Template::set_view("plugin/index");
	   Template::render('custome_two_left');

	}

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

					$value = $this->arsip_model->find($pid);
					$config['upload_path'] = $this->upload_config['upload_path_file'];
					@unlink($config['upload_path']. $value->file_data);
					$result = $this->arsip_model->delete($pid);



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
	private function save_arsip($type='insert', $id=0)
	{
		error_reporting(0);
		if ($type == 'update')
		{
			$_POST['id'] = $id;


		}

		$edit=$this->arsip_model->find($id);

		#Images Library Config
		$this->load->helper('post/uploadut');
		$this->load->library('image_lib');
		#End Images Config

		// make sure we only pass in the fields we want
		$upload=TRUE;
		$data = array();

		 $data = array('post_category' => $this->input->post('file_kategori'),
						'judul' => $this->input->post('file_judul'),
						'isi_arsip' => $this->input->post('file_isi_arsip'),
						'tgl_arsip'=>date("Y-m-d H:i:s")
						);


	   $targetPath = './media/documents/';


                 $folder_tahun = date("Y");
                 $folder_bulan = date("m");

                 //cek folder tahun
                if (!is_dir($targetPath.$folder_tahun)) {
                    mkdir($targetPath.$folder_tahun);
                    chmod($targetPath.$folder_tahun,0777);
                }

                //cek folder bulan
                if (!is_dir($targetPath.$folder_tahun."/".$folder_bulan)) {
                    mkdir($targetPath.$folder_tahun."/".$folder_bulan);
                    chmod($targetPath.$folder_tahun."/".$folder_bulan,0777);
                }

                $realpath = $targetPath.$folder_tahun."/".$folder_bulan."/";
                $realbasepaturl = "media/documents/".$folder_tahun."/".$folder_bulan."/";
                $realpathfile = "documents/".$folder_tahun."/".$folder_bulan."/";


	 $config['upload_path'] = $realpath;
	 $config['allowed_types'] = 'doc|xls|docx|xlsx|ppt|pptx|pdf|jpg|gif|png|rar|zip';
	 $config['max_size']	= '802400000000000000';
	 $config['encrypt_name']= TRUE;
	 $this->load->library('upload', $config);
	 $this->upload->initialize($config);

	 if(@$_FILES['file_attachment']['name']!="") {

	 $upload = $this->upload->do_upload('file_attachment');
	 $attachment ='';
	 if($upload==FALSE){
	 		$this->session->set_userdata(array("upload_session_file"=>$this->upload->display_errors()));
            return false;
	 }else{
	 		#remove session
			$this->session->unset_userdata('upload_session_file');

	 	  if($type == 'update'){
				@unlink($config['upload_path_file'].$edit->file_data);
			}

		$files = $this->upload->data();

		$attachment = $files['file_name'];
		$size = $files['file_size'];
		$extention = $files['file_ext'];

		$data["filepath"] = $realpathfile.$attachment;
	    $data['file_data'] = $attachment;
		$data['ukuran'] = $size;
		$data['extensions'] = $extention;


	}

	}


		if ($type == 'insert')
		{

			#jika upload berhasil
			if($upload==TRUE):

			$id = $this->arsip_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}

			else:

				$return = FALSE;

			endif;
		}
		elseif ($type == 'update')
		{


			#jika upload berhasil
			$upd=$this->arsip_model->update($id,$data);
			if(@$_FILES['file_attachment']['name']!="") {
			if($upload==TRUE):
				$return = $upd;
			else:
				$return = FALSE;
			endif;
			}else{
				$return = $upd;
			}

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
				redirect(SITE_AREA .'/plugin/arsip/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->kategori_model->error, 'danger');
			}
		}

		#list record kategori
		$records = $this->kategori_model->select_where_type("arsip");
		Template::set('records', $records);




		Template::set('toolbar_title', "Kategori Arsip");
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
			redirect(SITE_AREA .'/plugin/arsip/kategori');
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

				redirect(SITE_AREA .'/plugin/arsip/kategori');
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
		$records = $this->kategori_model->select_where_type("arsip");

		Template::set('records', $records);

		#load template
		Template::set('toolbar_title', "Edit Kategori Undang-Undang");
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

		$this->db->like("type_kategori","arsip","before");
		$records = $this->kategori_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		$configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		Template::set('toolbar_title', "Tempat Sampah Kategori Undang-Undang");
		Template::render();
	}






}
?>
