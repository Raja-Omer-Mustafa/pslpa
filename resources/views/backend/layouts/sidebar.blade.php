 <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PSLPA</span>
    </a><!-- Sidebar -->
 <div class="sidebar mt-3 ">
    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                <i class="far fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/online-registration') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Online Registration</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/registered-members ') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register Members</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>

{{-- <script>
  document.addEventListener("DOMContentLoaded", function() {
      const navLinks = document.querySelectorAll(".nav-link");

      // Add click event listener to each navigation link
      navLinks.forEach(function(link) {
          link.addEventListener("click", function(event) {
              // Prevent the default anchor link behavior
              event.preventDefault();

              // Remove the active class from all navigation links
              navLinks.forEach(function(navLink) {
                  navLink.classList.remove("active");
              });

              // Add the active class to the clicked navigation link
              link.classList.add("active");
          });
      });
  });
</script> --}}
