<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$hostparsing = explode(".",$_SERVER["HTTP_HOST"]);

if($hostparsing[0]=="webtasikportal"){
    $route['default_controller'] = "home/welcome";
}else{
    $route['default_controller'] = "home";
}


$route['404_override'] = '';

// Authentication
$route['login']					= 'users/login';
$route['register']				= 'users/register';
$route['profile-user']				= 'users/profile';
$route['cekoutregister']				= 'users/cekoutregister';
$route['contact']				= 'testimoni/index';
$route['checkout']				= 'users/cekoutkotatujuan';

$route['cekoutregister/(:any)']				= 'users/cekoutregister/$1';
$route['cekoutregister/(:any)/(:any)/(:any)']				= 'users/cekoutregister/$1/$2/$3';
$route['affiliates-program']				= 'users/affaliate';
$route['logout']				= 'users/logout';
$route['forgot_password']		= 'users/forgot_password';
$route['reset_password/(:any)/(:any)']	= "users/reset_password/$1/$2";

// Contexts
$route[SITE_AREA .'/([a-z_]+)/(:any)/(:any)/(:any)/(:any)/(:any)']		= "$2/$1/$3/$4/$5/$6";
$route[SITE_AREA .'/([a-z_]+)/(:any)/(:any)/(:any)/(:any)']		= "$2/$1/$3/$4/$5";
$route[SITE_AREA .'/([a-z_]+)/(:any)/(:any)/(:any)']		= "$2/$1/$3/$4";
$route[SITE_AREA .'/([a-z_]+)/(:any)/(:any)'] 		= "$2/$1/$3";
$route[SITE_AREA .'/([a-z_]+)/(:any)']				= "$2/$1/index";
$route[SITE_AREA .'/content']				= "admin/content/index";
$route[SITE_AREA .'/reports']				= "admin/reports/index";
$route[SITE_AREA .'/developer']				= "admin/developer/index";
$route[SITE_AREA .'/settings']				= "settings/index";

$route[SITE_AREA]	= 'admin/home';

// Activation
$route['activate']		        = 'users/activate';
$route['activate/(:any)']		= 'users/activate/$1';
$route['resend_activation']		= 'users/resend_activation';

//produk 
$route['sitemap\.xml'] = "home/sitemap";
$route['produk-detail/(:any)/(:any)']	= "produk/detail/$1/$2";
$route['produk-kategori/(:any)']	= "produk/kategori/$1";
$route['produk-brand/(:any)']	= "produk/brand/$1";
$route['konfirmasi-pembayaran']	= "produk/konfirmasibayar";
$route['get-banner']	= "payaffaliate/banner";
$route['get-link']	= "payaffaliate/link";
$route['affiliates-profile']	= "payaffaliate/index";
$route['affiliates-member']	= "payaffaliate/member";
$route['keranjang-belanja']	= "produk/keranjang";
$route['order-history']	= "produk/historyorder";
$route['produk-promo/(:any)']	= "produk/promo/$1";
$route['post/(:any)']	= "post/categories/$1";
$route['blog/(:any)']	= "post/read/$1";
$route['promotion/(:any)']				= 'promotion/index/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */