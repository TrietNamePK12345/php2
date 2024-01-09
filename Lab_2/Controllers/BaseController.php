<?php

namespace App\Controllers;

use App\core\Controllers;

class BaseController extends Controllers
{
    private static $private = 'Tôi là Private của BaseController';
    protected static $protected = 'Tôi là Protected của BaseController';

    function __construct()
    {
        echo '<h3>'.$this->extend.'</h3>';
    }


    public static function home(){
        echo "<h3>I'm Static Method Of BaseController</h3>";
        echo '<li>'.self::$private.'</li>';
        echo '<li>'.self::$protected.'</li>';
    }
}