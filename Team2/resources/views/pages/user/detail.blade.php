@extends('layouts.master')
@section('title','Halaman Gallery')
@section('Gallery','active')
@section('content')
<section style="background-color:green;height:35vh">
    <div class="container-fluid mt-5 mb-6">
        <div class="row mt-5">
            <div class="col-md-12 mt-5"> 
                <h1 class="mt-5 text-center text-white p-5"><b class="">{{ $item->nama_produk }}</b></h1>
            </div>
        </div>
    </div>
</section>
<div class="card card-details">
    @if($item->galleries->count() > 0)
        <div class="gallery">
            <div class="xzoom-thumbs">
                <div class="row">
                    @foreach($item->galleries as $gallery)
                      <div class="col-md-4" style="padding:0px;">
                        <a href="{{ Storage::url($gallery->gambar) }}" class="img-fluid" style="height: 400px;">
                            <img
                                src="{{ Storage::url($gallery->gambar) }}"
                                class="xzoom-gallery img-fluid"
                                style="height: 400px; width:100%"
                                xpreview="{{ Storage::url($gallery->gambar) }}"
                            />
                        </a>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
<div class="detail-gallery">
    <h2 class="d-flex justify-content-center mb-3 mt-3">Deskripsi produk {{ $item->nama_produk }}</h2>
    <p class="text-justify">{{ $item->deskripsi }}</p> 
</div>

@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush