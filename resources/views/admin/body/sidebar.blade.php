<nav id="sidebar" class="sidebar-wrapper">

  <!-- App brand starts -->
  <div class="app-brand p-3 d-flex align-items-center">
    <a href="index-2.html">
      <img src="{{ asset('backend/assets/images/logo.svg') }}" class="logo" alt="Admin Templates" />
    </a>
  </div>
  <!-- App brand ends -->

  <!-- Sidebar menu starts -->
  <div class="sidebarMenuScroll">
    <ul class="sidebar-menu">
      <li class="active current-page">
        <a href="index-2.html">
          <i class="ri-bar-chart-line"></i>
          <span class="menu-text">Analytics</span>
        </a>
      </li>


      <li class="treeview home-menu">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Home</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('dashboard') }}">Home</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Hero Section</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('hero.section') }}">Hero Section</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="{{ route('all.about') }}">
          <i class="ri-home-line"></i>
          <span class="menu-text">About</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Portfolio</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('all.portfolio') }}">Portfolio</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Projects</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('admin.projects') }}">Projects</a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
  <!-- Sidebar menu ends -->

</nav>