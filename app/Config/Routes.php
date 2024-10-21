<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProjectPlant::index');
$routes->get('/contact', 'ProjectPlant::contact');
$routes->get('/about', 'ProjectPlant::about');
$routes->get('/samplepost', 'ProjectPlant::samplePost');
$routes->get('/predict', 'ProjectPlant::predict');
