<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * publikasi controller
 */
class publikasi extends Front_Controller
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
		$this->load->model('publikasi_model', null, true);
		$this->lang->load('publikasi');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
			Assets::add_css('jquery-ui-timepicker.css');
			Assets::add_js('jquery-ui-timepicker-addon.js');

		Assets::add_module_js('publikasi', 'publikasi.js');

		$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		$this->load->helper('../uploadut');

		$this->load->helper("text");

		$this->load->library("settings/settings_lib");
		Template::set_block("sidebar","sidebar");

	
		$kategori_publikasi = $this->db->query("select *,
		(select count(*) from bf_publikasi where bf_publikasi.id_kategori=bf_m_kategori.id) as jumlah,
		 (select gambar from bf_publikasi where bf_publikasi.id_kategori=bf_m_kategori.id limit 1) as gambar 
		 from bf_m_kategori where deleted=0 and type_kategori='publikasi'")->result();
		
		Template::set("kategori_publikasi",$kategori_publikasi);
	
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index($id)
	{


		$this->load->model("kategori/kategori_model");
		$kategori = $this->kategori_model->find($id);

		Template::set("kategori",$kategori);

		$this->load->library('pagination');
		$offset = abs((int) $this->input->get('per_page'));
		$limit = $this->settings_lib->item("site.list_limit");;

		$this->publikasi_model->where("id_kategori",$id);		
		$total = $this->publikasi_model->count_all();

		$pager['base_url'] 			= current_url()."?";
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

		$this->publikasi_model->where("id_kategori",$id);	
		$this->publikasi_model->limit($limit, $offset);	
		$records = $this->publikasi_model->find_all();
		Template::set('records', $records);



		Template::render("one_right_custome_4");
	}
	
	public function detail($id){
		
		$detail = $this->publikasi_model->find($id);
		Template::set("detail",$detail);
		
		$kategori = $this->db->query("select * from bf_m_kategori where 
		deleted=0 and id='".$detail->id_kategori."'")->row();
		Template::set("kategori",$kategori);
		
		Template::render("one_right_custome_4");
		
		
	}

	//--------------------------------------------------------------------



}