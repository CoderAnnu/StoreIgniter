<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // enable Codeigniter content render service✅
        $view = \Config\Services::renderer();

        $routes = [
            // Dashboard Actions ✅

            [
                "path" => "/",
                "title" => "Dashboard",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('Admin/Dashboard/Dashboard'),
                "controller" => $view->render('Admin/Dashboard/JsController/DashboardCtrl'),
            ],

            [
                "path" => "/signin",
                "title" => "Signin",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('Auth/SignIn/SignIn'),
                "controller" => $view->render('Auth/SignIn/JsController/SignInCtrl')
            ],
            [
                "path" => "/signup",
                "title" => "Signin",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('Auth/SignUp/SignUp'),
                "controller" => $view->render('Auth/SignUp/JsController/SignUpCtrl')
            ],
            [
                "path" => "/account-verify",
                "title" => "Verify Account",
                "injectors" => ['$http', '$window', '$scope', 'Auth', '$interval'],
                "template" => $view->render('Auth/VerifyAccount/VerifyAccount'),
                "controller" => $view->render('Auth/VerifyAccount/JsController/VerifyAccountCtrl')
            ],

            [
                "path" => "/forgot-password",
                "title" => "Forgot Password",
                "injectors" => ['$http', '$window', '$scope', 'Auth', '$interval'],
                "template" => $view->render('Auth/ForgotPassword/ForgotPassword'),
                "controller" => $view->render('Auth/ForgotPassword/JsController/ForgotPasswordCtrl')
            ],

            [
                "path" => "/reset-password/:key",
                "title" => "Reset Password",
                "injectors" => ['$http', '$window', '$scope', 'Auth', '$location','$interval', '$routeParams'],
                "template" => $view->render('Auth/ResetPassword/ResetPassword'),
                "controller" => $view->render('Auth/ResetPassword/JsController/ResetPasswordCtrl')
            ],
        ];
        // End Admin Section 


        // Start main Components likes Routes Components and error. ✅
        return view('home', [
            'data' => [
                "otherwise" => $view->render('error'),
                "routes" => $routes,
                "components" => [
                    [
                        "tagName" => "topBar",
                        "injectors" => ['$http', '$interval', '$window', '$scope', '$location', 'Auth', '$element'],
                        "bindings" => [
                            "title" => "="
                        ],
                        "template" => $view->render('Components/TopBar/TopBar'),
                        "controller" => $view->render('Components/TopBar/JsController/TopBarCtrl')
                    ],

                    [
                        "tagName" => "sideBar",
                        "injectors" => ['$http', '$interval', '$window', '$scope', '$location', 'Auth', '$element'],
                        "bindings" => [
                            "title" => "="
                        ],
                        "template" => $view->render('Components/SideBar/SideBar'),
                        "controller" => $view->render('Components/SideBar/JsController/SideBarCtrl')
                    ],
                    [
                        "tagName" => "footerBar",
                        "injectors" => ['$http', '$interval', '$window', '$scope', '$location', 'Auth', '$element'],
                        "bindings" => [
                            "title" => "="
                        ],
                        "template" => $view->render('Components/FooterBar/FooterBar'),
                        "controller" => $view->render('Components/FooterBar/JsController/FooterBarCtrl')
                    ],
                ]
            ]
        ]);
    }
}
