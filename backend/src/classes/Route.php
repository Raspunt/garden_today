<?php

class Route
{
    protected static $routes = [];
    protected static $error = [];

    
    public static function init($uri,$method)
    {
        if(empty(self::$routes[$uri][$method])) return self::error('404',404);
        return self::$routes[$uri][$method]();
    }

    public static function registerHandle($code,callable $fn)
    {
        return self::$error[$code] = $fn;
    }
    
    private static function error($msg,$code)
    {
        if(empty(self::$error[$code])) throw new Exception($msg,$code);
        else return self::$error[$code]();
    }

    public static function get(string $uri,callable $fn)
    {
        self::$routes[$uri]['GET'] = $fn;
    }

    public static function post(string $uri,callable $fn)
    {
        self::$routes[$uri]['POST'] = $fn;
    }

    public static function PUT(string $uri,callable $fn)
    {
        self::$routes[$uri]['PUT'] = $fn;
    }

}