<!-- Start Register Section  -->
<!-- Start Main Section  -->
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <p class="text-center">
            <a href="#!/" class="d-flex align-items-center justify-content-center">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg> Back to homepage
            </a>
        </p>
        <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg" style="background: url(&quot;../../assets/img/illustrations/signin.svg&quot;);">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <!-- Logo -->
                    <div class="card-header text-center">
                        <div class="auth-brand ">
                            <a href="index.html" class="logo-dark">
                                <span><img src="Project-Template/assets/images/logo-dark.png" alt="dark logo" height="28"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo.png" alt="logo" height="28"></span>
                            </a>
                        </div>
                    </div>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0">Free Sign Up</h4>
                            <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                        </div>
                    </div>
                    <form ng-submit="add_user(user);" class="mt-4">
                        <div class="form-group mb-4">
                            <label for="name">Your Name</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ri-shield-user-fill fs-4"></i>
                                </span>
                                <input type="text" ng-model="user.name" class="form-control" placeholder="enter your name" id="name" autofocus="" required="">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </span>
                                <input type="email" ng-model="user.email" class="form-control" placeholder="example@company.com" id="email" autofocus="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input type="password" ng-model="user.password" placeholder="Password" class="form-control" id="password" required="">
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label fw-normal mb-0" for="remember">I agree to the
                                        <a href="#" class="fw-bold">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sign up</button>
                        </div>
                    </form>
                    <!--  -->
                    <div class="text-center mt-4">
                        <p class="text-muted fs-16">Create account using</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="ri-facebook-circle-fill"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="ri-google-fill"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="ri-github-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  -->
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">Already have an account? <a href="#!/signin" class="fw-bold">Login here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Main Section  -->
<!-- End Register Section  -->