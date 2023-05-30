<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $view = \Config\Services::renderer();

        $routes = [
            [
                "path" => "/",
                "title" => "Dashboard",
                "injectors" => ['$http', '$window', '$scope', '$location', 'Auth'],
                "template" => $view->render('Admin/Dashboard/Dashboard'),
                "controller" => $view->render('Admin/Dashboard/JsController/DashboardCtrl'),
            ],
            
        ];


        return view('home', [
            'data' => [
                "otherwise" => $view->render('error'),
                "routes" => $routes,
                "components" => [
                    [
                        "tagName" => "sideBar",
                        "injectors" => ['$http', '$interval', '$scope', '$location', '$window', 'Auth'],
                        "template" => $view->render('Components/SideBar/SideBar'),
                        "controller" => $view->render('Components/SideBar/JsController/SideBarCtrl')
                    ],
                    [
                        "tagName" => "topBar",
                        "injectors" => ['$http', '$interval', '$window', '$scope', '$location', 'Auth', '$element'],
                        "bindings" => [
                            "title" => "="
                        ],
                        "template" => $view->render('Components/TopBar/TopBar'),
                        "controller" => $view->render('Components//TopBar/JsController/TopBarCtrl')
                    ],
                    [
                        "tagName" => "footerBar",
                        "injectors" => ['$http', '$interval', '$window', '$scope', '$location', 'Auth'],
                        "template" => $view->render('Components/FooterBar/FooterBar'),
                        "controller" => $view->render('Components/FooterBar/JsController/FooterBarCtrl')
                    ],
                ]
            ]
        ]);
    }
}
