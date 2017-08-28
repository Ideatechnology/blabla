<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
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

		$this->load->helper("html");
		$this->auth->restrict('Post.Content.View');

		#load model
		$this->load->model('post_model', null, true);
		$this->load->model('kategori/kategori_model', null, true);

		#load lang
		$this->lang->load('post');

		#load config
		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config');

		#load heloer
		$this->load->helper('post');
        $this->load->helper('text');

	    $this->load->helper('../uploadut');

		#load js dan css

		Assets::clear_cache();
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
        Assets::add_js('jquery-ui-timepicker-addon.js');
		Assets::add_css('jquery-ui-timepicker.css');


		Assets::add_module_js('post', array('post.js'));

		#template
		Template::set_block('sub_nav', 'content/_sub_nav');
		Template::set_block('sidebar', 'content/sidebar');

	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		//hedline
		if (isset($_POST['headline']))
		{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				$msgheadline="";
				foreach ($checked as $pid)
				{
					$cekgambar=$this->post_model->find($pid);
					if($cekgambar->image_data!=""){

					$result = $this->post_model->update_custome($pid,array("headline"=>"Y"));

					}else{
					$msgheadline .= "<br />Judul ini ".$cekgambar->judul." tidak ada gambar<br />";

					}

				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('post_headline_success')." ".$msgheadline, 'success');
				}
				else
				{
					Template::set_message(lang('post_heaedline_failure') . $this->post_model->error." ".$msgheadline, 'danger');
				}
			}


		}

			//hedline
		if (isset($_POST['unheadline']))
		{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;

				foreach ($checked as $pid)
				{
					$result = $this->post_model->update_custome($pid,array("headline"=>"N"));

				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('post_unheadline_success'), 'success');
				}
				else
				{
					Template::set_message(lang('post_unheaedline_failure') . $this->post_model->error, 'danger');
				}
			}


		}

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->post_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('post_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('post_delete_failure') . $this->post_model->error, 'danger');
				}
			}
		}

		//query untuk post
		$total = $this->post_model->like("post_category",$this->input->get("kategori"),"after")
								  ->like('judul',$this->input->get('keyword'),"after")
								  ->where('deleted',0)
								  ->count_all();

		// Pagination
		$this->load->library('pagination');

		$offset = $this->input->get('per_page');

		$limit = 10;


		$this->pager['base_url'] 			= site_url().'/'.SITE_AREA.'/content/post?kategori='.$this->input->get('kategori').'&keyword='.$this->input->get('keyword');

    	$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$this->pager['full_tag_close'] = '</ul></div>';


		$this->pagination->initialize($this->pager);


		$this->db->like("post_category",$this->input->get("kategori"),"after");
		$this->db->like('judul',$this->input->get('keyword'),"after");
		$this->db->limit($limit, $offset);
		$records = $this->post_model->select_join()->result();

		//query untuk ketegori
		$kategori=$this->kategori_model->select_where_type_in(array('post'));
		Template::set('kategori', $kategori);
		Template::set('records', $records);
		Template::set('path_image', $this->upload_config['upload_path_image']);
		Template::set('toolbar_title',lang('post_manage'));
		Template::render();
	}

	/**
	 * Ajax Post object.
	 *
	 * @return void
	 */

	function ajax_view_post()
  	{

		 $can_delete	= $this->auth->has_permission('Post.Content.Delete');
		 $can_edit		= $this->auth->has_permission('Post.Content.Edit');

		 $this->load->library('Datatables');

		 $this->datatables->select('id,judul,author,created_on,modified_on');
		 $this->datatables->from('post_meta');

		 $this->datatables->unset_column('id');
		$this->datatables->edit_column('judul', '<a href="' . site_url(SITE_AREA."/content/post/edit/$1").'">$2</a>', 'id, judul');

		 echo $this->datatables->generate();

	 }



	//--------------------------------------------------------------------


	/**
	 * Creates a Post object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Post.Content.Create');
		Assets::clear_cache();
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');
		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_post())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('post_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'post');

				Template::set_message(lang('post_create_success').$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'success');

				redirect(SITE_AREA .'/content/post');
			}
			else
			{
				Template::set_message(lang('post_create_failure') . $this->post_model->error.$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'danger');
			}
		}
		Assets::add_module_js('post', 'post.js');

		//query untuk ketegori
		$kategori=$this->kategori_model->select_where_type_in(array( 'post'));
		Template::set('kategori', $kategori);

		Template::set('toolbar_title', "Create Post");
		Template::set('path_image', $this->upload_config['upload_path_image']);
		Template::render('custome_two_right_content');
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Post data.
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
			Template::set_message(lang('post_invalid_id'), 'danger');
			redirect(SITE_AREA .'/content/post');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Post.Content.Edit');

			if ($this->save_post('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('post_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'post');

				Template::set_message(lang('post_edit_success').$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'success');
			}
			else
			{
				Template::set_message(lang('post_edit_failure') . $this->post_model->error.$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'danger');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Post.Content.Delete');

			if ($this->post_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('post_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'post');

				Template::set_message(lang('post_delete_success'), 'success');

				redirect(SITE_AREA .'/content/post');
			}
			else
			{
				Template::set_message(lang('post_delete_failure') . $this->post_model->error, 'danger');
			}
		}

		//query untuk ketegori
		$kategori=$this->kategori_model->select_where_type_in(array('post'));
		$post=$this->post_model->find($id);
		Template::set('kategori', $kategori);
		Template::set('post', $post);

		Template::set('path_image', $this->upload_config['upload_path_image']);
		Template::set('toolbar_title', lang('post_edit') .' Post');

		Template::set_view('content/create');
	   Template::render('custome_two_right_content');
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

	private function save_post($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		$edit=$this->post_model->find($id);

		#Images Library Config

		 $this->load->library("image_lib");
		#End Images Config

		// make sure we only pass in the fields we want

		$data = array();
		$data['judul']        = $this->input->post('post_judul');
		$data['slug_judul']        = $this->input->post('post_slug_judul');
		$data['isi']        = $this->input->post('post_isi');
		$data['post_category']        = $this->input->post('post_post_category');
		$data['author']        = $this->input->post('post_author');
		$data['flag_comments']        = $this->input->post('post_flag_comments');

		if($this->input->post('post_set_img'))
		$data['set_img']  = $this->input->post('post_set_img');
		else
		$data['set_img']  = "none";



		/**
	 * Summary
	 * status tampil jika 0 : tampil klo 1 : draft
	 */

		if($this->input->post('save')=="Publish Post")
		$data['status_tampil']        = 0;
		else
		$data['status_tampil']        = 1;



		/**
	 * Summary
	 * untuk upload images
	 */


		$attachment1 ='';

		 $targetPath = './media/article/';


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
                $realbasepaturl = "media/article/".$folder_tahun."/".$folder_bulan."/";
                $realpathfile = "article/".$folder_tahun."/".$folder_bulan."/";

		#Upload Images

 		$config['upload_path'] = $realpath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_size']             = 524288;
        $config['file_ext_tolower']     = true;
		$config["encrypt_name"] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if(@$_FILES['post_image_data']['name'] != '') {

		$upload = $this->upload->do_upload('post_image_data');

		$attachment1='';
		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>"<span style='color:re'>".$this->upload->display_errors()."</span>"));

		else:
			$this->session->unset_userdata('upload_session_image');
			$imgs = $this->upload->data();
			

			$ext = $imgs["file_ext"];

	        //identitas file asli
	        if($ext==".jpg" || $ext==".jpeg" || $ext==".jpe" || $ext==".JPG")
	        $im_src = imagecreatefromjpeg($imgs['full_path']);
	        elseif($ext==".png")
	        $im_src = imagecreatefrompng($imgs['full_path']);
	        else
	        $im_src = imagecreatefromgif($imgs['full_path']);


	        $src_width = imageSX($im_src);
	        $src_height = imageSY($im_src);

  			 //Simpan dalam versi small 768 pixel
            //Set ukuran gambar hasil perubahan
            $width = 768;
            $height = ($width/$src_width)*$src_height;

            resize_image($imgs['full_path'], $width, $height,"_768");

            $image_dengan_768 = $imgs["file_path"].$imgs["raw_name"]."_768".$ext;

            //Simpan dalam versi small 300 pixel
            //Set ukuran gambar hasil perubahan
            $width_300 = 300;
            $height_300 = ($width_300/$src_width)*$src_height;

            resize_image($image_dengan_768, $width_300, $height_300,"_300");

            $image_dengan_300 = $imgs["file_path"].$imgs["raw_name"]."_768_300".$ext;

             //Simpan dalam versi small 150 pixel
            //Set ukuran gambar hasil perubahan
            $width_crop=150;
            $height_crop=150;
            
            crop_image($image_dengan_300,$ext,$width_crop,$height_crop,$imgs["file_path"].$imgs["raw_name"]."_150".$ext);

		$attachment1 = $imgs['file_name'];
		
		$data['image_data'] = $attachment1;
		$data['guid_image'] = $realpathfile.$attachment1;
		$data['image_data_desc']        = $this->input->post('post_image_data_desc');
		endif;


		}

		#end Uploads Images

		/**
	 * Summary
	 * untuk upload file
	 */

		$data['identifier']  = url_title($this->input->post('post_judul'));


	 $config2['upload_path'] = $this->upload_config['upload_path_file'];
	 $config2['allowed_types'] = 'doc|xls|docx|xlsx|ppt|pptx|pdf';
	 $this->load->library('upload', $config2);
	 $this->upload->initialize($config2);

	 if(@$_FILES['post_file_data']['name'] != '') {
	 $upload2 = $this->upload->do_upload('post_file_data');
	 $attachment ='';
	 if($upload2==FALSE):
		$this->session->set_userdata(array("upload_session_file"=>$this->upload->display_errors()));

	 else:
	 #remove session
			$this->session->unset_userdata('upload_session_file');
	 	  if($type == 'update'){
				@unlink($config2['upload_path_file'].$edit->file_data);
			}

		$files = $this->upload->data();
		$attachment = $files['file_name'];


	  $data['file_data'] = $attachment;
	 endif;

	 }

		if ($type == 'insert')
		{

			$data['created_on']  = $this->input->post('post_created_on');


			$id = $this->post_model->insert($data);

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

			$data['created_on']  = $this->input->post('post_created_on');
			$data['modified_on']  = date("Y-m-d H:i:s");
			$return = $this->post_model->update($id, $data);
		}

		return $return;
	}

	#hapus image
	function hapusimage($id){
		$edit=$this->post_model->find($id);
		$config['upload_path'] = $this->upload_config['upload_path_image'];

		$data = array("image_data"=>"","image_data_desc"=>"");
		$this->post_model->update_custome($id,$data);

		@unlink($config['upload_path'].$edit->image_data);
		#Delete Semua Thumb Terpaut
			 	  $linksArray=explode('.', $edit->image_data);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];
					}
	    @unlink($config['upload_path'].$the);
		Template::set_message("Gambar berhasil dihapus", 'success');
		redirect(SITE_AREA .'/content/post/edit/'.$id);

	}
	#hapus file
	function hapusfile($id){

		$edit=$this->post_model->find($id);
		$config['upload_path'] = $this->upload_config['upload_path_file'];
		$data = array("file_data"=>"");
		$this->post_model->update_custome($id,$data);
		@unlink($config['upload_path'].$edit->file_data);
		Template::set_message("File berhasil dihapus", 'success');
		redirect(SITE_AREA .'/content/post/edit/'.$id);


	}

	#komentar
	function comment($id){

	// approved
		if(isset($_POST['approve'])){

			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{

					$result= $this->db->where('id', $pid)->update('comments',array(
						'approve' =>'Y',
							)
					);
				}

				if ($result)
				{
					Template::set_message("Komentar berhasil diapprove", 'success');
					redirect(SITE_AREA .'/content/post/comment/'.$id);
				}

			}


		}
		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->post_model->delete_comment_post($pid);
				}

				if ($result)
				{
					Template::set_message(lang('post_remove_komentar_success'), 'success');
					redirect(SITE_AREA .'/content/post/comment/'.$id);
				}
				else
				{

					Template::set_message(lang('post_remove_komentar_failure'), 'danger');
					redirect(SITE_AREA .'/content/post/comment/'.$id);
				}
			}
		}

	
	$records=$this->post_model->select_comment_post($id);
	$edit=$this->post_model->find($id);
	Template::set('records',$records);
	Template::set('edit',$edit);
	Template::render();

	}


	/**
	 * View Data trash
	 *
	 * @return void
	 */
	function trash(){

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{

					$edit=$this->post_model->find($pid);

					#untuk delete file image
					$config['upload_path'] = $this->upload_config['upload_path_image'];
					@unlink($config['upload_path'].$edit->image_data);
					#Delete Semua Thumb Terpaut
			 		$linksArray=explode('.', $edit->image_data);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];
					}
		    		@unlink($config['upload_path'].$the);

					#untuk hapus file
					$config2['upload_path'] = $this->upload_config['upload_path_file'];
	 				@unlink($config2['upload_path_file'].$edit->file_data);
					$result = $this->post_model->delete_custome($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('post_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('post_delete_failure') . $this->post_model->error, 'danger');
				}
			}
		}

		// publish anything?
		if (isset($_POST['publish']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{

					$data["deleted"]=0;
					$result = $this->post_model->update_custome($pid,$data);

				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang("post_publish"), 'success');
				}
				else
				{
					Template::set_message(lang('post_failure_publish') . $this->post_model->error, 'danger');
				}
			}
		}

		//query untuk post
		$this->db->like('post_category',$this->input->post('kategori'),"before");
		$records = $this->post_model->select_join_trash()->result();

		//query untuk ketegori
		$kategori=$this->kategori_model->select_where_type_in(array('post'));

		Template::set('kategori', $kategori);
		Template::set('records', $records);
		Template::set('toolbar_title', "Trash Post");
		Template::render();

	}


	function kategori(){


		$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'content/sidebar_kategori');
		Template::set_block('sub_nav', 'content/_sub_nav_kategori');

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
				redirect(SITE_AREA .'/content/post/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->kategori_model->error, 'danger');
			}
		}

		#list record kategori
		$records = $this->kategori_model->select_where_type("post");
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
		Template::set_block('sidebar', 'content/sidebar_kategori');
		Template::set_block('sub_nav', 'content/_sub_nav_kategori');

		if (empty($id))
		{
			Template::set_message(lang('kategori_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/post/kategori');
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

				redirect(SITE_AREA .'/content/post/kategori');
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
		$records = $this->kategori_model->select_where_type("post");

		Template::set('records', $records);

		#load template
		Template::set('toolbar_title', "Edit Kategori Post");
		Template::set_view('content/kategori');
		Template::render('custome_two_left');


	}


	public function trashkategori()
	{

	$this->load->model('kategori/kategori_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'content/sidebar_kategori');
		Template::set_block('sub_nav', 'content/_sub_nav_kategori');
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

		$this->db->like("type_kategori","post","before");
		$records = $this->kategori_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		$configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		Template::set('toolbar_title', lang('kategori_manage_trash'));
		Template::render();
	}





}
