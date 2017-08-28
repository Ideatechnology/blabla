<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Plugin extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		
		#load model
		$this->load->model("polling_model",null,true);
		
		#load language 
		$this->lang->load("polling");
		
		#load js dan css
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
		Assets::clear_cache();
		Assets::add_module_css('datatable', 'css/jquery.dataTables.css');
        Assets::add_module_js('datatable', 'js/jquery.dataTables.js');
		Assets::add_module_js('polling', array('polling.js'));
		
		
		#untuk theme sidebar
   		Template::set('toolbar_title',"Polling");
		Template::set_block('sidebar', 'plugin/sidebar');
 	}
	
	
	public function index() 
	{
 	   $this->auth->restrict('Polling.Plugin.View');
	   
	      #Create agenda
	   if (isset($_POST['save']))
		{
			$this->auth->restrict('Polling.Plugin.Create');
	   
			if ($insert_id = $this->save_polling())
			{
				
				$data1 = array('id_polling' => $insert_id);
			
			 $this->db->insert('polling_count', $data1);
				
				Template::set_message(lang('polling_create_success'), 'success');
				redirect(SITE_AREA .'/plugin/polling');
			}
			else
			{
				Template::set_message(lang('polling_create_failure') . $this->polling_model->error, 'error');
				
			}
		}
		
		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('polling_delete_success'), 'success');
					
				}
				else
				{
					Template::set_message(lang('polling_delete_failure') . $this->polling_model->error, 'error');
				}
			
		}   
       
	   $records = $this->polling_model->select_join()->result();
							
 	   Template::set('records', $records);
	   
 	   Template::set_view('plugin/index');
	   Template::render('custome_two_left');
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
					
					$result = $this->polling_model->delete($pid);
					
				}
				
				return $result;

			}
			
	}
	
	
	
	#Edit category
	public function edit(){
	   $this->auth->restrict('Polling.Plugin.Edit');
	   
	    $id = $this->uri->segment(5);
	   
	   #jika id kosong
	   if (empty($id))
		{
			Template::set_message(lang('polling_invalid_id'), 'error');
			redirect(SITE_AREA .'/plugin/polling');
		}
		
		#jika data dipost maka di simpan perubahan 
	   
	   if (isset($_POST['save']))
		{
			 $this->auth->restrict('Polling.Plugin.Edit');

			if ($this->save_polling('update', $id))
			{
				
				Template::set_message(lang('polling_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('polling_edit_failure') . $this->polling_model->error, 'error');
			}
		}
		
		// Deleting anything?
		if (isset($_POST['delete']))
		{
				$checked = $this->input->post('checked');
			
				$result= $this->hapuskan($checked);
			
				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('polling_delete_success'), 'success');
					
				}
				else
				{
					Template::set_message(lang('polling_delete_failure') . $this->polling_model->error, 'error');
				}
			
		}  
	   
	   

	   
	   $records = $this->polling_model->select_join()->result();
 	   Template::set('records', $records);
	   
	   #get id polling
	   Template::set('polling', $this->polling_model->find($id));
  	   
	   Template::set_view('plugin/index');
	   Template::render('custome_two_left');
 	}
	
	
   #publish Polling
   function publish(){
	      $id=(int)$this->uri->segment(5);
		  $this->db->query("update bf_polling set flag_polling=0");
		  $data['flag_polling']=1;
		  $this->db->where('id', $id);
	      $log = $this->db->update($this->polling_model->getTable(), $data);
		   if($log){
		   	 Template::set_message('Jajak Pendapat Berhasil di Publish', 'success');
			 redirect(SITE_AREA .'/plugin/polling');
		   }
   }
   
   #publish Polling
   function unpublish(){
	      $id=(int)$this->uri->segment(5);
		  $data['flag_polling']=0;
		  $this->db->where('id', $id);
	      $log = $this->db->update($this->polling_model->getTable(), $data);
		   if($log){
		   	 Template::set_message('Jajak Pendapat Berhasil di UnPublish', 'success');
			 redirect(SITE_AREA .'/plugin/polling');
		   }
   }
   
   
   #retrive polling date, if date false any database;
   function retrive_date(){
	    $action = $_REQUEST['action'];
 		switch ($action){
		case 'showdates':
		  $dates='';
		  $List = $this->polling_model->where('flag_polling', 1)->find_all();
				echo '[';
				foreach($List as $row){
					
					    $waktustart = $row->tgl_waktu_polling;
						$waktuends = $row->tgl_batas_polling;
															  
 						$converteddate = $this->dateRange( $waktustart , $waktuends );
						for($i=0; $i<count($converteddate); $i++):
							$dates .= '['.$converteddate[$i].'],';
						endfor;
 				}
				 
				$dates =rtrim($dates, ",");
				echo $dates;
				echo ']'; 
		break;
		}   
   }
   
   #date range function
   function dateRange( $first, $last, $step = '+1 day', $format = 'n,j,Y' ) {

	$dates = array();
	$current = strtotime( $first );
	$last = strtotime( $last );

	while( $current <= $last ) {

		$dates[] = date( $format, $current );
		$current = strtotime( $step, $current );
	}

	return $dates;
   }
   
   /**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_polling($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		
		$data = array(
					  'judul' => $this->input->post('polling_judul'),
					  'jawab1' => $this->input->post('polling_jawab1'),
					  'jawab2' => $this->input->post('polling_jawab2'),
					  'jawab3' => $this->input->post('polling_jawab3'),
					  'jawab4' => $this->input->post('polling_jawab4'),
					  'jawab5' => $this->input->post('polling_jawab5'),
					 
					);
					
					
					

		if ($type == 'insert')
		{
			$id = $this->polling_model->insert($data);
			
			$insert_id = $this->db->insert_id();
					
				
			 
			
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
			$return = $this->polling_model->update($id, $data);
		}

		return $return;
	}
	
   
   
   
}
?>