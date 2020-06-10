@extends('layouts.masteradmin')
@section('title','Index admin produk')
@section('Produk','active')
@section('contentadmin')
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2 style="text-center"><b>Halaman Awal Produk</b></h2>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-7">
                        <a href="/kartu/create" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Deskripsi</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $tampil)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tampil->produk}}</td>
                            <td>{{$tampil->deskripsi}}</td>
                            <td><img src="{{ Storage::url($tampil->foto) }}" alt="" style="width: 100px"></td> --}}
                            <td>
                                {{-- <a href="/kartu/{{ $tampil->id }}" class="btn btn-success">Lihat</a>
                                <form action="{{ route ('kartu.edit', $tampil->id) }}" method="post" class="d-inline">
                                    @method('GET')
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                                <form action="{{ route ('kartu.destroy', $tampil->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection