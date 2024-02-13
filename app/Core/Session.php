<?php

namespace App\Core;

class Session
{
    protected const FLASH_KEY = 'flash_message';

    public function __construct()
    {
        session_start();
        $this->clearFlashMessages();
    }

    public static function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = ['removed' => false, 'value' => $message];
    }

    public static function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public static function remove($key)
    {
        unset($_SESSION[self::FLASH_KEY][$key]);
    }

    public function __destruct()
    {
        $this->clearRemovedFlashMessages();
    }

    protected function clearFlashMessages()
    {
        $_SESSION[self::FLASH_KEY] = array_map(function ($flashMessage) {
            $flashMessage['removed'] = true;
            return $flashMessage;
        }, $_SESSION[self::FLASH_KEY] ?? []);
    }

    protected function clearRemovedFlashMessages()
    {
        $_SESSION[self::FLASH_KEY] = array_filter($_SESSION[self::FLASH_KEY] ?? [], function ($flashMessage) {
            return !$flashMessage['removed'];
        });
    }
}