<?php

namespace App\Entities;

use App\Models\BlogModel;
use CodeIgniter\Entity\Entity;

class Blog extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    
    /**
     * getBlogBasicInfo
     *
     * Get Blog basic Information
     * @return void
     */
    function getBlogBasicInfo()
    {
        $map = (object) [];

        $map->id = (int) $this->id;
        $map->title = $this->title;
        $map->slug = $this->slug;

        $map->excerpt = substr(strip_tags($this->content), 0, 50);
        if (strlen($this->content) > 50) $map->excerpt =  $map->excerpt . '...';

        $map->status = $this->status;
        $map->content = $this->content;
        $map->image = $this->image;
        $map->created_at = $this->created_at;
        $map->deleted_at = $this->deleted_at;
        $map->updated_at = $this->updated_at;

        if (!current_user()->is('admin')) {
            $map->iamadmin = true;
        }
        return $map;
    }
}
