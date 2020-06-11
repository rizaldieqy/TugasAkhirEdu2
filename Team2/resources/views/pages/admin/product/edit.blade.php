@extends('layouts.masteradmin')
@section('title','Edit produk')
@section('Produk','active')
@section('contentadmin')
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Produk {{ $item->nama_produk }}</h1>
    </div>

    <!-- Content Row -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="card shadow">
          <div class="card-body">
              <form action="{{ route('product.update', $item->id) }}" method="post">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="nama produk" value="{{ $item->nama_produk }}">
                  </div>
                  
                  <div class="form-group">
                      <label for="deskripsi">About</label>
                      <textarea name="deskripsi" rows="10" class="d-block w-100 form-control">{{ $item->deskripsi }}</textarea>
                  </div>
                  
                  <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">
                      Ubah
                  </button>
              </form>
          </div>
      </div>
  </div>
    
@endsection