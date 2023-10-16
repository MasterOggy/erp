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
$route['default_controller'] = 'welcome/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'welcome/dashboard';
$route['user-login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';

$route['add-developers'] = 'developers/add_developers';
$route['all-developers'] = 'developers/all_developers';
$route['edit-developer'] = 'developers/edit_developer';
$route['remove-developer/(:any)'] = 'developers/remove_developer/$1';



$route['add-projects'] = 'projects/add_projects';
$route['all-projects'] = 'projects/project_list';
$route['edit-project/(:any)'] = 'projects/edit_project/$1';
$route['remove-project/(:any)'] = 'projects/remove_project/$1';
$route['add-structure'] = 'projects/add_structure';
$route['view-structure'] = 'projects/view_structure';
$route['edit-structure'] = 'projects/edit_structure';
$route['add-stage'] = 'projects/add_stage';
$route['edit-stage'] = 'projects/edit_stage';
$route['add-unit'] = 'projects/add_unit';
$route['edit-unit'] = 'projects/edit_unit';
$route['add-subunit'] = 'projects/add_subunit';
$route['edit-subunit'] = 'projects/edit_subunit';


$route['trade-activity'] = 'trade/trade_activity';
$route['all-trade-activity'] = 'trade/all_trade_activity';
$route['remove-tradegroup/(:any)'] = 'trade/remove_tradegroup/$1';
$route['add-tradegroup'] = 'trade/add_tradegroup';
$route['edit-tradegroup'] = 'trade/edit_tradegroup';
$route['add-trade'] = 'trade/add_trade';
$route['edit-trade'] = 'trade/edit_trade';
$route['remove-trade/(:any)'] = 'trade/remove_trade/$1';
$route['add-subgroup'] = 'trade/add_subgroup';
$route['edit-subgroup'] = 'trade/edit_subgroup';
$route['remove-subgroup/(:any)'] = 'trade/remove_subgroup/$1';
$route['add-questions'] = 'trade/add_question';
$route['edit-question/(:any)'] = 'trade/edit_question/$1';


$route['new-observation'] = 'observations/new_observation';
$route['observation-list'] = 'observations/observation_list';
$route['edit-view-observation/(:any)'] = 'observations/edit_view_observation/$1';
$route['remove-observation/(:any)'] = 'observations/remove_observation/$1';
$route['delete-image/(:any)/(:any)'] = 'observations/delete_image/$1/$2';


$route['user-list'] = 'users/user_list';
$route['new-user'] = 'users/create_user';
$route['edit-user/(:any)'] = 'users/edit_user/$1';
$route['delete-user/(:any)'] = 'users/delete_user/$1';


$route['generate-report'] = 'report/generate_report';