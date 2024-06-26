<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Employees::index');
$routes->get('/dropbox', 'Dropbox::index');
$routes->get('/dropbox-test', 'Dropbox::indexv2');
$routes->get('/dropbox-test/pdf/print', 'Dropbox::print');
$routes->get('/pdf/cetak', 'Dropbox::printDefault');
$routes->get('/employees-form', 'Employees::form');
$routes->post('/employees-form', 'Employees::add');
$routes->get('employees/delete/(:num)', 'Employees::delete/$1');
$routes->get('employees/edit/(:num)', 'Employees::edit/$1');
$routes->post('employees/update','Employees::update');
