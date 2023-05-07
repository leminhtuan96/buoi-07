<?php


$routeinstance->addRoute(
    '/',
    [
        'controller' => 'App\Http\Controllers\HomeController',
        'action' => 'index'
    ]
);

//add products
$routeinstance->addRoute(
    '/products/add',
    [
        'controller' => 'App\Http\Controllers\HomeController',
        'action' => 'create'
    ]
);