
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
       <img src="{{ asset('admin_assets/assets/avatars/Poetry-amico.png') }}" alt="" width="70" style="margin-left: 50px;">
      </div>

      @can('Article List')
      <p class="text-muted nav-heading mb-1">
        <span>Article</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('article') }}">
            <i class="fe fe-edit-2 fe-16"></i>
            <span class="ml-3 item-text">Article</span>
          </a>
        </li>
      </ul>
      @endcan

      @can('User List')
      <p class="text-muted nav-heading mb-1">
        <span>Users</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('user') }}">
            <i class="fe fe-edit-2 fe-16"></i>
            <span class="ml-3 item-text">Users</span>
          </a>
        </li>
      </ul>
      @endcan



      @can('Role List')
      <p class="text-muted nav-heading mt-1 mb-1">
        <span>Roles</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('role') }}">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Roles</span>
          </a>
        </li>
      </ul>
      @endcan

      @can('Roles_Assign List')
      <p class="text-muted nav-heading mt-1 mb-1">
        <span>Roles Assign</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('assign-role-user') }}">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Roles Assign</span>
          </a>
        </li>
      </ul>
      @endcan

      @can('Profile_Setting Create')
      <p class="text-muted nav-heading mb-1">
        <span>Profile</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{ route('profile.show') }}">
            <i class="fe fe-settings fe-16"></i>
            <span class="ml-3 item-text">Profile Settings</span>
          </a>
        </li>
      </ul>
      @endcan

    </nav>
  </aside>
