<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HelloController::index');

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('product');
});

$routes->resource('register');
$routes->resource('login');