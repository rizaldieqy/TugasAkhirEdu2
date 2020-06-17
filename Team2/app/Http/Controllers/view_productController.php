<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Product;
use Illuminate\Support\Facades\Storage;

class view_productController extends Controller
{
    public function index(){

        $items = Product::with(['galleries'])->get();
        
        return view('pages.user.product',[
            'items' => $items,
        ]);
    }
}
