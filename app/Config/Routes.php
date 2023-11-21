<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/starter', 'Home::starter');

$routes->get('/components/card', 'Components::card');
$routes->get('/components/cardbox', 'Components::cardbox');
$routes->get('/components/alert', 'Components::alert');
$routes->get('/components/table', 'Components::table');
$routes->get('/components/carousel', 'Components::carousel');
$routes->get('/components/social', 'Components::social');
