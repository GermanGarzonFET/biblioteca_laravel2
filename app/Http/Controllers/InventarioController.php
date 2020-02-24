<?php

namespace App\Http\Controllers;

use App\inventario;
use Illuminate\Http\Request;
use App;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario=App\Inventario::all();
        return view('inventario.inventario',['inventario'=> $inventario]);
        //return view('inventario.inventario',compact('inventario'));
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
        $inventarioAgregar = new inventario;
        $inventarioAgregar->nombre = $request->nombre;
        $inventarioAgregar->descripcion = $request->descripcion;
        $inventarioAgregar->npaginas = $request->npaginas;
        $inventarioAgregar->edicion = $request->edicion;
        $inventarioAgregar->autor = $request->autor;
        $inventarioAgregar->precio = $request->precio;
        $inventarioAgregar->save();
        return back()->with('inventario','el libro fue  agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $inventario)
    {
        //
    }
}
