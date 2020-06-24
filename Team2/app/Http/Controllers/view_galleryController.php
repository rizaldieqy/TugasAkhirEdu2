<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Product;

use Illuminate\Support\Facades\Storage;

class view_galleryController extends Controller
{
    public function index(){

        $items = Product::with(['galleries'])->get();
        
        return view('user.product.gallery',[
            'items' => $items,
        ]);
    }
}
