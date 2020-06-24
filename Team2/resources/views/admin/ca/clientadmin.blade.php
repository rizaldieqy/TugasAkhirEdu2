@extends('layouts.masteradmin')
@section('titlea','client admin')
@section('Client','active')
@section('contentadmin')

@if(session()->has('pesan'))
          <div class="alert alert-success text-center">
            {{ session()->get('pesan') }}
          </div>
          {{-- @ifelse
          <div class="alert alert-success">
            {{ session()->get('hpus') }} --}}
          </div>
        @endif

    <div class="container">
        <a class="btn btn-danger float-right mt-5" href="/admin/clientadmin/create">Add</a></td>

        <br><br>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($client as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td><p>{{ $item->nama }}</p></td>
                <td><img src="{{ Storage::url($item->gambar)}}" alt="gambar" style="width:100px"></td>
                <td>
                  <a class="btn btn-info" href="{{ route('clientadmin.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                  <form action="{{ route('clientadmin.destroy', $item->id ) }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
                
              {{-- <td><a class="btn btn-danger" href="/karyawan/hapus/{{ $data->id }}">hapus</a></td> --}}
            </tr>
          @endforeach
          </tbody>
        </table>
  
    </div>



{{-- 
    <div class="container">
        <br><br>
        <div class="row mt-5">
            @foreach ($client as $item)
                
                <div class="col-md-4">
                    <img src="{{ Storage::url($item->gambar)}}" alt="gambar" style="width:250px">
                    <p>{{ $item->nama }}</p>
                </div>
            @endforeach

        </div>
    </div> --}}
@endsection