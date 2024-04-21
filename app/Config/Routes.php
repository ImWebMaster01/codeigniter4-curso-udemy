<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PeliculaCo::index');

#genera rutas para funcionar en navegadores web
#$routes->presenter('home');

//$routes->get('pelicula','PeliculaCo::index');




#Agrupamos rutas
$routes->group('dashboard',function($routes){

    $routes->presenter('pelicula',['controller' => 'peliculaCo']);
    $routes->presenter('categoria',['controller' => 'categoriaCo']);

   // $routes->get('test','PeliculaCo::test',['as'=>'test']);

});