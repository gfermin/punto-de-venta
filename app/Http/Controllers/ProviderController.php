<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Provider::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $provider = Provider::create($request->all());
        return $provider;
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        return $provider;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return $provider;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        return response()->json(['Haz borrado el proveedor correctamente.']);
    }
}
