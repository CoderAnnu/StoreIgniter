<side-Bar></side-Bar>

<main class="content">

    <top-Bar search-bar="false"></top-Bar>

    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"> <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg></a> </li>
                        <li class="breadcrumb-item"><a href="#!/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <a href="#!/pages"> Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <a href="">Add Page</a></li>
                    </ol>
                </nav>
                <div class="d-flex align-items-center"> <a href="#!/pages" class="btn btn-sm btn-outline-primary rounded-circle">
                        <i class="fa-solid fa-arrow-left"></i></a>
                    <h2 class="h4 mb-0 ms-3">Pages</h2>
                </div>
                <div class="ms-5">
                    <p>Create Page</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-10">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Add Page</h2>
                    <form ng-submit="addPage(page)">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-floating mb-3">
                                    <input class="form-control" ng-change="getSlugSuggestions(page.title);" ng-model="page.title" id="pageTitle" type="text" placeholder="Page Title" required>
                                    <label for="pageTitle">Page Title </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" ng-model="page.slug" id="slug" placeholder="Page slug" type="text" required>
                                    <label class="form-label" for="slug">Page Slug</label>
                                </div>
                            </div>
                            <div class="col-2 mb-3">
                                <div class="form-floating">
                                    <select class="form-select mb-0" ng-model="page.status" id="status" aria-label="Status">
                                        <option value="publish" selected>Publish</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                    <label for="status">Status</label>
                                </div>
                            </div>
                        </div>
                        <div id="editor"></div>
                        <div class="mt-2"><button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Add Page</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer-Bar></footer-Bar>
</main>