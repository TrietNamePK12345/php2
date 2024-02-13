<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Models\AuthModel;
use App\Core\Validate;
use App\Core\Application;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class AuthController extends Controller
{
    use Validate;

    private $users;

    public function __construct()
    {
        $this->users = new AuthModel();
    }

    public function login()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/login');
        } else {
            $this->handleLogin();
        }
    }

    public function register()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/register');
        } else {
            $this->handleRegister();
        }
    }

    public function forgot_password()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/forgot_password');
        } else {
            $this->handleForgot();
        }
    }

    public function code()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/confirm_code');
        } else {
            Controller::render('errors/_404');
        }
    }

    public function logout()
    {
        Session::remove('user');
        Response::redirect('');
    }

    //============================================
    private function handleLogin()
    {
        self::validateLogin();
        $validate = Request::validate();

        if (!$validate) {
            $this->data['errors'] = Request::errors();
            $this->data['old'] = Request::getFields();
            Controller::render('client/auth/login', $this->data);
        } else {
            $this->processLogin();
        }
    }

    private function processLogin()
    {
        $dataUser = Request::getFields();
        $admin = $this->users::findUserByEmail($dataUser['email']);

        if ($admin && password_verify($dataUser['password'], $admin['password'])) {
            $this->handleSuccessfulLogin($admin);
        } else {
            $this->handleFailedLogin($admin, $dataUser);
        }
    }

    private function handleSuccessfulLogin($admin)
    {
        Application::$app->session->setFlash('success', 'Đăng nhập thành công!');
        Session::setFlash('user', $admin);
        $redirectPath = $admin['role'] == 1 ? 'dashboard' : '';
        Response::redirect($redirectPath);
    }

    private function handleFailedLogin($admin, $dataUser)
    {
        $errorMessage = "!Chú ý: " . ($admin && $admin['email'] == $dataUser['email'] ? 'Sai mật khẩu.' : 'Sai email.');
        Session::setFlash('success', $errorMessage);
        Response::redirect('dang-nhap');
    }

    private function handleRegister()
    {
        self::validateRegister();
        $validate = Request::validate();

        if (!$validate) {
            $this->data['errors'] = Request::errors();
            $this->data['old'] = Request::getFields();
            Controller::render('client/auth/register', $this->data);
        } else {
            $this->processRegister();
        }
    }

    private function processRegister()
    {
        $data = Request::getFields();

        $userData = [
            'name' => $data['fullname'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT)
        ];

        Session::setFlash('success', 'Đăng ký thành công!');
        $result = $this->users::addAuth($userData);

        if (!$result) {
            Response::redirect('dang-ki');
        }
    }

    // =============== Forgot Password ===============

    private function handleForgot()
    {
        self::validateForgot(); // khởi chạy validate
        $validate = Request::validate();

        if (!$validate) {
            $this->data['errors'] = Request::errors();
            $this->data['old'] = Request::getFields();
            Controller::render('client/auth/forgot_password', $this->data);
        } else {
            $dataUser = Request::getFields();
            $email = $dataUser['email'];
            $token = bin2hex(random_bytes(16));
            $token_hash = hash("sha256", $token);
            $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

            // Thực hiện ConfirmCode và kiểm tra kết quả
            $this->users->ConfirmCode($email, $token_hash, $expiry);
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.example.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'your_username';
                $mail->Password = 'your_password';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('your_email@example.com', 'Your Name');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Reset Your Password';
                $mail->Body = 'Click the following link to reset your password: ' . $token;

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }

    }
}