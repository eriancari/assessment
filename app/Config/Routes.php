<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Pages;
use App\Controllers\Writers;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/(:segment)', [Pages::class, 'view']);

$routes->resource('writers');