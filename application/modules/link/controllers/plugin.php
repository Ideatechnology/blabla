<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		
        #load config
 		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config');
		$this->load->helper("html");
		$this->load->helper("text");
		$this->load->helper('uploadut');
        #load js dan css
		Assets::clear_cache();
		Assets::add_module_js('link', array('link.js'));
		
        #load model
        $this->load->model("link_model",NULL,true);

        #load lang 
        $this->lang->load("link");

		#load template
   		Template::set('toolbar_title',"Link");
		Template::set_block('sidebar', 'plugin/sidebar');
 	}
	
	
	public function index() 
	{
 	   $this->auth->restrict('Link.Plugin.View');
       
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
					
					$result = $this->db->query("update bf_link set deleted=0 where id='".$pid."'");
					
					
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
					
					$result = $this->db->query("update bf_link set deleted=1 where id='".$pid."'");
					
					
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
					 $config['upload_path'] = $this->upload_config['upload_path_file'];
	  				 $value = $this->link_model->find($pid);
	   				 @unlink($config['upload_path']. $value->file_slide); 
					 @$linksArray=explode('.', $value->file_slide);
 						$links= array_filter($linksArray);
						if(!empty($links)){
					  		$the = $links[0]."_thumb.".$links[1];	
						}
	    			 @unlink($config['upload_path'].$the);

					$result = $this->link_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('slide_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('slide_delete_failure') . $this->link_model->error, 'danger');
				}
			}
		}
		// Simpan Link
		if (isset($_POST['save']))
		{
			$this->auth->restrict('Link.Plugin.Create');
			if ($insert_id = $this->save())
			{
				
				Template::set_message(lang('slide_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/link');
			}
			else
			{
				Template::set_message(lang('slide_create_failure') . $this->link_model->error, 'danger');
			}
		}

	   #load path slide
 	   $ListView = $this->link_model->select()->result();
	   Template::set('ListView', $ListView);

 	   #load path image
       Template::set('path_file',$this->upload_config['upload_path_file']);
	   
       #load template
	   Template::render('custome_two_left');
 	}
	
	#Edit Arsip
	public function edit(){
	   
       $this->auth->restrict('Link.Plugin.Edit');
	  
	   $id= $this->db->escape_str(abs($this->uri->segment(5,0)));


       if (empty($id))
		{
			Template::set_message(lang('slide_invalid_id'), 'danger');
			redirect(SITE_AREA .'/plugin/link');
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
					 $config['upload_path'] = $this->upload_config['upload_path_file'];
	  				 $value = $this->slide_model->find($pid);
	   				 @unlink($config['upload_path']. $value->file_slide); 
					 $linksArray=explode('.', $value->file_slide);
 						$links= array_filter($linksArray);
						if(!empty($links)){
					  		$the = $links[0]."_thumb.".$links[1];	
						}
	    			 @unlink($config['upload_path'].$the);

					$result = $this->link_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('slide_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('slide_delete_failure') . $this->link_model->error, 'danger');
				}
			}
		}
		// Simpan Slide
		if (isset($_POST['save']))
		{
			$this->auth->restrict('Link.Plugin.Edit');
			if ($insert_id = $this->save("update",$id))
			{
				
				Template::set_message(lang('slide_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/link');
			}
			else
			{
				Template::set_message(lang('slide_create_failure') . $this->link_model->error, 'error');
			}
		}
	   
	   #parsing into TextFields
	   $value = $this->link_model->find($id);
	   Template::set('value', $value);
    
	   #load path link
 	   $ListView = $this->link_model->select()->result();
	   Template::set('ListView', $ListView);
	   
       #load path
       Template::set('path_file',$this->upload_config['upload_path_file']);
	   
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
	private function save($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}
		
		$edit=$this->link_model->find($id);
		
		#Images Library Config
		
		$this->load->library('image_lib');
		#End Images Config

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['title']        = $this->input->post('title');
		$data['link']        = $this->input->post('link');
        $data['keterangan']        = $this->input->post('keterangan');
        $data['tipe'] = $this->input->post("tipe");
		
		if(@$_FILES['userfile']['name'] != '') { 
		
		#TIpe File Upload
		$attachment='';
		$config['upload_path'] = $this->upload_config['upload_path_file_upload'];
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['max_width']  = '1940';
		$config['max_height']  = '1331';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('userfile');
		$this->upload->display_errors();

		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
			$return = FALSE;
		else:
			
			//$this->session->unset_userdata('upload_session_image');
		   $files = $this->upload->data();
		   $attachment = $files['file_name'];
		    //identitas file asli
 		   
		   $ext = $files["file_ext"];

	        //identitas file asli
	        if($ext==".jpg" || $ext==".jpeg" || $ext==".jpe")
	        $im_src = imagecreatefromjpeg($files['full_path']);
	        elseif($ext==".png")
	        $im_src = imagecreatefrompng($files['full_path']);
	    	 else
	        $im_src = imagecreatefromgif($files['full_path']);


 		     $src_width = imageSX($im_src);
	        $src_height = imageSY($im_src);

  			 //Simpan dalam versi small 768 pixel
            //Set ukuran gambar hasil perubahan
            $width = 300;
            $height = ($width/$src_width)*$src_height;

            resize_image($files['full_path'], $width, $height,"_768");

            $image_dengan_768 = $files["file_path"].$files["raw_name"]."_768".$ext;

            //Simpan dalam versi small 300 pixel
            //Set ukuran gambar hasil perubahan
            $width_300 = 200;
            $height_300 = ($width_300/$src_width)*$src_height;

            resize_image($image_dengan_768, $width_300, $height_300,"_300");

            $image_dengan_300 = $files["file_path"].$files["raw_name"]."_768_300".$ext;

             //Simpan dalam versi small 150 pixel
            //Set ukuran gambar hasil perubahan
            $width_crop=150;
            $height_crop=150;
            
            crop_image($image_dengan_300,$ext,$width_crop,$height_crop,$files["file_path"].$files["raw_name"]."_150".$ext);

		   $data['file'] = $attachment; 

		endif;
		
				
		
		
		}
		
		if ($type == 'insert')
		{
			$id = $this->link_model->insert($data);

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
			$return = $this->link_model->update($id, $data);
		}
		return $return;
	}


}

?>