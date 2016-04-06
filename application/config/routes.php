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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sobre'] = "about";
$route['contato'] = "contact";
$route['mailing'] = "contact/mailing";

$route['midia/(:num)'] = "media/get_media/$1";
$route['midia/(:any)'] = "media/get_media_by_name/$1";
$route['midia'] = "media";

$route['projeto/(:num)'] = "project/get_project/$1";
$route['projeto/(:any)'] = "project/get_project_by_name/$1";
$route['projetos/todos'] = "project/all";
$route['projetos/tradicional'] = "project/get_projects_by_category/Tradicional";
$route['projetos/moderno'] = "project/get_projects_by_category/Moderno";
$route['projetos'] = "project";

/*
 * Painel
*/

$route['painel/projeto/remover/(:num)'] = "admin/remove_project/$1";
$route['painel/midia/remover/(:num)'] = "admin/remove_media/$1";

$route['painel/projeto/(:num)'] = "admin/add_project/$1";
$route['painel/midia/(:num)'] = "admin/add_media/$1";
$route['painel/projeto/novo'] = "admin/add_project/novo";
$route['painel/midia/nova'] = "admin/add_media/nova";

$route['painel/projeto/subir/(:num)'] = "admin/project_move/$1/1";
$route['painel/projeto/descer/(:num)'] = "admin/project_move/$1/-1";
$route['painel/projeto/destaque/(:num)'] = "admin/project_move/$1/11";
$route['painel/projeto/remover_destaque/(:num)'] = "admin/project_move/$1/false";


$route['painel/projeto'] = "admin/add_project";
$route['painel/midia'] = "admin/add_media";

$route['painel/projetos/erro'] = "admin/projects/true";
$route['painel/projetos'] = "admin/projects";
$route['painel/midias'] = "admin/medias";

$route['painel/login'] = "admin/login";
$route['painel/sair'] = "admin/logout";

$route['painel'] = "admin";