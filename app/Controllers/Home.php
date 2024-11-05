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
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth'],
                "template" => $view->render('/Dashboard/Dashboard'),
                "controller" => $view->render('/Dashboard/JsController/DashboardCtrl'),
            ],

            // User Profile 
            [
                "path" => "/my-profile",
                "title" => "My Profile",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth'],
                "template" => $view->render('MyProfile/MyProfile'),
                "controller" => $view->render('MyProfile/JsController/MyProfileCtrl'),
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
                "injectors" => ['$http', '$window', '$scope', 'Auth', '$location', '$interval', '$routeParams'],
                "template" => $view->render('Auth/ResetPassword/ResetPassword'),
                "controller" => $view->render('Auth/ResetPassword/JsController/ResetPasswordCtrl')
            ],

            // Product page 
            [
                "path" => "/product",
                "title" => "All Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth'],
                "template" => $view->render('/Product/AllProduct/AllProduct'),
                "controller" => $view->render('/Product/AllProduct/JsController/AllProductCtrl')
            ],
            [
                "path" => "/product/add",
                "title" => "Add Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth'],
                "template" => $view->render('/Product/AddProduct/addProduct'),
                "controller" => $view->render('/Product/AddProduct/JsController/addProductCtrl')
            ],

            [
                "path" => "/product/edit/:key",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/EditProduct/EditProduct'),
                "controller" => $view->render('/Product/EditProduct/JsController/EditProductCtrl')
            ],

            [
                "path" => "/product/catelist",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/ProductCategory/Catelist'),
                "controller" => $view->render('/Product/ProductCategory/JsController/CatelistCtrl')
            ],
            [
                "path" => "/product/order",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/Order/Order'),
                "controller" => $view->render('/Product/Order/JsController/OrderCtrl')
            ],
            [
                "path" => "/product/order/details",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/Order/OrderDetails/OrderDetails'),
                "controller" => $view->render('/Product/Order/OrderDetails/JsController/OrderDetailsCtrl')
            ],
            [
                "path" => "/product/customer",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/Customer/Customer'),
                "controller" => $view->render('/Product/Customer/JsController/CustomerCtrl')
            ],
            [
                "path" => "/product/customer/details",
                "title" => "Edit Product",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
                "template" => $view->render('/Product/Customer/Customer'),
                "controller" => $view->render('/Product/Customer/JsController/CustomerCtrl')
            ],
        ];
        // End Admin Section 

        // Push admin's route to array
        $routes[] = [
            "path" => "/admin/dashboard",
            "title" => "Admin dashboard",
            "injectors" => ['$http', '$window', '$timeout', '$scope', '$location', 'Auth', '$routeParams'],
            "template" =>  $view->render('Admin/Dashboard/Dashboard'),
            "controller" => $view->render('Admin/Dashboard/JsController/DashboardCtrl'),
        ];

        $routes[] = [
            "path" => "/admin/users",
            "title" => "Users",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" =>  $view->render('Admin/Users/Users'),
            "controller" => $view->render('Admin/Users/JsController/UsersCtrl'),
        ];

        // Admin Settings 
        // $routes[] = [
        //     "path" => "/admin/setting",
        //     "title" => "Admin Settings",
        //     "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
        //     "template" =>  $view->render('Admin/GeneralSettings/GeneralSettings'),
        //     "controller" => $view->render('Admin/GeneralSettings/JsController/GeneralSettingCtrl'),
        // ];

        $routes[] = [
            "path" => "/user/edit/:key",
            "title" => "Edit user",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" =>  $view->render('Admin/Users/EditUser/EditUser'),
            "controller" => $view->render('Admin/Users/EditUser/JsController/EditUserCtrl'),

        ];

        $routes[] = [
            "path" => "/user/delete/:key",
            "title" => "Delete user",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" =>  $view->render('Admin/Users/Users'),
            "controller" => $view->render('Admin/Users/JsController/UsersCtrl'),
        ];

        $routes[] = [
            "path" => "/user/restore/:key",
            "title" => "Delete user",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" =>  $view->render('Admin/Users/Users'),
            "controller" => $view->render('Admin/Users/JsController/UsersCtrl'),
        ];

        // Pages front-end routing  
        $routes[] = [
            "path" => "/pages",
            "title" => "All Pages",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" => $view->render('Page/AllPages/AllPages'),
            "controller" => $view->render('Page/AllPages/JsController/AllPagesCtrl'),
        ];

        $routes[] = [
            "path" => "/page/add",
            "title" => "Add Page",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$timeout', '$routeParams'],
            "template" => $view->render('Page/AddPage/AddPage'),
            "controller" => $view->render('Page/AddPage/JsController/AddPageCtrl'),
        ];

        $routes[] = [
            "path" => "/page/edit/:key",
            "title" => "Edit Page",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$timeout', '$routeParams'],
            "template" => $view->render('Page/EditPage/EditPage'),
            "controller" => $view->render('Page/EditPage/JsController/EditPageCtrl'),
        ];

        $routes[] =  [
            "path" => "/page/delete/:key",
            "title" => "Delete Page",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" => $view->render('Page/AllPages/AllPages'),
            "controller" => $view->render('Page/AllPages/JsController/AllPagesCtrl'),
        ];

        $routes[] = [
            "path" => "/page/restore/:key",
            "title" => "Restore Page",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" => $view->render('Page/AllPages/AllPages'),
            "controller" => $view->render('Page/AllPages/JsController/AllPagesCtrl'),
        ];

        $routes[] = [
            "path" => "/page/delete/permanent/:key",
            "title" => "Delete Page",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" => $view->render('Page/AllPages/AllPages'),
            "controller" => $view->render('Page/AllPages/JsController/AllPagesCtrl'),
        ];


        // Blogs for front-end pages 
        $routes[] = [
            "path" => "/blogs",
            "title" => "All Blogs",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$routeParams'],
            "template" => $view->render('Blog/AllBlogs/AllBlogs'),
            "controller" => $view->render('Blog/AllBlogs/JsController/BlogCtrl'),
        ];

        $routes[] = [
            "path" => "/blog/add",
            "title" => "Add Blog",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$timeout', '$routeParams', 'fileUpload'],
            "template" => $view->render('Blog/AddBlog/AddBlog'),
            "controller" => $view->render('Blog/AddBlog/JsController/AddBlogCtrl'),
        ];

        $routes[] = [
            "path" => "/blog/edit/:key",
            "title" => "Edit Blog",
            "injectors" => ['$http', '$window', '$scope', '$location', 'Auth', '$timeout', '$routeParams'],
            "template" => $view->render('Blog/EditBlog/EditBlog'),
            "controller" => $view->render('Blog/EditBlog/JsController/EditBlogCtrl'),
        ];


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
