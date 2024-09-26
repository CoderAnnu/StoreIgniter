<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

class MediaController extends BaseController
{    
    /**
     * index
     * fetching data with sizes 
     * @param  mixed $path
     * @param  mixed $size
     * @param  mixed $quality
     * @return void
     */
    public function index($path, $size = null,  $quality = 100)
    {
        if ($quality > 100) $quality = 100;
        if ($quality < 0) $quality =  0;

        $public_directory =  FCPATH;
        $file_path = $public_directory . 'uploads/' . $path;
        $sizes = null;

        // check image media Size 
        if ($size !== null) {
            $sizes =  get_size_from_string($size);
        }

        $md5_string =  $path . ($size !== null ? $size : '') . $quality;
        $unique_id = md5($md5_string);
        $extension = explode('.', $path);
        $extension = end($extension);
        $cache_path = $public_directory . 'uploads/' . $unique_id . '.' . $extension;

        // check if file exists or not 
        if (file_exists($file_path)) {
            // check if cache available 
            if (file_exists($cache_path)) {
                // output image 
                echo_image($cache_path, $extension);
            } else {
                
                $image = \config\Services::image();

                if ($size != null && $sizes != null) {
                    $image->withFile($file_path)->fit($sizes['height'], $sizes['width'], 'center');
                }
                $image->save($public_directory . 'uploads/' . $unique_id . '.' . $extension, $quality);

                // output image 
                echo_image($cache_path, $extension);
            }
        }
        // display error or output when image is not found 
        return  "File Not Found";
    }
}
