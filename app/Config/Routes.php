<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Pages::home');
$routes->get('/home', 'Pages::home');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::customers');
$routes->get('/users', 'Users::users');

