<side-bar></side-bar>

<main class="content">
    <top-bar></top-bar>
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">User / View /</span> Account
            </h4>
            <div class="row">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                    <!-- User Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded mb-3 mt-4" src="../../assets/img/avatars/10.png" height="120" width="120" alt="User avatar">
                                    <div class="user-info text-center">
                                        <h4>Violet Mendoza</h4>
                                        <span class="badge bg-label-danger rounded-pill">Author</span>
                                    </div>
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
                                        <span>@violet.dev</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="h6">Email:</span>
                                        <span>vafgot@vultukir.org</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="h6">Status:</span>
                                        <span class="badge bg-label-success rounded-pill">Active</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="h6">Role:</span>
                                        <span>Author</span>
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
                    <!-- Plan Card -->
                    <div class="card mb-4 border-2 border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-label-primary rounded-pill">Standard</span>
                                <div class="d-flex justify-content-center">
                                    <sub class="h5 pricing-currency mt-auto mb-2  text-primary">$</sub>
                                    <h1 class="display-3 mb-0 text-primary">99</h1>
                                    <sub class="h6 pricing-duration mt-auto mb-2 fw-normal">month</sub>
                                </div>
                            </div>
                            <ul class="list-unstyled g-2 my-4 ms-n2">
                                <li class="mb-2 d-flex align-items-center "><i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>10 Users</span></li>
                                <li class="mb-2 d-flex align-items-center "><i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Up to 10 GB storage</span></li>
                                <li class="mb-2 d-flex align-items-center "><i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Basic Support</span></li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="h6 mb-0">Days</span>
                                <span class="h6 mb-0">65%</span>
                            </div>
                            <div class="progress mb-1 rounded" style="height: 6px;">
                                <div class="progress-bar rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span>4 days remaining</span>
                            <div class="d-grid w-100 mt-4">
                                <button class="btn btn-primary waves-effect waves-light" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Plan Card -->
                </div>
                <!--/ User Sidebar -->


                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- User Tabs -->
                    <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-4">
                        <li class="nav-item"><a class="nav-link active waves-effect waves-light" href="javascript:void(0);"><i class="mdi mdi-account-outline mdi-20px me-1"></i>Account</a></li>
                        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-security.html"><i class="mdi mdi-lock-open-outline mdi-20px me-1"></i>Security</a></li>
                        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-billing.html"><i class="mdi mdi-bookmark-outline mdi-20px me-1"></i>Billing &amp; Plans</a></li>
                        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-notifications.html"><i class="mdi mdi-bell-outline mdi-20px me-1"></i>Notifications</a></li>
                        <li class="nav-item"><a class="nav-link waves-effect waves-light" href="app-user-view-connections.html"><i class="mdi mdi-link mdi-20px me-1"></i>Connections</a></li>
                    </ul>
                    <!--/ User Tabs -->

                    <!-- Project table -->
                    <div class="card mb-4">
                        <h5 class="card-header">User's Projects List</h5>
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <table class="table datatable-project dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 923px;">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th>
                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 19px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 324px;" aria-label="Project: activate to sort column ascending" aria-sort="descending">Project</th>
                                            <th class="text-nowrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 138px;" aria-label="Total Task: activate to sort column ascending">Total Task</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 123px;" aria-label="Progress: activate to sort column ascending">Progress</th>
                                            <th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 105px; display: none;" aria-label="Hours">Hours</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/vue.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Vue Admin template</span><small>Vuejs Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">214/627</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">78%</p>
                                                    <div class="progress rounded bg-label-success w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-success" style="width: 78%" aria-valuenow="78%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">88:19h</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/html-label.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Hoffman Website</span><small>HTML Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">56/183</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">43%</p>
                                                    <div class="progress rounded bg-label-warning w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-warning" style="width: 43%" aria-valuenow="43%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">76h</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/xamarin.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Foodista Mobile App</span><small>Xamarin Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">12/20</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">69%</p>
                                                    <div class="progress rounded bg-label-info w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-info" style="width: 69%" aria-valuenow="69%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">12:12h</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/sketch-label.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Foodista mobile app</span><small>iPhone Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">12/86</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">49%</p>
                                                    <div class="progress rounded bg-label-warning w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-warning" style="width: 49%" aria-valuenow="49%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">45h</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/xd-label.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Falcon Logo Design</span><small>UI/UX Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">9/50</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">15%</p>
                                                    <div class="progress rounded bg-label-danger w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-danger" style="width: 15%" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">89h</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/react-info.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Dojo React Project</span><small>React Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">234/378</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">73%</p>
                                                    <div class="progress rounded bg-label-info w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-info" style="width: 73%" aria-valuenow="73%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">67:10h</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-3"><img src="../../assets/img/icons/brands/figma-label-info.png" alt="Project Image" class="rounded-circle"></div>
                                                    </div>
                                                    <div class="d-flex flex-column"><span class="text-truncate fw-medium text-heading">Dashboard Design</span><small>Vuejs Project</small></div>
                                                </div>
                                            </td>
                                            <td><span class="text-heading">100/190</span></td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-1 text-heading">90%</p>
                                                    <div class="progress rounded bg-label-success w-100 me-3" style="height: 6px;">
                                                        <div class="progress-bar rounded bg-success" style="width: 90%" aria-valuenow="90%" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="dtr-hidden" style="display: none;">129:45h</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between mx-1 row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 11 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Project table -->

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
                                                <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2">
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
                                                <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle">
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
                                                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Marrie Patty" data-bs-original-title="Marrie Patty">
                                                <img src="../../assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Jimmy Jackson" data-bs-original-title="Jimmy Jackson">
                                                <img src="../../assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
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
                    <!-- /Activity Timeline -->

                    <!-- Invoice table -->
                    <div class="card mb-4">
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="card-header d-flex">
                                    <div class="head-label">
                                        <h5 class="card-title mb-0">Invoice List</h5>
                                    </div>
                                    <div class="dt-action-buttons text-end pt-0">
                                        <div class="dt-buttons"><button class="dt-button buttons-collection dropdown-toggle btn btn-primary float-end mb-0 waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_1" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="mdi mdi-export-variant me-1"></i>Export</span><span class="dt-down-arrow">▼</span></button> </div>
                                    </div>
                                </div>
                                <table class="table datatable-invoice dataTable no-footer dtr-column" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info" style="width: 923px;">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="control sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=": activate to sort column ascending"></th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 102px;" aria-label="ID: activate to sort column ascending" aria-sort="descending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 76px;" aria-label=": activate to sort column ascending"><i class="mdi mdi-trending-up"></i></th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 106px;" aria-label="Total: activate to sort column ascending">Total</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 182px;" aria-label="Issued Date: activate to sort column ascending">Issued Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 237px;" aria-label="Actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5089</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Sent<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 05/09/2020</span>" data-bs-original-title="<span>Sent<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 05/09/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-secondary"><i class="mdi mdi-email-outline"></i></span></span></div>
                                            </td>
                                            <td>$3077</td>
                                            <td>05/02/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5041</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Sent<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 11/19/2020</span>" data-bs-original-title="<span>Sent<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 11/19/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-secondary"><i class="mdi mdi-email-outline"></i></span></span></div>
                                            </td>
                                            <td>$2230</td>
                                            <td>02/01/2021</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5027</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 09/25/2020</span>" data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 09/25/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-check"></i></span></span></div>
                                            </td>
                                            <td>$2787</td>
                                            <td>09/28/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5024</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> -$202<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 08/02/2020</span>" data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> -$202<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 08/02/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-check"></i></span></span></div>
                                            </td>
                                            <td>$5285</td>
                                            <td>06/30/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5020</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Downloaded<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 12/15/2020</span>" data-bs-original-title="<span>Downloaded<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 12/15/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-info"><i class="mdi mdi-arrow-down"></i></span></span></div>
                                            </td>
                                            <td>$5219</td>
                                            <td>07/17/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#4995</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/09/2020</span>" data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/09/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-check"></i></span></span></div>
                                            </td>
                                            <td>$3313</td>
                                            <td>08/21/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="  control" tabindex="0" style="display: none;"></td>
                                            <td class="sorting_1"><a href="app-invoice-preview.html"><span>#4993</span></a></td>
                                            <td>
                                                <div class="d-inline-flex" data-bs-toggle="tooltip" data-bs-html="true" aria-label="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 10/22/2020</span>" data-bs-original-title="<span>Partial Payment<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 10/22/2020</span>"><span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-check"></i></span></span></div>
                                            </td>
                                            <td>$4836</td>
                                            <td>07/10/2020</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3"><a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Delete Invoice" data-bs-original-title="Delete Invoice"><i class="mdi mdi-delete-outline mdi-24px mx-1"></i></a><a href="app-invoice-preview.html" class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-body" data-bs-toggle="tooltip" aria-label="Preview" data-bs-original-title="Preview"><i class="mdi mdi-eye-outline mdi-24px mx-1"></i></a><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-24px"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-download-outline me-2"></i><span>Download</span></a><a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-checkbox-multiple-blank-outline me-2"></i><span>Duplicate</span></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mx-1">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 7 of 50 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a aria-controls="DataTables_Table_1" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item disabled" id="DataTables_Table_1_ellipsis"><a aria-controls="DataTables_Table_1" aria-disabled="true" role="link" data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="7" tabindex="0" class="page-link">8</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Invoice table -->
                </div>
                <!--/ User Content -->
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