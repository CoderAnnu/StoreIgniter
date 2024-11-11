<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta property="og:url" content="<?= base_url() . '/' . $blog->slug ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $excerpt; ?>" />
    <meta property="og:image" content="<?= base_url() . '/api/image/' . $blog->image . '/400x1650/50' ?>" />

    <!-- Meta tags for twitter -->
    <meta name="twitter:title" content="<?= $title; ?> ">
    <meta name="twitter:description" content="<?= $excerpt; ?>">
    <meta name="twitter:image" content="<?= base_url() . '/api/image/' . $blog->image . '/400x1650/50'; ?>">


    <title><?= isset($title) ? "$title - " . SITE_NAME : SITE_NAME; ?></title>

    <link rel="shortcut icon" href="<?= base_url('homepage/assets/img/favicon.png') ?>" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= base_url('homepage/assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/themify-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/elegant-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/flaticon-set.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/magnific-popup.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/owl.carousel.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/owl.theme.default.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/animate.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/validnavs.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/helper.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('homepage/assets/css/responsive.css') ?>" rel="stylesheet" />

    <style>
        @media only screen and (max-width: 768px) {
            .div-height {
                height: 250px !important;
            }
        }

        .div-height {
            height: 400px;
        }
    </style>

</head>

<body>

    <div class="se-pre-con"></div>
    <header>
        <nav class="navbar mobile-sidenav shadow-sm navbar-sticky navbar-default validnavs">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="<?= base_url('homepage/assets/img/logo/logo1.png'); ?>" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="<?= base_url('homepage/assets/img/logo/logo1.png') ?>" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/p/about">About us</a>
                        </li>
                        <li>
                            <a href="/p/contact">Contact</a>
                        </li>
                        <li>
                            <a href="/p/service">Service</a>
                        </li>
                        <li>
                            <a href="/blogs">Blogs</a>
                        </li>
                        <li>
                            <a href="/p/privacy-policy">Privacy policy</a>
                        </li>

                        <li class="button d-md-none">
                            <a href="/app/#!/signin">Signin</a>
                        </li>
                        <li class="button d-md-none">
                            <a href="/app/#!/signup">Signup</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="overlay-screen"></div>
        </nav>
    </header>

    <?= $this->renderSection('content'); ?>


    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="<?= base_url('homepage/assets/img/logo/logo2.png') ?>" alt="Logo">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="/"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="/p/about"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="/p/contact"><i class="fas fa-angle-right"></i> Contact</a>
                                </li>
                                <li>
                                    <a href="/p/service"><i class="fas fa-angle-right"></i> Service</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright <?= date('Y'); ?>. All Rights Reserved by <a target="blank" href="#">#</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="/p/privacy-policy">Privacy policy</a>
                            </li>
                            <li>
                                <a href="/p/terms-and-condition">T&C</a>
                            </li>
                            <li>
                                <a href="/p/support">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <scrip t src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></scrip>
    <script src="<?= base_url('homepage/assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/modernizr.custom.13711.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/progress-bar.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/count-to.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/YTPlayer.min.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/validnavs.js') ?>"></script>
    <script src="<?= base_url('homepage/assets/js/main.js') ?>"></script>
</body>

</html>