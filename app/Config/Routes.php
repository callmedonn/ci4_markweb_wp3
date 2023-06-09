<?php

namespace Config;

// Create a new instance of our RouteCollection class.
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/templates', 'Templates::index');
$routes->get('/price', 'Price::index');
$routes->get('/no-service', 'NoService::index');

/**
 * API
 */
// User
$routes->get('user', 'UserController::index');
$routes->post('user', 'UserController::create');
$routes->get('user/(:num)', 'UserController::show/$1');
$routes->delete('user/del/(:num)', 'UserController::delete/$1');


// Template
$routes->get('templates/get', 'TemplatesController::index');
$routes->post('templates/add', 'TemplatesController::create');
$routes->get('templates/(:num)', 'TemplatesController::show/$1');
$routes->post('templates/upd/(:num)', 'TemplatesController::update/$1');
$routes->delete('templates/(:num)', 'TemplatesController::delete/$1');
$routes->get('templates/latest', 'TemplatesController::getLatest');
$routes->get('templates/cart', 'TemplatesController::getCart');
$routes->get('templates/assets_template', 'Templates::getTemplatesRoute');

// Order
$routes->post('order', 'OrderController::create');
$routes->post('order/image', 'OrderController::image');
$routes->get('order/get', 'OrderController::index');
$routes->get('order/get/(:num)', 'OrderController::show/$1');
$routes->post('order/upd/(:num)', 'OrderController::update/$1');
$routes->delete('order/del/(:num)', 'OrderController::delete/$1');


// Auth
$routes->get('auth/login', 'AuthController::index');
$routes->get('auth/register', 'AuthController::register');
$routes->post('login/process', 'AuthController::process');
$routes->get('logout', 'AuthController::logout');

// Checkout
$routes->get('templates/checkout', 'TemplatesController::getCheckout');

// About
$routes->get('about', 'About::index');

// Portfolio
$routes->get('portfolio', 'Portfolio::index');

// Profile
$routes->get('profile', 'Profile::index');

// Admin
$routes->get('dashboard', 'AdminController::index');
$routes->get('admin/templates', 'AdminController::templatesAdmin');
$routes->get('admin/templates/(:num)', 'AdminController::show/$1');
$routes->get('admin/orders/(:num)', 'AdminController::showOrder/$1');
$routes->get('admin/addTemplate', 'AdminController::addTemplate/$1');
$routes->get('admin/user', 'AdminController::usersAdmin');
$routes->get('admin/order', 'AdminController::ordersAdmin');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}