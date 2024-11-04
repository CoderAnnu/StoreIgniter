<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use App\Models\UserMetaModel;
use App\Models\PageModel;

class Page extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    /**
     * getPageBasicInfo
     * get basic page details 
     *
     * @return void
     */
    function getPageBasicInfo()
    {
        $map = (object) [];

        $map->id = (int) $this->id;
        $map->title = $this->title;
        $map->slug = $this->slug;

        $map->excerpt = substr(strip_tags($this->description), 0, 50);

        if (strlen($this->description) > 50) $map->excerpt = $map->excerpt . '...';

        // getting page details 
        $map->status = $this->status;
        $map->description = $this->description;
        $map->created_at = $this->created_at;
        $map->updated_at = $this->updated_at;
        $map->deleted_at = $this->deleted_at;

        if (!$this->is('admin')) {
            $map->iamadmin = true;
        }
        return $map;
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
        // if user id exist then it will work 
        if ($exist) {
            // update meta value 
            $userMetaModel->update($exist->id, [
                "meta_value" => $meta_value
            ]);
        } else {
            // Create meta key 
            $userMetaModel->insert([
                "user_id" => $this->id,
                "meta_key" => $meta_key,
                "meta_value" => $meta_value,
            ]);
        }
        return true;
    }

    /**
     * get_meta
     *
     * @param  mixed $key
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
     * is
     * check user role existance
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
     * delete 
     * globally delete page function 
     *
     * @return void
     */
    function delete()
    {
        $pageModel = new PageModel();
        $pageModel->delete($this->id);
        $page = $pageModel->withDeleted()->find($this->id);
        $this->deleted_at = $page->deleted_at;
        return $this;
    }
    
    /**
     * restore
     * This is global function use for Restore pages 
     *
     * @return void
     */
    function restore()
    {
        $pageModel = new PageModel();
        $pageModel->update($this->id, [
            "deleted_at" => null,
        ]);
        $this->deleted_at = null;
        return $this;
    }
}
