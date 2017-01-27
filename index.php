<?php

use src\Dispatcher;

require_once "vendor/autoload.php";

define('_PUBLIC_PATH_', __DIR__ .'\\public\\');
if (isset($_SERVER['PATH_INFO'])&&$_SERVER['PATH_INFO']!=null){
    $url = $_SERVER['PATH_INFO'];
}else{
    $url = null;
}

$path = explode(DIRECTORY_SEPARATOR, __DIR__);
define('PATH', '/' . $path[sizeof($path)-1]);

$dispatch = new Dispatcher($url,$method);
echo $dispatch->dispatch();