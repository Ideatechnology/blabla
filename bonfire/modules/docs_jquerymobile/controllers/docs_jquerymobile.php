<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Docs_jquerymobile extends Base_Controller {

  

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->load->library('template');
        Template::set_theme('docs_jquerymobile');
    }

    //--------------------------------------------------------------------

    /**
     * Display the list of documents available and the current document
     *
     * @return void
     */
    public function index()
    {
        
        Template::render();
		
    }
	
	public function intro(){
	
		Template::set_view('intro');
		Template::render();
	
	}
	
	public function button_markup(){
	
	Template::set_view('button_markup');
		Template::render();
	
	}
	
	public function button_widget(){
	
	Template::set_view('button_widget');
		Template::render();
	
	}
	
	public function checkbox(){
	
	Template::set_view('checkbox');
		Template::render();
	
	}
	
	public function radiobutton(){
	
	Template::set_view('radiobutton');
		Template::render();
	
	}
	
	public function collapsible(){
	
	Template::set_view('collapsible');
		Template::render();
	
	}
	
	public function collapsible_dynamic(){
	
	Template::set_view('collapsible_dynamic');
	Template::render();
	
	}
	
	public function collapsibleset(){
	
	Template::set_view('collapsibleset');
	Template::render();
	
	}
	
	public function controlgroup(){
	
	Template::set_view('controlgroup');
	Template::render();
	
	}
	
	public function controlgroup_dynamic(){
	
	Template::set_view('controlgroup_dynamic');
	Template::render();
	
	}
	
	public function datepicker(){
	
	Template::set_view('datepicker');
	Template::render();
	
	}
	
	public function swipe_list(){
	
	Template::set_view('swipe_list');
	Template::render();
	
	}
	
	public function swipe_page(){
	
	Template::set_view('swipe_page');
	Template::render();
	
	}
   

}