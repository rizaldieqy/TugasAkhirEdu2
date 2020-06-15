@extends('layouts.master')
@section('title','Contact Us')
@section('content')

<section style="background-color:green;height:35vh">
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-12 mt-5"> 
                <h1 class="mt-5 text-center text-white p-5"><b class="">CONTACT US</b></h1>
                {{-- @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif --}}
            </div>
        </div>
    </div>
</section>

<div class="container mt-5 mb-5">
    <div class="row mt-5">
        <div class="col-md-12 mt-5 text-center">
            @foreach($contact as $c)
                <iframe src="https://www.google.com/maps/embed?pb={{ $c->location }}" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @endforeach
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-7 mt-3">
            <h2 class="text-bold mb-3"><b>Hubungi Kami</b></h2>
            <form action="{{ url('/contact') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="pesan" id="" cols="20" rows="7" placeholder="Masukkan Pesan" class="form-control @error('pesan') is-invalid @enderror"></textarea>
                        @error('pesan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>                
                    <div class="col-md-6 mt-4">
                        <input type="text" name="nama" placeholder="Masukkan Nama" style="height: 50px;font-size:15px" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-4">
                        <input type="text" name="email" placeholder="Masukkan Email" style="height: 50px;font-size:15px" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-12 mt-4">
                        <input type="text" name="no_hp" placeholder="Masukkan No HP" style="height: 50px;font-size:15px" class="form-control @error('no_hp') is-invalid @enderror">
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-success  px-5 py-2 mt-4 mb-5">Kirim</button>
                    </div>
               </div>
            </form>
        </div>
        <div class="col-md-5 p-5 mt-3">
            @foreach($contact as $c)
            <div class="media mb-3">
                <i class="fa fa-address-book mt-1 mr-2"></i>
                <div class="media-body">
                    {{ $c->alamat }}
                </div>
              </div>
              <div class="media mb-3">
                <i class="fa fa-phone mt-1 mr-2"></i>
                <div class="media-body">
                    {{ $c->no_hp }}
                </div>
              </div>
              <div class="media">
                <i class="fa fa-paper-plane mt-1 mr-2"></i>
                <div class="media-body">
                    {{ $c->email }}
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
