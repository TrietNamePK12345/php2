<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;


class AdminController extends Controller
{
    public function dashboard()
    {

        if (Request::isGet()) {
            Controller::setLayout('dashboard_layout');
            Controller::render('admin/dashboard/dashboard');
        } else {
            Controller::render('errors/_404');
        }
    }
    public function list_product()
    {
        if (Request::isGet()) {
            Controller::setLayout('admin_layout');
            Controller::render('admin/product/list_product');
        }  else {
            Controller::render('errors/_404');
        }
    }


}