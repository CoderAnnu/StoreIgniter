<?php


// Authentication Helper 
use App\Models\UsersModel;
use Config\Services;


// Check Session User Is login or not 
if (!function_exists('isLoggedIn')) {
    /**
     * isLoggedIn
     *
     * @return void
     */
    function isLoggedIn()
    {
        $session = Services::session();
        return $session->has('user');
    }
}

// Get Store Current user Session   
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
            // get user Id from user table 
            $DB = new UsersModel();
            return $DB->find($id);
        }
        return null;
    }
}
