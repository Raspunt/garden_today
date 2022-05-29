<?php

use LDAP\Result;

final class Core
{
    public static function init()
    {
        self::autoloader();
        Request::catch();
        self::route();
    }
    
    private static function autoloader()
    {
        spl_autoload_register(function($class){
            include __DIR__.'/classes/' . $class . '.php';
        });
    }

    private static function route()
    {
        require_once dirname(__DIR__).'/routes/main.php';

        Route::registerHandle(404,function(){
            echo 'notFound';
        });
        
        Route::init(Request::$uri,Request::$method);
        
    }
    

}