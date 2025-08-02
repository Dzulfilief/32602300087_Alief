<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/dunia', 'HelloWorld::halodunia');
$routes->get('form', 'FormController::index');
$routes->post('form', 'FormController::submit');
$routes->get('latihanview', 'HelloWorld::index');
$routes->get('layouting', 'LayoutingController::index');
$routes->get('profil', 'Profile::profil');
$routes->get('skill', 'Profile::skill');
