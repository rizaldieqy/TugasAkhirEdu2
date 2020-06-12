@extends('layouts.masteradmin')
@section('title', 'Admin Create')
@section('dataUtama','active')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <hr>
            <form action="{{ route('utama.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                    @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" class="form-control @error('subtitle') is invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                    @error('subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="size_font_title">Size Font Title</label>
                    <input type="text" class="form-control @error('size_font_title') is invalid @enderror" id="size_font_title" name="size_font_title" value="{{ old('size_font_title') }}">
                    @error('size_font_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="size_font_subtitle">Size Font Subtitle</label>
                    <input type="text" class="form-control @error('size_font_subtitle') is invalid @enderror" id="size_font_subtitle" name="size_font_subtitle" value="{{ old('size_font_subtitle') }}">
                    @error('size_font_subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            

                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea name="visi" id="visi" rows="3" class="form-control">{{ old('visi') }}</textarea>
                </div>


                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="misi" rows="3" class="form-control">{{ old('misi') }}</textarea>
                </div>
                

                <button type="submit"  class="btn-btn-primary mb-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection