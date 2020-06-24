<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Client;
use App\Models\Users\Client;
use App\Http\Requests\ClientRequest;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $client = Client::all();
        return view('user.client.index', compact('client'));
    }


    public function index()
    {
        $client = Client::all();
        return view('admin.ca.clientadmin', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('admin.ca.create', compact('client'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        // dd($request->file());
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('assets/gallery','public');

        Client::create($data);
        return redirect('/clientadmin')->with('pesan',"data $request->nama Berhasil di tambahkan");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.ca.edit',compact('client'));
        // $client->find($client->id);
        // return view('admin.ca.edit',['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, Client $client, $id)
    {
        
        $dataId = $client->find($id);
        $data = $request->all();
        if($request->gambar){
            Storage::delete('public/'.$dataId->gambar);
            $data['gambar'] = $request->file('gambar')->store('assets/gallery','public');
            // $data['gambar'] = $request->file('gambar')->store('assets/gallery/'.$data['gambar'],'public');
        }
        $dataId->update($data);
        return redirect('/clientadmin')->with('pesan',"data $request->nama Berhasil di update");
        // dd($dataId);
        // dd($delete);
        // return dd($data);
        // return redirect('/clientadmin')->with('pesan',"Data $request->nama Berhasil di update");
    }   


    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Client::find($id)->delete();
        return redirect('/clientadmin')->with('pesan', "Data berhasil di hapus");
    }
}
