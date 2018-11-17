<?php

namespace App\Http\Controllers;

use App\Tfcplayer;
use Illuminate\Http\Request;

class TfcplayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Tfcplayer::orderBy('position', 'asc')->get();
        return view('tfcplayers.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tfcplayers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = Tfcplayer::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'portrait' => $request->input('portrait'),
            'number' => $request->input('number'),
            'position' => $request->input('position'),
        ]);
        return redirect()->route('players_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function show(Tfcplayer $tfcplayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function edit(Tfcplayer $tfcplayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tfcplayer $tfcplayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tfcplayer $tfcplayer)
    {
        //
    }
}
