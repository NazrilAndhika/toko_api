<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('' , ['filter' => 'cors'] , function ($routes) {
    $routes->options('(:any)', function() {}); 
    $routes->options('/', function() {});
    $routes->post('/register', 'RegistrasiController::registrasi');
    $routes->post('/login', 'LoginController::login');
});



$routes->group('produk',['filter' => 'cors'], function ($routes){
    $routes->options('(:any)', function() {}); 
    $routes->options('/', function() {});
    
    $routes->post('/', 'ProdukController::create');
    $routes->get('/', 'ProdukController::list');
    $routes->get('/(:segment)', 'ProdukController::detail/$1');
    $routes->put('(:num)/update', 'ProdukController::ubah/$1');
    $routes->delete('(:num)', 'ProdukController::hapus/$1');
});
