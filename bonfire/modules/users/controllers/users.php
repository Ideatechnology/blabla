<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2013, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Users Controller
 *
 * Provides front-end functions for users, like login and logout.
 *
 * @package    Bonfire
 * @subpackage Modules_Users
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://cibonfire.com
 *
 */
class Users extends Front_Controller
{

	//--------------------------------------------------------------------

	/**
	 * Setup the required libraries etc
	 *
	 * @retun void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->model('users/user_model');

		$this->load->library('users/auth');
		$this->load->helper('menuthemes/slug_menu'); 
	
		
					#load bahasa
        if ($this->session->userdata('site_lang')) {
    		$this->lang->load('users',$this->session->userdata('site_lang'));
	    } else {
            $this->lang->load('users','indonesia');
        }
		
			$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		
		Assets::clear_cache();
		#load js dan css
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Assets::add_css('jquery-ui-timepicker.css');
		
		Assets::add_module_js('users', 'js/users.js');
		

	}//end __construct()

	//--------------------------------------------------------------------

	/**
	 * Presents the login function and allows the user to actually login.
	 *
	 * @access public
	 *
	 * @return void
	 */


	public function getkabkot(){
			
			$id = $this->uri->segment(3);
		
			$query=$this->db->query("select * from bf_kota where id_provinsi='".$id."'")->result();
			if($query):
				foreach($query as $row_query):
				
				echo "<option value='".$row_query->id_kota."'>".$row_query->nama_kota."</option>";
			
				endforeach;
				else:
				
				echo "data tidak ditemukan";
			
			endif;
			
	}

	public function login()
	{
		// if the user is not logged in continue to show the login page
		if ($this->auth->is_logged_in() === FALSE)
		{
			if (isset($_POST['log-me-in']))
			{
				$remember = $this->input->post('remember_me') == '1' ? TRUE : FALSE;

				// Try to login
				if ($this->auth->login($this->input->post('login'), $this->input->post('password'), $remember) === TRUE)
				{

					// Log the Activity
					log_activity($this->auth->user_id(), lang('us_log_logged') . ': ' . $this->input->ip_address(), 'users');

					// Now redirect.  (If this ever changes to render something,
					// note that auth->login() currently doesn't attempt to fix
					// `$this->current_user` for the current page load).

					/*
						In many cases, we will have set a destination for a
						particular user-role to redirect to. This is helpful for
						cases where we are presenting different information to different
						roles that might cause the base destination to be not available.
					*/
					if ($this->settings_lib->item('auth.do_login_redirect') && !empty ($this->auth->login_destination))
					{
						Template::redirect($this->auth->login_destination);
					}
					else
					{
						if (!empty($this->requested_page))
						{
							Template::redirect($this->requested_page);
						}
						else
						{
							Template::redirect('/');
						}
					}
				}//end if
			}//end if

			Template::set_view('users/users/login');
			Template::set('page_title', 'Login');
			Template::render("login");
		}
		else
		{

			Template::redirect($this->auth->login_destination);
		}//end if

	}//end login()

	//--------------------------------------------------------------------

	/**
	 * Calls the auth->logout method to destroy the session and cleanup,
	 * then redirects to the home page.
	 *
	 * @access public
	 *
	 * @return void
	 */
	public function logout()
	{
		if (isset($this->current_user->id))
		{
			// Login session is valid.  Log the Activity
			log_activity($this->current_user->id, lang('us_log_logged_out') . ': ' . $this->input->ip_address(), 'users');
		}

		// Always clear browser data (don't silently ignore user requests :).
		$this->auth->logout();

		redirect('/');

	}//end  logout()

	//--------------------------------------------------------------------

	/**
	 * Allows a user to start the process of resetting their password.
	 * An email is allowed with a special temporary link that is only valid
	 * for 24 hours. This link takes them to reset_password().
	 *
	 * @access public
	 *
	 * @return void
	 */
	public function forgot_password()
	{

		// if the user is not logged in continue to show the login page
		if ($this->auth->is_logged_in() === FALSE)
		{
			if (isset($_POST['send']))
			{
				$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email');

				if ($this->form_validation->run() !== FALSE)
				{
					// We validated. Does the user actually exist?
					$user = $this->user_model->find_by('email', $_POST['email']);

					if ($user !== FALSE)
					{
						// User exists, so create a temp password.
						$this->load->helpers(array('string', 'security'));

						$pass_code = random_string('alnum', 40);

						$hash = do_hash($pass_code . $_POST['email']);

						// Save the hash to the db so we can confirm it later.
						$this->user_model->update_where('email', $_POST['email'], array('reset_hash' => $hash, 'reset_by' => strtotime("+24 hours") ));

						// Create the link to reset the password
						$pass_link = site_url('reset_password/'. str_replace('@', ':', $_POST['email']) .'/'. $hash);

						// Now send the email
						$this->load->library('emailer/emailer');

						$data = array(
									'to'	=> $_POST['email'],
									'subject'	=> lang('us_reset_pass_subject'),
									'message'	=> $this->load->view('_emails/forgot_password', array('link' => $pass_link), TRUE)
							 );

						if ($this->emailer->send($data))
						{
							Template::set_message(lang('us_reset_pass_message'), 'success');
						}
						else
						{
							Template::set_message(lang('us_reset_pass_error'). $this->emailer->error, 'danger');
						}
					}
					else
					{
						Template::set_message(lang('us_invalid_email'), 'danger');
					}//end if
				}//end if
			}//end if

			Template::set_view('users/users/forgot_password');
			Template::set('page_title', 'Password Reset');
			Template::render("page");
		}
		else
		{

			Template::redirect('/');
		}//end if

	}//end forgot_password()

	//--------------------------------------------------------------------

	/**
	 * Allows a user to edit their own profile information.
	 *
	 * @access public
	 *
	 * @return void
	 */
	public function profile()
	{
		// Make sure we're logged in.
		$this->auth->restrict();
		$this->set_current_user();

		$this->load->helper('date');

		$this->load->config('address');
		$this->load->helper('address');

		$this->load->config('user_meta');
		$meta_fields = config_item('user_meta_fields');

		Template::set('meta_fields', $meta_fields);

		if (isset($_POST['save']))
		{

			$user_id = $this->current_user->id;
			if ($this->save_user($user_id, $meta_fields))
			{
				
				if($this->auth->role_id()==7): 
				//untuk penyimpanan hanya ssitem affaliate to
				$this->db->query("update bf_users set no_rekening='".$this->input->post("rekening")."',bank='".$this->input->post("bank")."',
				nama_pemilik_bank='".$this->input->post("nama_pemilik_bank")."' where id='".$user_id."' ");
				endif; 
				
				$meta_data = array();
				foreach ($meta_fields as $field)
				{
					if ((!isset($field['admin_only']) || $field['admin_only'] === FALSE
						|| (isset($field['admin_only']) && $field['admin_only'] === TRUE
							&& isset($this->current_user) && $this->current_user->role_id == 1))
						&& (!isset($field['frontend']) || $field['frontend'] === TRUE))
					{
						$meta_data[$field['name']] = $this->input->post($field['name']);
					}
				}

				// now add the meta is there is meta data
				$this->user_model->save_meta_for($user_id, $meta_data);

				// Log the Activity

				$user = $this->user_model->find($user_id);
				$log_name = (isset($user->display_name) && !empty($user->display_name)) ? $user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $user->username : $user->email);
				log_activity($this->current_user->id, lang('us_log_edit_profile') . ': ' . $log_name, 'users');

				Template::set_message(lang('us_profile_updated_success'), 'success');

				// redirect to make sure any language changes are picked up
				Template::redirect('/users/profile');
			}
			else
			{
				Template::set_message(lang('us_profile_updated_error'), 'error');
			}//end if
		}//end if

		// get the current user information
		$user = $this->user_model->find_user_and_meta($this->current_user->id);
		$user2 = $this->user_model->find($this->current_user->id);

        $settings = $this->settings_lib->find_all();
        if ($settings['auth.password_show_labels'] == 1) {
            Assets::add_module_js('users','password_strength.js');
            Assets::add_module_js('users','jquery.strength.js');
            Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
        }
        // Generate password hint messages.
		$this->user_model->password_hints();
		Template::set('user2', $user2);	
		Template::set('user', $user);
		Template::set('languages', unserialize($this->settings_lib->item('site.languages')));
			Template::set('page_title', 'Profile User');
		Template::set_view('users/users/profile');
		Template::set_block('sidebar', 'produk/sidebarcustomer');
		Template::render();	

	}//end profile()

	//--------------------------------------------------------------------

	/**
	 * Allows the user to create a new password for their account. At the moment,
	 * the only way to get here is to go through the forgot_password() process,
	 * which creates a unique code that is only valid for 24 hours.
	 *
	 * Since 0.7 this method is also gotten to here by the force_password_reset
	 * security features.
	 *
	 * @access public
	 *
	 * @param string $email The email address to check against.
	 * @param string $code  A randomly generated alphanumeric code. (Generated by forgot_password() ).
	 *
	 * @return void
	 */
	public function reset_password($email='', $code='')
	{
		// if the user is not logged in continue to show the login page
		if ($this->auth->is_logged_in() === FALSE)
		{
			// If we're set here via Bonfire and not an email link
			// then we might have the email and code in the session.
			if (empty($code) && $this->session->userdata('pass_check'))
			{
				$code = $this->session->userdata('pass_check');
			}

			if (empty($email) && $this->session->userdata('email'))
			{
				$email = $this->session->userdata('email');
			}

			// If there is no code, then it's not a valid request.
			if (empty($code) || empty($email))
			{
				Template::set_message(lang('us_reset_invalid_email'), 'danger');
				Template::redirect('/login');
			}

			// Handle the form
			if (isset($_POST['set_password']))
			{
				$this->form_validation->set_rules('password', 'lang:bf_password', 'required|max_length[120]|valid_password');
				$this->form_validation->set_rules('pass_confirm', 'lang:bf_password_confirm', 'required|matches[password]');

				if ($this->form_validation->run() !== FALSE)
				{
					// The user model will create the password hash for us.
					$data = array('password' => $this->input->post('password'),
					              'reset_by'	=> 0,
					              'reset_hash'	=> '',
					              'force_password_reset' => 0);

					if ($this->user_model->update($this->input->post('user_id'), $data))
					{
						// Log the Activity
						log_activity($this->input->post('user_id'), lang('us_log_reset') , 'users');

						Template::set_message(lang('us_reset_password_success'), 'success');
						Template::redirect('/login');
					}
					else
					{
						Template::set_message(sprintf(lang('us_reset_password_error'), $this->user_model->error), 'danger');

					}
				}
			}//end if

			// Check the code against the database
			$email = str_replace(':', '@', $email);
			$user = $this->user_model->find_by(array(
                                        'email' => $email,
										'reset_hash' => $code,
										'reset_by >=' => time()
                                   ));

			// It will be an Object if a single result was returned.
			if (!is_object($user))
			{
				Template::set_message( lang('us_reset_invalid_email'), 'danger');
				Template::redirect('/login');
			}

            $settings = $this->settings_lib->find_all();
            if ($settings['auth.password_show_labels'] == 1) {
                Assets::add_module_js('users','password_strength.js');
                Assets::add_module_js('users','jquery.strength.js');
                Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
            }
            // If we're here, then it is a valid request....
			Template::set('user', $user);

			Template::set_view('users/users/reset_password');
			Template::render("page");
		}
		else
		{

			Template::redirect('/');
		}//end if

	}//end reset_password()

	//--------------------------------------------------------------------

	/**
	 * Display the registration form for the user and manage the registration process
	 *
	 * @access public
	 *
	 * @return void
	 */
	public function register()
	{
		// Are users even allowed to register?
		if (!$this->settings_lib->item('auth.allow_register'))
		{
			Template::set_message(lang('us_register_disabled'), 'danger');
			Template::redirect('/');
		}

		$this->load->model('roles/role_model');
		$this->load->helper('date');

		$this->load->config('address');
		$this->load->helper('address');

		$this->load->config('user_meta');
		$meta_fields = config_item('user_meta_fields');
		Template::set('meta_fields', $meta_fields);
		
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
		Template::set('captchaHtml',$data['captchaHtml']);
		

		if (isset($_POST['register']))
		{
			// Validate input
			$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email|max_length[120]|unique[users.email]');

			$username_required = '';
			if ($this->settings_lib->item('auth.login_type') == 'username' ||
			    $this->settings_lib->item('auth.use_usernames'))
			{
				$username_required = 'required|';
			}
			$this->form_validation->set_rules('username', 'lang:bf_username', $username_required . 'trim|max_length[30]|unique[users.username]');
			$this->form_validation->set_rules('kota', 'lang:bf_kota','required');
			$this->form_validation->set_rules('provinsi', 'lang:bf_provinsi','required');

			$this->form_validation->set_rules('password', 'lang:bf_password', 'required|max_length[120]|valid_password');
			$this->form_validation->set_rules('pass_confirm', 'lang:bf_password_confirm', 'required|matches[password]');

			$this->form_validation->set_rules('language', 'lang:bf_language', 'required|trim');
			$this->form_validation->set_rules('timezones', 'lang:bf_timezone', 'required|trim|max_length[4]');
			$this->form_validation->set_rules('display_name', 'lang:bf_display_name', 'trim|max_length[255]');


			$meta_data = array();
			foreach ($meta_fields as $field)
			{
				if ((!isset($field['admin_only']) || $field['admin_only'] === FALSE
					|| (isset($field['admin_only']) && $field['admin_only'] === TRUE
						&& isset($this->current_user) && $this->current_user->role_id == 1))
					&& (!isset($field['frontend']) || $field['frontend'] === TRUE))
				{
					$this->form_validation->set_rules($field['name'], $field['label'], $field['rules']);

					$meta_data[$field['name']] = $this->input->post($field['name']);
				}
			}

			if ($this->form_validation->run() !== FALSE)
			{
				// Time to save the user...
				$data = array(
						'email'			=> $this->input->post('email'),
						'password'		=> $this->input->post('password'),
						'language'		=> $this->input->post('language'),
						'timezone'		=> $this->input->post('timezones'),
						'kota'		=> $this->input->post('kota'),
						'provinsi'		=> $this->input->post('provinsi'),
						'display_name'	=> $this->input->post('display_name'),
					);

				//cek validasi chaptcha
				$code = $this->input->post('CaptchaCode');
				$isHuman = $this->botdetectcaptcha->Validate($code);

				if ($isHuman) {
					
				if (isset($_POST['username']))
				{
					$data['username'] = $this->input->post('username');
				}

				// User activation method
				$activation_method = $this->settings_lib->item('auth.user_activation_method');

				// No activation method
				if ($activation_method == 0)
				{
					// Activate the user automatically
					$data['active'] = 1;
				}

				if ($user_id = $this->user_model->insert($data))
				{
					// now add the meta is there is meta data
					$this->user_model->save_meta_for($user_id, $meta_data);

					/*
					 * USER ACTIVATIONS ENHANCEMENT
					 */

					// Prepare user messaging vars
					$subject = '';
					$email_mess = '';
					$message = lang('us_email_thank_you');
					$type = 'success';
					$site_title = $this->settings_lib->item('site.title');
					$error = false;

					switch ($activation_method)
					{
						case 0:
							// No activation required. Activate the user and send confirmation email
							$subject 		=  str_replace('[SITE_TITLE]',$this->settings_lib->item('site.title'),lang('us_account_reg_complete'));
							$email_mess 	= $this->load->view('_emails/activated', array('title'=>$site_title,'link' => site_url(),"username"=>$this->input->post('email'),"password"=>$this->input->post('password')), true);
							$message 		.= lang('us_account_active_login');
							break;
						case 1:
							// Email Activiation.
							// Create the link to activate membership
							// Run the account deactivate to assure everything is set correctly
							$activation_code = $this->user_model->deactivate($user_id);
							$activate_link   = site_url('activate/'. $user_id);
							$subject         =  lang('us_email_subj_activate');

							$email_message_data = array(
								'title' => $site_title,
								'code'  => $activation_code,
								'link'  => $activate_link
							);
							$email_mess = $this->load->view('_emails/activate', $email_message_data, true);
							$message   .= lang('us_check_activate_email');
							break;
						case 2:
							// Admin Activation
							// Clear hash but leave user inactive
							$subject    =  lang('us_email_subj_pending');
							$email_mess = $this->load->view('_emails/pending', array('title'=>$site_title), true);
							$message   .= lang('us_admin_approval_pending');
							break;
					}//end switch

					// Now send the email
					$this->load->library('emailer/emailer');
					$data = array(
						'to'		=> $_POST['email'],
						'subject'	=> $subject,
						'message'	=> $email_mess
					);

					if (!$this->emailer->send($data))
					{
						$message .= lang('us_err_no_email'). $this->emailer->error;
						$error    = true;
					}

					if ($error)
					{
						$type = 'danger';
					}
					else
					{
						$type = 'success';
					}

					Template::set_message($message, $type);

					// Log the Activity

					log_activity($user_id, lang('us_log_register'), 'users');
					Template::redirect('login');
					
					
					
				}
				else
				{
					Template::set_message(lang('us_registration_fail'), 'danger');
				
					redirect('/register');
					
					
				
				}//end if
				
				}else{
					
					// Captcha validation failed, return an error message
					 Template::set_message("CAPTCHA validation failed, please try again.", 'danger');
					
					}
				
			}//end if
		}//end if

        $settings = $this->settings_lib->find_all();
        if ($settings['auth.password_show_labels'] == 1) {
            Assets::add_module_js('users','password_strength.js');
            Assets::add_module_js('users','jquery.strength.js');
            Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
        }

        // Generate password hint messages.
		$this->user_model->password_hints();

		Template::set('languages', unserialize($this->settings_lib->item('site.languages')));

		Template::set_view('users/users/register');
		Template::set('page_title', 'Daftar');
		Template::render("login");

	}//end register()

	//--------------------------------------------------------------------
	
	
	/**
	 * Display the registration form for the user and manage the registration process
	 *
	 * @access public
	 *
	 * @return void
	 */
	public function affaliate()
	{
		// Are users even allowed to register?
		if (!$this->settings_lib->item('auth.allow_register'))
		{
			Template::set_message(lang('us_register_disabled'), 'error');
			Template::redirect('/');
		}
		
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
		Template::set('captchaHtml',$data['captchaHtml']);
		

		$this->load->model('roles/role_model');
		$this->load->helper('date');

		$this->load->config('address');
		$this->load->helper('address');

		$this->load->config('user_meta');
		$meta_fields = config_item('user_meta_fields');
		Template::set('meta_fields', $meta_fields);

		if (isset($_POST['register']))
		{
			// Validate input
			$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email|max_length[120]|unique[users.email]');

			$username_required = '';
			if ($this->settings_lib->item('auth.login_type') == 'username' ||
			    $this->settings_lib->item('auth.use_usernames'))
			{
				$username_required = 'required|';
			}
			$this->form_validation->set_rules('username', 'lang:bf_username', $username_required . 'trim|max_length[30]|unique[users.username]');
			$this->form_validation->set_rules('kota', 'lang:bf_kota','required');
			$this->form_validation->set_rules('rekening', 'No.Rekening','required');

			$this->form_validation->set_rules('password', 'lang:bf_password', 'required|max_length[120]|valid_password');
			$this->form_validation->set_rules('pass_confirm', 'lang:bf_password_confirm', 'required|matches[password]');

			$this->form_validation->set_rules('language', 'lang:bf_language', 'required|trim');
			$this->form_validation->set_rules('timezones', 'lang:bf_timezone', 'required|trim|max_length[4]');
			$this->form_validation->set_rules('display_name', 'lang:bf_display_name', 'trim|max_length[255]');
			
			//cek validasi chaptcha
				$code = $this->input->post('CaptchaCode');
				$isHuman = $this->botdetectcaptcha->Validate($code);

				if ($isHuman) { 


			$meta_data = array();
			foreach ($meta_fields as $field)
			{
				if ((!isset($field['admin_only']) || $field['admin_only'] === FALSE
					|| (isset($field['admin_only']) && $field['admin_only'] === TRUE
						&& isset($this->current_user) && $this->current_user->role_id == 1))
					&& (!isset($field['frontend']) || $field['frontend'] === TRUE))
				{
					$this->form_validation->set_rules($field['name'], $field['label'], $field['rules']);

					$meta_data[$field['name']] = $this->input->post($field['name']);
				}
			}

			if ($this->form_validation->run() !== FALSE)
			{
				// Time to save the user...
				$data = array(
						'email'			=> $this->input->post('email'),
						'password'		=> $this->input->post('password'),
						'language'		=> $this->input->post('language'),
						'timezone'		=> $this->input->post('timezones'),
						'kota'		=> $this->input->post('kota'),
						'provinsi'		=> $this->input->post('provinsi'),
						'no_rekening'		=> $this->input->post('rekening'),
						'nama_pemilik_bank'		=> $this->input->post('nama_pemilik_bank'),
						'bank'		=> $this->input->post('bank'),
						'display_name'	=> $this->input->post('display_name'),
					);

				if (isset($_POST['username']))
				{
					$data['username'] = $this->input->post('username');
				}

				// User activation method
				$activation_method = 1;

				// No activation method
				if ($activation_method == 0)
				{
					// Activate the user automatically
					$data['active'] = 1;
				}

				if ($user_id = $this->user_model->insertaff($data))
				{
					// now add the meta is there is meta data
					$this->user_model->save_meta_for($user_id, $meta_data);
					//insert default pendapatan affiliate
					$this->db->query("insert into bf_pendapatan_affiliate(id_affiliate,pendapatan)values('".$user_id."',0)");
					/*
					 * USER ACTIVATIONS ENHANCEMENT
					 */

					// Prepare user messaging vars
					$subject = '';
					$email_mess = '';
					$message = lang('us_email_thank_you');
					$type = 'success';
					$site_title = $this->settings_lib->item('site.title');
					$error = false;

					switch ($activation_method)
					{
						case 0:
							// No activation required. Activate the user and send confirmation email
							$subject 		=  str_replace('[SITE_TITLE]',$this->settings_lib->item('site.title'),lang('us_account_reg_complete'));
							$email_mess 	= $this->load->view('_emails/activated', array('title'=>$site_title,'link' => site_url(),"username"=>$this->input->post('email'),"password"=>$this->input->post('password')), true);
							$message 		.= lang('us_account_active_login');
							break;
						case 1:
							// Email Activiation.
							// Create the link to activate membership
							// Run the account deactivate to assure everything is set correctly
							$activation_code = $this->user_model->deactivate($user_id);
							$activate_link   = site_url('activate/'. $user_id);
							$subject         =  lang('us_email_subj_activate');

							$email_message_data = array(
								'title' => $site_title,
								'code'  => $activation_code,
								'link'  => $activate_link
							);
							$email_mess = $this->load->view('_emails/activate', $email_message_data, true);
							$message   .= lang('us_check_activate_email');
							break;
						case 2:
							// Admin Activation
							// Clear hash but leave user inactive
							$subject    =  lang('us_email_subj_pending');
							$email_mess = $this->load->view('_emails/pending', array('title'=>$site_title), true);
							$message   .= lang('us_admin_approval_pending');
							break;
					}//end switch

					// Now send the email
					$this->load->library('emailer/emailer');
					$data = array(
						'to'		=> $_POST['email'],
						'subject'	=> $subject,
						'message'	=> $email_mess
					);

					if (!$this->emailer->send($data))
					{
						$message .= lang('us_err_no_email'). $this->emailer->error;
						$error    = true;
					}

					if ($error)
					{
						$type = 'danger';
					}
					else
					{
						$type = 'success';
					}

					Template::set_message($message, $type);

					// Log the Activity

					log_activity($user_id, lang('us_log_register'), 'users');
					Template::redirect('login');
				}
				else
				{
					Template::set_message(lang('us_registration_fail'), 'danger');
				
					redirect('affiliates-program?action=daftar');
					
					
				
				}//end if
				
				
			}//end if
			}else{
					
					// Captcha validation failed, return an error message
					 Template::set_message("CAPTCHA validation failed, please try again.", 'danger');
					
					}
		}//end if

        $settings = $this->settings_lib->find_all();
        if ($settings['auth.password_show_labels'] == 1) {
            Assets::add_module_js('users','password_strength.js');
            Assets::add_module_js('users','jquery.strength.js');
            Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
        }

        // Generate password hint messages.
		$this->user_model->password_hints();

		Template::set('languages', unserialize($this->settings_lib->item('site.languages')));

		Template::set_view('users/users/affaliate');
		Template::set('page_title', 'Affiliates Program');
		Template::render("page");

	}
	//end register()

	//--------------------------------------------------------------------

	/**
	 * Save the user
	 *
	 * @access private
	 *
	 * @param int   $id          The id of the user in the case of an edit operation
	 * @param array $meta_fields Array of meta fields fur the user
	 *
	 * @return bool
	 */
	private function save_user($id=0, $meta_fields=array())
	{

		if ( $id == 0 )
		{
			$id = $this->current_user->id; /* ( $this->input->post('id') > 0 ) ? $this->input->post('id') :  */
		}

		$_POST['id'] = $id;

		// Simple check to make the posted id is equal to the current user's id, minor security check
		if ( $_POST['id'] != $this->current_user->id )
		{
			$this->form_validation->set_message('email', 'lang:us_invalid_userid');
			return FALSE;
		}

		// Setting the payload for Events system.
		$payload = array ( 'user_id' => $id, 'data' => $this->input->post() );


		$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email|max_length[120]|unique[users.email,users.id]');
		$this->form_validation->set_rules('password', 'lang:bf_password', 'max_length[120]|valid_password');

		// check if a value has been entered for the password - if so then the pass_confirm is required
		// if you don't set it as "required" the pass_confirm field could be left blank and the form validation would still pass
		$extra_rules = !empty($_POST['password']) ? 'required|' : '';
		$this->form_validation->set_rules('pass_confirm', 'lang:bf_password_confirm', ''.$extra_rules.'matches[password]');

		$username_required = '';
		if ($this->settings_lib->item('auth.login_type') == 'username' ||
		    $this->settings_lib->item('auth.use_usernames'))
		{
			$username_required = 'required|';
		}
		$this->form_validation->set_rules('username', 'lang:bf_username', $username_required . 'trim|max_length[30]|unique[users.username,users.id]');

		$this->form_validation->set_rules('language', 'lang:bf_language', 'required|trim');
		$this->form_validation->set_rules('timezones', 'lang:bf_timezone', 'required|trim|max_length[4]');
		$this->form_validation->set_rules('display_name', 'lang:bf_display_name', 'trim|max_length[255]');

		// Added Event "before_user_validation" to run before the form validation
		Events::trigger('before_user_validation', $payload );


		foreach ($meta_fields as $field)
		{
			if ((!isset($field['admin_only']) || $field['admin_only'] === FALSE
				|| (isset($field['admin_only']) && $field['admin_only'] === TRUE
					&& isset($this->current_user) && $this->current_user->role_id == 1))
				&& (!isset($field['frontend']) || $field['frontend'] === TRUE))
			{
				$this->form_validation->set_rules($field['name'], $field['label'], $field['rules']);
			}
		}


		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// Compile our core user elements to save.
		$data = array(
			'email'		=> $this->input->post('email'),
			'kota'		=> $this->input->post('kota'),
			'provinsi'		=> $this->input->post('provinsi'),
			'kode_pos'		=> $this->input->post('kode_pos'),
			'language'	=> $this->input->post('language'),
			'timezone'	=> $this->input->post('timezones'),
		);

		// If empty, the password will be left unchanged.
		if ($this->input->post('password') !== '')
		{
			$data['password'] = $this->input->post('password');
		}

		if ($this->input->post('display_name') !== '')
		{
			$data['display_name'] = $this->input->post('display_name');
		}

		if (isset($_POST['username']))
		{
			$data['username'] = $this->input->post('username');
		}

		// Any modules needing to save data?
		// Event to run after saving a user
		Events::trigger('save_user', $payload );

		return $this->user_model->update($id, $data);

	}//end save_user()

	//--------------------------------------------------------------------

		//--------------------------------------------------------------------
		// ACTIVATION METHODS
		//--------------------------------------------------------------------
		/*
			Activate user.

			Checks a passed activation code and if verified, enables the user
			account. If the code fails, an error is generated and returned.

		*/
		public function activate($user_id = NULL)
		{
			if (isset($_POST['activate']))
			{
				$this->form_validation->set_rules('code', 'Verification Code', 'required|trim');
				if ($this->form_validation->run() == TRUE)
				{
					$code = $this->input->post('code');

					$activated = $this->user_model->activate($user_id, $code);
					if ($activated)
					{
						$user_id = $activated;

						// Now send the email
						$this->load->library('emailer/emailer');

						$site_title = $this->settings_lib->item('site.title');

						$email_message_data = array(
							'title' => $site_title,
							'link'  => site_url('login')
						);
						$data = array
						(
							'to'		=> $this->user_model->find($user_id)->email,
							'subject'	=> lang('us_account_active'),
							'message'	=> $this->load->view('_emails/activated', $email_message_data, TRUE)
						);

						if ($this->emailer->send($data))
						{
							Template::set_message(lang('us_account_active'), 'success');
						}
						else
						{
							Template::set_message(lang('us_err_no_email'). $this->emailer->error, 'error');
						}
						Template::redirect('/login');
					}
					else
					{
						Template::set_message($this->user_model->error.'. '. lang('us_err_activate_code'), 'error');
					}
				}
			}
			Template::set_view('users/users/activate');
			Template::set('page_title', 'Account Activation');
			Template::render("page");
		}

		//--------------------------------------------------------------------

		/*
			   Method: resend_activation

			   Allows a user to request that their activation code be resent to their
			   account's email address. If a matching email is found, the code is resent.
		   */
		public function resend_activation()
		{
			if (isset($_POST['send']))
			{
				$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email');

				if ($this->form_validation->run())
				{
					// We validated. Does the user actually exist?
					$user = $this->user_model->find_by('email', $_POST['email']);

					if ($user !== FALSE)
					{
						// User exists, so create a temp password.
						$this->load->helpers(array('string', 'security'));

						$pass_code = random_string('alnum', 40);

						$activation_code = do_hash($pass_code . $user->password_hash . $_POST['email']);

						$site_title = $this->settings_lib->item('site.title');

						// Save the hash to the db so we can confirm it later.
						$this->user_model->update_where('email', $_POST['email'], array('activate_hash' => $activation_code ));

						// Create the link to reset the password
						$activate_link = site_url('activate/'. str_replace('@', ':', $_POST['email']) .'/'. $activation_code);

						// Now send the email
						$this->load->library('emailer/emailer');

						$email_message_data = array(
							'title' => $site_title,
							'code'  => $activation_code,
							'link'  => $activate_link
						);

						$data = array
						(
							'to'		=> $_POST['email'],
							'subject'	=> 'Activation Code',
							'message'	=> $this->load->view('_emails/activate', $email_message_data, TRUE)
						);
						$this->emailer->enable_debug(true);
						if ($this->emailer->send($data))
						{
							Template::set_message(lang('us_check_activate_email'), 'success');
						}
						else
						{
							Template::set_message(lang('us_err_no_email').$this->emailer->error.", ".$this->emailer->debug_message, 'error');
						}
					}
					else
					{
						Template::set_message('Cannot find that email in our records.', 'error');
					}
				}
			}
			Template::set_view('users/users/resend_activation');
			Template::set('page_title', 'Activate Account');
			Template::render("page");
		}
		
		
		//check put register
		
		public function cekoutregister()
	{
		
		
		
		$this->load->model('roles/role_model');
		$this->load->helper('date');

		$this->load->config('address');
		$this->load->helper('address');

		$this->load->config('user_meta');
		$meta_fields = config_item('user_meta_fields');
		Template::set('meta_fields', $meta_fields);

		//proses register
		if (isset($_POST['register']))
		{
		
		
			// Validate input
			$this->form_validation->set_rules('email', 'lang:bf_email', 'required|trim|valid_email|max_length[120]|unique[users.email]');

			$username_required = '';
			if ($this->settings_lib->item('auth.login_type') == 'username' ||
			    $this->settings_lib->item('auth.use_usernames'))
			{
				$username_required = 'required|';
			}
			$this->form_validation->set_rules('username', 'lang:bf_username', $username_required . 'trim|max_length[30]|unique[users.username]');
		
			$this->form_validation->set_rules('password', 'lang:bf_password', 'required|max_length[120]|valid_password');
			$this->form_validation->set_rules('pass_confirm', 'lang:bf_password_confirm', 'required|matches[password]');

			$this->form_validation->set_rules('language', 'lang:bf_language', 'required|trim');
			$this->form_validation->set_rules('timezones', 'lang:bf_timezone', 'required|trim|max_length[4]');
			$this->form_validation->set_rules('display_name', 'lang:bf_display_name', 'trim|max_length[255]');


			if ($this->form_validation->run() !== FALSE)
			{
				// Time to save the user...
				$data = array(
						'email'			=> $this->input->post('email'),
						'password'		=> $this->input->post('password'),
						'language'		=> $this->input->post('language'),
						'timezone'		=> $this->input->post('timezones'),
						'display_name'	=> $this->input->post('display_name'),
					);

				if (isset($_POST['username']))
				{
					$data['username'] = $this->input->post('username');
				}

				// User activation method
				$activation_method = $this->settings_lib->item('auth.user_activation_method');

				// No activation method
				if ($activation_method == 0)
				{
					// Activate the user automatically
					$data['active'] = 1;
				}

				if ($user_id = $this->user_model->insert($data))
				{
				
					/*
					 * USER ACTIVATIONS ENHANCEMENT
					 */

					// Prepare user messaging vars
					$subject = '';
					$email_mess = '';
					$message = lang('us_email_thank_you');
					$type = 'success';
					$site_title = $this->settings_lib->item('site.title');
					$error = false;

					switch ($activation_method)
					{
						case 0:
							// No activation required. Activate the user and send confirmation email
							$subject 		=  str_replace('[SITE_TITLE]',$this->settings_lib->item('site.title'),lang('us_account_reg_complete'));
							$email_mess 	= $this->load->view('_emails/activated', array('title'=>$site_title,'link' => site_url(),"username"=>$this->input->post("username"),"password"=>$this->input->post("password")), true);
							$message 		.= lang('us_account_active_login');
							break;
						case 1:
							// Email Activiation.
							// Create the link to activate membership
							// Run the account deactivate to assure everything is set correctly
							$activation_code = $this->user_model->deactivate($user_id);
							$activate_link   = site_url('activate/'. $user_id);
							$subject         =  lang('us_email_subj_activate');

							$email_message_data = array(
								'title' => $site_title,
								'code'  => $activation_code,
								'link'  => $activate_link
							);
							$email_mess = $this->load->view('_emails/activate', $email_message_data, true);
							$message   .= lang('us_check_activate_email');
							break;
						case 2:
							// Admin Activation
							// Clear hash but leave user inactive
							$subject    =  lang('us_email_subj_pending');
							$email_mess = $this->load->view('_emails/pending', array('title'=>$site_title), true);
							$message   .= lang('us_admin_approval_pending');
							break;
					}//end switch

					// Now send the email
					$this->load->library('emailer/emailer');
					$data = array(
						'to'		=> $_POST['email'],
						'subject'	=> $subject,
						'message'	=> $email_mess
					);

					if (!$this->emailer->send($data))
					{
						$message .= lang('us_err_no_email'). $this->emailer->error;
						$error    = true;
					}

					if ($error)
					{
						$type = 'danger';
					}
					else
					{
						$type = 'success';
					}
					$this->auth->login($this->input->post('email'), $this->input->post('password'),FALSE);
					Template::set_message($message, $type);
					
					// Log the Activity

					log_activity($user_id, lang('us_log_register'), 'users');
					Template::redirect('checkout');
				}
				else
				{
					Template::set_message(lang('us_registration_fail'), 'danger');
					
					redirect('/cekoutregister');
					
					
				
				}//end if
			}//end if
		}//end if
		
		
		if (isset($_POST['log-me-in']))
			{
				$remember = $this->input->post('remember_me') == '1' ? TRUE : FALSE;

				// Try to login
				if ($this->auth->login($this->input->post('login'), $this->input->post('password'), $remember) === TRUE)
				{

					// Log the Activity
					log_activity($this->auth->user_id(), lang('us_log_logged') . ': ' . $this->input->ip_address(), 'users');

					if ($this->settings_lib->item('auth.do_login_redirect') && !empty ($this->auth->login_destination))
					{
						Template::redirect("cekoutregister");
					}
					else
					{
						if (!empty($this->requested_page))
						{
							Template::redirect("/produk/selesai");
						}
						else
						{
							Template::redirect("/produk/selesai");
						}
					}
				}//end if
			}//end if


        if (isset($_POST['send']))
			{
				$this->form_validation->set_rules('email2', 'lang:bf_email', 'required|trim|valid_email');

				if ($this->form_validation->run() !== FALSE)
				{
					// We validated. Does the user actually exist?
					$user = $this->user_model->find_by('email', $_POST['email2']);

					if ($user !== FALSE)
					{
						// User exists, so create a temp password.
						$this->load->helpers(array('string', 'security'));

						$pass_code = random_string('alnum', 40);

						$hash = do_hash($pass_code . $_POST['email2']);

						// Save the hash to the db so we can confirm it later.
						$this->user_model->update_where('email', $_POST['email2'], array('reset_hash' => $hash, 'reset_by' => strtotime("+24 hours") ));

						// Create the link to reset the password
						$pass_link = site_url('cekoutregister/reset_password/'. str_replace('@', ':', $_POST['email2']) .'/'. $hash);

						// Now send the email
						$this->load->library('emailer/emailer');

						$data = array(
									'to'	=> $_POST['email2'],
									'subject'	=> lang('us_reset_pass_subject'),
									'message'	=> $this->load->view('_emails/forgot_password', array('link' => $pass_link), TRUE)
							 );

						if ($this->emailer->send($data))
						{
							Template::set_message(lang('us_reset_pass_message'), 'success');
							Template::redirect("cekoutregister");
						}
						else
						{
							Template::set_message(lang('us_reset_pass_error'). $this->emailer->error, 'danger');
						}
					}
					else
					{
						Template::set_message(lang('us_invalid_email'), 'danger');
					}//end if
				}//end if
			}//end if
			
			
			//untuk reset password
	       if($this->uri->segment(2)=="reset_password"){
		   
		   $email=$this->uri->segment(3);
		   $code=$this->uri->segment(4);

			// If we're set here via Bonfire and not an email link
			// then we might have the email and code in the session.
			if (empty($code) && $this->session->userdata('pass_check'))
			{
				$code = $this->session->userdata('pass_check');
			}

			if (empty($email) && $this->session->userdata('email'))
			{
				$email = $this->session->userdata('email');
			}

			// If there is no code, then it's not a valid request.
			if (empty($code) || empty($email))
			{
				Template::set_message(lang('us_reset_invalid_email')."", 'danger');
				Template::redirect('/cekoutregister');
			}
			
			
				// Handle the form
			if (isset($_POST['set_password']))
			{
				$this->form_validation->set_rules('password2', 'lang:bf_password', 'required|max_length[120]|valid_password');
				$this->form_validation->set_rules('pass_confirm2', 'lang:bf_password_confirm', 'required|matches[password2]');

				if ($this->form_validation->run() !== FALSE)
				{
					// The user model will create the password hash for us.
					$data = array('password' => $this->input->post('password2'),
					              'reset_by'	=> 0,
					              'reset_hash'	=> '',
					              'force_password_reset' => 0);

					if ($this->user_model->update($this->input->post('user_id'), $data))
					{
						// Log the Activity
						log_activity($this->input->post('user_id'), lang('us_log_reset') , 'users');

						Template::set_message(lang('us_reset_password_success'), 'success');
						Template::redirect('/cekoutregister');
					}
					else
					{
						Template::set_message(sprintf(lang('us_reset_password_error'), $this->user_model->error), 'danger');

					}
				}
			}//end if

			
			// Check the code against the database
			$email = str_replace(':', '@', $email);
			$user = $this->user_model->find_by(array(
                                        'email' => $email,
										'reset_hash' => $code,
										'reset_by >=' => time()
                                   ));

			// It will be an Object if a single result was returned.
			if (!is_object($user))
			{
				Template::set_message( lang('us_reset_invalid_email'), 'danger');
				Template::redirect('/cekoutregister');
			}

            $settings = $this->settings_lib->find_all();
            if ($settings['auth.password_show_labels'] == 1) {
                Assets::add_module_js('users','password_strength.js');
                Assets::add_module_js('users','jquery.strength.js');
                Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
            }
            // If we're here, then it is a valid request....
			Template::set('user', $user);
			}

        // Generate password hint messages.
		$this->user_model->password_hints();

		Template::set('languages', unserialize($this->settings_lib->item('site.languages')));

		Template::set_view('users/users/cekoutregister');
		Template::set('page_title', 'Register');
		Template::render("page");

	}//end register()
	
	
	//cek out kota tujuan 
	function cekoutkotatujuan(){
	
	// Make sure we're logged in.
		$this->auth->restrict();
		$this->set_current_user();

		$this->load->helper('date');

		$this->load->config('address');
		$this->load->helper('address');

		$this->load->config('user_meta');
		$meta_fields = config_item('user_meta_fields');

		Template::set('meta_fields', $meta_fields);

		if (isset($_POST['save']))
		{

			$user_id = $this->current_user->id;
			if ($this->save_user($user_id, $meta_fields))
			{

				$meta_data = array();
				foreach ($meta_fields as $field)
				{
					if ((!isset($field['admin_only']) || $field['admin_only'] === FALSE
						|| (isset($field['admin_only']) && $field['admin_only'] === TRUE
							&& isset($this->current_user) && $this->current_user->role_id == 1))
						&& (!isset($field['frontend']) || $field['frontend'] === TRUE))
					{
						$meta_data[$field['name']] = $this->input->post($field['name']);
					}
				}

				// now add the meta is there is meta data
				$this->user_model->save_meta_for($user_id, $meta_data);

				// Log the Activity

				$user = $this->user_model->find($user_id);
				$log_name = (isset($user->display_name) && !empty($user->display_name)) ? $user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $user->username : $user->email);
				log_activity($this->current_user->id, lang('us_log_edit_profile') . ': ' . $log_name, 'users');

				$this->load->helper('produk/produk');
				
	  $tgl_skrg = date("Ymd");
	  $jam_skrg = date("H:i:s");
	   // simpan data pemesanan 
	   $no_order=date("Ymd")."-".FormatNoTrans($this->produk_model->getLastTrans());
	  $data=array("nama_kustomer"=>$this->current_user->username,
	  			  "tgl_order"=>$tgl_skrg,
				  "jam_order"=>$jam_skrg,
				  "no_order"=>$no_order,
				   "bank"=>$this->input->post('bank'),
				    "pengiriman"=>$this->input->post('pengiriman'),
					 "kota"=>$this->input->post('kota'),
					  "provinsi"=>$this->input->post('provinsi')
				   );
		
		$this->db->insert("orders",$data);
	  // mendapatkan nomor orders
	  $id_orders=$this->db->insert_id();
	  
	  // panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
	  $isikeranjang = $this->isi_keranjang();
	  $jml          = count($isikeranjang);
	  
	  	//jika affaliate ada 
		if($this->session->userdata('affaliate')!=""){
				
				$pay=$this->payaffaliate_model->getPayBuyAktif();
				$id_affiliate= $this->user_model->find_by("username",$this->session->userdata('affaliate'));
				$cekjmlaffaliate=$this->db->query("select count(*) as jumlah from bf_affaliate_user where id_affaliate='".$id_affiliate->id."' and id_user='".$this->auth->user_id()."' ")->row();
				if($cekjmlaffaliate->jumlah==0){
					$this->db->query("insert into bf_affaliate_user(id_affaliate,id_user)values('".$id_affiliate->id."','".$this->auth->user_id()."')");
				}
		
				//untuk proses orders
				$cekjmlaffaliate2=$this->db->query("select count(*) as jumlah,id_affaliate from bf_affaliate_user where id_user='".$this->auth->user_id()."' ")->row();
				if($cekjmlaffaliate2->jumlah==0){
					$this->db->query("insert into bf_buy_affaliate(id_affaliate,id_user,no_orders,tanggal,status,pay,id_affaliate_asal)values('".$id_affiliate->id."','".$this->auth->user_id()."','".$no_order."','".date("Y-m-d H:i:s")."','Baru','".$pay."','".$id_affiliate->id."')");				
				}else{
					$this->db->query("insert into bf_buy_affaliate(id_affaliate,id_user,no_orders,tanggal,status,pay,id_affaliate_asal)values('".$cekjmlaffaliate2->id_affaliate."','".$this->auth->user_id()."','".$no_order."','".date("Y-m-d H:i:s")."','Baru','".$pay."','".$id_affiliate->id."')");
				}
				
		}
		
		//var_dump($isikeranjang);
			
	  // simpan data detail pemesanan  
	  $sql="";
	  for ($i = 0; $i < $jml; $i++){
	  $sql = "INSERT INTO bf_orders_detail(id_orders, id_produk, jumlah,id_ukuran,diskon,harga_tambah,harga,batas_tanggal_awal,batas_tanggal_akhir,operators) 
	   VALUES('$id_orders',{$isikeranjang[$i]['id']}, {$isikeranjang[$i]['qty']}, {$isikeranjang[$i]['id_ukuran']}, '".$isikeranjang[$i]['diskon']."', '".$isikeranjang[$i]['harga2']."', '".$isikeranjang[$i]['harga']."', '".$isikeranjang[$i]['batas_tanggal_awal']."', '".$isikeranjang[$i]['batas_tanggal_akhir']."', '".$isikeranjang[$i]['operators']."');"
	  ;

	  $this->db->query($sql);
	
	  }
				
				
				// redirect to make sure any language changes are picked up
				Template::redirect('produk/selesai/finish/'.$id_orders);
			}
			else
			{
				Template::set_message(lang('us_profile_updated_error'), 'danger');
			}//end if
		}//end if

		// get the current user information
		$user = $this->user_model->find_user_and_meta($this->current_user->id);
		$user2 = $this->user_model->find($this->current_user->id);

        $settings = $this->settings_lib->find_all();
        if ($settings['auth.password_show_labels'] == 1) {
            Assets::add_module_js('users','password_strength.js');
            Assets::add_module_js('users','jquery.strength.js');
            Assets::add_js($this->load->view('users_js', array('settings'=>$settings), true), 'inline');
        }
        // Generate password hint messages.
		$this->user_model->password_hints();

		Template::set('user', $user);
		Template::set('user2', $user2);
		Template::set('languages', unserialize($this->settings_lib->item('site.languages')));

		//hitung total pengiriman
		$this->load->model("ongkos_kirim/ongkos_kirim_model");
		$this->load->library("cart");
		foreach($this->cart->contents() as $r){

			$jasa_kirim=$r["jasa_pengiriman"];

		}
		$total_pengiriman=$this->ongkos_kirim_model->getOngkosKirim($user2->kota,$jasa_kirim);
		$getkota=$this->db->query("select nama_kota from bf_kota where id_kota='".$user2->kota."'")->row();
		Template::set("getkota",$getkota);
		$getprovinsi=$this->db->query("select nama from bf_provinsi where kode='".$user->provinsi."'")->row();
		Template::set("getprovinsi",$getprovinsi);
		Template::set("page_title","Checkout");
		Template::set("jasa_pengiriman",$jasa_kirim);
		Template::set("total_pengiriman",$total_pengiriman);
		Template::set_block('sidebar', 'users/sidebar');
		Template::set_view('users/users/cekoutkotatujuan');
		Template::render("one_right_custome_4");	
	
	}
	
		 // fungsi untuk mendapatkan isi keranjang belanja
	function isi_keranjang(){
	$this->load->library('cart');
	$isikeranjang = array();
	$sql =$this->cart->contents();
		foreach($sql as $r) {
			$isikeranjang[] = $r;
		}
	return $isikeranjang;
	}
		

}//end Users

/* Front-end Users Controller */
/* End of file users.php */
