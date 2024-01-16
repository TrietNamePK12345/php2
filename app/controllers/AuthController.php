<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Request;
use App\models\RegisterModel;


class AuthController extends Controller
{
    public function login()
    {
        Controller::setLayout('client_layout');
        return Controller::render('login');
    }

    public static function register()
    {
        $registerModel = new RegisterModel();
        if (Request::isPost()) {
           $registerModel->loadData(Request::getBody());

           if ($registerModel->validate() && $registerModel::register()) {
               return 'Success';
           }

            echo '<pre>';
            var_dump($registerModel->errors);
            echo '</pre>';
            exit();

           return Controller::render('register', [
              'model' => $registerModel
           ]);
        }

        Controller::setLayout('client_layout');
        return Controller::render('register', [
            'model' => $registerModel
        ]);
    }
}