<?php
session_start();
ob_flush();
require "vendor/autoload.php";
require 'functions.php';
$routes = require_once 'routes.php';

//$result_key = array_search([ 'url' => '/','method' => 'post'],array_column($routes,['url','method']));
//var_dump($result_key);
$res = array_values(array_filter($routes,function ($e){
    return ($e['url']==$_SERVER['REQUEST_URI'] && $e['method']==strtolower($_SERVER['REQUEST_METHOD']));
}));
if (count($res)==0)
    return require_once 'views/404.php';
$res[0]['call']();


