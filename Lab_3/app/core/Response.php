<?php

namespace App\core;

class Response
{
    public static function setStausCode(int $code)
    {
        http_response_code($code);
    }
}