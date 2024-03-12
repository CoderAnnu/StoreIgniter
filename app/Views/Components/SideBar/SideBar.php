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
  <nav id="sidebarMenu" class="sidebar d-lg-block collapse my-5" data-simplebar>
    <ul class="menu-inner nav flex-column">
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/"}'>
        <a href="#!/" class="nav-link menu-link m-0" ng-class='{"menu-link" : $ctrl.path == "/"}'>
          <i class="me-3 fa-solid fa-house"></i>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <!-- Example Sub menu   -->
      <li class="menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#test">
          <span>
            <span>
              <i class="me-3 fa-solid fa-robot"></i>
            </span>
            <span class="sidebar-text">Test</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/test", "/test/testnew"].includes($ctrl.path)}' role="list" id="test" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/test"}'>
              <a href="#!/bots" class="menu-link">
                <i class="me-3 fa-solid fa-robot"></i>
                <span class="sidebar-text">My Test</span>
              </a>
            </li>
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/test/testnew" }'>
              <a href="#!/bots/add" class="menu-link">
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add New Test</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end Example Sub menu   -->
      <!-- Product menu bar  -->
      <li class="menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#product">
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
        <div class="multi-level collapse" ng-class='{"show" : ["/product", "/product/addProduct"].includes($ctrl.path)}' role="list" id="product" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/product"}'>
              <a href="#!/product" class="menu-link">
              <i class="me-3 fa-regular fa-clipboard"></i>
              <span class="sidebar-text">Product List</span>
              </a>
            </li>
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/product/add" }'>
              <a href="#!/product/add" class="menu-link">
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add Product</span>
              </a>
            </li>
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/product/catelist" }'>
              <a href="#!/product/catelist" class="menu-link">
                <i class="me-3 fa-solid fa-layer-group"></i>
                <span class="sidebar-text">Category List</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- end product product menu bar  -->
      <!-- Single menu example  -->
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/admin/users"}'>
        <a href="#!/admin/users" class="menu-link" ng-class='{"menu-link" : $ctrl.path == "/admin/users"}'>
          <i class="me-3 fa-solid fa-user"></i>
          <span class="sidebar-text">Users</span>
        </a>
      </li>
      <!-- end Single menu example  -->
    </ul>
  </nav>
  <!-- End menu  -->
</aside>