<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

  <div class="app-brand bg-primary py-2">
    <a href="#" class="app-brand-link">
      <!-- use logo here  -->
      <span class="app-brand-text menu-text fw-semibold ms-2">Materio</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
    </a>
  </div>

  <div class="menu-inner-shadow" style="display: none;"></div>

  <nav id="sidebarMenu" class="sidebar d-lg-block collapse my-5" data-simplebar>
    <!--  -->
    <ul class="menu-inner nav flex-column">
      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/"}'>
        <a href="#!/" class="nav-link menu-link" ng-class='{"menu-link" : $ctrl.path == "/"}'>
          <i class="me-3 fa-solid fa-house"></i>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="menu-item">
        <span class="nav-link menu-link d-flex justify-content-between align-items-center me-3 pe-2" data-bs-toggle="collapse" data-bs-target="#submenu-components">
          <span>
            <span>
              <i class="me-3 fa-solid fa-robot"></i>
            </span>
            <span class="sidebar-text">Bots</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </span>
        </span>
        <div class="multi-level collapse" ng-class='{"show" : ["/bots", "/bots/add"].includes($ctrl.path)}' role="list" id="submenu-components" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/bots"}'>
              <a href="#!/bots" class="menu-link">
                <i class="me-3 fa-solid fa-robot"></i>
                <span class="sidebar-text">My Bots</span>
              </a>
            </li>
            <li class="nav-item" ng-class='{"active" : $ctrl.path == "/bots/add" }'>
              <a href="#!/bots/add" class="menu-link">
                <i class="me-3 fa-solid fa-plus"></i>
                <span class="sidebar-text">Add New Bot</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-item" ng-class='{"active" : $ctrl.path == "/page"}'>
        <a href="#!/" class="menu-link" ng-class='{"menu-link" : $ctrl.path == "/page"}'>
          <i class="me-3 fa-solid fa-house"></i>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>