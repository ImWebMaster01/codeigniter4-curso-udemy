<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PeliculaCo::index');

#genera rutas para funcionar en navegadores web
#$routes->presenter('home');

//$routes->get('pelicula','PeliculaCo::index');


$routes->presenter('pelicula',['controller' => 'peliculaCo']);