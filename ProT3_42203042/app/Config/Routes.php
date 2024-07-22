<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('ingreso', 'Home::ingreso');
$routes->get('registro', 'Home::registro');
$routes->get('sobre', 'Home::sobre');
/* mi crud */
$routes->get('listado', 'Home::listado');
$routes->get('actualizar', 'Home::actualizar');

/* rutas del registro de usuario */
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar_registro', 'usuario_controller::formValidation');

/*  rutas de ingreso */
$routes->get('/ingresar', 'login_controller');
$routes->post('/enviar_ingreso', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');

/* rutas del crud */
$routes->get('/listado', 'CrudController::create');
$routes->post('/crear', 'CrudController::formValidation');
$routes->get('/eliminar/(:num)', 'CrudController::eliminar/$1');

$routes->post('actualizar/(:num)', 'CrudController::actualizar/$1');
$routes->get('editar/(:num)', 'CrudController::editar/$1');
