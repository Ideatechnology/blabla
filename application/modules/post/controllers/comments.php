<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Comments extends Front_Controller{ 
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
      }
	
	public function index(){
		
 		$this->load->library('form_validation');
		
		$t = $this->input;
		$extract = explode('/',  urldecode($t->post('uri_string')));
		
		
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
  
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('message', 'message', 'required');
  		$post_id = (int) $this->uri->segment(2,0);

		  if (isset($_POST["send"])) {
		  // run form validation when the form is submitted
		  if ($this->form_validation->run() == true) {
		  // validate the user-entered Captcha code when the form is submitted
		  $code = $this->input->post('CaptchaCode');
 		  $isHuman = $this->botdetectcaptcha->Validate($code);
	
		   if ($isHuman) {
			
					// Captcha validation passed
			       $data['captchaValidationMessage'] = 'CAPTCHA validation passed, human  visitor confirmed!';
 			    
			 		$array = array('identitas'=> $this->db->escape_str($t->post('name')),
						  'komentar'=> $this->db->escape_str($t->post('message')),
						  'email'=>$this->db->escape_str($t->post('email')),
						  'tgl_komentar' => date("Y-m-d H:i:s"),
						  'kolom_posts' => $post_id,
						  'id_users'=>0 
						  );
					$this->db->insert('comments', $array);
					$this->botdetectcaptcha->Reset();
					Template::set_message('Komentar berhasil dikirim', 'success');
					redirect(urldecode($t->post('uri_string')));
				    
			 
				  } else {
					// Captcha validation failed, return an error message
					Template::set_message('CAPTCHA validation failed, please try again', 'danger');
		
				  }
		  
		  } else {
        		// the form validation failed, don't send email
				Template::set_message(validation_errors(), 'danger');
            }
		}
 	    


		
		$data['komentar'] = $this->db->from('comments')
									 ->where('kolom_posts', $post_id)
									 ->where('approve', "Y")
									 ->order_by('id','asc')
									 ->get()
									 ->result();
		
		if ($this->agent->is_mobile()){
		
		$this->load->view('comments/mobile_index', $data);

		
		}else{
		
				$this->load->view('comments/index', $data);
		
		}
		 
 	}
	
	 
}
?>