<?php
//1. require file

require __DIR__ . '/Autoload/Autoload.php';
// require $rootDir . 'App/Http/Controllers/HomeController.php';
// require $rootDir . 'App/Http/Controllers/NewController.php';

$homeController = new App\Http\Controllers\HomeController();
$homeController->index();

$newController = new App\Http\Controllers\NewController();
$newController->index();