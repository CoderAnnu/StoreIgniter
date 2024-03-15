<side-bar></side-bar>

<main class="content">
    <top-bar></top-bar>
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">User / View / </span> Account
            </h4>
            <div class="row">
                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <!-- User Card -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <!-- Profile picture card-->
                                    <div class="user-avatar-section">
                                        <div class=" d-flex align-items-center flex-column">
                                            <div class="card-body text-center">
                                                <!-- Profile picture image-->
                                                <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('/assets/img/avatars/10.png'); ?>" alt="">
                                                <!-- Profile picture upload button-->
                                            </div>
                                            <div class="user-info text-center">
                                                <h4>{{data.full_name}}</h4>
                                                <span class="badge bg-label-danger rounded-pill" ng-if="data.role == 'subscriber'">{{data.role}}</span>
                                                <span class="badge bg-label-success rounded-pill" ng-if="data.role == 'admin'">{{data.role}}</span>
                                            </div>
                                            <button class="btn btn-primary mt-2" type="button">Upload new image</button>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                                        <div class="d-flex align-items-center me-4 mt-3 gap-3">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="mdi mdi-check mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="mb-0">1.23k</h4>
                                                <span>Tasks Done</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 gap-3">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="mb-0">568</h4>
                                                <span>Projects Done</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="pb-3 border-bottom mb-3">Details</h5>
                                    <div class="info-container">
                                        <ul class="list-unstyled mb-4">
                                            <li class="mb-3">
                                                <span class="h6">Username:</span>
                                                <span>{{data.full_name}}</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Email:</span>
                                                <span>{{data.email}}</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Status:</span>
                                                <span class="badge bg-label-success rounded-pill" ng-if="data.status == 'active'">✅ Active</span>
                                                <span class="badge bg-label-warning rounded-pill" ng-if="data.status == 'pending'">🔜 Pending</span>
                                                <span class="badge bg-label-secondary rounded-pill" ng-if="data.status == 'inactive'">❗️Inactive</span>
                                                <span class="badge bg-label-danger rounded-pill" ng-if="data.status == 'banned'">❌ Banned</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Role:</span>
                                                <span>{{data.role}}</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Tax id:</span>
                                                <span>Tax-8965</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Contact:</span>
                                                <span>(123) 456-7890</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Languages:</span>
                                                <span>French</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Country:</span>
                                                <span>England</span>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:;" class="btn btn-primary me-3 waves-effect waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                                            <a href="javascript:;" class="btn btn-outline-danger suspend-user waves-effect">Suspend</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /User Card -->
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <!-- User Tabs -->
                            <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-4">
                                <li class="nav-item"><a class="nav-link active waves-effect waves-light" href="javascript:void(0);"><i class="mdi mdi-account-outline mdi-20px me-1"></i>Account</a></li>
                                <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-security.html"><i class="mdi mdi-lock-open-outline mdi-20px me-1"></i>Security</a></li>
                                <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-billing.html"><i class="mdi mdi-bookmark-outline mdi-20px me-1"></i>Billing &amp; Plans</a></li>
                                <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-notifications.html"><i class="mdi mdi-bell-outline mdi-20px me-1"></i>Notifications</a></li>
                                <!-- <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-connections.html"><i class="mdi mdi-link mdi-20px me-1"></i>Connections</a></li> -->
                            </ul>
                            <!--/ User Tabs -->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form>
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">First name</label>
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (organization name)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                                            </div>
                                            <!-- Form Group (location)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLocation">Location</label>
                                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                            </div>
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                            </div>
                                            <!-- Form Group (birthday)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Activity Timeline -->
                            <div class="card mb-4">
                                <h5 class="card-header">User Activity Timeline</h5>
                                <div class="card-body pb-0 pt-3">
                                    <ul class="timeline mb-0">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-danger"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">12 Invoices have been paid</h6>
                                                    <span class="text-muted">12 min ago</span>
                                                </div>
                                                <p class="text-muted mb-2">Invoices have been paid to the company</p>
                                                <div class="d-flex">
                                                    <a href="javascript:void(0)" class="me-3">
                                                        <img src="<?= base_url('/assets/img/icons/misc/pdf.png') ?>" alt="PDF image" width="15" class="me-2">
                                                        <span class="fw-medium text-heading">invoices.pdf</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Client Meeting</h6>
                                                    <span class="text-muted">45 min ago</span>
                                                </div>
                                                <p class="text-muted mb-2">Project meeting with john @10:15am</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="avatar me-3">
                                                        <img src="<?= base_url('/assets/img/avatars/3.png') ?>" alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                        <span class="text-muted">CEO of ThemeSelection</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-warning"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Create a new project for client</h6>
                                                    <span class="text-muted">2 Day Ago</span>
                                                </div>
                                                <p class="text-muted mb-2">5 team members in a project</p>
                                                <div class="d-flex align-items-center avatar-group">
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                                                        <img src="<?= base_url('/assets/img/avatars/5.png') ?>" alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Marrie Patty" data-bs-original-title="Marrie Patty">
                                                        <img src="<?= base_url('/assets/img/avatars/12.png') ?>" alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Jimmy Jackson" data-bs-original-title="Jimmy Jackson">
                                                        <img src="<?= base_url('/assets/img/avatars/9.png') ?>" alt="Avatar" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="3 more">+3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent border-transparent">
                                            <span class="timeline-point timeline-point-info"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Design Review</h6>
                                                    <span class="text-muted">5 days Ago</span>
                                                </div>
                                                <p class="text-muted mb-0">Weekly review of freshly prepared design for our new app.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Activity Timeline -->
                        </div>
                    </div>
                </div>
                <!-- User Content -->
            </div>

            <!-- Modal -->
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body py-3 py-md-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="mb-2">Edit User Information</h3>
                                <p class="pt-1">Updating user details will receive a privacy audit.</p>
                            </div>
                            <form id="editUserForm" class="row g-4 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
                                <div class="col-12 col-md-6 fv-plugins-icon-container">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
                                        <label for="modalEditUserFirstName">First Name</label>
                                    </div>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <div class="col-12 col-md-6 fv-plugins-icon-container">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
                                        <label for="modalEditUserLastName">Last Name</label>
                                    </div>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <div class="col-12 fv-plugins-icon-container">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007">
                                        <label for="modalEditUserName">Username</label>
                                    </div>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
                                        <label for="modalEditUserEmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                            <option selected="">Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                        </select>
                                        <label for="modalEditUserStatus">Status</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                                        <label for="modalEditTaxID">Tax ID</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">US (+1)</span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
                                            <label for="modalEditUserPhone">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline form-floating-select2">
                                        <div class="position-relative"><select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple="" data-select2-id="modalEditUserLanguage" tabindex="-1" aria-hidden="true">
                                                <option value="">Select</option>
                                                <option value="english" selected="" data-select2-id="2">English</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="french">French</option>
                                                <option value="german">German</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="hebrew">Hebrew</option>
                                                <option value="sanskrit">Sanskrit</option>
                                                <option value="hindi">Hindi</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                        <ul class="select2-selection__rendered">
                                                            <li class="select2-selection__choice" title="English" data-select2-id="3"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li>
                                                            <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                                        </ul>
                                                    </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <label for="modalEditUserLanguage">Language</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline form-floating-select2">
                                        <div class="position-relative"><select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="5">Select</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Korea">Korea, Republic of</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Russia">Russian Federation</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        <label for="modalEditUserCountry">Country</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">Use as a billing address?</span>
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                                <input type="hidden">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->

            <!-- Add New Credit Card Modal -->
            <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body pt-md-0 px-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="mb-2 pb-1">Upgrade Plan</h3>
                                <p>Choose the best plan for user.</p>
                            </div>
                            <form id="upgradePlanForm" class="row g-3 d-flex align-items-center" onsubmit="return false">
                                <div class="col-sm-9">
                                    <div class="form-floating form-floating-outline">
                                        <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                            <option selected="">Choose Plan</option>
                                            <option value="standard">Standard - $99/month</option>
                                            <option value="exclusive">Exclusive - $249/month</option>
                                            <option value="Enterprise">Enterprise - $499/month</option>
                                        </select>
                                        <label for="choosePlan">Choose Plan</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Upgrade</button>
                                </div>
                            </form>
                        </div>
                        <hr class="mx-md-n5 mx-n3">
                        <div class="modal-body pb-md-0 px-0">
                            <p class="mb-0">User current plan is standard plan</p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex justify-content-center me-2 mt-3">
                                    <sup class="h5 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="display-3 mb-0 text-primary">99</h1>
                                    <sub class="h6 pricing-duration mt-auto mb-2 pb-1 text-body">/month</sub>
                                </div>
                                <button class="btn btn-outline-danger cancel-subscription mt-3 waves-effect">Cancel Subscription</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add New Credit Card Modal -->
            <!-- /Modal -->
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                    <div class="text-body mb-2 mb-md-0">
                        © 2024, made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <a href="https://themeselection.com/license/" class="footer-link me-3" target="_blank">License</a>
                        <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More Themes</a>
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-3">Documentation</a>
                        <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
    </div>
    <footer-Bar></footer-Bar>
</main>