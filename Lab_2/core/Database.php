<?php

namespace App\core;
use mysqli;
class Database
{
    public $name = 'Nguyễn Minh Triết => Thuộc tính $name'; // đổi public thành Protected là chạy không được bên index.php
    public function __construct()
    {
//        $server = "localhost";
//        $name = "root";
//        $password = "monsaide684";
//        $db = "fantasy shop";
//
//        $conn = new \mysqli($server, $name, $password, $db);
//
//        if (!$conn) {
//            die;
//        }
    }

    public function Hi(){
        echo '<h1>Thèm Ramen => Phương Thức Hi()</h1>';
    }
}