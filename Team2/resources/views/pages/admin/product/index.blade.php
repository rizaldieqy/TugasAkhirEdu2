@extends('layouts.masteradmin')
@section('title','Index admin produk')
@section('Produk','active')
@section('contentadmin')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
              <a href="{{ route('product.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk
              </a>
        </div>
        @if(session()->has('pesan'))
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session()->get('pesan') }}
            </div>
        @endif
          <!-- Content Row -->
          <div class="row">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Produk</th>
                              <th>Deskripsi</th>
                              <th>Type</th>
                              <th>Option</th>
                          </tr>
                          </thead>
                          <tbody>
                          @forelse($items as $item)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $item->nama_produk }}</td>
                                  <td>{{ $item->deskripsi }}</td>
                                  <td>{{ $item->type }}</td>
                                  <td>
                                      <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info">
                                          <i class="fa fa-pencil-alt"></i>
                                      </a>
                                      <form action="{{ route('product.destroy', $item->id) }}" method="post" class="d-inline">
                                          @csrf
                                          @method('DELETE')
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
@endsection