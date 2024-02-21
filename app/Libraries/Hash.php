<?php

// <!-- Hash Library for password encription   -->
namespace App\Libraries;

class Hash
{
    public static function Make($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
