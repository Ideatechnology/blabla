<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * theme controller
 */
class theme extends Admin_Controller
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

		$this->auth->restrict('Templates.Theme.View');
		$this->load->model('templates_model', null, true);
		$this->lang->load('templates');
		
		Template::set_block('sub_nav', 'theme/_sub_nav');

		Assets::add_module_js('templates', 'templates.js');
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
					$result = $this->templates_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('templates_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('templates_delete_failure') . $this->templates_model->error, 'danger');
				}
			}
		}

		$records = $this->templates_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage templates');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a templates object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Templates.Theme.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_templates())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('templates_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'templates');

				Template::set_message(lang('templates_create_success'), 'success');
				redirect(SITE_AREA .'/theme/templates');
			}
			else
			{
				Template::set_message(lang('templates_create_failure') . $this->templates_model->error, 'danger');
			}
		}
		Assets::add_module_js('templates', 'templates.js');

		Template::set('toolbar_title', lang('templates_create') . ' templates');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of templates data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('templates_invalid_id'), 'danger');
			redirect(SITE_AREA .'/theme/templates');
		}

			$this->auth->restrict('Templates.Theme.Edit');
			$this->db->query("update bf_templates set aktif='N'");
			$this->db->query("update bf_templates set aktif='Y' where id_templates='".$id."'");
			Template::set_message("Template berhasil diaktifkan", 'success');
	
			redirect(SITE_AREA .'/theme/templates');
			
		
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
	private function save_templates($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id_templates'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['judul']        = $this->input->post('templates_judul');
		$data['pembuat']        = $this->input->post('templates_pembuat');
		$data['folder']        = $this->input->post('templates_folder');
		$data['aktif']        = $this->input->post('templates_aktif');
		$data['gambar']        = $this->input->post('templates_gambar');

		if ($type == 'insert')
		{
			$id = $this->templates_model->insert($data);

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
			$return = $this->templates_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}