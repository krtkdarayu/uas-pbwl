<?php

namespace App\Http\Controllers;

use App\Models\Played;
use App\Models\Track;
use Illuminate\Http\Request;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Played::all();
        return view('played.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('played.create',[
            'track' =>Track::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        played::create(
            [
                'played_id_track' => $request->played_id_track,
                'played_date' => $request->played_date
            ]
        );

        return redirect('played')->with('success','Data berhasil ditambahkan');
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
        $row = played::findOrFail($id);
        return view('played.edit',[
            'track' =>Track::get()
        ],compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = played::findOrFail($id);
        $row->update(
            [
                'played_id_track' => $request->played_id_track,
                'played_date' => $request->played_date
            ]
        );
        return redirect('played')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = played::findOrFail($id);
        $row->delete();

        return redirect('played')->with('success', 'Data berhasil dihapus');
    }
}