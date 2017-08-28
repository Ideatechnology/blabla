<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Content extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
	
 	    #load template
		Template::set_block('sub_nav', 'page/_sub_nav');
		Template::set_block('sidebar', 'page/sidebar');
		Template::set('toolbar_title', 'Pages');
		 
		#load config the module
		$this->load->config('config');
		$this->upload_config = $this->config->item('upload_config');
		
		#load js dan css
			Assets::clear_cache();
		Assets::add_module_js('pages', array('pages.js'));
		
		#load helper
		$this->load->helper('get_hirarki');
		
		#load lang
		$this->lang->load('page');
		
		#load model 
		$this->load->model('pages_model', null, true);
 	
	}
	
	
	public function index() 
	{
	   $this->auth->restrict('Pages.Content.View');	
	  
 		#Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->pages_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '.lang('page_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('page_delete_failure')." " . $this->pages_model->error, 'danger');
				}
			}
		}
		
		#Deleting permanent
		if (isset($_POST['deletepermanent']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
				
					$result = $this->pages_model->delete_permanent($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '.lang('page_delete_success'), 'success');
			
				}
				else
				{
						Template::set_message(lang('page_delete_failure')." " . $this->pages_model->error, 'danger');
			
				}
			}
		}
		
		#restore
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
					$result = $this->db->update("pages_meta",$data);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '.lang('page_publish'), 'success');
				}
				else
				{
					Template::set_message(lang('page_failure_publish')." " . $this->pages_model->error, 'danger');
				}
			}
		}
		
		
		
		#post List
		if($this->uri->segment(5)!='trash'):
 		
 		$ListView =  $this->pages_model->select_join()->result();
		Template::set('listView' , $ListView);
		endif;
		
		#Trash List
		if($this->uri->segment(5) == 'trash'):
		$ListView = $this->pages_model->select_join_trash()->result();
	    Template::set('listView' , $ListView);
		endif;

		Template::set('toolbar_title',"Halaman");
		Template::set_view('page/all_post');
        Template::render();
	}
	
	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_pages($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}
		
		$edit=$this->pages_model->find($id);
		
		#End Images Config
         #Images Library Config
		$this->load->helper('post/uploadut');
		$this->load->library('image_lib');
		#End Images Config

		// make sure we only pass in the fields we want
		$upload=TRUE;
		
		// make sure we only pass in the fields we want
		
		$data = array('judul' => $this->input->post('pages_judul'),
					  'isi' => $this->input->post('pages_isi'),
					    'author' => $this->input->post('pages_author'),
							 );

		 $config['upload_path'] = "./assets/page/files/";
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

	    $data['files'] = $attachment;
		


	}

	}
					 
		if($this->input->post('save')=='As Draft'){ $data['status_tampil'] = 1; }		
		if($this->input->post('save')=='Publish'){ $data['status_tampil'] = 0; }		

	 	if ($type == 'insert')
		{
			$data['created_on']  = date("Y-m-d H:i:s");
			
			
			$id = $this->pages_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
				
			   $Menu['url_posts']= $return;
			   $this->db->where(array('id' => $this->input->post('hideSetMenu')));
			   $this->db->update('meta_menu', $Menu);	
				
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$data['modified_on']  = date("Y-m-d H:i:s");	
			$return = $this->pages_model->update($id, $data);
			#Saving Post Menu
			$Menu['url_posts']= $id;
			$this->db->where(array('id' => $this->input->post('hideSetMenu')));
			$this->db->update('meta_menu', $Menu);
			
		}

		return $return;
			

	
		
	}
	
	
	public function create(){
		
		$this->auth->restrict('Pages.Content.Create'); 
			Assets::clear_cache();
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');
		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_pages())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('page_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'pages');

				Template::set_message(lang('page_create_success').$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'success');
				
				
				
				redirect(SITE_AREA .'/content/pages');
			}
			else
			{
				Template::set_message(lang('page_create_failure') . $this->pages_model->error.$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'danger');
			}
		}
	
 		Template::set_view('page/index');
        
		Template::set('toolbar_title',"Tambah Halaman");
		Template::render('custome_two_right_content');
 	
	
	}
	
	
	#Function Edit
	public function edit(){
		
		$this->auth->restrict('Pages.Content.Edit'); 
			Assets::clear_cache();
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('page_invalid_id'), 'danger');
			redirect(SITE_AREA .'/content/pages');
		}
		
		if (isset($_POST['save']))
		{
			$this->auth->restrict('Pages.Content.Edit');

			if ($this->save_pages('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('page_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'post');

				Template::set_message(lang('page_edit_success').$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'success');
			}
			else
			{
				Template::set_message(lang('page_edit_failure') . $this->pages_model->error.$this->session->userdata("upload_session_file").
				$this->session->userdata("upload_session_image"), 'danger');
			}
		}

		if($this->input->get("hapus")=="true"){

			$this->db->where("id",$id)->update("pages_meta",array("files"=>null));
			Template::set_message("File berhasil dihapus.","success");

		}
		
		$pages=$this->pages_model->find($id);
		Template::set('pages', $pages);
		Template::set('toolbar_title',"Edit Halaman");
		Template::set('path_file',$this->upload_config['upload_path_file']);
		Template::set('path_image',$this->upload_config['upload_path_image']);
		
 		Template::set_view('page/index');
		Template::render('custome_two_right_content');
 	}
	
	
	#Function Trash
	public function trash(){
		    $id = $this->uri->segment(5,0);
			$data ['status_tampil'] = 1;
			$this->db->where('id', $id);
			$obj = $this->db->update('pages_meta', $data);
			if($obj){
			    Template::set_message('Pages ini Berhasil dimasukkan ke trash', 'success');
				redirect(SITE_AREA .'/page/pages');
			}
 		    
	}
    #Function retrash
	public function retrash(){
		    $id = $this->uri->segment(5,0);
			$data ['status_tampil'] = 0;
			$this->db->where('id', $id);
			$obj = $this->db->update('pages_meta', $data);
			if($obj){
			    Template::set_message('Pages ini Berhasil di Publish', 'success');
				redirect(SITE_AREA .'/page/pages');
			}
 		    
	}
	
	
	public function deletechecked(){
				 $this->auth->restrict('Pages.Content.Delete'); 
				 
				 if($this->input->post('checked')):
				   for($i=0; $i < count($this->input->post('checked')); $i++):
					  $fie="". implode(",", $this->input->post('checked'))."";
				   endfor;
 				   $fi = rtrim($fie,"\,"); 
   				    
 				   //Delete From Tabel A
 				   $this->db->where('id in ('.$fi.')');
			       $return = $this->db->delete('pages_meta');
				   
				   Template::set_message('Pages Berhasil Dihapus', 'success');
		           redirect(SITE_AREA .'/page/pages');
     			 endif;	
				 
				 return $return;
	} 
	
	
	#Using Dialog Get Object SET Pages
	public function set_pages_get(){
	     $data['ListView'] = $this->db->from('pages_meta')->where('status_tampil',0)->get()->result();
	     $this->load->view('dialogs/set_pages', $data);
		 //die();
	}
	
	#hapus image
	function hapusimage($id){
		$edit = $this->db->from('pages_meta')->where('id', $id)->get()->row();
		$config['upload_path'] = $this->upload_config['upload_path_image'];
		
		$data = array("image_data"=>"");
		$this->db->where("id",$id);
		$this->db->update("pages_meta", $data);
		
		@unlink($config['upload_path'].$edit->image_data); 
		#Delete Semua Thumb Terpaut
			 	  $linksArray=explode('.', $edit->image_data);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];	
					}
	    @unlink($config['upload_path'].$the); 
		Template::set_message("Gambar berhasil dihapus", 'success');
		redirect(SITE_AREA .'/content/pages/edit/'.$id);
		
	}
	#hapus file
	function hapusfile($id){
	
		$edit = $this->db->from('pages_meta')->where('id', $id)->get()->row();
		$config['upload_path'] = $this->upload_config['upload_path_file'];
		$data = array("file_data"=>"");
		$this->db->where("id",$id);
		$this->db->update("pages_meta", $data);
		@unlink($config['upload_path'].$edit->file_data); 
		Template::set_message("File berhasil dihapus", 'success');
		redirect(SITE_AREA .'/content/pages/edit/'.$id);
		
		
	}

}
?>