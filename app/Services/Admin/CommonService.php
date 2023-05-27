<?php

namespace App\Services\Admin;

class CommonService
{
    public function maskPassword($password)
    {
        $count         = strlen($password);  
        $maskPassword  = str_repeat('●', $count);   
        return $maskPassword;
    }
}