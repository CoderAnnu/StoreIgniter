<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr" data-theme="theme-default" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?= isset($title) ? "$title - " . SITE_NAME : SITE_NAME; ?>" />
    <meta name="description" content="<?= isset($data['description']) ?  $data['description'] : SITE_DESCRIPTION; ?>">

    <meta property="og:site_name" content="<?= isset($title) ? "$title - " . SITE_NAME : SITE_NAME; ?>" />
    <meta property="og:description" content="<?= isset($data['description']) ? $data['description'] : SITE_DESCRIPTION; ?>" />

    <meta name="keywords" content="<?= isset($data['keywords']) ? $data['keywords'] : SITE_KEYWORDS; ?>">

    <?= $this->renderSection('head') ?>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- New Dashboard -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets/img/favicon/favicon.ico') ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('/assets/img/LandingPage/assets/css/materialdesignicons.css') ?>" />
    <!-- Menu waves for no-customizer fix -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/demo.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/core.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/front-page.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/nouislider.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/swiper.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/node-waves.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/LandingPage/assets/css/theme-default.css') ?>" />
    <!-- end dashboard -->

    <!-- End Project Template  -->
    <title><?= isset($title) ? "$title -" . SITE_NAME : SITE_NAME; ?></title>
</head>

<style>
    #landingHero {
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
        padding-top: 8.125rem;
    }
</style>

<body>
    <!-- landing page -->
    <header>
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
                    <a href="/" class="app-brand-link">
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
                        <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">StoreIgniter</span>
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
                            <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingTeam">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-nowrap" href="#landingContact">Contact us</a>
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
                                            <img src="<?= base_url('assets/LandingPage/assets/img/backgrounds/nav-item-col-img-light.png'); ?>" class="img-fluid scaleX-n1-rtl w-100" alt="nav item col image" data-app-light-img="<?= base_url('front-pages/misc/nav-item-col-img-light.png'); ?>" data-app-dark-img="front-pages/misc/nav-item-col-img-dark.png'); ?>">
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
                        <a href="/app/#!/signin" class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4 waves-effect waves-light"><span class="tf-icons mdi mdi-account me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </nav>
        <!-- Navbar: End -->
    </header> <!-- End Header --->