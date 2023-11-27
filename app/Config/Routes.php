<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/get/boxes', 'Home::getBoxes/');

$routes->get('/register/movement', 'Movement::register');
$routes->get('/update/movement/(:num)', 'Movement::edit/$1');
$routes->get('/delete/movement/(:num)', 'Movement::delete/$1');

$routes->post('/register/store', 'Movement::store');
$routes->post('/update/store/(:num)', 'Movement::update/$1');

$routes->get('/account/login', 'Account::index');
$routes->get('/account/register', 'Account::register');
$routes->get('/account/exit', 'Account::exit');

$routes->post('/account/login', 'Account::login');
$routes->post('/account/register', 'Account::storeRegister');