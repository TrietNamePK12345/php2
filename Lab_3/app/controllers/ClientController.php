<?php

namespace App\controllers;

use App\core\Controller;

class ClientController extends Controller
{

    public function home()
    {
        Controller::setLayout('client_layout');
        return Controller::render('home');
    }

    public function about()
    {
        Controller::setLayout('client_layout');
        return Controller::render('about_us');
    }

    public function contact()
    {
        Controller::setLayout('client_layout');
        return Controller::render('contact');
    }
}