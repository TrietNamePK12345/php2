<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;


class AdminController extends Controller
{
    public function dashboard()
    {
        Controller::setLayout('dashboard_layout');
        return Controller::render('dashboard');
    }
    public function list_product()
    {
        Controller::setLayout('admin_layout');
        return Controller::render('list_product');
    }
}