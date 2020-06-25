@extends('layouts.masteradmin')
@section('titlea','edit')
@section('contentadmin')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ url('clientadmin/'.$client->id) }}" method='POST' enctype="multipart/form-data">
                <h1 class="text-center">Form Client</h1>
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value='{{ old('nama') ?? $client->nama }}'>
                </div>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="gambar">Upload Gambar</label>
                    {{-- untuk name disesuaikan dengan field database --}}
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{ $client->gambar }}">
                    {{-- <img src="{{ asset($client->gambar) }}" width="100" height="100" alt="gambar.jpg"> --}}
                    {{-- @php --}}
                        {{-- if (!null($client->gambar)) { --}}
                        {{-- // }    --}}
                    {{-- @endphp --}}
                    {{-- <input type="file" name="gambar" id="gambar" class="form-control"> --}}
                    @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>


@endsection