<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\PeliculaCo::index');

#genera rutas para funcionar en navegadores web
#$routes->presenter('home');
//$routes->get('pelicula','PeliculaCo::index');



#Agrupamos rutas
$routes->group('dashboard',function($routes){

    $routes->presenter('pelicula',['controller' => 'Admin\PeliculaCo']);
   # $routes->presenter('categoria',['controller' => 'Dashboard\CategoriaCo','except'=>['show']]);//bloqueo la ruta para el método show
    $routes->presenter('categoria',['controller' => 'Admin\CategoriaCo']);
    // $routes->presenter('categoria',['controller' => 'categoriaCo']);
   // $routes->get('test','PeliculaCo::test',['as'=>'test']);


});