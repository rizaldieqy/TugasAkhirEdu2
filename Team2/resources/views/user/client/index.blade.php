@extends('layouts.master')
@section('title','client')
    
@section('content')
<section style="background-color:green;height:35vh">
    <div class="container-fluid mt-5 mb-6">
        <div class="row mt-5">
            <div class="col-md-12 mt-5"> 
                <h1 class="mt-5 text-center text-white p-5"><b class="">Client</b></h1>
            </div>
        </div>
    </div>
</section>
    <div class="container" style="height: 60vh">
        <div class="row mt-5">
            @foreach ($client as $item)
            <div class="col-sm-4">
                <img src="{{ Storage::url($item->gambar)}}" alt="gambar" style="width:350px">
                <br>
                <h5 class="text-center"><b>{{ $item->nama }}</b></h5>
            </div>
            @endforeach  
        </div>
    </div>
@endsection