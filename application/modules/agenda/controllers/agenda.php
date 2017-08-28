<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Agenda extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		#load model
		$this->load->model('agenda_model', null, true);
		 $this->load->model("kategori/kategori_model",NULL,true);
		$this->load->model('evencal_model', 'evencal');
		$this->load->library('calendar', $this->_setting());
		$this->load->library("form_validation");
		$this->load->helper("text");
		Assets::add_module_css('agenda', 'css/calendar.css');	
		Assets::clear_cache();	
		
		

		#-------------------------------------------------
		#!important
	    $this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		#-------------------------------------------------
		
	    $this->set_current_user();
		
		#load helper
		$this->load->helper("get_agenda_category");
	
		
		#load dua bahasa
        if ($this->session->userdata('site_lang')) {
			$this->lang->load('agenda',$this->session->userdata('site_lang'));
			$this->lang->load('../datatable',$this->session->userdata('site_lang'));
			
        } else {
        	$this->lang->load('agenda','indonesia');
			$this->lang->load('../datatable','indonesia');
			
        }
		
 	}
	
	
	public function index($year = null, $month = null, $day = null) 
	{
 
		$year  = (empty($year) || !is_numeric($year))?  date('Y') :  $year;
		$month = (is_numeric($month) &&  $month > 0 && $month < 13)? $month : date('m');
		$day   = (is_numeric($day) &&  $day > 0 && $day < 31)?  $day : date('d');
		
		$date = $this->evencal->getDateEvent($year, $month,$day);
		$cur_event = $this->evencal->getEvent($year, $month, $day);
		
		
	   Template::set('notes',$this->calendar->generate($year, $month, $date));
	   Template::set('year',$year);
	   Template::set('mon',$month);
	   Template::set('month',$this->_month($month));
	   Template::set('day',$day);
	   Template::set('events',$cur_event);
	   
	   
	   	#Related Posts
		$this->load->library('pagination');
		$postcategori=$this->input->get("tanggal");
		$offset = abs((int) $this->input->get('per_page'));
		$limit = 10;
        $total = $this->db->from('agenda')
						   ->like('tgl_agenda',$postcategori)
						  ->order_by('tgl_agenda','DESC')
						  ->get()
						  ->num_rows(); 
		 
		$pager['full_tag_open'] = '<ul>';
		$pager['full_tag_close'] = '</ul>';
 		$pager['cur_tag_open'] = '<li class="active">';
		$pager['cur_tag_close'] = '</li>';
		
		$pager['first_tag_open'] = '<li>';
		$pager['first_tag_close'] = '</li>';
		$pager['first_link'] = 'First';
		
		$pager['last_link'] = 'Last';
		$pager['last_tag_open'] = '<li>';
		$pager['last_tag_close'] = '</li>';
		
		$pager['next_link'] = '&gt;';
		$pager['next_tag_open'] = '<li>';
		$pager['next_tag_close'] = '</li>';
		
		$pager['prev_link'] = '&lt;';
		$pager['prev_tag_open'] = '<li>';
		$pager['prev_tag_close'] = '</li>';
		
		$pager['num_tag_open'] = '<li>';
		$pager['num_tag_close'] = '</li>';
 		$pager['base_url'] 			= current_url() .'?';
		$pager['total_rows'] 			= $total;
		$pager['per_page'] 			= $limit;
		$pager['page_query_string']	= TRUE;

        $this->pagination->initialize($pager);
	
		$relatedPosts = $this->db->from('agenda')
										  ->select("*,bf_agenda.id as id_agenda,bf_m_kategori.kategori as kategori")
										  ->like('tgl_agenda',$postcategori)
										  ->join("m_kategori","m_kategori.id=agenda.post_category")
										  ->order_by('tgl_agenda','DESC')
										  ->limit($limit, $offset)->get()->result();
						
 		Template::set('relatedPosts', $relatedPosts);
	   
	   
	   Template::set_view('agenda_views/index'); 
	   Template::render("page");
 	}
	
	// for convert (int) month to (string) month in Indonesian
	function _month($month){
		$month = (int) $month;
		switch($month){
			case 1 : $month = 'Januari'; Break;
			case 2 : $month = 'Februari'; Break;
			case 3 : $month = 'Maret'; Break;
			case 4 : $month = 'April'; Break;
			case 5 : $month = 'Mei'; Break;
			case 6 : $month = 'Juni'; Break;
			case 7 : $month = 'Juli'; Break;
			case 8 : $month = 'Agustus'; Break;
			case 9 : $month = 'September'; Break;
			case 10 : $month = 'Oktober'; Break;
			case 11 : $month = 'November'; Break;
			case 12 : $month = 'Desember'; Break;
		}
		return $month;
	}
	
	// get detail event for selected date
	function detail_event(){		
		$this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
		}else{
			$data = $this->evencal->getEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'));
			if($data == null){
				echo json_encode(array('status' => false, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
			}else{			
				echo json_encode(array('status' => true, 'data' => $data));
			}
		}
	}
	
	
	// same as index() function
	#detail agenda
	function detail(){
		
	   $id=abs((int)$this->uri->segment(3));
	   $rows = $this->agenda_model->select_join(0,0,$id)->row();  
	   
	   Template::set('rows', $rows);
	   
	   Template::render("page");
		
	}
	
	// setting for calendar
	function _setting(){
		return array(
			'start_day' 		=> 'monday',
			'show_next_prev' 	=> true,
			'next_prev_url' 	=> site_url('agenda/index'),
			'month_type'   		=> 'long',
            'day_type'     		=> 'short',
			'template' 			=> '{table_open}<table class="table table-bordered">{/table_open}
			{heading_row_start}&nbsp;{/heading_row_start}
			{heading_previous_cell}<caption><a href="{previous_url}" class="btn btn-default pull-left" title="Previous Month">&lt;&lt;</a>{/heading_previous_cell}
			{heading_title_cell}{heading}{/heading_title_cell}
			{heading_next_cell}<a href="{next_url}" class="btn btn-default pull-right"  title="Next Month">&gt;&gt;</a></caption>{/heading_next_cell}
			{heading_row_end}<col class="weekday" span="5"><col class="weekend_sat"><col class="weekend_sun">{/heading_row_end}
			{week_row_start}<thead><tr>{/week_row_start}
			{week_day_cell}<th>{week_day}</th>{/week_day_cell}
			{week_row_end}</tr></thead><tbody>{/week_row_end}
								   {cal_row_start}<tr>{/cal_row_start}
								   {cal_cell_start}<td>{/cal_cell_start}
								   {cal_cell_content}<div class="date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content}
								   {cal_cell_content_today}<div class="active_date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content_today}
								   {cal_cell_no_content}<div class="no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content}
								   {cal_cell_no_content_today}<div class="active_no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content_today}
								   {cal_cell_blank}&nbsp;{/cal_cell_blank}
								   {cal_cell_end}</td>{/cal_cell_end}
								   {cal_row_end}</tr>{/cal_row_end}
								   {table_close}</tbody></table>{/table_close}');
	}
	
	 
}
?>