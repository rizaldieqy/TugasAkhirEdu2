@extends('layouts.masteradmin')
@section('dataUtama','active')
@section('contentadmin')

<div class="container">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="mr-5 text-center text-dark"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Tambah Tentang</a></li>
            <li class="breadcrumb-item active">Data Status</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div>
    <a href="{{ route('utamas.create') }}" class="btn btn-success mt-4 ml-2"><i class='fas fa-plus'></i> Tambah Data</a>
</div>
<br>
@if (session()->has('pesan'))
    <div class="alert alert-success">
        {{ session()->get('pesan') }}
    </div>
@endif
<br>
<table id="example" class="table table-striped display responsive nowrap" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Ukuran Font Title</th>
            <th>Ukuran Font Sub Title</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($utama as $tampil)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tampil->title }}</td>
            <td>{{ $tampil->subtitle }}</td>
            <td>{{ $tampil->size_font_title }}</td>
            <td>{{ $tampil->size_font_subtitle }}</td>
            <td>{{ $tampil->visi }}</td>
            <td>{{ $tampil->misi }}</td>
            <td><a href="{{ route('utamas.edit', ['utama' => $tampil->id]) }}" class="btn btn-info"><i class='fas fa-edit'></i></a><br><br>
                <form action="{{ route('utamas.destroy', ['utama' => $tampil->id]) }} " method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection