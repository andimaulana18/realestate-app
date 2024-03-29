<!-- Sidebar Start -->
<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Real<span>Estate</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Real Estate</li>
          <li class="nav-item mb-2">
            <a class="nav-link" data-bs-toggle="collapse" href="#realestate" role="button" aria-expanded="false" aria-controls="realestate">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Property Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="realestate">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Add Type</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.html" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>
        <li class="nav-item mb-2">
          <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="amenities">
            <i class="link-icon" data-feather="home"></i>
            <span class="link-title">Ameniti</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenities">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.amenitie') }}" class="nav-link">All Amenitie</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Add Amenitie</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Sidebar End -->