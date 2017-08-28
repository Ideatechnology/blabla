<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * tanyajawab controller
 */
class tanyajawab extends Front_Controller
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

		$this->load->library('form_validation');
		$this->load->model('tanyajawab_model', null, true);
		$this->lang->load('tanyajawab');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');

				$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();


		$this->load->library("settings/settings_lib");

		Assets::add_module_js('tanyajawab', 'tanyajawab.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$this->tanyajawab_model->where("published",1);
		$total = $this->tanyajawab_model->count_all();

		$offset = $this->input->get("per_page")?$this->input->get("per_page"):0;
		$limit = 20;

		$this->load->library('pagination');
		
		$pager['base_url'] 			= current_url() .'?';

		$pager['total_rows'] 			= $total;
		$pager['per_page'] 			= $limit;
		$pager['page_query_string']	= TRUE;
		$pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$pager['full_tag_close'] = '</ul></div>';
		$pager['next_link']  = 'Next';
		$pager['next_tag_open'] = '<li class="next">';
		$pager['next_tag_close'] = '</li>';
		$pager['prev_tag_open'] = '<li class="previoust">';
		$pager['prev_tag_close'] = '</li>';
	    $pager['prev_link']   = 'Prev';
	    $pager['cur_tag_open']  = '<li class="active"><a href="#">';
        $pager['cur_tag_close']  = '</a></li>';
	    $pager['num_tag_open']  = '<li>';
	    $pager['num_tag_close']  = '</li>';
		$pager['last_link'] = 'Last';
	    $pager['last_tag_open'] = '<li>';
		$pager['last_tag_close'] = '</li>';
		$pager['first_link'] = 'First';
		$pager['first_tag_open'] = '<li>';
		$pager['first_tag_close'] = '</li>';

        $this->pagination->initialize($pager);

		$this->tanyajawab_model->order_by("id","desc");
		$this->tanyajawab_model->where("published",1);
		$this->tanyajawab_model->limit($limit,$offset);
		$records = $this->tanyajawab_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	public function form(){


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
		
		
		$this->form_validation->set_rules('tanyajawab_nama_lengkap','Nama Lengkap','required|max_length[40]');
		$this->form_validation->set_rules('tanyajawab_email','Email','required|max_length[60]');
		$this->form_validation->set_rules('tanyajawab_alamat','Alamat','required|max_length[50]');
		$this->form_validation->set_rules('tanyajawab_link','Link','max_length[150]');
		$this->form_validation->set_rules('tanyajawab_pertanyaan','Pertanyaan','required');
		$this->form_validation->set_rules('tanyajawab_subjek','Subjek','max_length[50]');
		
 		
		if (isset($_POST["save"])) {
		  // run form validation when the form is submitted
		  if ($this->form_validation->run() == true) {
		  // validate the user-entered Captcha code when the form is submitted
		  $code = $this->input->post('CaptchaCode');
 		  $isHuman = $this->botdetectcaptcha->Validate($code);
	
		   if ($isHuman) {
			        
					// Captcha validation passed
			       $data['captchaValidationMessage'] = 'CAPTCHA validation passed, human  visitor confirmed';
				    
					

						$array = array(
							  'gbname'=> $this->db->escape_str($t->post('tanyajawab_nama_lengkap')),
							  'gbtext'=> $this->db->escape_str($t->post('tanyajawab_pertanyaan')) ,
							  'gbmail'=> $this->db->escape_str($t->post('tanyajawab_email')),
							  'gbdate' => date("Y-m-d H:i:s"),
							  'gbmailshow'=>0,
							  'gbvote'=>0,
							  'gbip' => $_SERVER['REMOTE_ADDR'],
							  'gbtitle'=> $this->db->escape_str($t->post('tanyajawab_subjek')),
							  'gbloca'=> $this->db->escape_str($t->post('tanyajawab_alamat')),
							  'published'=> 0,
							  );

						$this->db->insert('easybook', $array);

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
						
						Template::set_message("Thank you, your comment will be displayed if the policy does not violate applicable and when it is our responsibility", 'success');
			 			redirect('tanyajawab');
						
					
				   
				   } else {
					// Captcha validation failed, return an error message
					 Template::set_message('CAPTCHA validation failed, please try again.', 'danger');
					
				  }
		  
		  } else {
        		// the form validation failed, don't send email
				Template::set_message(validation_errors(), 'danger');
            }
		}

	   Template::set('captchaHtml',$data['captchaHtml']);
	   


		Template::render();


	}

	public function detail($id){

		$detail = $this->tanyajawab_model->find($id);
		Template::set("detail",$detail);

		Template::render();

	}
	
	//--------------------------------------------------------------------



}