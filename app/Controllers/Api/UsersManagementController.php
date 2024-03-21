<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Entities\User;
use App\Models\UsersModel;
use CodeIgniter\HTTP\Response;

class UsersManagementController extends BaseController
{
    use ResponseTrait;
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


    /**
     * get_users
     * get data from database to show users only admin 
     *
     * @return void
     */
    public function get_users()
    {
        if (current_user()->is('admin')) {
            $users = $this->usersModel->findAll();

            if ($users) {
                $query =  $this->request->getGet('query');
                $per_page =  ($this->request->getGet('per_page')) ? $this->request->getGet('per_page') : 25;
                $filter = ($this->request->getGet('filter') && in_array($this->request->getGet('filter'), ['all', 'active', 'deleted'])) ? $this->request->getGet('filter') : 'all';

                $users = $this->usersModel;

                // To show all user on user filter 
                if ($filter == 'all') {
                    $users->withDeleted();
                }

                // to show only active user 
                if ($filter == 'active') {
                    $users->where([
                        "deleted_at" => null
                    ]);
                }

                // show only Deleted users 
                if ($filter == 'deleted') {
                    $users->withDeleted();
                    $users->where([
                        "deleted_at !=" => null
                    ]);
                }

                if ($query) {
                    $users->like('full_name', $query);
                    $users->orLike('email', $query);
                }

                // get items
                $items = $users->paginate($per_page);

                $its = [];
                // Modifer 
                foreach ($items as $user) {
                    $its[] = $user->getBasicInfo();
                }

                // Pagination 
                $pagination_map = [
                    "current_page" => null,
                    "total_pages" => null,
                    "total_items" => 0,
                    "next_page" => false,
                    "items" => $its
                ];

                // pager 
                $pager = $users->pager;

                $pagination_map['current_page'] = $pager->getCurrentPage();
                $pagination_map['total_itmes'] = $pager->getTotal();
                $pagination_map['next_page'] = false;

                //Modify get Data 
                if ($pager->hasMore()) {
                    $next_page = $pagination_map['current_page'] + 1;
                    $_GET['page'] = $next_page;
                    $pagination_map['next_page'] = base_url('api/user') . '?' . http_build_query($_GET);
                }
                return $this->respond($pagination_map);
            }
            return $this->fail(["message" => "No such a user found."]);
        }
        return $this->fail("You are not allowed to access this area.");
    }


    // Update user roles by admin
    /**
     * update_role
     *
     * @param  mixed $user_id
     * @return void
     */
    public function update_role($user_id)
    {

        if (current_user()->is('admin')) {
            // get user from database 
            $user = $this->usersModel->find($user_id);
            $role = $this->request->getVar('role');

            if ($user && $role) {
                // check role and user is admin or subscriber 
                if (in_array($role, ['subscriber', 'admin'])) {
                    $user->set_meta('role', $role);
                }

                return $this->respondUpdated([
                    "message" => "Role has been Updated"
                ]);
            }
            return $this->fail("Invalid Role");
        }
        return $this->fail("You are not allowed to access this area.");
    }

    // Edit user    
    /**
     * edit_user
     *
     * @param  mixed $user_id
     * @return void
     */
    public function edit_user($user_id)
    {

        //  $test =  current_user() && current_user();
        if (current_user() && current_user()->is('admin')) {

            $user = $this->usersModel->withDeleted()->find($user_id);
            if (!$user) return $this->fail("Invalid User");

            $data = [
                "full_name" => $user->full_name,
                "email" => $user->email,
                "id" => $user->id,
                "created_at" => date($user->created_at),
                "role" => $user->get_role(),
                "status" => $user->get_status()
            ];
            return $this->respond($data);
        }
        return $this->fail("You are not allowed to access this area.");
    }


    /**
     * update_profile
     * user update own profile 
     *
     * @return void
     */
    public function update_profile()
    {
        // check user is admin or not if user is admin then this function works
        if (current_user()) {
            // get current user from the globle function 
            $user = current_user();

            // check if user is Envalid 
            if (!$user) return $this->fail("Invalid User");

            // get user name from from field
            $full_name = $this->request->getVar('full_name');

            // get user email from from field
            $email =  $this->request->getVar('email');

            // check if fields is not empty 
            if (!$full_name) return $this->fail("Full Name is required.");
            if (!$email) return $this->fail("Email is required.");

            // check if email is exist or not 
            $email_exist = $this->usersModel->where('email', $email)->first();

            if ($email_exist && $email != $user->email) return $this->fail('Email Already taken.');

            $value = [
                "email" => $email,
                "full_name" => $full_name,
            ];

            //Update user data in database
            $this->usersModel->update($user->id, $value);

            // sends success message when user profile is updated.
            return $this->respondCreated([
                "message" => "Profile Updated."
            ]);
        }
        // send error message
        return $this->fail([
            "message" => "Something went wrong."
        ]);
    }



    /**
     * update_user
     * admin can change user data through to this function 
     *
     * @param  mixed $user_id
     * @return void
     */
    public function update_user($user_id)
    {
        if (current_user() && current_user()->is('admin')) {

            $user =  $this->usersModel->find($user_id);

            if (!$user) return $this->fail("Invalid user.");

            $role = $this->request->getVar('role');
            $status =  $this->request->getVar('status');

            $full_name = $this->request->getVar('full_name');
            $email = $this->request->getVar('email');

            if (!$status) return $this->fail("status is required.");

            if (!$role) return $this->fail("user role is required.");

            if (!$full_name) return $this->fail("name is required.");

            if (!$email) return $this->fail("Email is required.");

            $email_exist = $this->usersModel->where('email', $email)->first();
            if ($email_exist && $email != $user->email) return $this->fail("Email already taken.");

            $data = ["full_name" => $full_name, "email" => $email];

            // update user data 
            $this->usersModel->update($user_id, $data);

            // set user role 
            if (in_array($role, ['subscriber', 'admin'])) {
                $user->set_meta('role', $role);
            }

            $user->update_status($status);
            return $this->respond(["message" => "user updated", $data]);
        }
        return $this->fail("You are not allowed to access this area.");
    }
}
