<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('ingresar', 'Home::ingresar');
$routes->get('sobre', 'Home::sobre');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('catalogo', 'Home::catalogo');
