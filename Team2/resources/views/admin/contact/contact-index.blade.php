@extends('layouts.masteradmin')
@section('product','active')
@section('contentadmin')

{{-- <div class="content-wrapper"> --}}
    {{-- <section class="content"> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 mb-2">
                    <h3>Daftar Pesan Contact</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>No Handphone</th>    
                            <th>Create </th>
                            <th>Action</th>
                        </thead>    
                        <tbody>
                            @foreach($contact as $contacts)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contacts->nama }}</td>
                                <td>{{ $contacts->email }}</td>
                                <td>{{ $contacts->pesan }}</td>
                                <td>{{ $contacts->no_hp }}</td>
                                <td>{{$contacts->created_at}}</td>
                                <td>
                                <form action="{{ url('/admin/contact',$contacts->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge badge-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    {{-- </section> --}}
{{-- </div> --}}

@endsection