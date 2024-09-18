<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Entities\User;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\Response;

class UsersManagementController extends BaseController
{
    use ResponseTrait;

    // Aissgning private variable to hide VsCode Erorr 
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
     *
     * @return void
     */
    function get_users()
    {
        // condition for only if user is admin then this function return the value and if it not then it will return access denied 
        if (current_user() && current_user()->is('admin')) {

            $users = $this->usersModel->findAll();

            if ($users) {

                $query = $this->request->getGet('query');
                $per_page = ($this->request->getGet('per_page')) ? $this->request->getGet('per_page') : 25;
                $filter = ($this->request->getGet('filter') && in_array($this->request->getGet('filter'), ['all', 'active', 'deleted'])) ? $this->request->getGet('filter') : 'all';

                $users = $this->usersModel;

                // To show all data also soft deleted users data  
                if ($filter == 'all') {
                    $users->withDeleted();
                }

                // To shoiw only active data
                if ($filter == 'active') {
                    $users->where([
                        "deleted_at" => null
                    ]);
                }

                // To shoiw only inactive data
                if ($filter == 'inactive') {
                    $users->where([
                        "deleted_at" => null
                    ]);
                }

                // To show only deleted data 
                if ($filter == 'deleted') {
                    $users->withDeleted();
                    $users->where([
                        "deleted_at !=" => null
                    ]);
                }
                // Search by name and email in search bar 
                if ($query) {
                    $users->like('full_name', $query);
                    $users->orLike('email', $query);
                }

                // Get items
                $items = $users->paginate($per_page);

                $its = [];

                //Modifier 
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

                // pagination Mapping pages data 
                $pager = $users->pager;
                $pagination_map['current_page'] = $pager->getCurrentPage();
                $pagination_map['total_items'] = $pager->getTotal();
                $pagination_map['next_page'] = false;

                // Modify Get Data 
                if ($pager->hasMore()) {
                    $next_page = $pagination_map['current_page'] + 1;
                    $_GET['page'] = $next_page;
                    $pagination_map['next_page'] =  base_url('api/user') . '?' . http_build_query($_GET);
                }
                // if user data find then return the data 
                return $this->respond($pagination_map);
            }
            // if user data is not exists then return the error 
            return $this->fail(['"message' => "No such a user found."]);
        }
        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allow to access this area.");
    }

    /**
     * admin_dashboard
     *
     * @return void
     */
    // public function admin_dashboard()
    // {
    //     $days = $this->request->getGet('days');
    //     $days = ($days) ? $days : 30;

    //     // Getting from database 
    //     $unique_id = "id";
    // }

    /**
     * update User role 
     *
     * @param  mixed $user_id
     * @return void
     */
    public function update_role($user_id)
    {
        if (current_user() && current_user()->is('admin')) {
            // get user data 
            $user = $this->usersModel->find($user_id);
            $role = $this->request->getVar('role');

            if ($user && $role) {

                // Set Meta data of the user and update meta 
                if (in_array($role, ['subscriber', 'admin'])) {
                    $user->set_meta('role', $role);
                }

                return $this->respondUpdated(
                    ["message" => "Role has been updated"]
                );
            }
            // If role is invalid 
            return $this->fail("Invalid Role");
        }
        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allow to access this area.");
    }


    /**
     * update_profile
     * update users profile 
     *
     * @return void
     */
    function update_profile()
    {
        if (current_user()) {
            $user = current_user();
            // Check if user is exists 
            if (!$user) return $this->fail("Invalid User");

            $full_name = $this->request->getVar('full_name');
            $email = $this->request->getVar('email');

            if (!$full_name) return $this->fail("Full name is required");
            if (!$email) return $this->fail("Email  is required");

            // Check email is exists or 
            $email_exist = $this->usersModel->where('email', $email)->first();

            if ($email_exist && $email != $user->$email) return $this->fail("Email already taken.");

            $value = [
                "email" => $email,
                "full_name" => $full_name
            ];

            // insert values in database 
            $this->usersModel->update($user->id, $value);

            // Respond with 201 succuess status 
            return $this->respondCreated(
                ["message" => "Profile Updated"]
            );
        }

        return $this->fail(
            ["message" => "Something went wrong"]
        );
    }

    /**
     * delete_user by admin
     *
     * @param  mixed $id
     * @return void
     */
    public function delete_user($id)
    {
        // condition for only admin can delete user 
        if (current_user() && current_user()->is('admin')) {
            // get user from usersModel 
            $user = $this->usersModel->find($id);
            if ($user) {
                $user->delete();
                return $this->respondDeleted([
                    "message" => "User has been deleted",
                    "user" => $user->getBasicInfo()
                ]);
            }
            // if showing error when user is not exists 
            return $this->fail("User doesn't exist");
        }
        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * edit_user
     *
     * all user can Edit their functionality 
     * @param  mixed $user_id
     * @return void
     */
    public function edit_user($user_id)
    {
        if (current_user() && current_user()->is('admin')) {
            $user = $this->usersModel->withDeleted()->find($user_id);
            if (!$user) return $this->fail("Invalid user");

            $data = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "email" => $user->email,
                "created_at" => date($user->created_at),
                "role" => $user->get_role(),
                "status" => $user->get_status()
            ];

            return $this->respond($data);
        }
        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * update_user
     * only update admin this functionality 
     *
     * @param  mixed $user_id
     * @return void
     */
    public function update_user($user_id)
    {
        if (current_user() && current_user()->is('admin')) {
            $user = $this->usersModel->find($user_id);
            if (!$user) return $this->fail("Invalid user");

            $role = $this->request->getVar('role');
            $status = $this->request->getVar('status');
            $full_name = $this->request->getVar('full_name');
            $email = $this->request->getVar('email');

            if (!$status) return $this->fail("Status is required");

            if ($role) return $this->fail("Assign a role");

            if ($full_name) return $this->fail("Empty name field.");

            if ($email) return $this->fail("Empty email field");

            $email_exist = $this->usersModel->where('email', $email)->first();

            if ($email_exist  && $email != $user->email) return $this->fail("Email already taken.");

            $data = ["full_name" => $full_name, "email" => $email];

            // update user data 
            $this->usersModel->update($user_id, $data);

            // Set user data 
            if (in_array($role, ['subscriber', 'admin'])) {
                $user->set_meta('role', $role);
            }
            // User update 
            $user->update_status($status);
            return $this->respond(["message" => "User Updated", $data]);
        }

        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allowed to access this area.");
    }

    /**
     * restore_user
     *Only addmin can restore user.
     * @param  mixed $id
     * @return void
     */
    public function restore_user($id)
    {
        if (current_user() && current_user()->is('admin')) {
            $user = $this->usersModel->withDeleted()->find($id);

            if ($user) {
                // Restore user 
                $user->restore();
                return $this->respond([
                    "message" => "User has been restored",
                    "user" => $user->getBasicInfo()
                ]);
            }
            // if user is not found then it will return this value or message 
            return $this->fail("User not found..! ");
        }

        // return error when the user has no permisssion of this erea 
        return $this->fail("You are not allowed to access this area.");
    }
}
