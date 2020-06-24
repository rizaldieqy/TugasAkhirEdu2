<nav class="navbar fixed-top navbar-expand-lg" style="background-color: green">

    <i class='fas fa-globe-asia ml-5' style='font-size:48px;color:white'></i>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end m-4 pr-5" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('Product')" style="color: white" href="/product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="/client">Client</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" style="color: white" href="/contact">Contact Us</a>
            </li>
          </ul>
        </div>
  </nav>     