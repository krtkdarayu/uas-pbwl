<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create',[
            'artist' =>Artist::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        album::create(
            [
                'album_nama' => $request->album_nama,
                'album_id_artist' => $request->album_id_artist
            ]
        );

        return redirect('album')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = album::findOrFail($id);
        return view('album.edit',[
            'artist' =>Artist::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = album::findOrFail($id);
        $row->update(
            [
                'album_nama' => $request->album_nama,
                'album_id_artist' => $request->album_id_artist
            ]
        );
        return redirect('album')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = album::findOrFail($id);
        $row->delete();

        return redirect('album')->with('success', 'Data berhasil dihapus');
    }
}