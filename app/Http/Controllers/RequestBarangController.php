<?php

namespace App\Http\Controllers;

use App\RequestBarang;
use Illuminate\Http\Request;

class RequestBarangController extends Controller
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
        return view('barang.create');
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
     * @param  \App\RequestBarang  $requestBarang
     * @return \Illuminate\Http\Response
     */
    public function show(RequestBarang $requestBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequestBarang  $requestBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestBarang $requestBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequestBarang  $requestBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestBarang $requestBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequestBarang  $requestBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestBarang $requestBarang)
    {
        //
    }
}
