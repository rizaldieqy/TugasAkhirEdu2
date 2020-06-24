<?php

namespace App\Http\Controllers;

use App\Utama;
use Illuminate\Http\Request;

class UtamaFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utamaf = Utama::take(3)->get();
        return view('user.home.utama', compact('utamaf'));

    //     $employeedata = DB::table('employees')->get();

    // View::composer('partials.sidebar', function($view) use($employeedata) {
    // $view->with('employeedata',$employeedata);
    // });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UtamaFront  $utamaFront
     * @return \Illuminate\Http\Response
     */
    public function show(UtamaFront $utamaFront)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UtamaFront  $utamaFront
     * @return \Illuminate\Http\Response
     */
    public function edit(UtamaFront $utamaFront)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UtamaFront  $utamaFront
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UtamaFront $utamaFront)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UtamaFront  $utamaFront
     * @return \Illuminate\Http\Response
     */
    public function destroy(UtamaFront $utamaFront)
    {
        //
    }
}
