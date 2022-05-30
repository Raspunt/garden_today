<?php

use LDAP\Result;

final class Core
{
    public static function init()
    {
        
        self::autoloader();
        self::headers();
        Request::catch();
        self::route();
    }
    
    private static function autoloader()
    {
        spl_autoload_register(function($class){
            $class = __DIR__.'/classes/' . $class . '.php';
            if(file_exists($class)) include  $class;
        });

        spl_autoload_register(function($class){
            $class = __DIR__.'/controllers/' . $class . '.php';
            if(file_exists($class)) include  $class;
        });
    }

    private static function route()
    {
        require_once dirname(__DIR__).'/routes/main.php';

        Route::registerHandle(404,function(){
            echo Resource::json('Not Found',404);
        });
        
        Route::init(Request::$uri,Request::$method);
    }

    public static function headers()
    {
        header('Content-Type: application/json; charset=utf-8');
    }
}