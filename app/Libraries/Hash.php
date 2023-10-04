<?php

// <!-- Hash Library for password encription   -->
namespace App\Libraries;

class Hash
{
    public function make($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
