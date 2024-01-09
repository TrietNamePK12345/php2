<?php

namespace App\Models;

class BaseModel
{
    private static $private = 'Tôi là Private của BaseModel';
    protected static $protected = 'Tôi là Protected của BaseModel';
    public static function home(){
        echo "<h3>I'm Static Method Of BaseModel</h3>";
        echo '<li>'.self::$private.'</li>';
        echo '<li>'.self::$protected.'</li>';
    }

}