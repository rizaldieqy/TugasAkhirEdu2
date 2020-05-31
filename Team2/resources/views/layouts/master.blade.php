<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: green">
      <i class='fas fa-globe-asia' style='font-size:48px;color:white'></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">Client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
    </nav>     


    @yield('content')








<div class="footer">
  <div class="container-fluid" style="background-color: darkgreen;">
    <div class="row">
      <div class="col-sm-3">
        <br><br>
        <h3><i class='fas fa-globe-asia' style='font-size:60px;color:white'></i></h3><br>
      </div>
      <div class="col-sm-3" style="color: white">
        <br><br>
        <h3>Adress</h3><br>
        
        {{-- (Kolom untuk isi alamat) --}}

      </div>
      <div class="col-sm-3" style="color: white">
        <br><br>
        <h3>Menu Utama</h3><br>
        <h6><a href="#" style="color: white">Home</a></h6>
        <br>
        <h6><a href="#" style="color: white">Product</a></h6>
        <br>
        <h6><a href="#" style="color: white">Client</a></h6>
        <br>
        <h6><a href="#" style="color: white">Contact Us</a></h6>
      </div>
      <div class="col-sm-3" style="color: white">
        <br><br>
        <h3>Follow Us</h3><br>
        <h6><a href="#" style="color: white">Instagram</a></h6>
        <br>
        <h6><a href="#" style="color: white">Facebook</a></h6>
      </div>
    </div>
  </div>

  <div class="container-fluid text-center" id="footer1" style="background-color: darkgreen">
    <div class="row">
      <div class="col-sm-12">
        <br>
        <br>
        <br>
        <p style="color: whitesmoke;">Copyright PT. Fidi IT Kreatif 2020</p>
        </p>
      </div>
    </div>
  </div>
</div>




<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>