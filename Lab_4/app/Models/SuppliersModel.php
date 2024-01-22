<?php

namespace App\Models;
use App\Core\Model;
class SuppliersModel extends Model
{
    public function tableFill()
    {
        return 'suppliers';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    // Danh sách nhà cung cấp
    public static function listSuppliers()
    {
        $data = self::$db
            ->select("*")
            ->table('suppliers')
            ->get();
        return $data;
    }
}