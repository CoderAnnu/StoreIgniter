<?php

/**************************
 *  General Helper
 * 
 * We can use helper function globally coz ci-4 provide functionality to use helper functions globally anywhere in your application  
 * This is our general Helper Functions  
 * 
 **************************/

//  Get user Status, user active, inactive or banned  
if (!function_exists('get_user_status')) {

    /**
     * get_user_status
     *
     * @return void
     */
    function get_user_status()
    {
        return ["active", "inactive", "banned"];
    }
}
