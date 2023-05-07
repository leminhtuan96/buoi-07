<?php

namespace Router;

class Router
{
    private $routes = [];
    public function addRoute($path, $routerInfo)
    {
        $this->routes[$path] = $routerInfo;
    }

    public function disopatchRoute($pathCurrent)
    {
        foreach ($this->routes as $path => $routeCurrent) {
            if ($path === $pathCurrent) {
                $controller = $routeCurrent["controller"];
                $action = $routeCurrent["action"];
                // var_dump($controller);
                // var_dump($action);
                // die();

                $instanceController = new $controller();
                $instanceController->$action();
            }
        }
    }
}
