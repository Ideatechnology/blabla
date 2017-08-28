<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
                
                $this->load->config('config');
		
	}


	public function download_file()
	{
		// is there more ways to add file validation rules except for the ones in the view
		// for instance something to reject certain files and so on?
		// also, add support for view files inline, could be available to settings

		$this->output->enable_profiler(false);

		$this->load->config('config');
		$upload_config = $this->config->item('upload_config');

	
		$this->load->model('post_model', null, true);

		$file_id = $this->uri->segment(5);

		$record = $this->post_model->select('file_data')->find_by('id', $file_id);

		$file_path = null;
		if($record)
		{
		
			$file_path  = $upload_config['upload_path_file'].$record->file_data;
			$content_types=explode(".",$record->file_data);
		}

		if(file_exists($file_path))
		{

			$attachment_name = $record->file_data;


			$this->load->vars(array(
				'file_path'         => $file_path,
				'content_type'      => $content_types[1],
				'attachment_name'   => $attachment_name
			));

			$this->load->view('widget/download');
		}
		else
		{
			$this->load->view('widget/download_failed');
		}
	}
	

}
