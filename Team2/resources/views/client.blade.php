@extends('layouts.master')
@section('title','client')
    
@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach ($client as $item)
            <div class="col-sm-4">
                <img src="{{ Storage::url($item->gambar)}}" alt="gambar" style="width:350px">
                <p class="text-center">{{ $item->nama }}</p>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection