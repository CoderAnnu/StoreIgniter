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


/**
 * if project is maintenance mode then it will show maintenance mode page  
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

/** Options if we want to use options like meta key meta value functionality same like that
 * Global function use like meta key meta value 
 */
if (!function_exists('update_option')) {
    function update_option($key, $val)
    {
        $optionsModel = new OptionsModel();

        // Check if option is already exists 
        $exists = $optionsModel->where('option_key', $key)->first();

        if ($exists) {
            // Update Option 
            $exists->option_value = $val;
            $id = $exists->id;
            $optionsModel->update($id, [
                'option_value' => $val
            ]);
        } else {
            // create option 
            $option = new Options();
            $option->option_key = $key;
            $option->option_value = $val;
            $optionsModel->save($option);
        }
    }
}

/** Get option 
 * If we want to get options which we store this global function through DB
 * 
 */
if (!function_exists('get_option')) {
    function get_option($key, $default = null)
    {
        $optionsModel = new OptionsModel();
        $option = $optionsModel->where('option_key', $key)->first();
        return ($option) ? $option->option_value : $default;
    }
}

/**
 * delete options 
 * 
 * if we want to delete option data which we are using this global function
 */
if (!function_exists('delete_option')) {
    function delete_option($key)
    {
        $optionsModel = new OptionsModel();
        return $optionsModel->where('option_key', $key)->delete();
    }
}
