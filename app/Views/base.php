<!doctype html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/custom.css'); ?>" />

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!-- Latest Project Template Latest -->


    <!-- <link rel="stylesheet" href="<?= base_url('/Project-Template/assets/css/app.css'); ?>" /> -->
    <link rel="stylesheet" href="<?= base_url('/Project-Template/assets/css/app.min.css'); ?>" />
    <!-- End Project Template  -->

    <script>
        window.BASE_URL = "<?= base_url(); ?>";
    </script>

    <title>StoreIgniter Panel</title>
</head>

<body ng-controller="globalCtrl" ng-cloak>

    <div ng-view></div>
    <!-- Load Bootsrap js file  -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
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
    <script src="<?= base_url('assets/js/chart.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= base_url('/assets/AngularModule/module.js') ?>?time=<?= filemtime(FCPATH . '/assets/AngularModule/module.js'); ?>"></script>



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
    </script>

</body>

</html>