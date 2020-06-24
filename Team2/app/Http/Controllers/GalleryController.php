<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Users\Gallery;
use App\Models\Users\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['data'])->get();
        // dd($items);
        return view('admin.pa.gallery.index',[
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('admin.pa.gallery.create',[
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        session()->flash('pesan',"Data {$data['nama_gambar']} Berhasil Disimpan!");
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $product = Product::all();

        return view('pages.admin.gallery.edit',[
            'item' => $item,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request,gallery $gallery)
    {
        $tampung = $gallery->find($gallery->id);
        $data = $request->all();
        if($request->gambar){
            Storage::delete('public/'.$tampung->gambar);
            $data['gambar'] = $request->file('gambar')->store(
                'assets/gallery', 'public'
            );
        }

        // $item = Gallery::findOrFail($id);

        $tampung->update($data);
        session()->flash('pesan',"Data {$data['nama_gambar']} Berhasil Di Edit!");
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findorFail($id);
        $item->delete();
        session()->flash('pesan',"Data {$item['nama_gambar']} Berhasil Di Hapus!");
        return redirect()->route('gallery.index');
    }
}
