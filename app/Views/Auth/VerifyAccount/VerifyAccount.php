<main>
    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="<?= base_url('new/assets/img/illustrations/signin.svg') ?>">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-3 p-md-4 w-100 fmxw-500">
                        <div class="mb-3 text-center">
                            <a class="navbar-brand d-flex justify-content-center" href="/">
                                <img src="<?= base_url('/assets/img/logo/logo.png'); ?>" class="logo img-fluid w-50 " alt="Logo">
                            </a>
                        </div>
                        <div class="text-center text-md-center mb-3 mt-md-0" ng-if="completed">
                            <h1 class="h3">Check your Email Account!</h1>
                            <p class="mb-4">Activation Email has been sent to your register email address.</p>
                        </div>
                        <form ng-submit="verifyAccount(user)" ng-if="!completed" class="mt-4">
                            <div class="text-center text-md-center mb-3 mt-md-0">
                                <h1 class="h3">Verify your Account?</h1>
                                <p class="mb-4">Don't fret! Just type in your email and we will send you a code to Verify your Account</p>
                            </div>
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="VerifyEmail">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                    </span>
                                    <input type="email" ng-model="user.email" class="form-control" id="VerifyEmail" aria-describedby="VerifyEmail" placeholder="Email" required>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="d-grid">
                                <button type="submit" ng-disabled="loading || !user.email" class="btn btn-gray-800">Send Link</button>
                            </div>
                        </form>
                        <!-- when user send the mail then its showing Home page back button  -->
                        <!-- <div class="d-flex align-items-center justify-content-center my-4" ng-if="completed">
                            <a href="#!/signin" class="btn btn-sm btn-outline-primary rounded-5"><i class="fa-solid fa-arrow-left"></i></a>
                            <h4 class="mb-0 ms-3">Back to log in</h4>
                        </div> -->
                        <div class="d-flex align-items-center justify-content-center my-4" ng-if="completed">
                            <a href="https://mail.google.com/" class="btn btn-sm btn-outline-primary rounded-5" target="_blank">
                                <h4 class="mb-0">Go To Your Gmail</h4>
                            </a>
                        </div>
                        <!-- end log in Page  -->

                        <!-- new login with accounts -->
                        <div class="d-flex justify-content-center align-items-center pt-2">
                            <span class="fw-normal">
                                Not registered?
                                <a href="#!/signup" class="fw-bold">Create an account</a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>