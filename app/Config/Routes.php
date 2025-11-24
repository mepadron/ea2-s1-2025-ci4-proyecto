<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/avatar', 'Home::avatar');
$routes->get('/login', 'LoginController::index');
$routes->get('/loginForm', 'LoginController::showLogin');
$routes->post('/login/loginValid', 'LoginController::loginValid');
