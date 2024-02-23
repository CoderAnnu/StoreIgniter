<?php

namespace App\Entities;

use App\Models\Notification;
use App\Models\UserMetaModel;
use App\Models\UsersModel;
use CodeIgniter\Entity\Entity;

class User extends Entity
{

    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    /**
     * get_status
     * TODO : Make status default as inactive which will later be changed into active after verifying email.
     * Get Status 
     *
     * @return void
     */
    function get_status()
    {
        return $this->get_meta('status', 'inactive');
    }

    
    /**
     * update_status
     *
     * @param  mixed $status
     * @return void
     */
    function update_status($status)
    {
        $available_status = get_user_status();
        if (in_array($status, $available_status[])) {
            $this->set_meta('status', $status);
            return $status;
        }
        return $this->get_status();
    }
    /**
     * get_meta
     * getting a user meta value to identifies the user data through Get meta function 
     * @param  mixed $k
     * @param  mixed $default
     * @return void
     */
    function get_meta($key, $default = null)
    {
        $userMetaModel = new UserMetaModel();

        $exist = $userMetaModel->where(["user_id" => $this->id, "meta_key" => $key])->first();

        if ($exist) {
            return $exist->meta_value;
        }
        return $default;
    }


    /**
     * set_meta
     *
     * @param  mixed $meta_key
     * @param  mixed $meta_value
     * @return void
     */
    function set_meta($meta_key, $meta_value)
    {
        $userMetaModel = new UserMetaModel();
        $exist = $userMetaModel->where(["user_id" => $this->id, "meta_key" => $meta_key])->first();

        if ($exist) {
            // update
            $userMetaModel->update($exist->id, [
                "meta_value" => $meta_value
            ]);
        } else {
            // create 
            $userMetaModel->insert([
                "user_id" => $this->id,
                "meta_key" => $meta_key,
                "meta_value" => $meta_value
            ]);
        }
        return true;
    }

    
    /**
     * getBasicInfo
     *
     * @return void
     */
    function getBasicInfo()
    {
        $map = (object) [];

        $map->id = (int) $this->id;
        $map->full_name = $this->full_name;
        $map->email = $this->email;
        $map->created_at = $this->email;
        $map->deleted_at = $this->deleted_at;
        $map->updated_at = $this->updated_at;
        $map->status = $this->get_status();
        $map->role = $this->get_role();

        if (!$this->is('admin')) {
            $map->iamadmin = true;
        }
        return $map;
    }
    
    /**
     * is
     *
     * @param  mixed $role
     * @return void
     */
    function is($role)
    {
        $current_role = $this->get_role();
        return $role == $current_role;
    }
    
    /**
     * get_role
     *
     * @return void
     */
    function get_role()
    {
        return $this->get_meta('role', 'subscriber');
    }
    
    /**
     * is_subscribed
     *
     * @return void
     */
    function is_subscribed()
    {
        return $this->get_meta('subscription', false);
    }
}
