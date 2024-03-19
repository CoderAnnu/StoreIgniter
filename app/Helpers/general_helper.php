<?php

use App\Entities\Options;
use App\Models\NotificationsModel;
use App\Models\OptionsModel;
use App\Models\UserMetaModel;
use App\Models\UsersModel;

/**************************
 *  General Helper
 * 
 * We can use helper function globally coz ci-4 provide functionality to use helper functions globally anywhere in your application  
 * This is our general Helper Functions  
 * 
 **************************/

//  Get user Status, user active, inactive or banned
/**
 * get_user_status
 *
 * @return void
 */
if (!function_exists('get_user_status')) {
    function get_user_status()
    {
        return ["active", "inactive", "banned"];
    }
}


// Show Error page if page doesn't exist then it will show 404 page error  
/**
 * show_404
 *
 * @param  mixed $message
 * @return void
 */
if (!function_exists('show_404')) {
    function show_404($message = "404 page not found")
    {
        return view('errors/html/error_404', [
            "message" => $message
        ]);
    }
}


// if project is maintenance mode then it will show maintenance mode page  
/**
 * show_maintenance
 *
 * @param  mixed $message
 * @return void
 */
if (!function_exists('show_maintenance')) {

    function show_maintenance($message = "Maintenance Mode")
    {
        return view('error/html/production', [
            "message" => $message
        ]);
    }
}
