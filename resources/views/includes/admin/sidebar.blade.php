<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/viho_all/html/assets/images/dashboard/1.png" alt="">
      <div class="badge-bottom"></div><a href="user-profile.html">
        <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->nama }}</h6></a>
      <p class="mb-0 font-roboto">Admin</p>
      
    </div>
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">           
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6>General</h6>
              </div>
            </li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6>Kelola</h6>
              </div>
            </li>

            <li class="dropdown"><a class="nav-link menu-title link-nav" href="#"><i data-feather="edit"></i><span>Alumni</span></a>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>User</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="/semuauser">Semua User</a></li>
                <li><a href="/useraktif">User Aktif</a></li>
                <li><a href="/usernonaktif">User Nonaktif</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="nav-link menu-title link-nav" href="/organisasi  "><i data-feather="users"></i><span>Organisasi</span></a>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>Berita</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="/semuaberita">Semua Berita</a></li>
                <li><a href="#">Prestasi</a></li>
                <li><a href="#">Event</a></li>
              </ul>
            </li>
            
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="gallery.html">Gallery Grid</a></li>
                <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                <li><a href="gallery-hover.html">Hover Effects</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>