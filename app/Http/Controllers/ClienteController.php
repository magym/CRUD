<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientes()
    {
        $clientes = cliente::paginate(2);
        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
                'nombre' => 'required',
                'rfc' => 'required',
                'telefono' => 'required',
                'email' => 'required',
                'observaciones' => 'required',]

            );
         

        cliente::create($request->all());

        Session::flash('message','Cliente creado correctamente');
        return redirect()->route('clientes');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $request->validate([
                'nombre' => 'required',
                'rfc' => 'required',
                'telefono' => 'required',
                'email' => 'required',
                'observaciones' => 'required',]);

        $cliente->update($request->all());

         Session::flash('message', 'Cliente actualizado correctamente');
         return redirect()->route('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        Session::flash('message', 'Cliente borrado correctamente');
         return redirect()->route('clientes');
    }
}

