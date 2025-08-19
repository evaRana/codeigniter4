<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('login', 'Dashboard::login');
    $routes->post('login', 'Dashboard::login');
    $routes->get('logout', 'Dashboard::logout');
});

$routes->group('admin', ['filter' => 'auth:admin', 'namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('createproject', 'Dashboard::create');
    $routes->get('report', 'Dashboard::report');
    $routes->get('userprofile', 'Dashboard::profile');
    $routes->get('texteditor', 'Dashboard::texteditor');
});


$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('user', 'User::index');
});



// $routes->group('api', ['filter' => 'jwt'], function($routes) {
//     $routes->get('user', 'Api\User::index');
//     $routes->get('profile', 'Api\User::profile');
// });