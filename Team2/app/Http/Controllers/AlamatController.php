<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Alamat;
use App\Http\Requests\AlamatRequest;
use RealRashid\SweetAlert\Facades\Alert;


class AlamatController extends Controller
{
    public function index(){
        return view('admin.alamat.alamat-index',['alamats' => Alamat::all()]);
    }
    public function edit($id){
        $alamat = Alamat::find($id);
        return view('admin.alamat.alamat-edit',compact('alamat'));
    }
    public function update(AlamatRequest $request,$id){
        $data = $request->all();
        Alamat::find($id)->update($data);
        Alert::info("Data Berhasil Diubah");
        return redirect('/admin/alamat');
    }

}
