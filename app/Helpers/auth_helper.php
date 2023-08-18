<?php

/**************************
 *  Authentication Helper
 * 
 * We can use helper function globally coz ci-4 provide functionality to use helper functions globally anywhere in your application  
 * This is our Authentication Function  
 * 
 **************************/
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

// Make Random string Global, through the helper
if (!function_exists('RandomString')) {
    /**
     * RandomString
     *
     * @param  mixed $length
     * @return void
     */
    function RandomString($length = 10)
    {
        $characters = md5('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

// Create Post url slug 
if (!function_exists('createUrlSlug')) {
    /**
     * createUrlSlug
     *
     * @param  mixed $urlString
     * @return void
     */
    function createUrlSlug($urlString)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
        $slug = strtolower($slug);
        return $slug;
    }
}


// Get user Id from database 
if (!function_exists('get_user')) {
    /**
     * get_user
     *
     * @param  mixed $id
     * @return void
     */
    function get_user($id)
    {
        $DB = new UsersModel();
        return $DB->find($id);
    }
}
