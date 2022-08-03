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
$route['default_controller'] = 'welcome';

$route['participantes'] = 'participante/Main'; //muestra una lista con todol los participantes
$route['participantes/registro'] = 'participante/Add';  //muesta la pagina nuevo participante
$route['participantes/registro/save'] = 'participante/Add/save'; //guarda los datos recibidos de formulario add participantes
$route['participantes/vista-update/(:num)'] = 'participante/Edit/index/$1'; //muestra dos datos del participante a editar
$route['participantes/update/(:num)'] = 'participante/Edit/update/$1';  //guarda los datos recibido por la vista participantes/edit
$route['participantes/delete/(:num)'] = 'participante/Main/delete/$1'; //elimnia los datos de un participante

$route['participantes/inscripcion/(:num)'] = 'inscripcion/Add/index/$1';
$route['participantes/inscripcion/save'] = 'inscripcion/Add/save';


//docentes
$route['docentes'] = 'docentes/Main';  //muestra una lista con todol los docentes
$route['docentes/registro'] = 'docentes/Add';  //muesta la pagina nuevo participante
$route['docentes/registro/save'] = 'docentes/Add/save';// guarda los datos recibidos de formulario add docentes
$route['docentes/vista-update/(:num)'] = 'docentes/Edit/index/$1'; //muestra los datos del docente a editar
$route['docentes/update/(:num)'] = 'docentes/Edit/update/$1';  //guarda los datos recibido por la vista participantes/edit
$route['docentes/delete/(:num)'] = 'docentes/Main/delete/$1'; //elimina los datos de un docente

//cursos
$route['cursos'] = 'cursos/Main';

$route['cursos/participantes/(:num)'] = 'participante/Main/participantes_curso/$1';
$route['cursos/registro'] = 'cursos/Add';
$route['cursos/registro/save'] = 'cursos/Add/save';

$route['inscripcion'] = 'inscripcion/Main';
$route['inscripcion/delete/(:num)']['post'] = 'inscripcion/Main/delete/$1';














$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


