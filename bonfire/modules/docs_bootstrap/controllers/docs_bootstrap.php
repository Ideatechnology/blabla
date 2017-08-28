<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Docs_bootstrap extends Base_Controller {

  

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->load->library('template');
        Template::set_theme('docs_bootstrap');
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
	
	public function css(){
		
		Template::set_view("css");
		Template::render();	
		
	}
	
	public function component(){
		
		Template::set_view("component");
		Template::render();
		
	}
	
	public function javascript(){
		
		Template::set_view("javascript");
		Template::render();
		
	}
	
	public function customize(){
		
		Template::set_view("customize");
		Template::render();
		
	}

    //--------------------------------------------------------------------

   

}