<?php

namespace App\Http\Controllers;

use App\Utama;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utama = Utama::all();
        return view('admin.tk.tentangkami', ['utama' => $utama]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tk.createtentang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'size_font_title' => 'required',
            'size_font_subtitle' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            ]);
            $utama = Utama::create($validateData);
            session()->flash('pesan', "Data {$utama->title} Berhasil Ditambahkan");
            return redirect('/utamas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function show(Utama $utama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function edit(Utama $utama)
    {
        return view('admin.tk.edittentang', ['utama' => $utama]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utama $utama)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'size_font_title' => 'required',
            'size_font_subtitle' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $utama->update($validateData);
        session()->flash('pesan', "Data {$utama->title} Berhasil Di Edit");
        return redirect()->route("utamas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utama $utama)
    {
        $utama->find($utama->id)->delete();
        session()->flash('pesan', "Data {$utama->title} Berhasil Dihapus");
        return redirect()->route('utamas.index');
    }
}
