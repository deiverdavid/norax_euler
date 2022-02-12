<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        return Inertia::render('Providers/Index', [
            'providers' => Provider::latest()
            ->where('name', 'LIKE', "%$request->q%")
            ->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Providers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nit' => 'required',
            'cedula' => 'required',
            'business_name' => 'required',
            'property_name' => 'required',
            'name' => 'required',
            'lastname1' => 'required',
            'lastname2' => 'required',
            'address' => 'required',
            'phone_number1' => 'required',
            'phone_number2' => '',
            'fax' => 'required',
            'email' => 'required|email',
        ]);

        $provider = Provider::create($request->all());

        return redirect()->route('providers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return Inertia::render('Providers/Show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return Inertia::render('Providers/Edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $request->validate([
            'nit' => 'required',
            'cedula' => 'required',
            'business_name' => 'required',
            'property_name' => 'required',
            'name' => 'required',
            'lastname1' => 'required',
            'lastname2' => 'required',
            'address' => 'required',
            'phone_number1' => 'required',
            'phone_number2' => '',
            'fax' => 'required',
            'email' => 'required|email',
        ]);

        $provider->update($request->all());

        return redirect()->route('providers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index');//->with('status', 'Usuario Eliminado');
    }
}
