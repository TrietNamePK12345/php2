<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\models\RegisterModel as RM;


class AuthController extends Controller
{

    public function login()
    {
        Controller::setLayout('client_layout');
        return Controller::render('login');
    }

    public static function register()
    {
        $rm = new RM();
        echo '<pre>';
        var_dump($rm);
        echo '</pre>';
//        if (Request::isPost()) {
//
//            RegisterModel::register();
//
//        }

        Controller::setLayout('client_layout');
        return Controller::render('register');
    }
}