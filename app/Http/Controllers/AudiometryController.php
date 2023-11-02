<?php

namespace App\Http\Controllers;

use App\Models\Audiometry;
use Illuminate\Http\Request;

class AudiometryController extends Controller
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
        return view('audiometry.create');
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
     * @param  \App\Models\Audiometry  $audiometry
     * @return \Illuminate\Http\Response
     */
    public function show(Audiometry $audiometry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Audiometry  $audiometry
     * @return \Illuminate\Http\Response
     */
    public function edit(Audiometry $audiometry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Audiometry  $audiometry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audiometry $audiometry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audiometry  $audiometry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audiometry $audiometry)
    {
        //
    }
}
