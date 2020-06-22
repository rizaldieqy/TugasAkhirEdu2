@extends('layouts.master')
@section('title', 'Home')
@section('content')

{{-- <br>
<br>
<br> --}}
<div class="cvabp mt-5" style="background-color: darkgreen; height:390px">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="background-color: darkgreen">
                  <br>
                  <br>
                  <br>
                  @foreach ($utamaf as $muncul)
                  <div class="carousel-item active text-center mt-5" style="color: white">
                      <h1 style="font-size: {{ $muncul->size_font_title }}px;">{{ $muncul->title }}</h1>
                      <br>
                      <h3 style="font-size: {{ $muncul->size_font_subtitle }}px;">{{ $muncul->subtitle }}</h3>
                  </div>
                  @endforeach
                </div>
              </div>
        </div>
    </div>
</div>
</div>
<br>
<br>

<div class="tentang" style="height: 390px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" style="color: green">Tentang Kami</h1>
      </div>
    </div>
    <hr>
    <br>
    <div class="row">
      @foreach($utamaf as $tampilkan)
      <div class="col-md-6 text-muted">
        <p>Visi: {{ $tampilkan->visi }}</p>
      </div>
      @endforeach

      @foreach($utamaf as $tampilin)
      <div class="col-md-6 text-muted">
        <p>Misi: {{ $tampilin->misi }}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="lihat mt-5" style="background-color: green; height:60vh">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="background-color: green">
                  <br>
                  <br>
                  <br>
                  <div class="carousel-item active text-center mt-5" style="color: white">
                      <h1><b> Lihat Produk Kami </b></h1>
                      <br>
                      <a href="{{ url('/product') }}" class="btn btn-outline-light">Lihat</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
</div>


@endsection