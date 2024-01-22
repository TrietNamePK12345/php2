<?php

namespace App\core;

class Request
{
    public static function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path,'?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);


    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function isGet()
    {
        return self::getMethod() === 'get';
    }

    public static function isPost()
    {
        return self::getMethod() === 'post';
    }

/**
 * PT getBody trả về 1 mảng $body chứa dl từ HTTP -> áp dụng bộ lọc
 để loại bỏ các ký tự đặc biệt.
 */
    public static function getBody()
    {
        // mảng chứa dữ liệu từ yêu cầu.
        $body = [];
        // check xem pt yêu cầu là get hay post
        if (self::getMethod() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                // Áp dụng bộ lọc để loại bỏ các ký tự đặc biệt từ dữ liệu
            }
        }

        if (self::getMethod() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}