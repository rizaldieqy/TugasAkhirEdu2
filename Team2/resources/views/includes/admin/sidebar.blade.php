<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/admin/product" class="nav-link @yield('Produk')">
                  <i class='fas fa-box'></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gallery" class="nav-link @yield('Gallery')">
                  <i class='far fa-images'></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('clientadmin.index') }}" class="nav-link @yield('Client')">
                  <i class='far fa-handshake'></i>
                  <p>Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('utamas.index') }}" class="nav-link @yield('dataUtama')">
                  {{-- <a href="{{ route('statuses.index') }}" class="nav-link @yield('dataStatus')"> --}}
                    <i class='fas fa-users'></i>
                  <p>Tentang Kami</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/contact') }}" class="nav-link @yield('contact')">
                  <i class='far fa-address-book'></i>
                  <p>Contact</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('admin/alamat') }}" class="nav-link @yield('alamat')">
                  <i class='far fa-id-card'></i>
                  <p>Alamat</p>
                </a>
              </li>
          
          
              
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>