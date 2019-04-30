<?php

namespace App\Http\Controllers;

use App\SongRequest;
use Illuminate\Http\Request;
use App\Notifications\SongRequested;

class SongRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'name' => 'nullable|string',
            'song' => 'required|string',
        ]);

        $song = SongRequest::create($validated);

        $song->notify(new SongRequested($validated['name'], $validated['song']));

        return back()->with('notify', [
            'title' => 'Success!',
            'message' => 'We received your request!',
            'type' => 'success'
        ]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SongRequest  $songRequest
     * @return \Illuminate\Http\Response
     */
    public function show(SongRequest $songRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SongRequest  $songRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(SongRequest $songRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SongRequest  $songRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SongRequest $songRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SongRequest  $songRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SongRequest $songRequest)
    {
        //
    }
}
