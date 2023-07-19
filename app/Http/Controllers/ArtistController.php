<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Artist::all();
        return view('artist.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        artist::create(
            [
                'artist_nama' => $request->artist_nama
            ]
        );

        return redirect('artist')->with('success','Data berhasil ditambahkan');
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
        $row = artist::findOrFail($id);
        return view('artist.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = artist::findOrFail($id);
        $row->update(
            [
                'artist_nama' => $request->artist_nama
            ]
        );
        return redirect('artist')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = artist::findOrFail($id);
        $row->delete();

        return redirect('artist')->with('success', 'Data berhasil dihapus');
    }
}