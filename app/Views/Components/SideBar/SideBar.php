<!-- Sidebar section  -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

  <div class="app-brand bg-primary py-3">
    <a href="/" class="app-brand-link">
      <!-- use logo here  -->
      <span class="app-brand-text menu-text fw-semibold ms-2">Materio</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
    </a>
  </div>

  <!-- start menu -->
  <nav id="sidebarMenu" class="sidebar d-lg-block collapse my-5">
    <ul class="menu-inner nav flex-column mt-4">
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/"}'>
        <a href="#!/" class="ps-3 nav-link" ng-class='{"menu-link" : $ctrl.path == "/"}'>
          <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <!-- E-Commerce Section  -->
      <li class="menu-header fw-medium mt-4">
        <span class="menu-header-text" data-i18n="eCommerce"> eCommerce</span>
      </li>

      <!-- Pages Section  -->
      <li class="nav-item  menu-item" ng-if="user.role == 'admin'">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" ng-class='{"m-menu" : ["/pages", "/pages/add"].includes($ctrl.path)}' data-bs-toggle="collapse" data-bs-target="#page">
          <span>
            <span>
              <i class="me-3 fa-solid fa-bag-shopping"></i>
            </span>
            <span class="sidebar-text">Page</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/pages", "/page/add"].includes($ctrl.path)}' role="list" id="page" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/pages"}'>
              <a href="#!/pages" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/pages"}'>
                <i class="me-3 fa-regular fa-clipboard"></i>
                <span class="sidebar-text">All Page</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/page/add" }'>
              <a href="#!/page/add" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/page/add"}'>
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add Page</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- End Pages section -->

      <!-- Blogs Section  -->
      <li class="nav-item  menu-item" ng-if="user.role == 'admin'">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" ng-class='{"m-menu" : ["/blogs", "/blogs/add"].includes($ctrl.path)}' data-bs-toggle="collapse" data-bs-target="#blog">
          <span>
            <span>
              <i class="me-3 fa-solid fa-bag-shopping"></i>
            </span>
            <span class="sidebar-text">Blog</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/blogs", "/blog/add"].includes($ctrl.path)}' role="list" id="blog" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/blogs"}'>
              <a href="#!/blogs" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/blogs"}'>
                <i class="me-3 fa-regular fa-clipboard"></i>
                <span class="sidebar-text">All Blog</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/blog/add" }'>
              <a href="#!/blog/add" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/blog/add"}'>
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add Blog</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- End blog section -->

      <!-- Product menu bar  -->
      <li class="nav-item  menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" ng-class='{"m-menu" : ["/product", "/product/add", "/product/catelist"].includes($ctrl.path)}' data-bs-toggle="collapse" data-bs-target="#product">
          <span>
            <span>
              <i class="me-3 fa-solid fa-bag-shopping"></i>
            </span>
            <span class="sidebar-text">Products</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/product", "/product/add", "/product/catelist"].includes($ctrl.path)}' role="list" id="product" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product"}'>
              <a href="#!/product" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product"}'>
                <i class="me-3 fa-regular fa-clipboard"></i>
                <span class="sidebar-text">Product List</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/add" }'>
              <a href="#!/product/add" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product/add"}'>
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/catelist" }'>
              <a href="#!/product/catelist" class="menu-link">
                <i class="me-3 fa-solid fa-layer-group"></i>
                <span class="sidebar-text">Category List</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Order  -->
      <li class="nav-item  menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" ng-class='{"m-menu" : ["/product/order", "/product/order/details"].includes($ctrl.path)}' data-bs-toggle="collapse" data-bs-target="#order">
          <span>
            <span>
              <i class="menu-icon mdi mdi-order-bool-descending-variant"></i>
            </span>
            <span class="sidebar-text">Order</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/product/order" , "/product/order/details"].includes($ctrl.path)}' role="list" id="order" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/order"}'>
              <a href="#!/product/order" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product/order"}'>
                <i class="me-3 fa-regular tf-icons fa-clipboard"></i>
                <span class="sidebar-text">Order List</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/order/details" }'>
              <a href="#!/product/order/details" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product/order/details"}'>
                <i class="me-3 fa-regular tf-icons fa-clipboard"></i>
                <span class="sidebar-text">Order Details</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end order section  -->

      <!-- Customer Details  -->
      <li class="nav-item  menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" ng-class='{"m-menu" : ["/product/customer", "/product/customer/details"].includes($ctrl.path)}' data-bs-toggle="collapse" data-bs-target="#customer">
          <span>
            <span>
              <i class="menu-icon tf-icons mdi mdi-text-account"></i>
            </span>
            <span class="sidebar-text">Customer</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show " : ["/product/customer" , "/product/customer/details"].includes($ctrl.path)}' role="list" id="customer" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/customer"}'>
              <a href="#!/product/customer" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product/customer"}'>
                <i class="me-3 fa-regular fa-clipboard"></i>
                <span class="sidebar-text">All Customer</span>
              </a>
            </li>
            <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/product/customer/details" }'>
              <a href="#!/product/customer/details" class="nav-link" ng-class='{"menu-link" : $ctrl.path == "/product/customer/details"}'>
                <i class="me-3 fa-regular fa-clipboard"></i>
                <span class="sidebar-text">Customer Details</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- End customer details  -->

      <!-- end product product menu bar  -->
      <!-- User menu example  -->
      <li class="menu-header fw-medium mt-4">
        <span class="menu-header-text" data-i18n="user">User</span>
      </li>
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/admin/users"}'>
        <a href="#!/admin/users" class="ps-3 menu-link" ng-class='{"menu-link" : $ctrl.path == "/admin/users"}'>
          <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
          <span class="sidebar-text">Users</span>
        </a>
      </li>
      <!-- end Single menu example  -->
      <!-- Support Section  -->
      <li class="menu-header fw-medium mt-4">
        <span class="menu-header-text" data-i18n="Misc">App Support</span>
      </li>
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/support"}'>
        <a href="#!/support" class="ps-3 menu-link" ng-class='{"menu-link" : $ctrl.path == "/support"}'>
          <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
          <span class="sidebar-text">Support</span>
        </a>
      </li>
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/documentation"}'>
        <a href="#!/documentation" class="ps-3 menu-link" ng-class='{"menu-link" : $ctrl.path == "/documentation"}'>
          <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
          <span class="sidebar-text">Documentation</span>
        </a>
      </li>
      <!-- end support section  -->
    </ul>
  </nav>
  <!-- End menu  -->
</aside>
<!-- End SideBar Menu  -->