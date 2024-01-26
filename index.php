<?php

use Lib\Router;

require_once './vendor/autoload.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "./$class.php";
});

Router::start();

?>