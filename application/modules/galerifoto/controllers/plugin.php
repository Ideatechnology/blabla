<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{

	public function __construct()
	{
		parent::__construct();

        #load config
		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config_gallery');

        #load js dan css
		Assets::clear_cache();
		Assets::add_module_css('datatable', 'css/jquery.dataTables.css');
		Assets::add_module_js('datatable', 'js/jquery.dataTables.js');
		Assets::add_module_js('galerifoto', array('galerifoto.js'));
		Assets::add_module_css('post', 'css/cleditor.css');
        Assets::add_module_js('post', array('jquery-ui-1.8.2_widget.js','jquery.cleditor.js'));

        #load lang
        $this->lang->load("gallery");
        
        

        #load model
        $this->load->model("galerifoto_model",NULL,true);
        $this->load->model("kategori/album_model",NULL,true);

        #load template theme
   		Template::set('toolbar_title',"Galeri Foto");
		Template::set_block('sidebar', 'plugin/sidebar');

 	}


	 #View Gallery
	public function index()
	{

 	   $this->auth->restrict('Galerifoto.Plugin.View');

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

					$result = $this->db->query("update bf_galeri_foto set flag=1 where id='".$pid."'");


				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di publish', 'success');
				}
				else
				{
					Template::set_message('gagal di publish '  , 'error');
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

					$result = $this->db->query("update bf_galeri_foto set flag=0 where id='".$pid."'");


				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di unpublish', 'success');
				}
				else
				{
					Template::set_message('gagal di unpublish '  , 'error');
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
                    #untuk menghapus file image
					 $config['upload_path'] = $this->upload_config['upload_path_image'];
	  				 $value = $this->galerifoto_model->find($pid);
	   				 @unlink($config['upload_path']. $value->file_foto);
					 $linksArray=explode('.', $value->file_foto);
 						$links= array_filter($linksArray);
						if(!empty($links)){
					  		$the = $links[0]."_thumb.".$links[1];
						}
	    			 @unlink($config['upload_path'].$the);

					$result = $this->galerifoto_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('galeri_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('galeri_delete_failure') . $this->galerifoto_model->error, 'error');
				}
			}
		}
		// Simpan gallery foto
		if (isset($_POST['save']))
		{
			$this->auth->restrict('Galerifoto.Plugin.Create');
			if ($insert_id = $this->save_galeri())
			{


				Template::set_message(lang('galeri_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/galerifoto');
			}
			else
			{
				Template::set_message(lang('galeri_create_failure') . $this->galerifoto_model->error, 'error');
			}
		}
        
        #galeri foto
        $this->galerifoto_model->join('album_foto',"album_foto.id=galeri_foto.id_album");
        $this->galerifoto_model->select("*,galeri_foto.id as id_galeri");
        $this->galerifoto_model->where("id_album",$this->input->get("kategori"));
        $records = $this->galerifoto_model->find_all();
        Template::set("records",$records);
        
        
       #categories
        $this->db->where("deleted",0);
	   $categories = $this->db->get("album_foto")->result();
 	   Template::set('categories', $categories);

	   
       #load config
	   Template::set('path_image',$this->upload_config['upload_path_image_gallery']);

       #load template
	   Template::render();

    }

    
	#Edit Gallery
	public function edit(){

	   $this->auth->restrict('Galerifoto.Plugin.Edit');
	   $id=(int) $this->uri->segment(5,0);

       if(empty($id)){
           Template::set_message(lang('galeri_invalid_id'), 'error');
           redirect(SITE_AREA."/plugin/galerifoto");
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
                    #untuk menghapus file image
					 $config['upload_path'] = $this->upload_config['upload_path_image'];
	  				 $value = $this->galerifoto_model->find($pid);
	   				 @unlink($config['upload_path']. $value->file_foto);
					 $linksArray=explode('.', $value->file_foto);
 						$links= array_filter($linksArray);
						if(!empty($links)){
					  		$the = $links[0]."_thumb.".$links[1];
						}
	    			 @unlink($config['upload_path'].$the);

					$result = $this->galerifoto_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('galeri_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('galeri_delete_failure') .$this->session->userdata("upload_session_image"). $this->galerifoto_model->error, 'error');
				}
			}
		}

       // Simpan gallery foto
		if (isset($_POST['save']))
		{
			$this->auth->restrict('Galerifoto.Plugin.Create');
			if ($insert_id = $this->save_galeri("update",$id))
			{

				Template::set_message(lang('galeri_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/galerifoto/edit/'.$id.'?kategori='.$this->input->get("kategori"));
			}
			else
			{
				Template::set_message(lang('galeri_create_failure') . $this->galerifoto_model->error, 'error');
			}
		}


	   #parsing into TextFields
	   $value = $this->db->where("id",$id)->get("galeri_foto")->row();
	   Template::set('value', $value);
        
        
	    #categories
	   $this->db->where("deleted",0);
	   $categories = $this->db->get("album_foto")->result();
 	   Template::set('categories', $categories);

        
	   #galeri foto
        $this->galerifoto_model->join('album_foto',"album_foto.id=galeri_foto.id_album");
        $this->galerifoto_model->select("*,galeri_foto.id as id_galeri");
        $this->galerifoto_model->where("id_album",$this->input->get("kategori"));
        $records = $this->galerifoto_model->find_all();
        Template::set("records",$records);
        

       #load config
	   Template::set('path_image',$this->upload_config['upload_path_image_gallery']);

       #load template
	   Template::set_view('plugin/sidebar');
	   Template::render();
        
 	}


	 public function hapus($id){
		 
		 $kategori = $this->input->get("kategori");
		 
		 $result = $this->galerifoto_model->delete($id);
		 
		 redirect(SITE_AREA .'/plugin/galerifoto/index?kategori='.$this->input->get("kategori"));
		 
	 }

	 public function uploadfoto(){
		 
		 $kategori = $this->input->get("kategori");
		 
		 $upload=TRUE;
		#Images Library Config
		$this->load->helper('post/uploadut');
		$this->load->library('image_lib');
		
		#TIpe File Upload
		$attachment='';
		$config['upload_path'] = $this->upload_config['upload_path_image_gallery'];
		$config['allowed_types'] = 'jpg|jpeg|png';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('file');
		
		if (!$this->upload->do_upload('file'))
		{
			echo $this->upload->display_errors();
			
		}else{
			
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

        	$attachment = $imgs['file_name'];

			
			$data['file_foto'] = $attachment;
			$data['title_foto']        = $imgs['raw_name'];
			$data['isi_desc']        = $imgs['raw_name'];
			$data['id_album']        = $kategori;
			$data['id_user']        = $this->session->userdata('user_id');
			$data['created_on'] = date("Y-m-d H:i:s");
			$data['flag'] = 1;
			
			$id = $this->db->insert("galeri_foto",$data);
			
			echo $this->galerifoto_model->error;
					

            
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
	private function save_galeri($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		$edit=$this->galerifoto_model->find($id);
		$upload=TRUE;
		#Images Library Config
		$this->load->helper('post/uploadut');
		$this->load->library('image_lib');
		#End Images Config

		// make sure we only pass in the fields we want

		$data = array();

		$f_foto = $this->input->post('f_foto');

		$data['title_foto']        = $this->input->post('galeri_title_foto');
       // $data['title_foto_english']        = $this->input->post('galeri_title_foto_english');
        $data['isi_desc']        = $this->input->post('galeri_isi_desc');
        //$data['isi_desc_english']        = $this->input->post('galeri_isi_desc_english');
        $data['id_album']        = $this->input->post('galeri_id_album');
		$data['id_user']        = $this->session->userdata('user_id');

		#TIpe File Upload
		$attachment='';
		$config['upload_path'] = $this->upload_config['upload_path_image_gallery'];
		$config['allowed_types'] = 'jpg|jpeg|png';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('userfile');

		if (!$this->upload->do_upload('userfile'))
		{
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));


		}else{
			$this->session->unset_userdata('upload_session_image');
			if(@$_FILES['userfile']['name'] != '') {
				
				$imgs = $this->upload->data();
				$ext = $imgs["file_ext"];

	        //identitas file asli
	        if($ext==".jpg" || $ext==".jpeg" || $ext==".jpe")
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

            $attachment = $imgs['file_name'];




				if($f_foto !=''){
					@unlink($config['upload_path'].$f_foto);
					#Delete Semua Thumb Terpaut
					  $linksArray=explode('.',$f_foto);
						$links= array_filter($linksArray);
						if(!empty($links)){
						  $the = $links[0]."_thumb.".$links[1];
						}
					@unlink($config['upload_path'].$the);
				}
				$data['file_foto'] = $attachment;

			}else{
				$attachment = $f_foto;
			}
            
          	}

			if ($type == 'insert')
			{
					$data['file_foto'] = $attachment;

				#jika upload berhasil
				if($upload==TRUE):

				$data['created_on'] =date("Y-m-d H:i:s");
				$id = $this->galerifoto_model->insert($data);

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

			elseif($type == 'update'){


				#jika upload berhasil
				$upd=$this->galerifoto_model->update($id, $data);
				if(@$_FILES['userfile']['name']!=""){
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


		$this->load->model('kategori/album_model', null, true);
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
					$result = $this->album_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->album_model->error, 'danger');
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
				redirect(SITE_AREA .'/plugin/galerifoto/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_create_failure') . $this->album_model->error, 'danger');
			}
		}

		#list record kategori
		$records = $this->album_model->select_where_type("galleri");
		Template::set('records', $records);


		Template::set('toolbar_title', lang('kategori_manage'));
		Template::render('custome_two_left');


	}

	private function save_kategori($type='insert', $id=0)
	{
		$this->load->model('kategori/album_model', null, true);
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
			$id = $this->album_model->insert($data);

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
			$return = $this->album_model->update($id, $data);
		}

		return $return;
	}

	//edit kategori
	public function editkategori(){

	$id = (int) $this->uri->segment(5);
	$this->load->model('kategori/album_model', null, true);
		$this->lang->load('kategori/kategori');
		Template::set_block('sidebar', 'plugin/sidebar_kategori');
		Template::set_block('sub_nav', 'plugin/_sub_nav_kategori');

		if (empty($id))
		{
			Template::set_message(lang('kategori_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/galerifoto/kategori');
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
				Template::set_message(lang('kategori_edit_failure') . $this->album_model->error, 'danger');
			}
		}
		else if (isset($_POST['delete']))
		{

			if ($this->album_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kategori_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'kategori');

				Template::set_message(lang('kategori_delete_success'), 'success');

				redirect(SITE_AREA .'/plugin/galerifoto/kategori');
			}
			else
			{
				Template::set_message(lang('kategori_delete_failure') . $this->album_model->error, 'danger');
			}
		}

		#get id kategori
		Template::set('kategori', $this->album_model->find($id));

		#load config
		Template::set('config_kategori',$this->config->item('type_kategori'));


		#list record kategori
		$records = $this->album_model->select_where_type("galleri");

		Template::set('records', $records);

		#load template
		Template::set('toolbar_title', "Edit Kategori Galleri");
		Template::set_view('plugin/kategori');
		Template::render('custome_two_left');


	}


	public function trashkategori()
	{

	$this->load->model('kategori/album_model', null, true);
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
					$result = $this->db->delete("album_foto");
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->album_model->error, 'danger');
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
					$result = $this->db->update("album_foto",$data);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kategori_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kategori_delete_failure') . $this->album_model->error, 'danger');
				}
			}
		}

		$this->db->like("type_kategori","galleri","before");
		$records = $this->album_model->where('deleted',1)->find_all() ;
		Template::set('records', $records);
		$configkategori=$this->config->item('type_kategori');
		Template::set('config_kategori',$configkategori);
		Template::set('toolbar_title', lang('kategori_manage_trash'));
		Template::render();
	}





}
?>
