<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarTypesRequest;
use App\Http\Requests\UpdateCarTypesRequest;
use App\Models\CarTypes;

class CarTypesController extends Controller
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
     * @param  \App\Http\Requests\StoreCarTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarTypes  $carTypes
     * @return \Illuminate\Http\Response
     */
    public function show(CarTypes $carTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarTypes  $carTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(CarTypes $carTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarTypesRequest  $request
     * @param  \App\Models\CarTypes  $carTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarTypesRequest $request, CarTypes $carTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarTypes  $carTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarTypes $carTypes)
    {
        //
    }
}
