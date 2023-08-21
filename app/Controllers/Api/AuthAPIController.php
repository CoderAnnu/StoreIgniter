<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;

class AuthAPIController extends BaseController
{
    use ResponseTrait;
    private $usersModel = null;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        //add some test code updated update new new update  dfdf 
    }

    public function create()
    {
        // print_r(current_user());
    }
}
