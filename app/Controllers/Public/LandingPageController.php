<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;

class LandingPageController extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'title' => get_option('site_name', SITE_NAME),
            'description' => get_option('site_description', SITE_DESCRIPTION),
            'keywords' => get_option('site_keywords', SITE_KEYWORDS),
            'author' => get_option('site_author', SITE_AUTHOR),
        ];
        return view('frontend/Landing/LandingPage', $data);
        // return view('frontend/base.php');
    }
}
