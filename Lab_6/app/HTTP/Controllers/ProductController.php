<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Models\ClientModel as CM;


    class ProductController extends Controller
    {

        public function shop()
        {

            Controller::setLayout("client_layout");
            return Controller::render('shop');
        }
        public function product_detail()
        {
            Controller::setLayout("client_layout");
            return Controller::render('product_detail');

        }

    }