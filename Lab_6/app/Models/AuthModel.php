<?php

namespace App\Models;
use App\Core\Model;
class AuthModel extends Model
{
    public function tableFill()
    {
        return 'users';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }

    public static function addAuth($data)
    {
        self::$db->table('users')->insert($data);
    }
}