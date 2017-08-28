<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
	    
        #load config	
		$this->load->config('config_gallery');
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
        $this->load->model("kategori/kategori_model",NULL,true);

        #load template theme
   		Template::set('toolbar_title',lang("bf_judul_galeri"));
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

       #categories 
	   $categories = $this->kategori_model->select_where_type('gallery');
 	   Template::set('categories', $categories);
	   
	   #load query
       $ListView =	$this->galerifoto_model->select_join()->result();
	   Template::set('ListView', $ListView);
	   
 	   
       #load config
	   Template::set('path_image',$this->upload_config['upload_path_image_gallery']);
	   
       #load template
	   Template::render('custome_two_left');
 	
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
					Template::set_message(lang('galeri_delete_failure') . $this->galerifoto_model->error, 'error');
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
				redirect(SITE_AREA .'/plugin/galerifoto');
			}
			else
			{
				Template::set_message(lang('galeri_create_failure') . $this->galerifoto_model->error, 'error');
			}
		}

	   
	   #parsing into TextFields
	   $value = $this->galerifoto_model->find($id);
	   Template::set('value', $value);
		  
	   #categories 
	   $categories = $this->kategori_model->select_where_type('gallery');
 	   Template::set('categories', $categories);
	   
	   #load query
       $ListView =	$this->galerifoto_model->select_join()->result();
	   Template::set('ListView', $ListView);
 	   
       #load config
	   Template::set('path_image',$this->upload_config['upload_path_image_gallery']);
       
       #load template 
	   Template::set_view('plugin/index');
	   Template::render('custome_two_left');
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
		
		

		$data['title_foto']        = $this->input->post('galeri_title_foto');
       // $data['title_foto_english']        = $this->input->post('galeri_title_foto_english');
        $data['isi_desc']        = $this->input->post('galeri_isi_desc');
        //$data['isi_desc_english']        = $this->input->post('galeri_isi_desc_english');
        $data['id_album']        = $this->input->post('galeri_id_album');
		$data['id_user']        = $this->session->userdata('user_id');
		
        
		if(@$_FILES['userfile']['name'] != '') { 
		
		#TIpe File Upload
		$attachment='';
		$config['upload_path'] = $this->upload_config['upload_path_image_gallery'];
		$config['allowed_types'] = 'jpg|jpeg';
		$config['max_width']  = '600';
		$config['max_height']  = '600';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('userfile');
		 
		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
		else:
			$this->session->unset_userdata('upload_session_image');
		   $files = $this->upload->data();
		   $attachment = $files['file_name'];
		    //identitas file asli
 		    $im_src = imagecreatefromjpeg($files['full_path']);
  			$src_width = imageSX($im_src);
 			$src_height = imageSY($im_src);
			
			if($type == 'update'){
				@unlink($config['upload_path'].$edit->file_foto); 
				#Delete Semua Thumb Terpaut
			 	  $linksArray=explode('.', $edit->file_foto);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];	
					}
		    	@unlink($config['upload_path'].$the); 
			}

  			//Simpan dalam versi small 110 pixel
 			 //Set ukuran gambar hasil perubahan
 		 	$width = 75;
 		 	$height = ($width/$src_width)*$src_height;
		   create_thumb($files['full_path']);
		   resize_image($files['full_path'], $width, $height);
		   
		endif;
		$data['file_foto'] = $attachment; 

        

		}

        if ($type == 'insert')
		{
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
	
}
?>