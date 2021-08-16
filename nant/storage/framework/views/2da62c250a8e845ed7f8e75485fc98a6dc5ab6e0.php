<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="<?php echo e(asset('assets/images/logo-mini.svg')); ?>" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="<?php echo e(asset('assets/images/faces/face1.jpg')); ?>" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2"><?php echo e(Auth::user()->name); ?></span>
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
        <a class="nav-link" href="/admin-user/setting">
          <i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/partner">
          <i class="mdi mdi-account-multiple-outline menu-icon"></i>
          <span class="menu-title">Partners</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/project">
          <i class="mdi mdi-library-books menu-icon"></i>
          <span class="menu-title">Sosial projects</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/action">
          <i class="mdi mdi-table-large menu-icon"></i>
          <span class="menu-title">Actions</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/vacancy">
          <i class="mdi mdi-worker menu-icon"></i>
          <span class="menu-title">Vacancies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/distribution">
          <i class="mdi mdi-account-card-details menu-icon"></i>
          <span class="menu-title">Distributions</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/about">
          <i class="mdi mdi-apps-box menu-icon"></i>
          <span class="menu-title">Abouts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/gallery">
          <i class="mdi mdi-file-image menu-icon"></i>
          <span class="menu-title">Galleries</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/contact">
          <i class="mdi mdi-contact-mail menu-icon"></i>
          <span class="menu-title">Contacts</span>
        </a>
      </li>
      <li class="nav-item">
          <a href="/admin-user/gallery-home" class="nav-link">
              <i class="mdi mdi-folder-multiple-image menu-icon"></i>
              <span class="menu-title">Home Galleries</span>
            </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/message">
          <i class="mdi mdi-message menu-icon"></i>
          <span class="menu-title">Messages</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/apply">
          <i class="mdi mdi-grease-pencil menu-icon"></i>
          <span class="menu-title">Applies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/counter">
          <i class="mdi mdi-counter menu-icon"></i>
          <span class="menu-title">Counters</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-user/user">
          <i class="mdi mdi-account-off menu-icon"></i>
          <span class="menu-title">Non-active Users</span>
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
<?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>