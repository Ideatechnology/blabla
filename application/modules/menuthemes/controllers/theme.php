<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Theme extends Admin_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
 		$this->load->library('form_validation');
		$this->load->helper('menu');
		$this->load->library('form_validation');
   		Template::set('toolbar_title','Setting Layout Menu');
		
		#Get js 
		Assets::add_js('jquery-ui-1.8.13.min.js');
		Assets::add_js('jquery.nestable.js');
		Assets::add_css('jquery.nestable.css');
		
		
		Assets::add_module_css('menuthemes', array('css/menuthemes.css'));
		Assets::add_module_css('datatable', array('css/jquery.dataTables.css'));
		Assets::add_module_js('datatable', 'js/jquery.dataTables.js');
		Assets::add_module_js('menuthemes', array('js/menuthemes.js'));
		Assets::add_js($this->load->view('widget/js', null, true), 'inline');
	    

		
		Template::set_block('sidebar', 'theme/sidebar');
 	}
	
	public function dependent_menu($lokasi=7){
		 
        $parentid=isset($retrive->parent_id)?$retrive->parent_id:"";
        display_children(0, 1,$parentid,$lokasi) ;
              
	}
	
	public function index() 
	{
		redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
 	   $this->auth->restrict('Menuthemes.Theme.View');
       Template::render('two_left');
 	}
	
	#create Lokasi Menu
	public function create_location(){
 	
 	   $this->auth->restrict('CreateLocation.Theme.View');
       $form = $this->input;
	   
	   $this->form_validation->set_rules('menu_lok', 'Menu Lokasi', 'required');
	   $this->form_validation->set_rules('menu_lok_english', 'Menu Lokasi English', 'required');
	   $this->form_validation->set_rules('tipe_lokasi', 'tipe_lokasi', 'required');
	   
       if(isset($_POST["submit"])){
	    if($this->form_validation->run() == FALSE)
		{
			Template::set_message('Silahkan Lengkapi semua data Isian pada Setting Layout Menu.', 'error');
		}else{
			   if($form->post('submit') =='simpan'){
				   #insert
				   $input['menu_lok'] = $form->post('menu_lok');
				   $input['flag_hide'] = 1;
				   $input['menu_lok_english'] = $form->post('menu_lok_english');
				   $input['tipe_lokasi'] = $form->post('tipe_lokasi');
				   $this->db->insert('menu_lokasi', $input);
				   
				   Template::set_message('Lokasi menu berhasil di tambahkan', 'success');
				   redirect(SITE_AREA .'/theme/menuthemes/create_location');
							
			   }
			   
			   if($form->post('submit') =='update'){
				   $id =(int)$this->uri->segment(6,0); 
				   #insert
				   $input['menu_lok'] = $form->post('menu_lok');
				   $input['menu_lok_english'] = $form->post('menu_lok_english');
				   $input['tipe_lokasi'] = $form->post('tipe_lokasi');
				   $this->db->where('id', $id);
				   $this->db->update('menu_lokasi', $input);
				   
				   Template::set_message('Lokasi menu berhasil di ubah', 'success');
				   redirect(SITE_AREA .'/theme/menuthemes/create_location');
							
			   }
 		}
		}
		
		#untuk delete location
		if($this->uri->segment(5)=='hapus'){
		$id =(int)$this->uri->segment(6,0);
		$this->db->where("id",$id)->delete("menu_lokasi");
		Template::set_message('Lokasi menu berhasil dihapus', 'success');
		redirect(SITE_AREA .'/theme/menuthemes/create_location');   
	   	
	   }
	   
	   #untuk show
		if($this->uri->segment(5)=='show'){
		
		$id =(int)$this->uri->segment(6,0);
		$data["flag_hide"]=0;
		$this->db->where("id",$id)->update("menu_lokasi",$data);
		Template::set_message('Lokasi menu berhasil dishow', 'success');
		redirect(SITE_AREA .'/theme/menuthemes/create_location');   
	   
	   }
	   
	   
	   #untuk hide
		if($this->uri->segment(5)=='hide'){
		
		$id =(int)$this->uri->segment(6,0);
		$data["flag_hide"]=1;
		$this->db->where("id",$id)->update("menu_lokasi",$data);
		Template::set_message('Lokasi menu berhasil disembunyikan', 'success');
		redirect(SITE_AREA .'/theme/menuthemes/create_location');   	
	    
		}
	   
	   #ListView Lokasi Menu
	   $Listview = $this->db->from('menu_lokasi')->order_by('list_urutan', 'ASC')->get()->result();
	   Template::set('ListView', $Listview);
		
	   #If Proccess Edit Running...
	   
	   if($this->uri->segment(5)=='id'){
		$id =(int)$this->uri->segment(6,0);   
	   	$listEdit=$this->db->from('menu_lokasi')->where('id', $id)->get()->row();
		Template::set('Flist', $listEdit);
	   }
	   
	   
	   
	   #Render Themes
	   Template::set_view('theme/create');
	   Template::render('two_left');	
	}
	 
	#Create Main Menu
	public function create_menu(){
	   
	
	   
 	   $form = $this->input;
 	   
	   #Get Parsing All Menu Item	   
	   $iteral = $this->db->from('meta_menu')->get();
	   Template::set('item', $iteral );
	   
	   #Parsing Menu Location Themes
	   $location = $this->db->from('menu_lokasi')->order_by('list_urutan','ASC')->get()->result(); 
	   Template::set('location', $location);
	   
	   #important Dropdown Location Themes
	   $dropdown = $this->db->from('menu_lokasi')->get()->result(); 
	   Template::set('dropdown', $dropdown );
	   
	   #Categories menu post
	   $this->db->where("type_kategori in('post')");
	   $categories = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('categories', $categories);
	   
	    #Categories menu links
	   $this->db->where("type_kategori in('links')");
	   $links = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('links', $links);
	   
	     #Categories Menu Arsip
	   $this->db->where("type_kategori in('arsip')");
	   $categoriesarsip = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('categoriesarsip', $categoriesarsip);

 	    #Categories produk
	   $this->db->where("type_kategori in('produk')");
	   $categoriesproduk = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('categoriesproduk', $categoriesproduk);
		
		
	   $this->form_validation->set_rules('lokasi_menu', 'lokasi_menu', 'required');
	   $this->form_validation->set_rules('name', 'name', 'required');
        
	    if(isset($_POST["submit"])){
	   if($this->form_validation->run() == FALSE)
		{
			Template::set_message('Silahkan Lengkapi semua data Isian pada Konfigurasi Menu Website. terkecuali Deskripsi', 'error');
		}else{
	   #POST DATA
	        $input = $this->input;
			$rang = $this->db->select_max('rang')->where("location_index",$input->post("lokasi_menu"))->get('meta_menu')->row();
	        if($_POST){
			   $intern = array('parent_id' => $input->post('menu_parent_id') ,
							   'rang' => $rang->rang+1 ,
							   'flag_hide'=>0,
							   'name' => $input->post('name'),
							   
							   'location_index' => $input->post('lokasi_menu'),
							   'id_role' =>$input->post('akses_menu'),
							   'description' => $input->post('description')
							   );
	           
			   #MEMASTIKAN URL POSTS TIDAK DI ISI
			    #APABILA MODULE LINK DI ISI MAKA, SECARA DEFAULT URL POST NULL
			   if($input->post('opt1')=='1'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = $input->post('url_module');
				  $intern['url_kategori'] =0;
				  $intern['url_pages'] = '0';
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			    #APABILA CATEGORIES LINK DI ISI MAKA, SECARA DEFAULT URL POST & MODULE LINK NULL
			   if($input->post('opt1')=='2'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] = $input->post('url_kategori');
				  $intern['url_pages'] = '0';
				   $intern['url_link'] = '';
				   $intern['url_kategori_arsip']=0;
				    $intern['url_kategori_produk'] =0;
			   }
			   
			   #APABILA URL POST DI ISI MAKA, SECARA DEFAULT MODULE LINK NULL
			   if($input->post('opt1')=='3'){ 
			      $intern['url_posts'] =0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_pages'] = '0';
				   $intern['url_link'] = '';
				   $intern['url_kategori_arsip']=0;
				    $intern['url_kategori_produk'] =$input->post('url_kategori_produk');
			   }
			   
			    if($input->post('opt1')=='4'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='#';
				  $intern['url_pages'] = '0';
				   $intern['url_link'] = '';
				   $intern['url_kategori_arsip']=0;
				   $intern['url_kategori_produk'] =0;
			   }
			   
			   if($input->post('opt1')=='5'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = $input->post('hideSetPages');
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			   
			    if($input->post('opt1')=='6'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = 0;
				  $intern['url_link'] = $input->post('url_link');
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			   
			     if($input->post('opt1')=='7'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = 0;
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=$input->post('url_kategori_arsip');
				  $intern['url_kategori_produk'] =0;
			   }
			   
 			   $call = $this->db->insert('meta_menu', $intern );
			   
			   if($call){
				  Template::set_message('Menu Yang anda Masukkan sudah Tersimpan', 'success');
				  redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
			   }
			}
		}
		}
	   #END POST DATA
	   $role= $this->db->query("select * from bf_roles order by role_name asc")->result();
	   Template::set("role",$role);
	   
	   Template::set_view('theme/createmenu');
	   Template::render(); 
	}
	
	
	public function edit(){
 	   
	   $form = $this->input;
 	   
	   #Get Parsing All Menu Item
	   $iteral = $this->db->from('meta_menu')->get();
	   Template::set('item', $iteral );
	   
	   #Parsing Menu Location Themes
	   $loca = $this->db->from('menu_lokasi')->get()->result(); 
	   Template::set('location', $loca );
	   
	   #important Dropdown Location Themes
	   $dropdown = $this->db->from('menu_lokasi')->get()->result(); 
	   Template::set('dropdown', $dropdown );
	   
	   #RETRIVE DATA
	   $id = (int) $this->uri->segment(5,0);
	   $retrive = $this->db->from('meta_menu')->where('id',$id)->get()->row();
	   Template::set('retrive', $retrive);
       
	   #Categories Menu Links
	   $this->db->where('type_kategori in("post")');
	   $categories = $this->db->from('m_kategori')->where( 'deleted',0)->get()->result();
 	   Template::set('categories', $categories);
	   
	   	    #Categories produk
	   $this->db->where("type_kategori in('produk')");
	   $categoriesproduk = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('categoriesproduk', $categoriesproduk);
	   
	          #Categories Menu Arsip
	   $categoriesarsip = $this->db->from('m_kategori')->where("type_kategori",'arsip')->where('deleted',0)->get()->result();
 	   Template::set('categoriesarsip', $categoriesarsip);
	   
	       #Categories produk
	   $this->db->where("type_kategori in('produk')");
	   $categoriesproduk = $this->db->from('m_kategori')->where('deleted',0)->get()->result();
 	   Template::set('categoriesproduk', $categoriesproduk);
	   
	   #POST DATA
	        $input = $this->input;
	        if($_POST){
			   $intern = array('name' => $input->post('name'),
			   					'parent_id'=>$input->post('menu_parent_id'),
			   				   'location_index' => $input->post('lokasi_menu'),
							   'description' => $input->post('description'),
							   'id_role' =>$input->post('akses_menu')
							    );
	           
			    
			   #MEMASTIKAN URL POSTS TIDAK DI ISI
			   #APABILA MODULE LINK DI ISI MAKA, SECARA DEFAULT URL POST NULL
			   if($input->post('opt1')=='1'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = $input->post('url_module');
				  $intern['url_kategori'] =0;
				  $intern['url_pages'] = '0';
				  $intern['url_blank'] ='';
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			    #APABILA CATEGORIES LINK DI ISI MAKA, SECARA DEFAULT URL POST & MODULE LINK NULL
			   if($input->post('opt1')=='2'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] = $input->post('url_kategori');
				  $intern['url_pages'] = '0';
				  $intern['url_blank'] ='';
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				   $intern['url_kategori_produk'] =0;
			   }
			   
			   #APABILA URL POST DI ISI MAKA, SECARA DEFAULT MODULE LINK NULL
			   if($input->post('opt1')=='3'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = '0';
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				     $intern['url_kategori_produk'] =$input->post('url_kategori_produk');
			   }
			   
			    if($input->post('opt1')=='4'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='#';
				  $intern['url_pages'] = '0';
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			   
			   if($input->post('opt1')=='5'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = $input->post('hideSetPages');
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			   
			    if($input->post('opt1')=='6'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = 0;
				  $intern['url_link'] = $input->post('url_link');
				  $intern['url_kategori_arsip']=0;
				  $intern['url_kategori_produk'] =0;
			   }
			   
			  if($input->post('opt1')=='7'){ 
			      $intern['url_posts'] = 0;
				  $intern['url_module'] = '';
				  $intern['url_kategori'] =0;
				  $intern['url_blank'] ='';
				  $intern['url_pages'] = 0;
				  $intern['url_link'] = '';
				  $intern['url_kategori_arsip']=$input->post('url_kategori_arsip');
				  $intern['url_kategori_produk'] =0;
			   }
 			  
			   $this->db->where('id', $id);
			   $call = $this->db->update('meta_menu', $intern );
			    
			   if($call){
				  Template::set_message('Menu Yang anda Masukkan sudah Tersimpan', 'success');
				  redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
			   }
			}
	   #END POST DATA
	   $role= $this->db->query("select * from bf_roles order by role_name asc")->result();
	   Template::set("role",$role);
	   
	   Template::set_view('theme/createmenu');
	   Template::render(); 
	   
	  	
	}
	
	public function hapus(){
	   
	   $id = (int) $this->uri->segment(5,0);
	   $this->db->where('id', $id);
	   $call = $this->db->delete('meta_menu');
	    
		if($call){
				  Template::set_message('Menu Berhasil Di hapus', 'success');
				  redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
		 }
	 	
	}
	
	public function show(){
	   
	   $id = (int) $this->uri->segment(5,0);
	   $data["flag_hide"] = 0;
	   $this->db->where('id', $id);
	   $call = $this->db->update('meta_menu',$data);
	    
		if($call){
				  Template::set_message('Menu Berhasil Di tampilkan', 'success');
				  redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
		 }
	 	
	}
	
	public function hide(){
	   
	   $id = (int) $this->uri->segment(5,0);
	   $data["flag_hide"]=1;
	   $this->db->where('id', $id);
	   $call = $this->db->update('meta_menu',$data);
	    
		if($call){
				  Template::set_message('Menu Berhasil Di sembunyikan', 'success');
				  redirect(SITE_AREA .'/theme/menuthemes/create_menu');   
		 }
	 	
	}
	
	
	#Parsing Json
	public function parsingjson(){
		
 		$jsonstring = isset($_GET['jsonstring']) ? $_GET['jsonstring'] : '';
		$jsonDecoded = json_decode($jsonstring, true, 64);
		 
		$readbleArray = $this->parseJsonArray($jsonDecoded);
		
		// Loop through the "readable" array and save changes to DB
		foreach ($readbleArray as $key => $value) {
		
			// $value should always be an array, but we do a check
			if (is_array($value)) {
 				// Update DB
				$this->db->where('id', $value['id']);
				$data['rang']= $key;
				$data['parent_id'] =$value['parentID'];
				$result = $this->db->update('meta_menu', $data);
				
				echo $this->db->last_query();
 			}
		}
 	}
	
	#Get Parsing Json 
	public function parseJsonArray($jsonArray, $parentID = 0)
	{
	  $return = array();
	  if($jsonArray):
	  foreach ($jsonArray as $subArray) {
		 $returnSubSubArray = array();
		 if (isset($subArray['children'])) {
		   $returnSubSubArray = $this->parseJsonArray($subArray['children'], $subArray['id']);
		 }
		 $return[] = array('id' => $subArray['id'], 'parentID' => $parentID);
		 $return = array_merge($return, $returnSubSubArray);
	  }
      endif;
	  return $return;
	}
	
	#Using Dialog Get Object SET MENU
	public function set_menu_get(){
	     $data['ListView'] = $this->db->select('meta_menu.*, post_meta.judul')->from('meta_menu')
		 							  ->join('post_meta', 'post_meta.id = meta_menu.url_posts', 'left')
 									  ->get()->result();
	     $this->load->view('dialogs/set_menu', $data);
		 //die();
	}
	
	
 
	
  #Parsing Json
	public function parsingjsonurutan(){
		$readbleArray = isset($_GET['recordsArray']) ? $_GET['recordsArray'] : '';
 	 
 		 // Loop through the "readable" array and save changes to DB
		$listingCounter = 1;
		if($readbleArray){
			foreach ($readbleArray as $value) {
					$this->db->where('id', $value);
					$data['list_urutan'] = $listingCounter;
					$result = $this->db->update('menu_lokasi', $data);
					$listingCounter = $listingCounter + 1;	
			} 
		}
 	}
	
	#Using Dialog Get Object SET POST
	#Digunakan Oleh Modules Setmenuthemes untuk post
	public function set_post_get(){
	     $data['ListView'] = $this->db->select('post_meta.*')->from('post_meta')
		                              ->where('status_tampil',0)
									  ->where('deleted',0)
 									  ->get()->result();
	     $this->load->view('dialogs/set_posts', $data);
		 
	}
	#Using Dialog Get Object SET POST
	#Digunakan Oleh Modules Setmenuthemes untuk page
	public function set_pages_get(){
		
		 $data['ListView'] = $this->db->from('pages_meta')
		 							  ->where('status_tampil',0)
									  ->where('deleted',0)
									  ->get()
									  ->result();
									  
	     $this->load->view('dialogs/set_pages', $data);
	}
	
}
?>