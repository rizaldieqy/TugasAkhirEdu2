@extends('layouts.masteradmin')
@section('alamat','active')
@section('contentadmin')

<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 mb-2">
                    <h3>Data Alamat Contact Us Dan Footer</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>alamat</th>
                            <th>Email</th>
                            <th>No Handphone</th>    
                            <th>Action</th>
                            {{-- <th>Create </th> --}}
                        </thead>    
                        <tbody>
                            @foreach($alamats as $alamat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $alamat->alamat }}</td>
                                <td>{{ $alamat->email }}</td>
                                <td>{{ $alamat->no_hp }}</td>
                                <td><a href="{{ route('alamat.edit',$alamat->id,'edit') }}" class="badge badge-success">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </section>
</div>

@endsection