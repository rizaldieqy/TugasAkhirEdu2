<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Gallery;
use Illuminate\Support\Facades\Storage;

class view_galleryController extends Controller
{
    public function index(){

        $items = Gallery::with(['data'])->get();
        
        return view('pages.user.gallery',[
            'items' => $items,
        ]);
    }
}
