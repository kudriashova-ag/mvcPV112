<?php

namespace Lib;

class Router
{
    public static function start(): void
    {
        $url = $_GET['url'] ?? '/';   //  '/',  'contacts' ,  'article/1'

        require_once __DIR__ . '/../routes.php';
        
        $isRouteFound = false;
        foreach($routes as $pattern => $controllerAndMethod ){
            preg_match("~^$pattern$~", $url, $matches);
            if(!empty($matches)){
                $isRouteFound = true;
                break;
            }
        }

        if (!$isRouteFound) {
            die('Page Not Found');
        }

        list($ctrlName, $ctrlMethod) = $controllerAndMethod;

        if(!file_exists("Core/Controllers/$ctrlName.php")){
            die("Controller $ctrlName Not Found");
        }

        $controller = new ("\\Core\\Controllers\\$ctrlName")();

        if(!method_exists($controller, $ctrlMethod)){
            die("Method $ctrlMethod Not Found");
        }
        unset($matches[0]); 
        $controller->$ctrlMethod(...$matches); 
    }
}

