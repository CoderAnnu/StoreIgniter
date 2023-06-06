<?php


// Authentication Helper 

use App\Models\UsersModel;
use Config\Services;



if (!function_exists('isLoggedIn')) {
    function isLoggedIn()
    {
        $session = Services::session();
        return $session->has('user');

        
    }
}

if (!function_exists('current_user')) {
    /**
     * current_user
     *
     * @return void
     */
    function current_user()
    {

        if (isLoggedIn()) {

            $session = Services::session();
            $id =  $session->get('user');

            $DB = new UsersModel();

            return $DB->find($id);
        }
        return null;
    }
}
