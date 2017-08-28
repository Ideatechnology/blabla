<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
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

		$this->auth->restrict('Tanyajawab.Content.View');
		$this->load->model('tanyajawab_model', null, true);
		$this->lang->load('tanyajawab');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');
		Template::set_block('sub_nav', 'content/_sub_nav');

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

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->tanyajawab_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tanyajawab_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tanyajawab_delete_failure') . $this->tanyajawab_model->error, 'error');
				}
			}
		}

		$offset = $this->input->get('per_page')?$this->input->get('per_page'):0;
		$total = $this->tanyajawab_model->count_all();
		$limit = 10;

		// Pagination
		$this->load->library('pagination');

		$this->pager['base_url'] 			= site_url().'/'.SITE_AREA.'/content/tanyajawab?';
    	$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$this->pager['full_tag_close'] = '</ul></div>';


		$this->pagination->initialize($this->pager);


		$this->tanyajawab_model->order_by("id","desc");
		$this->tanyajawab_model->limit($limit,$offset);
		$records = $this->tanyajawab_model->find_all();

		

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Tanya Jawab');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a tanyajawab object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Tanyajawab.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_tanyajawab())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tanyajawab_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'tanyajawab');

				Template::set_message(lang('tanyajawab_create_success'), 'success');
				redirect(SITE_AREA .'/content/tanyajawab');
			}
			else
			{
				Template::set_message(lang('tanyajawab_create_failure') . $this->tanyajawab_model->error, 'error');
			}
		}
		Assets::add_module_js('tanyajawab', 'tanyajawab.js');

		Template::set('toolbar_title', lang('tanyajawab_create') . ' tanyajawab');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of tanyajawab data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tanyajawab_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/tanyajawab');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Tanyajawab.Content.Edit');

			if ($this->save_tanyajawab('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tanyajawab_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tanyajawab');

				Template::set_message(lang('tanyajawab_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tanyajawab_edit_failure') . $this->tanyajawab_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Tanyajawab.Content.Delete');

			if ($this->tanyajawab_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tanyajawab_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'tanyajawab');

				Template::set_message(lang('tanyajawab_delete_success'), 'success');

				redirect(SITE_AREA .'/content/tanyajawab');
			}
			else
			{
				Template::set_message(lang('tanyajawab_delete_failure') . $this->tanyajawab_model->error, 'error');
			}
		}
		Template::set('tanyajawab', $this->tanyajawab_model->find($id));
		Template::set('toolbar_title', ' Jawab Pertanyaan');
		Template::render();
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_tanyajawab($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('tanyajawab_gbcomment','Gbcomment','');
		
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['gbcomment']        = $this->input->post('tanyajawab_gbcomment');
		$data['published']        = 1;

		if ($type == 'insert')
		{
			$id = $this->tanyajawab_model->insert($data);

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
			$return = $this->tanyajawab_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}