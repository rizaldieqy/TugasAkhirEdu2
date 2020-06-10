@extends('layouts.masteradmin')
@section('title','Create produk')
@section('Produk','active')
@section('contentadmin')
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
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
              <form action="{{ route('product.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="{{ old('nama_produk') }}">
                  </div>
                  
                  <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" rows="10" class="d-block w-100 form-control">{{ old('deskripsi') }}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" name="type" placeholder="type" value="{{ old('type') }}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">
                      Simpan
                  </button>
              </form>
          </div>
      </div>
  </div>

    
@endsection