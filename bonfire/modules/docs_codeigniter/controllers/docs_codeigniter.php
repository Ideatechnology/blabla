<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Docs_codeigniter extends Base_Controller {

  

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->load->library('template');
        Template::set_theme('docs_codeigniter');
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
	
	public function toc(){
		
	
		Template::set_view('toc');
		Template::set("breadcumb",array('User Guide Home'=>FCPATH.'/docs_codeigniter/index',
										"Table of Contents"=>"docs_codeigniter/toc"));
		Template::render();
		
	}
	
	public function requirements(){
		Template::set_view('requirements');
		 Template::render();
		
	}
	
	public function license(){
		Template::set_view('license');
		 Template::render();
		
	}
	
	public function changelog(){
		Template::set_view('changelog');
		 Template::render();
	}
	
	public function credits(){
		Template::set_view('credits');
		Template::render();
	}
	
	public function downloads(){
		Template::set_view('downloads');
		Template::render();		
	}
	
	public function installation(){
		Template::set_view('installation');
		Template::render();	
	}
	
	#baru belum ada view
	public function upgrading(){
		Template::set_view('upgrading');
		Template::render();	
	}
	
	public function troubleshooting(){
		Template::set_view('troubleshooting');
		Template::render();	
	}
	
	public function getting_started(){
		Template::set_view('getting_started');
		Template::render();	
		
	}
	
	public function at_a_glance(){
		Template::set_view('at_a_glance');
		Template::render();	
	}
	
	public function cheatsheets(){
		Template::set_view('cheatsheets');
		Template::render();	
		
	}
	
	public function features(){
		Template::set_view('features');
		Template::render();	
		
	}
	
	public function appflow(){
		Template::set_view('appflow');
		Template::render();	
		
	}
	
	public function mvc(){
		Template::set_view('mvc');
		Template::render();	
		
	}
	
	public function goals(){
		Template::set_view('goals');
		Template::render();	
		
	}
	
	public function tutorial(){
		Template::set_view('tutorial');
		Template::render();	
		
	}
	
	public function static_pages(){
		Template::set_view('static_pages');
		Template::render();	
		
	}
	
	public function news_section(){
		Template::set_view('news_section');
		Template::render();	
		
	}
	
	public function create_news_items(){
		Template::set_view('create_news_items');
		Template::render();	
		
	}
	
	public function conclusion(){
		Template::set_view('conclusion');
		Template::render();	
		
	}
	
	public function urls(){
		Template::set_view('urls');
		Template::render();	
		
	}
	
	public function controllers(){
		Template::set_view('controllers');
		Template::render();	
		
	}

	public function reserved_names(){
		Template::set_view('reserved_names');
		Template::render();	
		
	}
	
	public function views(){
		Template::set_view('views');
		Template::render();	
		
	}
	
	public function models(){
		Template::set_view('models');
		Template::render();	
		
	}
	
	public function helpers(){
		Template::set_view('helpers');
		Template::render();	
		
	}
	
	public function libraries(){
		Template::set_view('libraries');
		Template::render();	
		
	}
	
	public function creating_libraries(){
		Template::set_view('creating_libraries');
		Template::render();	
		
	}
	
	public function drivers(){
		Template::set_view('drivers');
		Template::render();	
		
	}
	
	public function creating_drivers(){
		Template::set_view('creating_drivers');
		Template::render();	
		
	}
	
	public function core_classes(){
		Template::set_view('core_classes');
		Template::render();	
		
	}
	
	public function hooks(){
		Template::set_view('hooks');
		Template::render();	
		
	}
	
	public function autoloader(){
		Template::set_view('autoloader');
		Template::render();	
		
	}
	
	public function common_functions(){
		Template::set_view('common_functions');
		Template::render();	
		
	}
	
	public function routing(){
		Template::set_view('routing');
		Template::render();	
		
	}
	
	public function errors(){
		Template::set_view('errors');
		Template::render();	
		
	}
	
	public function caching(){
		Template::set_view('caching');
		Template::render();	
		
	}
	
	public function profiling(){
		Template::set_view('profiling');
		Template::render();	
		
	}
	
	public function cli(){
		Template::set_view('cli');
		Template::render();	
		
	}
	
	public function managing_apps(){
		Template::set_view('managing_apps');
		Template::render();	
		
	}
	
	public function environments(){
		Template::set_view('environments');
		Template::render();	
		
	}
	
	public function alternative_php(){
		Template::set_view('alternative_php');
		Template::render();	
		
	}
	
	public function security(){
		Template::set_view('security');
		Template::render();	
		
	}
	
	public function styleguide(){
		Template::set_view('styleguide');
		Template::render();	
		
	}
	
	public function doc_style(){
		Template::set_view('doc_style');
		Template::render();	
		
	}
	
	public function benchmark(){
		Template::set_view('benchmark');
		Template::render();	
		
	}
	
	public function calendar(){
		Template::set_view('calendar');
		Template::render();	
		
	}
	
	public function cart(){
		Template::set_view('cart');
		Template::render();	
		
	}
	
	public function config(){
		Template::set_view('config');
		Template::render();	
		
	}
	
	public function email(){
		Template::set_view('email');
		Template::render();	
		
	}
	
	public function encryption(){
		Template::set_view('encryption');
		Template::render();	
		
	}
	
	public function file_uploading(){
		Template::set_view('file_uploading');
		Template::render();	
		
	}
	
	public function form_validation(){
		Template::set_view('form_validation');
		Template::render();	
		
	}
	
	public function ftp(){
		Template::set_view('ftp');
		Template::render();	
		
	}
	
	public function table(){
		Template::set_view('table');
		Template::render();	
		
	}
	
	public function image_lib(){
		Template::set_view('image_lib');
		Template::render();	
		
	}
	public function input(){
		Template::set_view('input');
		Template::render();	
		
	}
	
	public function javascript(){
		Template::set_view('javascript');
		Template::render();	
		
	}
	
	public function loader(){
		Template::set_view('loader');
		Template::render();	
		
	}
	
	public function language(){
		Template::set_view('language');
		Template::render();	
		
	}
	
	public function migration(){
		Template::set_view('migration');
		Template::render();	
		
	}
	
	
	public function output(){
		Template::set_view('output');
		Template::render();	
		
	}
	
	public function pagination(){
		Template::set_view('pagination');
		Template::render();	
		
	}
	
	public function sessions(){
		Template::set_view('sessions');
		Template::render();	
		
	}
	
	public function trackback(){
	
	Template::set_view('trackback');
		Template::render();	
	
	}
	
	public function parser(){
	
	Template::set_view('parser');
		Template::render();	
	
	}
	
	public function uri(){
	
	Template::set_view('uri');
		Template::render();	
	
	}
	
	public function user_agent(){
	
	Template::set_view('user_agent');
		Template::render();	
	
	}
	
	public function xmlrpc(){
	
	Template::set_view('xmlrpc');
		Template::render();	
	
	}
	
	public function zip(){
	
		Template::set_view('zip');
		Template::render();	
	
	}
	
	public function database(){
		Template::set_view('database');
		Template::render();	
	}
	
	
	public function array_helper(){
		Template::set_view('array_helper');
		Template::render();	
	}
	
	public function captcha_helper(){
		Template::set_view('captcha_helper');
		Template::render();	
	}
	
	public function cookie_helper(){
		Template::set_view('cookie_helper');
		Template::render();	
	}
	
	public function date_helper(){
		Template::set_view('date_helper');
		Template::render();	
	}
	
	
	public function directory_helper(){
		Template::set_view('directory_helper');
		Template::render();	
	}
	
	
	public function download_helper(){
		Template::set_view('download_helper');
		Template::render();	
	}
	
	public function email_helper(){
		Template::set_view('email_helper');
		Template::render();	
	}
	
	public function file_helper(){
		Template::set_view('file_helper');
		Template::render();	
	}
	
	public function form_helper(){
		Template::set_view('form_helper');
		Template::render();	
	}
	
	public function html_helper(){
		Template::set_view('html_helper');
		Template::render();	
	}
	
	public function inflector_helper(){
		Template::set_view('inflector_helper');
		Template::render();	
	}
	
	public function language_helper(){
		Template::set_view('language_helper');
		Template::render();	
	}
	
	function number_helper(){
		Template::set_view('number_helper');
		Template::render();	
	}
	
	function path_helper(){
			Template::set_view('path_helper');
			Template::render();	
	}
	
	function security_helper(){
			Template::set_view('security_helper');
			Template::render();	
	}
	
	function smiley_helper(){
		   Template::set_view('smiley_helper');
			Template::render();	
	}
	
	function string_helper(){
			Template::set_view('string_helper');
			Template::render();	
	}
	
	function text_helper(){
		Template::set_view('text_helper');
			Template::render();	
	}
	
	function typography_helper(){
		Template::set_view('text_helper');
			Template::render();	
	}
	
	function url_helper(){
	
	Template::set_view('url_helper');
			Template::render();	
	}
	
	function xml_helper(){
	Template::set_view('xml_helper');
			Template::render();	
	}
	
	function examples(){
		Template::set_view('examples');
			Template::render();	
	}
	
	function configuration(){
		Template::set_view('configuration');
			Template::render();	
	}
	
	function connecting(){
		Template::set_view('connecting');
			Template::render();	
	}
	
	function queries(){
		Template::set_view('queries');
			Template::render();	
	}
	
	function results(){
		Template::set_view('results');
		Template::render();	
	}

	function helpersdb(){
		Template::set_view('helpersdb');
		Template::render();	
	}
	
	function active_record(){
	Template::set_view('active_record');
		Template::render();	
	}
	
	function transactions(){
		Template::set_view('transactions');
		Template::render();	
	}
	
	function table_data(){
		Template::set_view('table_data');
		Template::render();	
	}
	
	function fields(){
		Template::set_view('fields');
		Template::render();	
	}
	
	function call_function(){
		Template::set_view('call_function');
		Template::render();	
	}
	
	function cachingdb(){
	Template::set_view('cachingdb');
		Template::render();	
	
	}
	
	function forge(){
	Template::set_view('forge');
		Template::render();	
	}
	
	function utilities(){
	Template::set_view('utilities');
		Template::render();	
	}
	
    //--------------------------------------------------------------------

   

}