<?php
namespace Core\Controllers;

abstract class Controller{
    public static function dump($obj) : void
    {
        echo '<pre>' . print_r($obj, true) . '</pre>';
    }

    public static function redirect($path){
        header("Location: $path");
        exit;
    }
}