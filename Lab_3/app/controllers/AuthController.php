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
        $registerModel = new RegisterModel();  // khởi tạo đối tượng RegisterModel
        if (Request::isPost()) {
           $registerModel->loadData(Request::getBody()); // gọi pt loadData từ đt RegisterModel

           if ($registerModel->validate() && $registerModel::register()) { //gọi pt validate of $registerModel -> check xem có hợp lệ không!
               return 'Success';
           }
           // nếu cả 2 đk thỏa mãn thì return Suceess
           // ngược lại nó sẽ thự thi lệnh dưới

           return Controller::render('register', [
              'model' => $registerModel
           ]); // => thể hiện trang đăng kí với thông tin lỗi và model
        }

        Controller::setLayout('client_layout');
        return Controller::render('register', [
            'model' => $registerModel
        ]); //  => hiển thị thông tin trong th lỗi .
    }
}