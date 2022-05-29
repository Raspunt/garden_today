<?php

class Request
{
    public static $method;

    public static $uri;

    private function __construct()
    {
    }

    public static function catch()
    {
        global $_SERVER;
        self::$method = $_SERVER['REQUEST_URI'] ?? FALSE;
        self::$method = $_SERVER['REQUEST_METHOD'] ?? FALSE;
    }
}