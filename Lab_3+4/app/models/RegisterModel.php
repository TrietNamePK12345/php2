<?php

namespace App\models;

use App\core\Model;

class RegisterModel extends Model
{
    public string $fullname = '';

    public string $email = '';

    public string $password = '';

    public static function register()
    {
        echo 'Creating new User ';
    }

    public function rules(): array
    {
        return [
        'fullname' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 30]],
        'email' => [self::RULE_REQUIRED, [self::RULE_EMAIL]],
        'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 30]]
    ];
    }
}