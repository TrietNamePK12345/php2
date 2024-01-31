<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Validate;
use App\Models\AuthModel;
use App\Core\Application;

class AuthController extends Controller
{
    use Validate;
    public $data = [], $users;

    function __construct()
    {
        $this->users = new AuthModel();
    }

    public function login()
    {
        Controller::render('login');
    }

    public static function register()
    {
        Controller::render('register');
    }

    public function loginUser()
    {
        $data = Request::getFields();
    }

    public function insertRegister()
    {
            self::validateRegister(); // use Validate
            $validate = Request::validate();

            if (!$validate) {
                $this->data['errors'] = Request::errors();
                $this->data['old'] = Request::getFields();
                Controller::render('register', $this->data);
            } else {
                $data = Request::getFields();
                if (Request::isPost()) {

                    $Data = array(
                        'name' => $data['fullname'],
                        'email' => $data['email'],
                        'password' => $data['password']
                    );

                    $result = $this->users::addAuth($Data);
                    if (!$result) {
                        Application::$app->session->setFlash('success', 'Đăng Kí Thành Công!');
                        Response::redirect('dang-ki');

                    }
                }
            }
    }

}