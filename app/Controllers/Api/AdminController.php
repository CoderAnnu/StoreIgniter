<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;

class AdminController extends BaseController
{
    use ResponseTrait;
    // Assigning Private varible coz this varible showing me error on Vscode
    private $usersModel;
    
    /**
     * __construct
     *
     * @return void
     */
    function __construct()
    {
        $this->usersModel = new UsersModel();
    }

}
