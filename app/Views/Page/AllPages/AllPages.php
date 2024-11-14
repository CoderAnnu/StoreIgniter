<side-Bar></side-Bar>

<main class="content">

    <top-Bar search-bar="false"></top-Bar>

    <style>
        .deleted-page,
        .deleted-blog {
            background-color: #efc9d3;
        }

        .deleted-section {
            display: none !important;
        }
    </style>

    <div class="content-wrapper container">

        <!-- breadcrumb -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"> <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg></a> </li>
                        <li class="breadcrumb-item"><a href="#!/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pages</li>
                    </ol>
                </nav>
                <h2 class="h4">All Pages</h2>
                <p class="mb-0">Manage Page</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="#!/page/add" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"> <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> Add Page</a>
            </div>
        </div>
        <!-- end breadcrumb -->

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <input type="search" ng-change="search_pages()" ng-model="config.query" class="form-control form-control-sm" placeholder="Search Page">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex">
                            <select class="form-select me-2" ng-model="filter" ng-init="filter = 'all'" ng-change="updateFilter(filter)">
                                <option value="all" selected>All</option>
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
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
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th class="border-gray-200">ID</th>
                            <th class="border-gray-200">Title</th>
                            <th class="border-gray-200">Description</th>
                            <th class="border-gray-200">Status</th>
                            <th class="border-gray-200">Created Date</th>
                            <th class="border-gray-200 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="page in pages.items" ng-class='{"deleted-page" : page.deleted_at}' class="align-middle">
                            <td>

                                {{page.id}}

                            </td>
                            <td>
                                <div>
                                    <a ng-href="#!/page/edit/{{page.id}}"><strong>{{page.title}}</strong></a>
                                </div>
                                <small><a ng-href="<?= base_url('p'); ?>/{{page.slug}}" target="_blank">{{page.slug}}</a></small>
                            </td>
                            <td>
                                {{page.excerpt}}
                            </td>

                            <td>
                                <span class="badge border bg-light text-success border-success" ng-if="page.status == 'publish'">✅ Publish</span>
                                <span class="badge border bg-light text-danger border-danger" ng-if="page.status == 'draft'">❌ Draft</span>
                            </td>
                            <td>
                                <!-- Description -->
                                {{page.created_at.date | dateFormat}}
                            </td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="view-page">
                                        <a class="dropdown-item d-flex align-items-center" ng-href="<?= base_url('p'); ?>/{{page.slug}}" target="_blank">
                                            <i class="fa-solid fa-eye me-1"></i> View </a>
                                    </div>

                                    <div class="edit-page">
                                        <a class="btn btn-sm" ng-href="#!/page/edit/{{page.id}}">
                                            <i class="fa-solid  fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                    <!-- user Delete Modal  -->
                                    <div class="modal-button" ng-if="page.deleted_at == null">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn p-1 shadow-none" data-bs-toggle="modal" data-bs-target="#delete_page_modal_{{$index}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Page">
                                            <a class="btn btn-sm text-danger" href="javascript:void(false);">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_page_modal_{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete_page_modal_" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete_page_modal_{{$index}}">Delete Page</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body d-flex">
                                                        <p>
                                                            <span class="text-danger">Warning:</span> Are you want to delete <b>{{page.title}}</b> from record ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" ng-click='delete_page(page.id, $index)'>Delete Page</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Modal -->
                                    <!-- page Delete Modal  -->
                                    <div ng-if="page.deleted_at !== null">
                                        <!-- Button trigger modal -->
                                        <button type="button" ng-disabled="page.deleted_at == null" class="btn p-1 shadow-none restore-plan-btn" data-bs-toggle="modal" data-bs-target="#restore_page_modal_{{$index}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Restore Page">
                                            <a class="btn-sm btn text-success" href="javascript:void(false);">
                                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                                            </a>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="restore_page_modal_{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="restore_page_modal_" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="restore_page_modal_{{$index}}">Restore Page</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body d-flex">
                                                        <p>
                                                            <span class="text-danger">Warning:</span> Are you want to Restore <b>{{page.title}}</b> in record ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" ng-click='restorePage(page.id, $index)'>Restore Page</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- page Delete Modal  -->
                                    <div class="permanent-delete">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn p-1 shadow-none restore-plan-btn" data-bs-toggle="modal" data-bs-target="#delete_page_modal_p{{$index}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Permanent Delete Page ">
                                            <a class="btn-sm btn text-danger" href="javascript:void(false);">
                                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                                            </a>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_page_modal_p{{$index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete_page_modal_p" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="delete_page_modal_p{{$index}}">Permanent Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body d-flex">
                                                        <p>
                                                            <span class="text-danger">Warning:</span> Are you want to Permanent Delete <b>{{page.title}}</b> in record ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" ng-click='delete_page_permanent(page.id, $index)'>Permanent Delete</button>
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

            </div>
        </div>
    </div>

    <footer-Bar></footer-Bar>

</main>