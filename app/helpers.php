<?php

use App\lib\Flash;

if (!function_exists('view')){
    function view($path,$data = []){
        return include __DIR__."/../views/$path.php";
    }
}

if (!function_exists('flash')) {
    function flash($message = '', $type = 'info', TemplateInterface $template = null)
    {
        $flash = new Flash();
        if (!empty($message)) {
            return $flash->message($message, $type);
        }
        return $flash;
    }
}
