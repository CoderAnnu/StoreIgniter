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
                         <form ng-submit="reset(user)">
                             <div class="text-center text-md-center mb-3 mt-md-0">
                                 <h1 class="h3">Reset Password</h1>
                                 <p class="mb-4">Don't fret! Just type your new password and we will update your Account Password</p>
                             </div>
                             <!-- Form -->
                             <div class="form-group mb-4">
                                 <label for="resetPassword">Your Password</label>
                                 <div class="input-group">
                                     <span class="input-group-text" id="basic-addon2">
                                         <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                         </svg>
                                     </span>
                                     <input type="password" ng-model="user.password" class="form-control" id="resetPassword" aria-describedby="resetPassword" placeholder="Password" required>
                                     <span class="input-group-addon password-eyes">
                                         <span class="fa-regular set-eye fa-eye" ng-click="showPassword('resetPassword', $event)"></span>
                                     </span>
                                 </div>
                             </div>
                             <!-- End of Form -->
                             <div class="form-group">
                                 <!-- Form -->
                                 <div class="form-group mb-4">
                                     <label for="resetConfirmPassword">Confirm Password</label>
                                     <div class="input-group">
                                         <span class="input-group-text" id="basic-addon2">
                                             <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                             </svg>
                                         </span>
                                         <input type="password" ng-model="user.confirm_password" class="form-control" id="resetConfirmPassword" aria-describedby="resetConfirmPassword" placeholder="Password" required>
                                         <span class="input-group-addon password-eyes">
                                             <span class="fa-regular set-eye fa-eye" ng-click="showPassword('resetConfirmPassword', $event)"></span>
                                         </span>
                                     </div>
                                 </div>
                                 <!-- End of Form -->
                             </div>
                             <div class="d-grid">
                                 <button type="submit" ng-disabled="!user.password || !user.confirm_password || user.password !== user.confirm_password" class="btn btn-gray-800">Reset password</button>
                             </div>
                         </form>
                         
                         <!-- new login with accounts -->
                         <div class="d-flex align-items-center justify-content-start my-4">
                             <a href="/#!/signin" class="btn btn-sm btn-outline-dark p-1" target="_blank"><i class="fa-solid fa-right-to-bracket"></i>
                             <small>Go Back To Login</small>
                            </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>