<side-Bar></side-Bar>

<style>
    .deleted-user {
        background-color: #efc9d3;
    }

    .inactive-user-style {
        color: gold;
        border: 1px solid gold;
    }
</style>

<main class="content">
    <top-Bar search-bar="false"></top-Bar>

    <!-- Container -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"> <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg></a> </li>
                        <li class="breadcrumb-item"><a href="#!/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
                <h2 class="h4">Users</h2>
                <p class="mb-0">Manage users</p>
            </div>
        </div>
        <!-- end breadcrumb -->

        <div class="card table-responsive">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <input type="search" ng-change="search_user()" ng-model="config.query" class="form-control form-control-sm" placeholder="Search User">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex">
                            <select class="form-select me-2" ng-model="filter" ng-init="filter = 'all'" ng-change="updateFilter(filter)">
                                <option value="all" selected>All</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="deleted">Deleted</option>
                            </select>
                            <select class="form-select me-2">
                                <option value="" selected>Active</option>
                                <option value="">Deleted</option>
                                <option value="">Inactive</option>
                            </select>
                            <select class="form-select me-2">
                                <option value="" selected>Active</option>
                                <option value="">Deleted</option>
                                <option value="">Inactive</option>
                            </select>
                            <select class="form-select">
                                <option value="" selected>Active</option>
                                <option value="">Deleted</option>
                                <option value="">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-sm table-hover">
                <thead class="table-light">
                    <tr>
                        <th class="border-gray-200">ID</th>
                        <th class="border-gray-200">Name</th>
                        <th class="border-gray-200">Email</th>
                        <th class="border-gray-200">Created At</th>
                        <th class="border-gray-200">Role</th>
                        <th class="border-bottom">Status</th>
                        <th class="border-gray-200 text-center">Action</th>
                    </tr>
                </thead>
                <tbody style="border-top: none!important;">
                    <tr ng-repeat="user in user.items" ng-class='{"deleted-user" : user.deleted_at}' class="align-middle">
                        <td>
                            {{user.id}}</a>
                        </td>
                        <td>
                            <a ng-href="#!/user/edit/{{user.id}}">
                                {{user.full_name}}
                            </a>
                        </td>
                        <td>{{user.email}}</td>
                        <td>{{user.created_at.date | dateFormat}}</td>
                        <!--  -->
                        <td>
                            <span ng-if="user.role == 'customer'"><i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Customer</span>
                            <span ng-if="user.role == 'admin'"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i> Admin</span>
                        </td>
                        <!-- Show when admin can change their functionality -->
                        <td class="d-none">
                            <select ng-disabled="!user.iamadmin == true" class="form-select form-select-sm" ng-model="user.role" ng-change="change_role(user);">
                                <option value="admin">Admin</option>
                                <option value="customer">Customer</option>
                            </select>
                        </td>
                        <td>
                            <span class="badge bg-label-success rounded-pill" ng-if="user.status == 'active'">✅ Active</span>
                            <span class="badge bg-label-warning rounded-pill" ng-if="user.status == 'pending'">🔜 Pending</span>
                            <span class="badge bg-label-secondary rounded-pill" ng-if="user.status == 'inactive'">❗️Inactive</span>
                            <span class="badge bg-label-danger rounded-pill" ng-if="user.status == 'banned'">❌ Banned</span>
                        </td>
                        <td>
                            <div class="d-flex jusity-content-center align-items-center">
                                <div class="">
                                    <a class="dropdown-item d-flex align-items-center" href="#!/user/edit/{{user.id}}">
                                        <i class="fa-solid fa-eye me-1"></i> View </a>
                                </div>
                                <!-- user Delete Modal  -->
                                <div ng-if="user.deleted_at == null">
                                    <!-- Button trigger modal -->
                                    <button type="button" ng-disabled="!user.iamadmin == true" class="btn p-1 shadow-none" data-bs-toggle="modal" data-bs-target="#delete_modal_{{$index}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete user">
                                        <i class="fa-solid text-danger fa-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="delete_modal_{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete_modal_Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delete_modal_{{$index}}">Delete User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body d-flex">
                                                    <p class="text-">
                                                        <span class="text-danger">Warning:</span> Are you want to delete <b>{{user.full_name}}</b> from record ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" ng-click='delete_user(user.id, $index)'>Delete user</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                                <!-- user Delete Modal  -->
                                <div ng-if="user.deleted_at !== null">
                                    <!-- Button trigger modal -->
                                    <button type="button" ng-disabled="user.deleted_at == null" class="btn p-1 shadow-none" data-bs-toggle="modal" data-bs-target="#restore_modal_{{$index}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Restore user">
                                        <i class="fa-solid text-success fa-trash-can-arrow-up"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="restore_modal_{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabe2" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="restore_modal_{{$index}}">Delete User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body d-flex">
                                                    <p>
                                                        <span class="text-danger">Warning:</span> Are you want to Restore <b>{{user.full_name}}</b> in record ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" ng-click='restoreUser(user.id, $index)'>Restore user</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center" ng-if="pagination_loading">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <footer-Bar></footer-Bar>

</main>