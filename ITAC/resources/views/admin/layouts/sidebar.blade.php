<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">{{ Auth::user()->fullname }}</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="/admin-user/settings">Bio</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin-user/settings/header">Header</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin-user/settings/about">About</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/slider">
          <i class="mdi mdi-folder-image menu-icon"></i>
          <span class="menu-title">Slider</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/course">
          <i class="mdi mdi-wrench menu-icon"></i>
          <span class="menu-title">Courses</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/teacher">
          <i class="mdi mdi-worker menu-icon"></i>
          <span class="menu-title">Teachers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/student">
          <i class="mdi mdi-school menu-icon"></i>
          <span class="menu-title">Students</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/certificate">
          <i class="mdi mdi-certificate menu-icon"></i>
          <span class="menu-title">Certificate</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/company">
          <i class="mdi mdi-factory menu-icon"></i>
          <span class="menu-title">Companies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/category">
          <i class="mdi mdi-table-large menu-icon"></i>
          <span class="menu-title">Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/blog">
          <i class="mdi mdi-blogger menu-icon"></i>
          <span class="menu-title">Blogs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/message">
          <i class="mdi mdi-message-reply-text menu-icon"></i>
          <span class="menu-title">Messages</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/comment">
          <i class="mdi mdi-comment menu-icon"></i>
          <span class="menu-title">Non-verified comments</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/user">
          <i class="mdi mdi-account-off menu-icon"></i>
          <span class="menu-title">Non-active Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/subscribers">
          <i class="mdi mdi-account-check menu-icon"></i>
          <span class="menu-title">Subscribers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
