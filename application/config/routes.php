<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'Home/error404';
$route['translate_uri_dashes'] = FALSE;
$route['admin-profile'] 		= 'Admin/profile';
$route['admin-vision'] 			= 'Admin/vision';
$route['admin-mission']			= 'Admin/mission';
$route['admin-diesel'] 			= 'Admin/diesel';
$route['admin-marine'] 			= 'Admin/marine';
$route['admin-machine'] 		= 'Admin/machine';
$route['admin-career'] 			= 'Admin/career';
$route['admin-event'] 			= 'Admin/event';
$route['admin-user'] 			= 'Admin/manage_user';
$route['admin-messages'] 		= 'Admin/messages';
$route['dashboard'] 			= 'Admin/dashboard';
$route['logout'] 				= 'En/logout';

/////////////////////////////Bahasa Indonesia
$route['update-profile'] 					= 'Data_control/update_profile';
$route['update-vision']						= 'Data_control/update_vision';
$route['update-mission']					= 'Data_control/update_mission';
$route['profil']							= 'Home/profil';
$route['mesin-diesel']						= 'Home/unit_dem';
$route['galangan-kapal']					= 'Home/unit_sm';
$route['pusat-cnc']							= 'Home/unit_mc';
$route['acara']								= 'Home/galery';
$route['karir']								= 'Home/karir';
$route['kontak']							= 'Home/kontak';
$route['quality-control-mesin-diesel']		= 'Home/qc_dem';
$route['quality-control-pusat-cnc']			= 'Home/qc_mc';
$route['produk-diesel-engine/(:any)']		= 'Home/detail_product/$1';
$route['produkk-diesel-engine/(:any)']		= 'Home/detail_product2/$1';
$route['detail-acara/(:any)']				= 'Home/detail_event/$1';

//////	///////////////////////Bahasa Inggris
$route['profile']							= 'English/profil';
$route['diesel-engine']						= 'English/unit_dem';
$route['shipyard']							= 'English/unit_sm';
$route['machining-centre']					= 'English/unit_mc';
$route['event']								= 'English/galery';
$route['career']							= 'English/karir';
$route['contact']							= 'English/kontak';
$route['quality-control-diesel-engine']		= 'English/qc_dem';
$route['quality-control-cnc']				= 'English/qc_mc';
$route['diesel-engine-product/(:any)']		= 'English/detail_product/$1';
$route['diesel-engine-productt/(:any)']		= 'English/detail_product2/$1';
$route['event-details/(:any)']				= 'English/detail_event/$1';







