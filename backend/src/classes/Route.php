<?php

class Route
{
    protected static $routes = [];
    protected static $error = [];

    
    public static function init($uri,$method)
    {
        if(empty(self::$routes[$uri][$method])) return self::error('404',404);
        
        $callback = self::$routes[$uri][$method];
        if(is_array($callback)){
            if(self::is_staticFunction($callback[0],$callback[1])) return self::$routes[$uri][$method]();
            else return call_user_func([(new $callback[0]),$callback[1]]);
        }

        return self::$routes[$uri][$method]();
    }

    public static function registerHandle($code,$fn)
    {
        return self::$error[$code] = $fn;
    }
    
    private static function error($msg,$code)
    {
        if(empty(self::$error[$code])) throw new Exception($msg,$code);
        else return self::$error[$code]();
    }

    public static function get(string $uri,$fn)
    {
        self::$routes[$uri]['GET'] = $fn;
    }

    public static function post(string $uri,$fn)
    {
        self::$routes[$uri]['POST'] = $fn;
    }

    public static function PUT(string $uri,$fn)
    {
        self::$routes[$uri]['PUT'] = $fn;
    }

    public static function is_staticFunction($class,$method)
    {
        $MethodChecker = new ReflectionMethod($class,$method);
        return $MethodChecker->isStatic();
    }
}