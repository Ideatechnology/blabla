<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Testimoni extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
 		$this->load->library('form_validation');
  		$this->load->helper('text');
		  #-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
		$this->load->library('users/auth');
		$this->set_current_user();
		
		//set bahasa
		if($this->session->userdata("site_lang")){
			$this->lang->load("testimoni",$this->session->userdata("site_lang"));
		}else{
			$this->lang->load("testimoni","indonesia");
		}
		
 	}
	
	
	public function index($offset = 0) 
	{
 	   $t = $this->input;
	   // Captcha parameters:
		$captchaConfig = array(
		  'CaptchaId' => 'SampleCaptcha', // a unique Id for the Captcha instance
		  'UserInputId' => 'CaptchaCode' // Id of the Captcha code input textbox
		);
		// load the BotDetect Captcha library
		$this->load->library('BotDetect/BotDetectCaptcha', $captchaConfig);
	
		// make Captcha Html accessible to View code
		$data['captchaHtml'] = $this->botdetectcaptcha->Html();
	
		// initially, the message shown to the visitor is empty
		$data['captchaValidationMessage'] = '';
		
		
		$this->form_validation->set_rules('pengirim', 'lang:guesbook_name', 'required');
		$this->form_validation->set_rules('komen', 'lang:guesbook_form_komentar', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('CaptchaCode', 'lang:guesbook_code', 'required');
 		
		if (isset($_POST["button"])) {
		  // run form validation when the form is submitted
		  if ($this->form_validation->run() == true) {
		  // validate the user-entered Captcha code when the form is submitted
		  $code = $this->input->post('CaptchaCode');
 		  $isHuman = $this->botdetectcaptcha->Validate($code);
	
		   if ($isHuman) {
			        
					// Captcha validation passed
			       $data['captchaValidationMessage'] = lang('guesbook_messagecapca');
				    
					/*$ipcek = $this->db->select('count(*) as jml')
									 ->from('testimonial')
									 ->get()->row();
					*/				 
				   	$array = array('pengirim'=> $this->db->escape_str($t->post('pengirim')),
							  'komentar'=> $this->db->escape_str($t->post('komen')) ,
							  'email'=> $this->db->escape_str($t->post('email')),
							  'tgl_kirim' => date("Y-m-d H:i:s"),
							  'status_approve'=>0,
							  'ipaddr' => $_SERVER['REMOTE_ADDR']);
						$this->db->insert('testimonial', $array);
						$this->botdetectcaptcha->Reset();
						
						#bagian pengiriman email	
						$this->load->library('emailer/emailer');
						$this->emailer->enable_debug(TRUE);
						
					   #query untuk mendapatkan email admin dan developer
					   $this->load->model('users/user_model', null, true);   
					  $meta_info= $this->user_model->find_user_and_meta_role(10);
					   $email_to = $meta_info->email;
					   $pesan="<h4>Pengirim : ".$this->db->escape_str($t->post('pengirim'))."</h4>
					   <h4>Pertanyaan : </h4>
					   <p>".$this->db->escape_str($t->post('komen'))."<p>";
					   $dataemail = array(
							  'to'		=> $email_to,
							  'subject'	=> "Pertanyaan dari : ".$this->db->escape_str($t->post('pengirim')),
							  'message'	=> $pesan
					    );

						$success = $this->emailer->send($dataemail, FALSE);
						
						#akhir bagian pengiriman email	
						
						Template::set_message(lang('guesbook_sendsukses'), 'success');
			 			redirect('contact');
						
				
				   
				   } else {
					// Captcha validation failed, return an error message
					 Template::set_message(lang('guesbook_capthcaerror'), 'danger');
					
				  }
		  
		  } else {
        		// the form validation failed, don't send email
				Template::set_message(validation_errors(), 'danger');
            }
		}
	   Template::set('captchaHtml',$data['captchaHtml']);
	   
	 
	   $this->load->library('pagination');
	   $config['base_url'] = site_url('testimoni/index');
       $config['total_rows'] = $this->db->from('testimonial')
	   									->where(array('status_approve'=>1))
										->get()
										->num_rows();
       
	   $config['per_page'] = 10;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
 		$config['cur_tag_open'] = '<li class="active">';
		$config['cur_tag_close'] = '</li>';
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = 'First';
		
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
	    
	   
       $this->pagination->initialize($config);
	   
       $gs = $this->db->from('testimonial')
	   				  ->where(array('status_approve'=>1))
					  ->limit($config["per_page"], $offset)
					  ->order_by("tgl_kirim","desc")
					  ->get()
					  ->result();
					  
       $links = $this->pagination->create_links();
	  
	  Template::set("page_title",lang('bf_contact'));
	  
	   Template::set('gs', $gs);
	   Template::set('jumlah',$config['total_rows']);
	   Template::set('links', $links);
	   Template::set_block('sidebar', 'pages/sidebar');
	   Template::render("page");
 	}
	
	function detail($id,$offset=0){
		
	    $this->load->library('pagination');
	   $config['base_url'] = site_url('testimoni/detail/'.$id."/");
       $config['total_rows'] = $this->db->from('guestbook')
	   									->where(array('status_approve'=>1,"jawaban !="=>"","id !="=>$id))
										->get()
										->num_rows();
       $config['per_page'] = 10;
	   $config['full_tag_open']  = '<ul>';
	   $config['full_tag_close']  = '</ul>';
	   $config['next_link']  = '<li class="next">Next &raquo;</li>';
	   $config['prev_link']   = '<li class="previous">Prev</li>';
	   $config['cur_tag_open']  = '<li class="active">';
       $config['cur_tag_close']  = '</li>';
	 
		$config['num_tag_close']  = '</li>';
	    
	   
       $this->pagination->initialize($config);
	 
       $gs = $this->db->from('guestbook')
	   				  ->where(array('status_approve'=>1,"jawaban !="=>"","id !="=>$id))
					  ->limit($config["per_page"], $offset)
					  ->get()
					  ->result();
					  
       $links = $this->pagination->create_links();
	  
	   Template::set('gs', $gs);
	   Template::set('jumlah',$config['total_rows']);
	   Template::set('links', $links);
	   
	   $rows = $this->db->from('guestbook')
	   				  ->where("id",$id)
					  ->get()
					  ->row();
	   
	   Template::set('rows', $rows);
	   
	   Template::render();
		
	}
	
	 
}
?>