@extends('layouts.masteradmin')
@section('title','Admin Gallery')
@section('Gallery','active')
@section('contentadmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 mt-2 text-gray-800">Gallery</h1>
          <a href="{{ route('gallery.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50 mt-2"></i> Tambah Gallery
          </a>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Produk</th>
                          <th>Nama Gambar</th>
                          <th>Gambar</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse($items as $item)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->data->nama_produk }}</td>
                              <td>{{ $item->nama_gambar }}</td>
                              <td>
                                  <img src="{{ Storage::url($item->gambar) }}" alt="" style="width: 200px" class="img-thumbnail">
                              </td>
                              <td>
                                  <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
