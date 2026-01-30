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
//  */
// $routes->get('admin', 'Admin\Auth::index');
// $routes->post('admin/login', 'Admin\Auth::login');
// $routes->get('admin/dashboard', 'Admin\Dashboard::index');
// $routes->get('admin/logout', 'Admin\Auth::logout');

$routes->get('about', 'Pages::about');

$routes->get('project/(:segment)', 'Projects::show/$1');

$routes->get('contact', 'Pages::contact');
$routes->post('contact', 'Pages::sendContact');
$routes->get('projects', 'Projects::index');
$routes->get('set-theme/(:segment)', 'Theme::set/$1');



// $routes->group('admin', function($routes){
//     $routes->get('projects', 'Admin\Projects::index');
//     $routes->get('projects/create', 'Admin\Projects::create');
//     $routes->post('projects/store', 'Admin\Projects::store');
// });

// $routes->get('make-hash', function () {
//     echo password_hash('admin123', PASSWORD_DEFAULT);
//     exit;
// });

$routes->get('admin/login', 'Admin\Auth::login');
$routes->post('admin/auth', 'Admin\Auth::authenticate');
$routes->get('admin/logout', 'Admin\Auth::logout');

$routes->get('admin', 'Admin\Dashboard::index', ['filter' => 'adminauth']);

$routes->group('admin', ['filter' => 'adminauth'], function($routes) {
    $routes->get('skills', 'Admin\Skills::index');
$routes->get('skills/create', 'Admin\Skills::create');
$routes->post('skills/store', 'Admin\Skills::store');
$routes->get('skills/edit/(:num)', 'Admin\Skills::edit/$1');
$routes->post('skills/update/(:num)', 'Admin\Skills::update/$1');
$routes->get('skills/delete/(:num)', 'Admin\Skills::delete/$1');


$routes->get('settings', 'Admin\Settings::index');

$routes->post('admin/settings/update', 'Admin\Settings::update');
    $routes->get('skills', 'Admin\Skills::index');
     $routes->group('projects', function ($routes) {
        $routes->get('/', 'Admin\Projects::index');
        $routes->get('create', 'Admin\Projects::create');
        $routes->post('store', 'Admin\Projects::store');
        $routes->get('edit/(:num)', 'Admin\Projects::edit/$1');
        $routes->post('update/(:num)', 'Admin\Projects::update/$1');
        $routes->get('delete/(:num)', 'Admin\Projects::delete/$1');
    });
    
    $routes->get('experience', 'Admin\Experience::index');
    $routes->get('tech-stack', 'Admin\TechStack::index');
    $routes->get('testimonials', 'Admin\Testimonials::index');
    $routes->get('timeline', 'Admin\Timeline::index');
    // $routes->get('settings', 'Admin\Settings::index');
});


// $routes->group('api', function($routes){
//     $routes->get('projects', 'Api\Projects::index');
//     $routes->get('projects/(:segment)', 'Api\Projects::show/$1');
    
// });