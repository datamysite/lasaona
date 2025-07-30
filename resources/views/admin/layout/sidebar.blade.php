<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{URL::to('/')}}" class="brand-link">
    <img src="{{URL::to('/public/images/lol-logo.png')}}" alt="DataMySite" class="brand-image img-circle elevation-3" style="opacity: 1">
    <span class="brand-text font-weight-600"> Let`s off Leash</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{URL::to('/public')}}/dragon-avatar.jpg" class=" elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::guard('admin')->user()->fullname}}</a>
        <span class="text-white">{{Auth::guard('admin')->user()->designation}}</span>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link {{$menu == 'dashboard' ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

          
          <li class="nav-item {{$menu == 'blogs' || $menu == 'admin.author'  ? 'menu-open' : ''}}">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
                <li class="nav-item">
                  <a href="{{route('admin.blog')}}" class="nav-link {{$menu == 'blogs' ? 'active' : ''}}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Blogs</p>
                  </a>
                </li>
            

              <li class="nav-item">
                <a href="{{route('admin.author')}}" class="nav-link {{$menu == 'admin.author' ? 'active' : ''}}">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Authors</p>
                </a>
              </li>
       

            </ul>
          </li>

          <li class="nav-item {{$menu == 'seo.meta' || $menu == 'seo.snippet' ? 'menu-open' : ''}}">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                SEO Tools
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.seo.meta')}}" class="nav-link {{$menu == 'seo.meta' ? 'active' : ''}}">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Meta Tags</p>
                  </a>
                </li>
              <li class="nav-item">
                <a href="{{route('admin.seo.snippet')}}" class="nav-link {{$menu == 'seo.snippet' ? 'active' : ''}}">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Snippet Code</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="javascript:void(0)" id="update-sitemap" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Update Sitemap</p>
                </a>
              </li> -->

            </ul>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.updates')}}" class="nav-link {{$menu == 'updates' ? 'active' : ''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Latest Updates
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.videos')}}" class="nav-link {{$menu == 'videos' ? 'active' : ''}}">
              &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
              </svg>
              <p>
                &nbsp;&nbsp;YT Videos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.newsletter')}}" class="nav-link {{$menu == 'newsletter' ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Newsletter
              </p>
            </a>
          </li>
          
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>