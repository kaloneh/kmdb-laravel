<?php

namespace App\Http\Controllers;

use App\LocalMovie;
use Illuminate\Http\Request;

class LocalMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kmdb/index');
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
     * @param  \App\LocalMovie  $localMovie
     * @return \Illuminate\Http\Response
     */
    public function show(LocalMovie $localMovie)
    {
        $detail = LocalMovie::query()->find($localMovie->getKey());
        return view('kmdb/show', ['detail'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocalMovie  $localMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalMovie $localMovie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocalMovie  $localMovie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocalMovie $localMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocalMovie  $localMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalMovie $localMovie)
    {
        //
    }
}
