<?php


use App\Libraries\BotBuilderWidgets;
use CodeIgniter\Events\Events;

?>

<!doctype html>
<html lang="en" ng-app="myApp">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta property="og:locale" content="StoreIgniter" />
    <meta property="og:type" content="webiste" />
    <meta property="og:url" content="StoreIgniter" />
    <meta property="og:site_name" content="StoreIgniter" />
    <meta name="author" content="CoderAnnu">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="manifest" href="<?= base_url('new/assets/img/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('new/assets/img/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('new/assets/img/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('new/assets/img/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('new/assets/img/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('new/assets/img/favicon/safari-pinned-tab.svg') ?>" color="#ffffff">
    <link type="text/css" href="<?= base_url('new/assets/vendor/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= base_url('/new/assets/css/volt.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= base_url('/new/assets/css/flowbuilder.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        body {
            background-color: #eef3f3;
            font-family: 'Poppins', sans-serif;
        }

        .form-floating>label {
            color: grey !important;
            font-size: 14px;
        }

        .stg-editor {
            width: 100%;
            height: calc(100vh - 60px);
            /* background: linear-gradient(90deg, #f2f4f6 20px, transparent 1%) center, linear-gradient(#f2f4f6 20px, transparent 1%) center, lightgrey; */
            background-size: 22px 22px;
        }

        .drawflow_content_node .card-header {
            text-align: center;
            border: 0;
            margin-bottom: 1rem;
        }

        .drawflow .connection .main-path {
            stroke: #1f293738;
        }

        .drawflow .drawflow-node {
            background: white;
            border-radius: 1rem;
            border: 3px solid transparent !important;
            transition: box-shadow 0.2s ease-in-out;
            box-shadow: 0px 0px 4px 0px #ccc;

            animation: fac-animation 0.4s ease-out forwards 0.1s;
        }

        .drawflow .drawflow-node.selected {
            z-index: 99;
            border: 3px solid #397dff !important;
            /* background-color: white !important; */
            /* box-shadow: 0px 0px 20px 8px #ccc; */
        }

        @keyframes fac-animation {
            0% {
                transform: scale(1, 1);
            }

            33% {
                transform: scale(0.95, 1.05);
            }

            66% {
                transform: scale(1.05, 0.95);
            }

            100% {
                transform: scale(1, 1);
            }
        }

        .text-flow {
            width: 100px !important;
            text-align: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: #2b2f32 !important;
            padding: 0 !important;
        }

        .text-flow code {
            color: white;
        }

        .drawflow-delete {
            line-height: inherit;
            background-color: var(--bs-danger);
            border: 2px solid #000000;
        }

        .drawflow .drawflow-node .input,
        .drawflow .drawflow-node .output {
            border: 1px solid #000;
        }

        .floating-action {
            position: absolute;
            right: 2rem;
            bottom: 2rem;
            z-index: 999999;
        }

        .httpRequest .outputs .output_1 {
            background-color: var(--bs-success);
        }

        .httpRequest .outputs .output_2 {
            background-color: var(--bs-danger);
        }

        .loader {
            transform: rotateZ(45deg);
            perspective: 1000px;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            color: #000;
        }

        .loader:before,
        .loader:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: inherit;
            height: inherit;
            border-radius: 50%;
            transform: rotateX(70deg);
            animation: 1s spin linear infinite;
        }

        .loader:after {
            color: #FF3D00;
            transform: rotateY(70deg);
            animation-delay: .4s;
        }

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotateZ(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotateZ(360deg);
            }
        }

        @keyframes rotateccw {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(-360deg);
            }
        }

        @keyframes spin {

            0%,
            100% {
                box-shadow: .2em 0px 0 0px currentcolor;
            }

            12% {
                box-shadow: .2em .2em 0 0 currentcolor;
            }

            25% {
                box-shadow: 0 .2em 0 0px currentcolor;
            }

            37% {
                box-shadow: -.2em .2em 0 0 currentcolor;
            }

            50% {
                box-shadow: -.2em 0 0 0 currentcolor;
            }

            62% {
                box-shadow: -.2em -.2em 0 0 currentcolor;
            }

            75% {
                box-shadow: 0px -.2em 0 0 currentcolor;
            }

            87% {
                box-shadow: .2em -.2em 0 0 currentcolor;
            }
        }

        .badge {
            line-height: initial !important;
            border-radius: 0.4rem !important;
        }

    </style>
    
</head>

<body ng-controller="globalCtrl" ng-cloak>

    <div ng-view></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url('new/assets/vendor/onscreen/dist/on-screen.umd.min.js') ?>"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="<?= base_url('new/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="<?= base_url('new/assets/vendor/simplebar/dist/simplebar.min.js') ?>"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?= base_url('new/assets/js/volt.js') ?>"></script>
    <script src="<?= base_url('new/assets/js/drawflow.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.8.3/angular-route.min.js"></script>
    <script src="<?= base_url('new/assets/js/BotBuilder.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="<?= base_url('/assets/AngularModule/module.js') ?>?time=<?= filemtime(FCPATH . '/assets/AngularModule/module.js'); ?>"></script>

    <script>
        function isInt(value) {
            return !isNaN(value) &&
                parseInt(Number(value)) == value &&
                !isNaN(parseInt(value, 10));
        }

        function auto_grow(element) {
            console.log(element)
            element.style.height = "5px";
            element.style.height = (element.scrollHeight) + "px";
        }
        <?php foreach ($data['components'] as $compontent) : ?>
            app.component("<?= $compontent['tagName']; ?>", {
                template: `<?= trim(str_replace("\n", "", $compontent['template'])); ?>`,

                <?php if(isset($compontent['bindings'])):?>
                   bindings: <?= json_encode($compontent['bindings']);?>,
                <?php endif;?>

                controller: function(<?= (isset($compontent['injectors'])) ? implode(',', $compontent['injectors']) : ''; ?>) {
                    <?php
                    if (isset($compontent['controller']) && !empty($compontent['controller'])) :
                        $controller = $compontent['controller'];
                        $controller = str_replace('<script>', '', $controller);
                        $controller = str_replace('</script>', '', $controller);
                        $controller = trim($controller);
                        echo $controller;
                    endif
                    ?>
                }
            });
        <?php endforeach; ?>

        app.filter('dateFormat', function() {
            return function(date_str) {
                const date = new Date(date_str);

                return date.toDateString()
            }
        })




        app.config(function($routeProvider) {

            $routeProvider

            <?php foreach ($data['routes'] as $route) : ?>.when(`<?= $route['path']; ?>`, {
                    template: `<?= trim(str_replace("\n", "", $route['template'])); ?>`,
                    controller: function(<?= (isset($route['injectors'])) ? implode(',', $route['injectors']) : ''; ?>) {
                        document.title = `<?= $route['title'] ?>`;
                        <?php
                        if (isset($route['controller']) && !empty($route['controller'])) :
                            $controller = $route['controller'];
                            $controller = str_replace('<script>', '', $controller);
                            $controller = str_replace('</script>', '', $controller);
                            $controller = trim($controller);
                            echo $controller;
                        endif ?>
                    }
                })
            <?php endforeach; ?>
                .otherwise({
                    template: `<?= $data['otherwise']; ?>`
                })
        })
    </script>

   
</body>

</html>