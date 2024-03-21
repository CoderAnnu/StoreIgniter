<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;

class LandingPageController extends BaseController
{
    public function index()
    {
        // return view('frontend/Landing/LandingPage.php');
        return view('frontend/base.php');
    }
}
