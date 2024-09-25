<side-Bar></side-Bar>

<main class="content">

    <top-Bar search-bar="false"></top-Bar>

    <div class="container">
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
                        <li class="breadcrumb-item active" aria-current="page"> <a href="#!/blogs"> Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <a href="">Add Blog</a></li>
                    </ol>
                </nav>

                <div class="d-flex align-items-center">
                    <a href="#!/blogs" class="btn btn-sm btn-outline-primary rounded-circle ">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h4 class="mb-0 ps-2"> Add a new Blog</h4>
                </div>
                <div class="ms-5 mt-1">
                    <p>Create Blog</p>
                </div>
            </div>
            <div class="v-btn__content mb-2 mb-md-0">
                <a href="#!/blogs" class="btn btn-sm btn-primary d-inline-flex align-items-center"> <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg> All Blogs</a>
            </div>
        </div>

        <!--  -->
        <div class="row">
            <div class="col-12 col-xl-10">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Add Blog</h2>
                    <form ng-submit="submit_form(blog)">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-floating mb-3">
                                    <input class="form-control" ng-change="getBlogSlugSuggestions(blog.title);" ng-model="blog.title" id="BlogTitle" type="text" placeholder="Blog Title" required>
                                    <label for="BlogTitle">Blog Title </label>
                                </div>
                            </div>
                            <div class="col-3 mb-3">
                                <div class="form-floating">
                                    <select class="form-select mb-0" ng-model="blog.status" id="status" aria-label="Status">
                                        <option value="publish" selected>Publish</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                    <label for="status">Status</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" ng-model="blog.slug" id="slug" placeholder="Blog slug" type="text" required>
                                    <label class="form-label" for="slug">Blog Slug</label>
                                </div>
                            </div>
                        </div>
                        <div id="editor"></div>
                        <div class="row flex-md-row flex-sm-column">
                            <div class="col-md-6 col-sm-12 mt-sm-4 align-items-center justify-content-center d-flex">
                                <div class="input-group mb-3 px-2 py-2 rounded-pill">
                                    <input id="upload" type="file" file-model="blog.image" onchange="angular.element(this).scope().uploadedFile(this)" accept="image/*" class="form-control border-0">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-md-4">
                                <p class="font-italic text-center">The image uploaded will be rendered here.</p>
                                <div class="image-area mt-2" style="width:auto; height:400px; background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{image_source}}');"></div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Add Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer-Bar></footer-Bar>
</main>