<?php

namespace App\Controllers\Api;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\UsersModel;
use App\Models\UserMetaModel;

class AuthAPIController extends BaseController
{
    use ResponseTrait;
    private $usersModel, $userMetaModel;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->userMetaModel = new UserMetaModel();
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        // add some test code updated code updated
        print_r('test');
    }

    public function create()
    {

        $fullName = $this->request->getVar('full_name');
        $email = $this->request->getVar('email');
        $password  = $this->request->getVar('password');

        // if name field is empty
        if ($fullName == '') return $this->fail(
            ["message" => "User name is required."]
        );

        // if name field is empty
        $check = $this->userMetaModel->where('email', $email)->first();
        if ($check) return $this->fail(
            ["message" => "This email is already exists."]
        );

        // if email field is empty 
        if ($email == '') return $this->fail(
            ["message" => "Email is required"]
        );

        // if password  field is empty
        if ($password == '') return $this->fail(
            ["message" => "Password is required"]
        );

        // verify user email 

        $unique = RandomString(50);

    }
}
