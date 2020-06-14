@extends('layouts.master')
@section('title','Halaman Gallery')
@section('content')

<section style="background-color:green;height:35vh">
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-12 mt-5"> 
                <h1 class="mt-5 text-center text-white p-5"><b class="">Gallery</b></h1>
            </div>
        </div>
    </div>
</section>
<div class="row">
    @foreach ($items as $gallery)        
    <div class="col-md-4" style="padding: 0px;">
        <div class="single_gallery_item">
            <img src="{{ Storage::url($gallery->gambar) }}" class="img-fluid" style="height: 400px;">
            <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                <div class="port-hover-text text-center">
                    <h4>Abp Corp. Branding</h4>
                    <a href="/gallery">Brand Identity</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div style="background-color: green">
    <div class="row">
        <div class="col-sm-12 text-center mb-5" style="height: 50vh;">
            <h1 style="color: white; margin-top:100px;"><b>Lihat Produk Kami</b></h1>
            <a href="/gallery" class="btn btn-outline-light">Lihat</a>
        </div>
    </div>
</div>    
@endsection