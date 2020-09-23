<?php

function startApp() {
    $routes = require_once 'routes.php';
    $res = array_values(array_filter($routes,function ($e){
        return ($e['url']==$_SERVER['REQUEST_URI'] && $e['method']==strtolower($_SERVER['REQUEST_METHOD']));
    }));
    if (count($res)==0)
        return require_once 'views/404.php';
    $route_handler = explode('@',$res[0]['call']);
    $handler = new $route_handler[0]();
    return $handler->{$route_handler[1]}();

}