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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

//admin
$route['admin'] = "webadmin/welcome";
$route['admin/main'] = "webadmin/welcome/main";
$route['admin/album'] = "webadmin/album";
$route['admin/albumkinds'] = "webadmin/album/kinds";
$route['admin/album/(:any)'] = "webadmin/album/$1";
$route['admin/projects'] = "webadmin/projects";
$route['admin/projects/(:any)'] = "webadmin/projects/$1";
$route['admin/projects/(:any)/(:num)'] = "webadmin/projects/$1/$2";
$route['admin/news'] = "webadmin/news";
$route['admin/news/(:any)'] = "webadmin/news/$1";
$route['admin/news/(:any)/(:num)'] = "webadmin/news/$1/$2";
$route['admin/contact'] = "webadmin/contact";
$route['admin/contact/(:any)/(:num)'] = "webadmin/contact/$1/$2";
$route['admin/manage/password'] = "webadmin/manage/password";


//frontend
$route['main/page/(:num)'] = "welcome/main/$1";
$route['news'] = "welcome/news";
$route['news/(:num)'] = "welcome/news/$1";
$route['news/page/'] = "welcome/news";
$route['news/page/(:num)'] = "welcome/news/null/$1";
$route['brand/story'] = "welcome/brand/story";
$route['brand/design'] = "welcome/brand/design";
$route['brand/case'] = "welcome/brand/case";
$route['interior'] = "welcome/interior";
$route['interior/(:num)'] = "welcome/interior/$1";
$route['exhibition'] = "welcome/exhibition";
$route['exhibition/(:num)'] = "welcome/exhibition/$1";
$route['graphic'] = "welcome/graphic";
$route['graphic/(:num)'] = "welcome/graphic/$1";
$route['ourteam'] = "welcome/ourteam";
$route['contact'] = "welcome/contact";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
