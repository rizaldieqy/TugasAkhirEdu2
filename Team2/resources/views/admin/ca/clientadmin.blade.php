@extends('layouts.masteradmin')
@section('titlea','client admin')
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
        <a class="btn btn-danger float-right mt-5" href="/clientadmin/create">Add</a></td>

        <br><br>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">no</th>
              <th scope="col">nama</th>
              <th scope="col">gambar</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($client as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td><p>{{ $item->nama }}</p></td>
                <td><img src="{{ Storage::url($item->gambar)}}" alt="gambar" style="width:100px"></td>
                <td>
                  <a class="btn btn-success" href="{{ route('clientadmin.edit',$item->id) }}"  >edit</a>
                  <form action="{{ route('clientadmin.destroy', $item->id ) }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Hapus</button>
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