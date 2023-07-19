<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('track.create',[
            'album' =>Album::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        track::create(
            [
                'track_id_album' => $request->track_id_album,
                'track_nama' => $request->track_nama,
                'track_time' => $request->track_time
            ]
        );

        return redirect('track')->with('success','Data berhasil ditambahkan');
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
        $row = track::findOrFail($id);
        return view('track.edit',[
            'album' => Album::get()
        ],compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = track::findOrFail($id);
        $row->update(
            [
                'track_id_album' => $request->track_id_album,
                'track_nama' => $request->track_nama,
                'track_time' => $request->track_time
            ]
        );
        return redirect('track')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = track::findOrFail($id);
        $row->delete();

        return redirect('track')->with('success', 'Data berhasil dihapus');
    }
}