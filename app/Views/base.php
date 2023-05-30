<!doctype html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/img/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('assets/img/favicon/safari-pinned-tab.svg') ?>" color="#ffffff">
    <link type="text/css" href="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet">
    <link type="text/css" href="<?= base_url('/assets/css/volt.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/img/favicon/favicon.ico'); ?>" />


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url('/assets/vendor/fonts/boxicons.css'); ?> " />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/core.css'); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />
    <!-- Page CSS -->

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/custom.css') ?>" />
    <!-- Helpers -->
    <script src="<?= base_url('/assets/vendor/js/helpers.js'); ?>"></script>
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />

    <link rel="stylesheet" href="<?= base_url('/assets/vendor/libs/apex-charts/apex-charts.css'); ?>" />



    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <script src="<?= base_url('/assets/js/config.js'); ?>"></script>

    <!-- Extra Theme Script -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- end Extra Theme Script -->
    



    <script>
        window.BASE_URL = "<?= base_url(); ?>";
    </script>

    <title>Cpanel Management System</title>
</head>

<body ng-controller="globalCtrl" ng-cloak>

    <div ng-view></div>
    <!-- Load Bootsrap js file  -->
    <script src="<?= base_url('/assets/AngularModule/module.js') ?>?time=<?= filemtime(FCPATH . '/assets/AngularModule/module.js'); ?>"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/vendor/onscreen/dist/on-screen.umd.min.js') ?>"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="<?= base_url('assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="<?= base_url('assets/vendor/simplebar/dist/simplebar.min.js') ?>"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?= base_url('assets/js/volt.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-route/1.8.3/angular-route.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>




    <!-- custom scripts -->
    <script>
        function isInt(value) {
            return !isNaN(value) &&
                parseInt(Number(value)) == value &&
                !isNaN(parseInt(value, 10));
        }
        // add component
        <?php foreach ($data['components'] as $component) : ?>
            app.component("<?= $component['tagName']; ?>", {
                template: `<?= trim(str_replace("\n", "", $component['template'])); ?>`,

                <?php if (isset($component['bindings'])) : ?>
                    bindings: <?= json_encode($component['bindings']); ?>,
                <?php endif; ?>

                controller: function(<?= (isset($component['injectors'])) ? implode(',', $component['injectors']) : ''; ?>) {
                    <?php
                    if (isset($component['controller']) && !empty($component['controller'])) :
                        $controller = $component['controller'];
                        $controller = str_replace('<script>', '', $controller);
                        $controller = str_replace('</script>', '', $controller);
                        $controller = trim($controller);
                        echo $controller;
                    endif
                    ?>
                }
            });


        <?php endforeach; ?>

        //  This is our controller that are work to provide effiency to controll all pages controller to use this main controller 
        app.config(function($routeProvider) {
            $routeProvider
            <?php foreach ($data['routes'] as $route) : ?>
                    .when(`<?= $route['path']; ?>`, {
                        template: `<?= trim(str_replace("\n", "", $route['template'])); ?>`,
                        controller: function(<?= (isset($route['injectors'])) ? implode(',', $route['injectors']) : ''; ?>) {
                            document.title = '<?= $route['title']; ?>';
                            <?php
                            if (isset($route['controller']) && !empty($route['controller'])) :
                                $controller = $route['controller'];
                                $controller = str_replace('<script>', '', $controller);
                                $controller = str_replace('</script>', '', $controller);
                                $controller = trim($controller);
                                echo $controller;
                            endif;
                            ?>

                        }
                    })

                    
            <?php endforeach; ?>

                .otherwise({
                    template: `<?= $data['otherwise'] ?>`
                })
        })

        
        app.filter('dateFormat', function() {
            return function(date_str) {
                const date = new Date(date_str);

                return date.toDateString()
            }
        })


    </script>

</body>

</html>