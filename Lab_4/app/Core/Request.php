<?php

namespace App\Core;

class Request
{
    public static function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function isGet()
    {
        return self::getMethod() === 'get';
    }

    public static function isPost()
    {
        return self::getMethod() === 'post';
    }
}