<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Polling extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('users/auth');
		$this->set_current_user();
			   #-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
		if($this->session->userdata("site_lang")){
			$this->lang->load('polling',$this->session->userdata("site_lang"));
		}else{
			$this->lang->load('polling','indonesia');
		}
 	}
	
    /*
	 *************************************************************************************************
	   Sub Blog
	   Return Referensi Menu Blog Level 3
	 *************************************************************************************************
	*/
	public function index() 
	{
	   $this->load->library('fusioncharts');
	   
	   $poll = $this->db->query("SELECT * FROM bf_polling where flag_polling=1")->row(); 	
	   
			   $poll_count = $this->db->query("SELECT * FROM bf_polling_count where id_polling='".$poll->id."'")->row(); 
			
			 	   
			    	if(isset($_POST['save']) || isset($_POST['pilih'])){
				   
			 
			    $data['id_polling'] = $poll->id;
			    $data['ip_address'] = $this->input->ip_address();
			    $data['tanggal'] = date("Y-m-d");

			   if(count($poll_count)==0){

			   	  if($this->input->post("jawab")==1){ $data['jawab1'] =  1; }
			   if($this->input->post("jawab")==2){ $data['jawab2'] =  1; }
			   if($this->input->post("jawab")==3){ $data['jawab3'] =  1; }
			   if($this->input->post("jawab")==4){ $data['jawab4'] = 1; }
			   if($this->input->post("jawab")==5){ $data['jawab5'] =  1; }
			 

			   $this->db->insert("polling_count",$data);

			   }else{ 

			   	  if($this->input->post("jawab")==1){ $data['jawab1'] = $poll_count->jawab1 + 1; }
			   if($this->input->post("jawab")==2){ $data['jawab2'] = $poll_count->jawab2 + 1; }
			   if($this->input->post("jawab")==3){ $data['jawab3'] = $poll_count->jawab3 + 1; }
			   if($this->input->post("jawab")==4){ $data['jawab4'] = $poll_count->jawab4 + 1; }
			   if($this->input->post("jawab")==5){ $data['jawab5'] = $poll_count->jawab5 + 1; }
			 
			   
			   $this->db->where("id",$poll_count->id);
			   $this->db->update('polling_count', $data);
			   	
			   } 

			   redirect("/polling");
			   
			   }
			   
	
			Template::set('poll', $poll);
			Template::set('poll_count', $poll_count);
		   
		
 	    Template::render("page");
	 
 	}
	/*END CUSTOMIZED*/
	
	
	
	
	
}