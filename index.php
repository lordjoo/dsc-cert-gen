<?php
ob_flush();
session_start();

// requiring the libraries we need
require "vendor/autoload.php";
require 'bootstrap.php';

// init the error handler
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// auto registering the controller classes
spl_autoload_register(function ($name) {
    if (file_exists("app/controllers/$name.php"))
        require "app/controllers/$name.php";
});

startApp();
