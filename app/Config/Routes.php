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
$routes->get('/','Public\LandingPageController::index');

$routes->get('blog/(:any)', 'Api\BlogController::view_blog/$1');
$routes->get('blogs', 'Api\BlogController::view_all_blog');


// App Starting controller point✅
$routes->group('app', function ($routes) {
    $routes->get('/', 'Home::index');
});

    // if we need to check 33 on the page => http://localhost:8080/api/auth/test

    // API our custom app api ✅
$routes->group('api', function ($routes) {
    
    // Authentication ✅
    $routes->group('auth', function ($routes) {
        /*✅*/ $routes->post('create',                 'Api\AuthAPIController::create');
        /*✅*/ $routes->get('verify_account/(:any)',   'Api\AuthAPIController::verify_account/$1');
        /*✅*/ $routes->post('account-verify',         'Api\AuthAPIController::email_verify_account');
        /*✅*/ $routes->get('get_state',               'Api\AuthAPIController::get_auth_state');
        /*✅*/ $routes->post('login',                  'Api\AuthAPIController::login');
        /*✅*/ $routes->post('logout',                 'Api\AuthAPIController::logout');
        /*✅*/ $routes->get('reset',                   'Api\AuthAPIController::reset');
        /*✅*/ $routes->post('reset',                  'Api\AuthAPIController::reset');
        /*✅*/ $routes->post('forgot-password',        'Api\AuthAPIController::forgot_password');
    });

    // // User Controllers ✅
    $routes->group('user', function($routes){
        /*✅*/ $routes->post('profile',               'Api\UsersManagementController::update_profile');
        /*✅*/ $routes->get('edit/(:num)',            'Api\UsersManagementController::edit_user/$1');
        /*✅*/ $routes->post('update/(:num)',         'Api\UsersManagementController::update_user/$1');
    });
    
    // Admin Routing 
    $routes->group('admin', function($routes){
        /*✅*/ $routes->get('dashboard',               'Api\UsersManagementController::admin_dashboard');
        /*✅*/ $routes->get('users',                   'Api\UsersManagementController::get_users');
        /*✅*/ $routes->get('user/update/role/(:num)', 'Api\UsersManagementController::update_role/$1');
        /*✅*/ $routes->get('user/edit/(:num)',        'Api\UsersManagementController::edit_user/$1');
        /*✅*/ $routes->get('user/update/(:num)',      'Api\UsersManagementController::update_user/$1');
        /*✅*/ $routes->post('update/(:num)',          'Api\UsersManagementController::update_user/$1');
        /*✅*/ $routes->get('user/delete/(:num)',      'Api\UsersManagementController::delete_user/$1');
        /*✅*/ $routes->get('user/restore/(:num)',     'Api\UsersManagementController::restore_user/$1');
    
     // Blogs 
        /*✅*/ $routes->get('blog/slug-suggestions/(:any)', 'Api\BlogController::blog_slug_generator/$1');
        /*✅*/ $routes->post('blog/add',                    'Api\BlogController::add_blog');
        /*✅*/ $routes->get('blogs',                        'Api\BlogController::all_blogs');
        /*✅*/ $routes->get('blog/delete/(:any)',           'Api\BlogController::delete_blog/$1');
        /*✅*/ $routes->get('blog/restore/(:any)',          'Api\BlogController::restore_blog/$1');
        /*✅*/ $routes->get('blog/permanent_delete/(:any)', 'Api\BlogController::permanent_delete/$1');
        /*✅*/ $routes->get('blog/edit/(:any)',             'Api\BlogController::edit_blog/$1');
        /*✅*/ $routes->post('blog/update/(:any)',          'Api\BlogController::update_blog/$1');
        /*✅*/ $routes->post('blog/img/upload',             'Api\BlogController::upload_img');
        /*✅*/ $routes->post('blog/get_picture/(:any)',     'Api\BlogController::upload_img/$1');
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
