<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\SuppliersModel;
use App\Core\Application;

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
        Controller::setLayout('dashboard_layout');
        return Controller::render('a_list_suppliers', $this->data);
    }

    public function addSuppliers()
    {   
        Controller::setLayout('dashboard_layout');
        return Controller::render('a_add_supplier', $this->data);
    }

    public function insertSupp()
    {
        $data = Request::getFields();
            $insertData = array(
                'supplier_id' => $data['supplier_id'],
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'address' => $data['address'],
                'person_contact' => $data['person_contact']
            );

        $result = $this->suppliers->addSuppliers($insertData);

            if(!$result) {
                Response::redirect('danh-sach-nha-cung-cap');
            }
    
    }

    public function deleteSupp()
    {
        $id = Request::getFields();
        $result = $this->suppliers->deleteSupp($id['id']);

        if(!$result) {
            Response::redirect('danh-sach-nha-cung-cap');
        }
    }

    public function updateSupp()
    {
        $data = Request::getFields();
        $id = $data['id'];

        $supplierData = array(
            'supplier_id' => $data['supplier_id'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'person_contact' => $data['person_contact']
        );
        
        $result = $this->suppliers::updateSupp($supplierData, $id);

        if (!$result) {
            Response::redirect('danh-sach-nha-cung-cap');
        }
    }

}