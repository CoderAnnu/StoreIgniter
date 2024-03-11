<!doctype html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- New Dashboard -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/Project-Template/Materio/assets/img/favicon/favicon.ico') ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/materialdesignicons.css') ?>" class="template-customizer-core-css" />
    <!-- Menu waves for no-customizer fix -->
    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/demo.css') ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/front-page.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/nouislider.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/swiper.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/node-waves.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/Project-Template/Materio/LandingPage/assets/css/theme-default.css') ?>" />

    <!-- end dashboard -->

    <!-- End Project Template  -->

    <script>
        window.BASE_URL = "<?= base_url(); ?>";
    </script>

    <title>StoreIgniter E-Commerce PlatForm</title>
</head>

<body>

    <div ng-view class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../Project-Template/Materio/assets/" data-template="vertical-menu-template-free"></div>

    <!-- landing page -->

    <body>


        <!-- Navbar: Start -->
        <nav class="layout-navbar container shadow-none py-0">
            <div class="navbar navbar-expand-lg landing-navbar border-top-0 px-3 px-md-4">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                    <!-- Mobile menu toggle: Start-->
                    <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons mdi mdi-menu mdi-24px align-middle"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="landing-page.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <span style="color:#9055FD;">
                                <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">Materio</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons mdi mdi-close"></i>
                    </button>
                    <ul class="navbar-nav me-auto p-3 p-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-nowrap" href="landing-page.html#landingContact">Contact us</a>
                        </li>
                        <li class="nav-item mega-dropdown">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                                <span data-i18n="Pages">Pages</span>
                            </a>
                            <div class="dropdown-menu p-4">
                                <div class="row gy-4">
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-view-grid-outline"></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="pricing-page.html">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    <span data-i18n="Pricing">Pricing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="payment-page.html">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    <span data-i18n="Payment">Payment</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="checkout-page.html">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    <span data-i18n="Checkout">Checkout</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="help-center-landing.html">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    <span data-i18n="Help Center">Help Center</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-lock-open-outline"></i></span>
                                            </div>
                                            <span class="ps-1">Auth Demo</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-login-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Login (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-login-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Login (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-register-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Register (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-register-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Register (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-register-multisteps.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Register (Multi-steps)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-forgot-password-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Forgot Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-forgot-password-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Forgot Password (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-reset-password-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Reset Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-reset-password-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Reset Password (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-image-outline"></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/pages-misc-error.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Error
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/pages-misc-under-maintenance.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Under Maintenance
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/pages-misc-comingsoon.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Coming Soon
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/pages-misc-not-authorized.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Not Authorized
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-verify-email-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Verify Email (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-verify-email-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Verify Email (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-two-steps-basic.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Two Steps (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link d-flex align-items-center" href="../vertical-menu-template/auth-two-steps-cover.html" target="_blank">
                                                    <i class="mdi mdi-radiobox-blank mdi-14px me-2"></i>
                                                    Two Steps (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="bg-body nav-img-col p-2">
                                            <img src="../../assets/img/front-pages/misc/nav-item-col-img-light.png'); ?>" class="img-fluid scaleX-n1-rtl w-100" alt="nav item col image" data-app-light-img="front-pages/misc/nav-item-col-img-light.png'); ?>" data-app-dark-img="front-pages/misc/nav-item-col-img-dark.png'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="mdi mdi-24px mdi-weather-sunny"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->


                    <!-- navbar button: Start -->
                    <li>
                        <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4 waves-effect waves-light" target="_blank"><span class="tf-icons mdi mdi-account me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </nav>
        <!-- Navbar: End -->


        <!-- Sections:Start -->


        <div data-bs-spy="scroll" class="scrollspy-example">
            <!-- Hero: Start -->
            <section id="landingHero" class="section-py landing-hero">
                <div class="container">
                    <div class="hero-text-box text-center">
                        <h1 class="text-primary hero-title">All in one sass application for your business</h1>
                        <h2 class="h6 mb-4 pb-1 lh-lg">
                            No coding required to make customisations.<br>The live customiser has everything your marketing need.
                        </h2>
                        <a href="#landingPricing" class="btn btn-primary waves-effect waves-light">Get early access</a>
                    </div>
                    <div class="position-relative hero-animation-img">
                        <a href="../vertical-menu-template/dashboards-crm.html" target="_blank">
                            <div class="hero-dashboard-img text-center">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/hero-dashboard-light.png'); ?>" alt="hero dashboard" class="animation-img" data-speed="2" data-app-light-img="front-pages/landing-page/hero-dashboard-light.png'); ?>" data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png'); ?>" style="transform: translate(6.22px, 1.12px);">
                            </div>
                            <div class="position-absolute hero-elements-img">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/hero-elements-light.png'); ?>" alt="hero elements" class="animation-img" data-speed="4" data-app-light-img="front-pages/landing-page/hero-elements-light.png'); ?>" data-app-dark-img="front-pages/landing-page/hero-elements-dark.png'); ?>" style="transform: translate(-8.04px, -18.24px);">
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Hero: End -->

            <!-- Useful features: Start -->
            <section id="landingFeatures" class="section-py landing-features">
                <div class="container">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">Useful features</span>
                    </h6>
                    <h3 class="text-center mb-2"><span class="fw-bold">Everything you need</span> to start your next project</h3>
                    <p class="text-center fw-medium mb-3 mb-md-5 pb-3">
                        Not just a set of tools, the package includes ready-to-deploy conceptual application.
                    </p>
                    <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/laptop-charging.png'); ?>" alt="laptop charging">
                            </div>
                            <h5 class="mb-2">Quality Code</h5>
                            <p class="features-icon-description">
                                Code structure that all developers will easily understand and fall in love with.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="../../assets/img/front-pages/icons/transition-up.png'); ?>" alt="transition up">
                            </div>
                            <h5 class="mb-2">Continuous Updates</h5>
                            <p class="features-icon-description">
                                Free updates for the next 12 months, including new demos and features.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="../../assets/img/front-pages/icons/edit.png'); ?>" alt="edit">
                            </div>
                            <h5 class="mb-2">Stater-Kit</h5>
                            <p class="features-icon-description">
                                Start your project quickly without having to remove unnecessary features.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="../../assets/img/front-pages/icons/3d-select-solid.png'); ?>" alt="3d select solid">
                            </div>
                            <h5 class="mb-2">API Ready</h5>
                            <p class="features-icon-description">
                                Just change the endpoint and see your own data loaded within seconds.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/lifebelt.png'); ?>" alt="lifebelt">
                            </div>
                            <h5 class="mb-2">Excellent Support</h5>
                            <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                            <div class="features-icon mb-3">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/google-docs.png'); ?>" alt="google docs">
                            </div>
                            <h5 class="mb-2">Well Documented</h5>
                            <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Useful features: End -->

            <!-- Real customers reviews: Start -->
            <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
                <div class="container">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">real customers reviews</span>
                    </h6>
                    <h3 class="text-center mb-2"><span class="fw-bold">Success stories</span> from clients</h3>
                    <p class="text-center fw-medium mb-3 mb-md-5">See what our customers have to say about their experience.</p>
                </div>
                <div class="swiper-reviews-carousel overflow-hidden mb-5 pt-4">
                    <div class="swiper swiper-initialized swiper-horizontal" id="swiper-reviews">
                        <div class="swiper-wrapper" id="swiper-wrapper-2df731d723be2d74" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-4404.5px, 0px, 0px);">
                            <div class="swiper-slide" role="group" aria-label="4 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="3">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-2.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            All the requirements for developers have been taken into consideration, so I’m able to build any
                                            interface I want.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Sara Smith</h6>
                                            <p class="mb-0">Founder of Continental</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="4">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-5.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="6 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="5">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center h-100">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-4.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star-outline mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="7 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="6">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center h-100">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-1.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>Materio is awesome, and I particularly enjoy knowing that if I get stuck on something.</p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Tommy haffman</h6>
                                            <p class="mb-0">Founder of Levis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="8 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="7">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center h-100">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-3.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            This template is superior in so many ways. The code, the design, the regular updates, the
                                            support.. It’s the whole package. Excellent Work.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">CTO of Airbnb</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="9 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="8">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center h-100">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-2.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            All the requirements for developers have been taken into consideration, so I’m able to build any
                                            interface I want.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star-outline mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Sara Smith</h6>
                                            <p class="mb-0">Founder of Continental</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="10 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="9">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center h-100">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-5.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="11 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="10">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-4.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="12 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="11">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-1.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>Materio is awesome, and I particularly enjoy knowing that if I get stuck on something.</p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Tommy haffman</h6>
                                            <p class="mb-0">Founder of Levis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="13 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="12">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-3.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            This template is superior in so many ways. The code, the design, the regular updates, the
                                            support.. It’s the whole package. Excellent Work.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">CTO of Airbnb</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="14 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="13">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-2.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            All the requirements for developers have been taken into consideration, so I’m able to build any
                                            interface I want.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Sara Smith</h6>
                                            <p class="mb-0">Founder of Continental</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="15 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="14">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-5.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="0">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-4.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building dashboard
                                            sites on almost any project.”
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">Founder of Hubspot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="1">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-1.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>Materio is awesome, and I particularly enjoy knowing that if I get stuck on something.</p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Tommy haffman</h6>
                                            <p class="mb-0">Founder of Levis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 15" style="width: 363px; margin-right: 20px;" data-swiper-slide-index="2">
                                <div class="card h-100">
                                    <div class="card-body text-body d-flex flex-column justify-content-between text-center">
                                        <div class="mb-3">
                                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-3.png'); ?>" alt="client logo" class="client-logo img-fluid">
                                        </div>
                                        <p>
                                            This template is superior in so many ways. The code, the design, the regular updates, the
                                            support.. It’s the whole package. Excellent Work.
                                        </p>
                                        <div class="text-warning mb-3">
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                            <i class="tf-icons mdi mdi-star mdi-24px"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Eugenia Moore</h6>
                                            <p class="mb-0">CTO of Airbnb</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 10"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 11"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 12"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 13"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 14"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 15"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <hr class="m-0">
                <div class="container">
                    <div class="swiper-logo-carousel py-4 my-lg-2">
                        <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" id="swiper-clients-logos">
                            <div class="swiper-wrapper" id="swiper-wrapper-ba5fff481533bbf10" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-458.667px, 0px, 0px);">
                                <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 229.333px;">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-1-light.png'); ?>" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo-1-light.png'); ?>" data-app-dark-img="front-pages/branding/logo-1-dark.png'); ?>">
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 5" style="width: 229.333px;">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-2-light.png'); ?>" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo-2-light.png'); ?>" data-app-dark-img="front-pages/branding/logo-2-dark.png'); ?>">
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 5" style="width: 229.333px;">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-3-light.png'); ?>" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo-3-light.png'); ?>" data-app-dark-img="front-pages/branding/logo-3-dark.png'); ?>">
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 5" style="width: 229.333px;">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-4-light.png'); ?>" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo-4-light.png'); ?>" data-app-dark-img="front-pages/branding/logo-4-dark.png'); ?>">
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 229.333px;">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/branding/logo-5-light.png'); ?>" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo-5-light.png'); ?>" data-app-dark-img="front-pages/branding/logo-5-dark.png'); ?>">
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Real customers reviews: End -->

            <!-- Our great team: Start -->
            <section id="landingTeam" class="section-py landing-team">
                <div class="container bg-icon-right">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">our great team</span>
                    </h6>
                    <h3 class="text-center mb-2"><span class="fw-bold">Supported</span> by Real People</h3>
                    <p class="text-center fw-medium mb-3 mb-md-5 pb-3">Who is behind these great-looking interfaces?</p>
                    <div class="row gy-5 mt-2">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-hover-border-primary mt-3 mt-lg-0 shadow-none">
                                <div class="bg-label-primary position-relative team-image-box">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/team-member-1.png'); ?>" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold mb-1">Sophie Gilbert</h5>
                                    <p class="card-text">Project Manager</p>
                                    <div class="text-center team-media-icons">
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-facebook mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-twitter mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-hover-border-danger mt-3 mt-lg-0 shadow-none">
                                <div class="bg-label-danger position-relative team-image-box">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/team-member-2.png'); ?>" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold mb-1">Nannie Ford</h5>
                                    <p class="card-text">Development Lead</p>
                                    <div class="text-center team-media-icons">
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-facebook mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-twitter mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-hover-border-success mt-3 mt-lg-0 shadow-none">
                                <div class="bg-label-success position-relative team-image-box">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/team-member-3.png'); ?>" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold mb-1">Chris Watkins</h5>
                                    <p class="card-text">Marketing Manager</p>
                                    <div class="text-center team-media-icons">
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-facebook mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-twitter mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-hover-border-info mt-3 mt-lg-0 shadow-none">
                                <div class="bg-label-info position-relative team-image-box">
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/team-member-4.png'); ?>" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold mb-1">Paul Miles</h5>
                                    <p class="card-text">UI Designer</p>
                                    <div class="text-center team-media-icons">
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-facebook mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-twitter mdi-24px me-2"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-heading" target="_blank">
                                            <i class="tf-icons mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our great team: End -->

            <!-- Pricing plans: Start -->
            <section id="landingPricing" class="section-py bg-body landing-pricing">
                <div class="container bg-icon-left">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">pricing plans</span>
                    </h6>
                    <h3 class="text-center mb-0"><span class="fw-bold">Tailored pricing plans</span> designed for you</h3>
                    <p class="text-center fw-medium mb-5 pt-2 pb-lg-5">
                        All plans include 40+ advanced tools and features to boost your product.<br>
                        the best plan to fit your needs.
                    </p>
                    <div id="slider-pricing" class="mb-5 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                        <div class="noUi-base">
                            <div class="noUi-connects">
                                <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.0371179, 1);"></div>
                            </div>
                            <div class="noUi-origin" style="transform: translate(-96.2882%, 0px); z-index: 4;">
                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="916.0" aria-valuenow="34.0" aria-valuetext="34.00">
                                    <div class="noUi-touch-area"></div>
                                    <div class="noUi-tooltip">34+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-4 pt-lg-3">
                        <!-- Basic Plan: Start -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="mb-2 pb-1">Basic Plan</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="d-flex mb-0"><sup class="h5 mt-3">$</sup><span class="display-3 fw-bold">20</span></h5>
                                        <div class="ms-2 ps-1">
                                            <h6 class="mb-1">Per month</h6>
                                            <p class="small mb-0">10% off for yearly subscription</p>
                                        </div>
                                    </div>
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/smiling-icon.png'); ?>" alt="smiling icon">
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Timeline
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Basic search
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Live chat widget
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Email marketing
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Custom Forms
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Traffic analytics
                                            </h5>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="me-1">
                                            <h6 class="mb-1">Basic Support</h6>
                                            <p class="small mb-0">Only Email</p>
                                        </div>
                                        <span class="badge bg-label-primary rounded-pill">AVG. Time: 24h</span>
                                    </div>
                                    <div class="text-center mt-4 pt-2">
                                        <a href="payment-page.html" class="btn btn-outline-primary w-100 waves-effect">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Plan: End -->

                        <!-- Favourite Plan: Start -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="card border-primary border-2 shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="mb-2 pb-1">Favourite Plan</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="d-flex mb-0"><sup class="h5 mt-3">$</sup><span class="display-3 fw-bold">51</span></h5>
                                        <div class="ms-2 ps-1">
                                            <h6 class="mb-1">Per month</h6>
                                            <p class="small mb-0">10% off for yearly subscription</p>
                                        </div>
                                    </div>
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/smiling-icon.png'); ?>" alt="smiling icon">
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Everything in basic
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Timeline with database
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Advanced search
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Marketing automation
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Advanced chatbot
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Campaign management
                                            </h5>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="me-1">
                                            <h6 class="mb-1">Standard Support</h6>
                                            <p class="small mb-0">Email &amp; Chat</p>
                                        </div>
                                        <span class="badge bg-label-primary rounded-pill">AVG. Time: 6h</span>
                                    </div>
                                    <div class="text-center mt-4 pt-2">
                                        <a href="payment-page.html" class="btn btn-primary w-100 waves-effect waves-light">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Favourite Plan: End -->

                        <!-- Standard Plan: Start -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow-none">
                                <div class="card-header border-0">
                                    <h3 class="mb-2 pb-1">Standard Plan</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="d-flex mb-0"><sup class="h5 mt-3">$</sup><span class="display-3 fw-bold">99</span></h5>
                                        <div class="ms-2 ps-1">
                                            <h6 class="mb-1">Per month</h6>
                                            <p class="small mb-0">10% off for yearly subscription</p>
                                        </div>
                                    </div>
                                    <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/smiling-icon.png'); ?>" alt="smiling icon">
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Everything in premium
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Timeline with database
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Fuzzy search
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                A/B testing sanbox
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Custom permissions
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/list-arrow-icon.png'); ?>" alt="list arrow icon" class="me-2 pe-1 scaleX-n1-rtl">
                                                Social media automation
                                            </h5>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="me-1">
                                            <h6 class="mb-1">Exclusive Support</h6>
                                            <p class="small mb-0">Email, Chat &amp; Google Meet</p>
                                        </div>
                                        <span class="badge bg-label-primary rounded-pill">Live Support</span>
                                    </div>
                                    <div class="text-center mt-4 pt-2">
                                        <a href="payment-page.html" class="btn btn-outline-primary w-100 waves-effect">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Standard Plan: End -->
                    </div>
                </div>
            </section>
            <!-- Pricing plans: End -->

            <!-- Fun facts: Start -->
            <section id="landingFunFacts" class="section-py landing-fun-facts">
                <div class="container">
                    <div class="row gx-0 gy-5 gx-sm-5">
                        <div class="col-md-3 col-sm-6 text-center">
                            <span class="badge badge-center rounded-pill bg-label-hover-primary fun-facts-icon mb-4"><i class="tf-icons mdi mdi-land-plots mdi-36px"></i></span>
                            <h2 class="fw-bold mb-1">137+</h2>
                            <p class="fw-medium mb-0">Completed Sites</p>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <span class="badge badge-center rounded-pill bg-label-hover-success fun-facts-icon mb-4"><i class="tf-icons mdi mdi-clock-outline mdi-36px"></i></span>
                            <h2 class="fw-bold mb-1">1,100+</h2>
                            <p class="fw-medium mb-0">Working Hours</p>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <span class="badge badge-center rounded-pill bg-label-hover-warning fun-facts-icon mb-4"><i class="tf-icons mdi mdi-emoticon-happy-outline mdi-36px"></i></span>
                            <h2 class="fw-bold mb-1">137+</h2>
                            <p class="fw-medium mb-0">Happy Customers</p>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <span class="badge badge-center rounded-pill bg-label-hover-info fun-facts-icon mb-4"><i class="tf-icons mdi mdi-medal-outline mdi-36px"></i></span>
                            <h2 class="fw-bold mb-1">23+</h2>
                            <p class="fw-medium mb-0">Awards Winning</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fun facts: End -->

            <!-- FAQ: Start -->
            <section id="landingFAQ" class="section-py bg-body landing-faq">
                <div class="container bg-icon-right">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">faq</span>
                    </h6>
                    <h3 class="text-center mb-2">Frequently asked<span class="fw-bold"> questions</span></h3>
                    <p class="text-center fw-medium mb-3 mb-md-5 pb-3">
                        Browse through these FAQs to find answers to commonly asked questions.
                    </p>
                    <div class="row gy-5">
                        <div class="col-lg-5">
                            <div class="text-center">
                                <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/sitting-girl-with-laptop.png'); ?>" alt="sitting girl with laptop" class="faq-image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion" id="accordionFront">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="head-One">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                            Do you charge for each upgrade?
                                        </button>
                                    </h2>

                                    <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionFront" aria-labelledby="accordionOne">
                                        <div class="accordion-body">
                                            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                            marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                            soufflé. Wafer gummi bears marshmallow pastry pie.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="head-Two">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                            Do I need to purchase a license for each website?
                                        </button>
                                    </h2>
                                    <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="accordionTwo" data-bs-parent="#accordionFront">
                                        <div class="accordion-body">
                                            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                            dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                                            beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item active">
                                    <h2 class="accordion-header" id="head-Three">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="true" aria-controls="accordionThree">
                                            What is regular license?
                                        </button>
                                    </h2>
                                    <div id="accordionThree" class="accordion-collapse collapse show" aria-labelledby="accordionThree" data-bs-parent="#accordionFront">
                                        <div class="accordion-body">
                                            Regular license can be used for end products that do not charge users for access or service(access
                                            is free and there will be no monthly subscription fee). Single regular license can be used for
                                            single end product and end product can be used by you or your client. If you want to sell end
                                            product to multiple clients then you will need to purchase separate license for each client. The
                                            same rule applies if you want to use the same end product on multiple domains(unique setup). For
                                            more info on regular license you can check official description.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="head-Four">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                            What is extended license?
                                        </button>
                                    </h2>
                                    <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="accordionFour" data-bs-parent="#accordionFront">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                                            Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime, blanditiis
                                            earum ea, incidunt quam possimus cumque.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="head-Five">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                            Which license is applicable for SASS application?
                                        </button>
                                    </h2>
                                    <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="accordionFive" data-bs-parent="#accordionFront">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                                            nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                                            labore enim architecto non!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQ: End -->

            <!-- CTA: Start -->
            <section id="landingCTA" class="section-py border border-2 landing-cta p-lg-0 pb-0">
                <div class="container">
                    <div class="row align-items-center gy-5 gy-lg-0">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h6 class="h2 text-primary fw-bold mb-1">Ready to Get Started?</h6>
                            <p class="fw-medium mb-4">Start your project with a 14-day free trial</p>
                            <a href="payment-page.html" class="btn btn-primary waves-effect waves-light">Get Started<i class="mdi mdi-arrow-right mdi-24px ms-3 scaleX-n1-rtl"></i></a>
                        </div>
                        <div class="col-lg-6 pt-lg-5">
                            <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/landing-page/cta-dashboard.png'); ?>" alt="cta dashboard" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA: End -->

            <!-- Contact Us: Start -->
            <section id="landingContact" class="section-py bg-body landing-contact">
                <div class="container bg-icon-left">
                    <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                        <img src="<?= base_url('Project-Template/Materio/LandingPage/assets/img/backgrounds/../../assets/img/front-pages/icons/section-tilte-icon.png'); ?>" alt="section title icon" class="me-2">
                        <span class="text-uppercase">contact us</span>
                    </h6>
                    <h3 class="text-center mb-2"><span class="fw-bold">Lets work</span> together</h3>
                    <p class="text-center fw-medium mb-3 mb-md-5 pb-3">Any question or remark? just write us a message</p>
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="card h-100">
                                <div class="bg-primary rounded text-white card-body">
                                    <p class="fw-medium mb-1">Let’s contact with us</p>
                                    <p class="display-6 mb-4">Share your ideas or requirement with our experts.</p>
                                    <img src="../../assets/img/front-pages/landing-page/let’s-contact.png
            " alt="let’s contact" class="w-100 mb-2 pb-1">
                                    <p class="mb-0">
                                        Looking for more customisation, more features, and more anything? Don’t worry, We’ve provide you with
                                        an entire team of experienced professionals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-4">Share your ideas</h5>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                                                    <label for="basic-default-fullname">Full name</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="email" class="form-control" id="basic-default-email" placeholder="johndoe99@gmail.com">
                                                    <label for="basic-default-email">Email address</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating form-floating-outline">
                                                    <textarea class="form-control h-px-200" placeholder="Message" aria-label="Message" id="basic-default-message"></textarea>
                                                    <label for="basic-default-message">Message</label>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3 waves-effect waves-light">Send inquiry</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Us: End -->
        </div>

        <!-- / Sections:End -->



        <!-- Footer: Start -->
        <footer class="landing-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row gx-0 gy-4 g-md-5">
                        <div class="col-lg-5">
                            <a href="landing-page.html" class="app-brand-link mb-4">
                                <span class="app-brand-logo demo me-2">
                                    <span style="color:#9055FD;">
                                        <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                                            <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                                            <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                                            <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                                            <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="app-brand-text demo footer-link fw-semibold ms-1">Materio</span>
                            </a>
                            <p class="footer-text footer-logo-description mb-4">
                                Most Powerful &amp; Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design &amp; Unique
                                Layouts.
                            </p>
                            <form>
                                <div class="d-flex mt-2 gap-3">
                                    <div class="form-floating form-floating-outline w-px-250">
                                        <input type="text" class="form-control bg-transparent" id="newsletter-1" placeholder="Your email">
                                        <label for="newsletter-1">Subscribe to newsletter</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Demos</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi Dark Layout</a>
                                </li>
                                <li>
                                    <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Pages</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3">
                                    <a href="pricing-page.html" class="footer-link">Pricing</a>
                                </li>
                                <li class="mb-3">
                                    <a href="payment-page.html" class="footer-link">Payment<span class="badge rounded-pill bg-primary ms-2">New</span></a>
                                </li>
                                <li class="mb-3">
                                    <a href="checkout-page.html" class="footer-link">Checkout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="help-center-landing.html" class="footer-link">Help Center</a>
                                </li>
                                <li>
                                    <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link">Login/Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <h6 class="footer-title mb-4">Download our app</h6>
                            <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"><img src="../../assets/img/front-pages/landing-page/apple-icon.png'); ?>" alt="apple icon"></a>
                            <a href="javascript:void(0);" class="d-block footer-link"><img src="../../assets/img/front-pages/landing-page/google-play-icon.png'); ?>" alt="google play icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                    <div class="mb-2 mb-md-0">
                        <span class="footer-text">©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2024, Made with <i class="tf-icons mdi mdi-heart text-danger"></i> by
                        </span>
                        <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium footer-theme-link">ThemeSelection</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer: End -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script type="text/javascript" id="">
            console.log("TS:GTM Worked!");
        </script>
        <script type="text/javascript" id="">
            (function(b, c, d) {
                var a = b.createElement("script");
                a.type = "text/javascript";
                a.src = "https://a.omappapi.com/app/js/api.min.js";
                a.async = !0;
                a.dataset.user = c;
                a.dataset.account = d;
                b.getElementsByTagName("head")[0].appendChild(a)
            })(document, 252882, 269977);
        </script>

        <!-- endbuild -->
        <div id="template-customizer" class="invert-bg-white" style="visibility: visible"> <a href="javascript:void(0)" class="template-customizer-open-btn" tabindex="-1"></a>
            <div class="p-4 m-0 lh-1 border-bottom template-customizer-header position-relative py-3">
                <h4 class="template-customizer-t-panel_header mb-2">Template Customizer</h4>
                <p class="template-customizer-t-panel_sub_header mb-0">Customize and preview in real time</p>
                <div class="d-flex align-items-center gap-2 position-absolute end-0 top-0 mt-4 me-3"> <a href="javascript:void(0)" class="template-customizer-reset-btn text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reset Customizer"><i class="mdi mdi-cached mdi-20px"></i><span class="badge rounded-pill bg-danger badge-dot badge-notifications"></span></a> <a href="javascript:void(0)" class="template-customizer-close-btn fw-light text-body" tabindex="-1"> <i class="mdi mdi-close mdi-20px"></i> </a> </div>
            </div>
            <div class="template-customizer-inner pt-4">
                <div class="template-customizer-theming">
                    <h5 class="m-0 px-4 py-4 lh-1 d-block"> <span class="template-customizer-t-theming_header bg-label-primary rounded-1 py-1 px-2 fs-big">Theming</span> </h5>
                    <div class="m-0 px-4 pb-3 pt-1 template-customizer-style w-100"> <label for="customizerStyle" class="form-label d-block template-customizer-t-style_label">Style (Mode)</label>
                        <div class="row px-1 template-customizer-styles-options">
                            <div class="col-4 px-2">
                                <div class="form-check custom-option custom-option-icon checked">
                                    <label class="form-check-label custom-option-content p-0" for="customRadioIconlight">
                                        <span class="custom-option-body mb-0">
                                            <img src="../../assets/img/customizer/light.svg" alt="Light" class="img-fluid scaleX-n1-rtl">
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input d-none" type="radio" value="light" id="customRadioIconlight" checked="checked">
                                    </label>
                                </div>
                                <label class="form-check-label small text-nowrap" for="customRadioIconlight">Light</label>
                            </div>
                            <div class="col-4 px-2">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content p-0" for="customRadioIcondark">
                                        <span class="custom-option-body mb-0">
                                            <img src="../../assets/img/customizer/dark.svg" alt="Dark" class="img-fluid scaleX-n1-rtl">
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input d-none" type="radio" value="dark" id="customRadioIcondark">
                                    </label>
                                </div>
                                <label class="form-check-label small text-nowrap" for="customRadioIcondark">Dark</label>
                            </div>
                            <div class="col-4 px-2">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content p-0" for="customRadioIconsystem">
                                        <span class="custom-option-body mb-0">
                                            <img src="../../assets/img/customizer/system.svg" alt="System" class="img-fluid scaleX-n1-rtl">
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input d-none" type="radio" value="system" id="customRadioIconsystem">
                                    </label>
                                </div>
                                <label class="form-check-label small text-nowrap" for="customRadioIconsystem">System</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="template-customizer-layout">
                    <hr class="m-0 px-4 my-4">
                    <h5 class="m-0 px-4 pb-4 pt-2 d-block"> <span class="template-customizer-t-layout_header bg-label-primary rounded-1 py-1 px-2 fs-big">Layout</span> </h5>
                    <div class="m-0 px-4 pb-3 template-customizer-directions w-100"> <label for="customizerDirection" class="form-label template-customizer-t-direction_label">Direction</label>
                        <div class="row px-1 template-customizer-directions-options">
                            <div class="col-4 px-2">
                                <div class="form-check custom-option custom-option-icon checked">
                                    <label class="form-check-label custom-option-content p-0" for="directionRadioIconltr">
                                        <span class="custom-option-body mb-0">
                                            <img src="../../assets/img/customizer/ltr.svg" alt="Left to Right (En)" class="img-fluid scaleX-n1-rtl">
                                        </span>
                                        <input name="directionRadioIcon" class="form-check-input d-none" type="radio" value="ltr" id="directionRadioIconltr" checked="checked">
                                    </label>
                                </div>
                                <label class="form-check-label small text-nowrap" for="directionRadioIconltr">Left to Right (En)</label>
                            </div>
                            <div class="col-4 px-2">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content p-0" for="directionRadioIconrtl">
                                        <span class="custom-option-body mb-0">
                                            <img src="../../assets/img/customizer/rtl.svg" alt="Right to Left (Ar)" class="img-fluid scaleX-n1-rtl">
                                        </span>
                                        <input name="directionRadioIcon" class="form-check-input d-none" type="radio" value="rtl" id="directionRadioIconrtl">
                                    </label>
                                </div>
                                <label class="form-check-label small text-nowrap" for="directionRadioIconrtl">Right to Left (Ar)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end landing page  -->

        <!-- Dashboard footer  -->

        <!-- Helpers -->
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/helpers.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/template-customizer.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/front-config.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/dropdown-hover.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/mega-dropdown.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/bootstrap.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/popper.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/modules.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/node-waves.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/nouislider.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/swiper.js') ?>"></script>
        <script src="<?= base_url('/Project-Template/Materio/LandingPage/assets/js/front-page-landing.js') ?>"></script>
        <!-- endbuild -->

    </body>

</html>