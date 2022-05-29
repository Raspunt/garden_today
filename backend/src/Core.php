<?php

final class Core
{
    public static function init()
    {
        self::autoloader();
        Request::catch();
    }
    
    public static function autoloader()
    {
        spl_autoload_register(function($class){
            include __DIR__.'/classes/' . $class . '.php';
        });
    }
}