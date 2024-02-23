<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


// This is our landing page ✅
// $routes->get('/','LandingPageController::index');



// App Starting controller point✅
$routes->group('app', function ($routes) {
    $routes->get('/', 'Home::index');
});

    // if we need to check data on the page => http://localhost:8080/api/auth/test

    // API our custom app api ✅
$routes->group('api', function ($routes) {
    
    // Authentication ✅
    $routes->group('auth', function ($routes) {
        /*✅*/ $routes->post('create',               'Api\AuthAPIController::create');
        /*✅*/ $routes->get('verify_account/(:any)', 'Api\AuthAPIController::verify_account/$1');
        /*✅*/ $routes->post('acccount-verify',      'Api\AuthAPIController::email_verify_account');
        /*✅*/ $routes->get('get_state',             'Api\AuthAPIController::get_auth_state');
        /*✅*/ $routes->post('login',                'Api\AuthAPIController::login');
        /*✅*/ $routes->post('logout',               'Api\AuthAPIController::logout');
        /*✅*/ $routes->post('reset',                'Api\AuthAPIController::reset');
        /*✅*/ $routes->post('forgot-password',      'Api\AuthAPIController::forgot_password');
    });

});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
