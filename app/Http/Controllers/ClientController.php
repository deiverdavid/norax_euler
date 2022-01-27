<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Clients/Index', [
            'clients' => Client::latest()
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
        return Inertia::render('Clients/Create');
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
            'cedula' => 'required',
            'name' => 'required',
            'lastname1' => 'required',
            'lastname2' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'position' => '',
            'description_position' => '',
        ]);

        $client = Client::create($request->all());

        return redirect()->route('clients.index')->with('status', 'Usuario creado con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return Inertia::render('Clients/Show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return Inertia::render('Clients/Edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'cedula' => 'required',
            'name' => 'required',
            'lastname1' => 'required',
            'lastname2' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'position' => '',
            'description_position' => '',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('status', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('status', 'Usuario Eliminado');
    }
}
