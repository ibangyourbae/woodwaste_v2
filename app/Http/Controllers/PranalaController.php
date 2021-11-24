n<?php

namespace App\Http\Controllers;

use App\Models\Pranala;
use App\Http\Requests\StorePranalaRequest;
use App\Http\Requests\UpdatePranalaRequest;

class PranalaController extends Controller
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
     * @param  \App\Http\Requests\StorePranalaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePranalaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function show(Pranala $pranala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function edit(Pranala $pranala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePranalaRequest  $request
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePranalaRequest $request, Pranala $pranala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pranala  $pranala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pranala $pranala)
    {
        //
    }
}
