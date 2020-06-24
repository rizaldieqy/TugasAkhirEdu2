@extends('layouts.masteradmin')
@section('title','create')
@section('Client','active')
@section('contentadmin')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ route('clientadmin.store') }}" method='POST' enctype="multipart/form-data">
                <h1 class="text-center">Form Client</h1>
                @csrf
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value='{{ old('nama') }}'>
                </div>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary mb-2">Buat</button>
            </form>
        </div>
    </div>
</div>


@endsection