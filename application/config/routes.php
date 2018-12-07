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
// Route for Admin User__

$route['admin/category/product/(:any)'] = 'categories/index/$1';
$route['admin/category/create'] = 'admin/create_category';
$route['admin/category'] = 'admin/category';
$route['admin/product/update'] = 'admin/update_product';
$route['admin/product/edit_product/(:any)'] = 'admin/edit_product/$1';
$route['admin/product/create_product'] = 'admin/create_product';
$route['admin/product/(:any)'] = 'admin/view_product/$1';
$route['admin/product'] = 'admin/product';
$route['admin'] = 'admin/index';

// Routes for Customer/Users__

$route['users/(:any)'] = 'user/index/$1';
$route['users'] = 'user/index';

// Route for Default E-commerce website__

$route['faq'] = 'pages/faq';
$route['contact'] = 'pages/contact';
$route['about'] = 'pages/about';
$route['product/(:any)'] = 'pages/view/$1';
$route['product'] = 'pages/product';
// $route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
