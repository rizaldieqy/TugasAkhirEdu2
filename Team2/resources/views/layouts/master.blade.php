<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    {{-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> --}}
</head>
<body>
   @include('includes.users.header')


    @yield('content')




  @include('includes.users.footer')








<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>