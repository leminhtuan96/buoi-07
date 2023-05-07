<?php
//1. require file

require __DIR__ . '/Autoload/Autoload.php';
// require $rootDir . 'App/Http/Controllers/HomeController.php';
// require $rootDir . 'App/Http/Controllers/NewController.php';

// 2. Định tuyến controller, action dựa vào hệ thống routing build in
$routeinstance = new Router\Router();

//require router
require __DIR__ . '/Router/web.php';

//dispath route
$pathCurrent = $_SERVER["REQUEST_URI"];
$routeinstance->disopatchRoute($pathCurrent);
