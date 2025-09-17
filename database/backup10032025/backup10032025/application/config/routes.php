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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Userlogin';
$route['cek_login'] = 'Dashboard/Login';
$route['home'] = 'Dashboard/admin';
$route['get_visitor'] = 'Dashboard/visitor';
$route['logout'] = 'Dashboard/logout';

//route menu
$route['form_header'] = 'Form/Form_Header';
$route['form_product'] = 'Form/Form_Product';
$route['form_company'] = 'Form/Form_Company';
$route['form_partner'] = 'Form/Form_Partner';
$route['form_customer'] = 'Form/Form_Customer';
$route['contact_us'] = 'Form/contact_us';
$route['sosmed'] = 'Form/Form_Sosmed';
$route['profile'] = 'Form/profile';
$route['content'] = 'Form/content';
$route['reset_password'] = 'Dashboard/reset';
$route['reset'] = 'Dashboard/reset_password';
$route['form_event'] = 'Form/Form_Event';
$route['form_news'] = 'Form/Form_News';
$route['news/info_news/(:any)'] = 'Dashboard/index/$1';
$route['event/event_update/(:any)'] = 'Dashboard/index/$1';




//$route['logout'] = 'login_admin/logout';

// $route['login'] = 'login';
// $route['cekuser'] = 'login/cekuser';
// $route['logout'] = 'Login/logout';