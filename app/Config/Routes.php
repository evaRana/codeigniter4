<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('createproject', 'Dashboard::create');
    $routes->get('report', 'Dashboard::report');
    $routes->get('userprofile', 'Dashboard::profile');
    $routes->get('texteditor', 'Dashboard::texteditor');


});