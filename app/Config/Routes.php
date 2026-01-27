<?php

namespace Config;

use CodeIgniter\Config\Services;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Public Routes
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Admin Routes
 * --------------------------------------------------------------------
 */
$routes->get('admin', 'Admin\Auth::index');
$routes->post('admin/login', 'Admin\Auth::login');
$routes->get('admin/dashboard', 'Admin\Dashboard::index');
$routes->get('admin/logout', 'Admin\Auth::logout');

$routes->get('about', 'Pages::about');

$routes->get('project/(:segment)', 'Projects::show/$1');

$routes->get('contact', 'Pages::contact');
$routes->post('contact', 'Pages::sendContact');
$routes->get('projects', 'Projects::index');
$routes->get('set-theme/(:segment)', 'Theme::set/$1');



$routes->group('admin', function($routes){
    $routes->get('projects', 'Admin\Projects::index');
    $routes->get('projects/create', 'Admin\Projects::create');
    $routes->post('projects/store', 'Admin\Projects::store');
});



// $routes->group('api', function($routes){
//     $routes->get('projects', 'Api\Projects::index');
//     $routes->get('projects/(:segment)', 'Api\Projects::show/$1');
    
// });