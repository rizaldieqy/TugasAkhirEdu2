@extends('layouts.masteradmin')
@section('title','Edit Gallery')
@section('Gallery','active')
@section('contentadmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Gallery</h1>
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
                <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Produk</label>
                        <select name="produk_id" required class="form-control">
                            {{-- <option value="{{ $item->produk_id }}">Jangan Ubah</option> --}}
                            @foreach($product as $product)
                                <option value="{{ $product->id }}" {{old('produk_id') ?? $item->produk_id == $product->id ? 'selected' : ''}}>
                                    {{ $product->nama_produk }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_gambar">Nama Gambar</label>
                        <input type="text" class="form-control" @error('nama_gambar') is-invalid @enderror id="nama_gambar" name="nama_gambar" value="{{$item->nama_gambar}}">
                        @error('nama_gambar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" name="gambar" placeholder="Gambar" >
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
