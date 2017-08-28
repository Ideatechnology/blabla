<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		
 		#load js dan css
        Assets::clear_cache();
	
	#load lang
        $this->lang->load("testimoni");

        #load model
        $this->load->model("testimoni_model",NULL,TRUE);
   		$this->load->helper("text");
        #template load
		Assets::clear_cache();
			#load js dan css
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Assets::add_css('jquery-ui-timepicker.css');
      Assets::add_module_js('testimoni', 'js/testimoni.js');
		Template::set_block('sidebar', 'plugin/sidebar');
        Template::set_block('sub_nav', 'plugin/_sub_nav');


 	}
	
	
	public function index() 
	{
	  Template::set('toolbar_title',"Kontak Terbaru");
 	   $this->auth->restrict('Testimoni.Plugin.View');

       // Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					
					Template::set_message(count($checked) .' berhasil di delete', 'success');
						redirect(SITE_AREA .'/plugin/testimoni');
				}
				else
				{
					Template::set_message('gagal di delete'. $this->testimoni_model->error, 'error');
				}
			
		}   

        #untuk approve

        if (isset($_POST['approve'])){
		
                $this->auth->restrict('Testimoni.Plugin.Approve');
		    	
                $checked = $this->input->post('checked');
			
				if (is_array($checked) && count($checked)){
				$result = FALSE;
				foreach ($checked as $pid)
				{
					
					$result = $this->testimoni_model->Approve($pid);
					
				}
				

			    }
			
			if ($result){
				
					Template::set_message(count($checked) .' berhasil di approve', 'success');
							redirect(SITE_AREA .'/plugin/testimoni');
			}else{

					Template::set_message('gagal di approve', 'error');
			}
		
 		   
	   }
       
	   
	   		$this->load->library('pagination');
		$offset = abs((int) $this->input->get('per_page'));
		$limit = 5;
		$this->db->like('tgl_kirim',$this->input->get('tanggal'),"after");
		$this->db->like('komentar',$this->input->get('keyword'),"after");
	    $total  = $this->testimoni_model->getNewsCount();
		Template::set("total",$total);
	
		$this->pager['base_url'] 			= site_url().'/'.SITE_AREA.'/plugin/testimoni?tanggal='.$this->input->get('tanggal').'&keyword='.$this->input->get('keyword');
		
        $this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$this->pager['full_tag_close'] = '</ul></div>';
		

        $this->pagination->initialize($this->pager);
	   
	   #Komentar Baru
	   $this->db->like('tgl_kirim',$this->input->get('tanggal'),"after");
		$this->db->like('komentar',$this->input->get('keyword'),"after");
	   $app = $this->testimoni_model->getNews($limit ,$offset);

	   
	   
	   Template::set('unapprove', $app);
	   
	   Template::render();
 	}

     /**
	 * Summary
	 *
	 * @param String $type Either Delete
	 * 
	 *
	 * 
	 */
     function approve(){
	Template::set('toolbar_title',"Kontak Yang Sudah di Approve");
         // Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di hapus', 'success');
					
				}
				else
				{
					Template::set_message('gagal di hapus' . $this->testimoni_model->error, 'error');
				}
			
		}   

        #untuk unapprove

        if (isset($_POST['unapprove'])){
		
                $this->auth->restrict('Testimoni.Plugin.Approve');
		    	
                $checked = $this->input->post('checked');
			
				if (is_array($checked) && count($checked)){
				$result = FALSE;
				foreach ($checked as $pid)
				{
					
					$result = $this->testimoni_model->Unapprove($pid);
					
				}
				

			    }
			
			if ($result){

					Template::set_message(count($checked) .' telah di unapprove', 'success');
					
			}else{

					Template::set_message("gagal di unapprove", 'error');
			}
		
 		   
	   }
		
		   		$this->load->library('pagination');
		$offset = abs((int) $this->input->get('per_page'));
		$limit = 5;
		$this->db->like('tgl_kirim',$this->input->get('tanggal'),"after");
		$this->db->like('komentar',$this->input->get('keyword'),"after");
	    $totalapprove  = $this->testimoni_model->getApproveCount();
		Template::set("totalapprove",$totalapprove);
	
		$this->pager['base_url'] 			= site_url().'/'.SITE_AREA.'/plugin/testimoni/approve?tanggal='.$this->input->get('tanggal').'&keyword='.$this->input->get('keyword');
		
        $this->pager['total_rows'] 			= $totalapprove;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$this->pager['full_tag_close'] = '</ul></div>';
		

        $this->pagination->initialize($this->pager);
		
         #Komentar Approve
		  $this->db->like('tgl_kirim',$this->input->get('tanggal'),"after");
		$this->db->like('komentar',$this->input->get('keyword'),"after");
	   $app = $this->testimoni_model->getApprove($limit ,$offset);
	     Template::set('approve', $app);

         Template::render();

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
					
					$result = $this->testimoni_model->delete($pid);
					
				}
				
				return $result;

			}
			
	}
	
	
	public function isiJawab(){
	
			$id = $this->input->post("id");
	
			$data ['jawaban'] =$this->input->post("jawab");
			$obj = $this->testimoni_model->update_custome($id, $data);
			if($obj){
						
			#bagian pengiriman email	
			$this->load->library('emailer/emailer');
			$this->emailer->enable_debug(TRUE);
			
		   $email_to = $this->input->post("email");
		   
		   $pesan ="
		   <p>".lang("testimoni_form_pengirim")." : <strong>".$this->db->escape_str($this->input->post('pengirim'))."</strong></p>
		   <h4>".lang("testimoni_form_komentar")." : </h4>
		   <p>".$this->input->post("jawab")."</p>
		   <p>".lang("testimoni_form_from")." : <strong>".$this->db->escape_str($this->input->post('penjawab'))."</strong></p>
		   <h4>".lang("testimoni_judul_jawab")." : </h4>
		   <p>".$this->input->post("pertanyaan")."</p>
		   ";
		   
		   $dataemail = array(
				  'to'		=> $email_to,
				  'subject'	=> $this->db->escape_str($this->input->post('pengirim')),
				  'message'	=> $pesan
			);

			$success = $this->emailer->send($dataemail, FALSE);
			
			#akhir bagian pengiriman email	
						
			    Template::set_message("berhasil dijawab", 'success');
				redirect(SITE_AREA .'/plugin/testimoni/approve');
			}
	
	}
	
	public function jawab($id){
	
       #query untuk get id testimoni
       $forum = $this->testimoni_model->find($id);
	   Template::set('forum', $forum);
	    
       #load template
	   Template::set_view('plugin/jawab'); 
	   Template::render();
 	
	
	}

}
?>