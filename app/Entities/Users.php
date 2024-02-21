<?php

namespace App\Entities;

use App\Models\Notification;
use App\Models\UserMetaModel;
use App\Models\UsersModel;
use CodeIgniter\Entity\Entity;

class Users extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];


    // Get Meta 
    function get_meta($key, $default = null)
    {
        $userMetaModel = new UserMetaModel();
    
    }

    // Get Status 
    // TODO : Make status default as inactive which will later be changed into active after verifying email.

    function get_status()
    {
        return $this->get_meta('status', 'inactive');
    }
}
