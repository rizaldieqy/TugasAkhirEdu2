@extends('layouts.masteradmin')
@section('product','active')
@section('contentadmin')

    
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 mb-2">
                    <h3>Edit Data PT.abcde</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-7">
                    <form action="{{ route('alamat.update',$alamat->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control">{{ $alamat->alamat }}</textarea>
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') ?? $alamat->email }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') ?? $alamat->no_hp }}">
                            @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection