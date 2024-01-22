<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Models\SuppliersModel;

class SuppliersController extends Controller
{
    public $data = [], $suppliers;
    public function __construct()
    {
        $this->suppliers = new SuppliersModel();
    }

    public function listSuppliers()
    {
        $getList = $this->suppliers::listSuppliers();
        $this->data['list_suppliers'] = $getList;
        Controller::setLayout('admin_layout');
        return Controller::render('a_list_suppliers', $this->data);
    }
}