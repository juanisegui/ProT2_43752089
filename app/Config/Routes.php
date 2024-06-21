<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('about_view', 'Home::about_view');
$routes->get('quienes-somos_view', 'Home::quienes_somos');
$routes->get('login_view', 'Home::login');
$routes->get('registro_view', 'Home::registro');
