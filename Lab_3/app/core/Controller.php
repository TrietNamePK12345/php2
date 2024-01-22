<?php

namespace App\core;

class Controller
{
    public static string $layout = 'client_layout';
    public static function setLayout($layout)
    {
        self::$layout = $layout;
    }
    public static function render($view, $params = [])
    {
        return Route::view($view, $params);
    }
}