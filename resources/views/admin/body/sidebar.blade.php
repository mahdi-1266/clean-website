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


      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Home</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="calendar.html">Daygrid View</a>
          </li>
          <li>
            <a href="calendar-external-draggable.html">External Draggable</a>
          </li>
          <li>
            <a href="calendar-google.html">Google Calendar</a>
          </li>
          <li>
            <a href="calendar-list-view.html">List View</a>
          </li>
          <li>
            <a href="calendar-selectable.html">Selectable</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="{{ route('all.portfolio') }}">
          <i class="ri-home-line"></i>
          <span class="menu-text">Portfolio</span>
        </a>
        
      </li>
    </ul>
  </div>
  <!-- Sidebar menu ends -->

</nav>