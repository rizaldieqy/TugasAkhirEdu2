<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Product;

class detailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('user.product.detail',[
            'item' => $item
        ]);
    }
}
