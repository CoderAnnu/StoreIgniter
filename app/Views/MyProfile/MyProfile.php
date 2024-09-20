<side-bar></side-bar>


<main class="content">

    <top-bar></top-bar>

    <div class="container mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                    </ol>
                </nav>
                <h2 class="h4">My Profile</h2>
            </div>
        </div>
        <!-- user profile section  -->
        <div class="row">
            <div class="">
                <div class="card card-body border-0 shadow mb-4">
                    <!--  -->
                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            <h2 class="h5 ">General Information</h2>
                            <div class="card border-0  p-0">
                                <div class="card-body ">
                                    <h4 class="text-capitalize">{{user.full_name}}</h4>
                                    <p class="fw-normal text-capitalize my-1">Role: {{user.role}}</p>
                                    <p class="text-gray mb-4">Email: {{user.email}}</p>
                                    <!-- <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center px-4" href="#!/bots">My Bot </a>
                                    <a class="btn btn-sm btn-secondary px-4" href="#!/bots/add">Add Bot</a> -->
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-lg-6 border p-4">
                            <form ng-submit="userProfile(user);">
                                <h4 class="mb-3">Update Profile</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input class="form-control" ng-model="user.full_name" id="first_name" type="text" placeholder="Enter your first name" required>
                                            <label for="first_name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="email" ng-model="user.email" class="form-control" id="signInEmail" aria-describedby="signInEmail" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="tel" ng-model="user.contact" class="form-control" id="inputPhone" aria-describedby="inputPhone" placeholder="Enter your phone number" required>
                                            <label for="inputPhone">Phone number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Update</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end user profile section  -->
    <footer-Bar></footer-Bar>

</main>