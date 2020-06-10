<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Alamat;

class AlamatController extends Controller
{
    public function index(){
        return view('admin.contact.contact-index',['alamat'=> Alamat::all()]);
    }
    public function create(){

    }
    public function show(){}
    public function edit(){}
    public function update(Request $request){

    }
    public function destroy(){}
}
