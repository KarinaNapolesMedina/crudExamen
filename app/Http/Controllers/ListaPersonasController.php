<?php

namespace App\Http\Controllers;

use App\Models\ListaPersonas;
use Illuminate\Http\Request;

class ListaPersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['lista_personas']=ListaPersonas::paginate(5);
        return view('lista_personas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lista_personas.create');
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
        //$datoslista_personas = request()->all();
        $datosListaPersonas = request()->except('_token');
        ListaPersonas::insert($datosListaPersonas);

        return response()->json($datosListaPersonas);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListaPersonas  $listaPersonas
     * @return \Illuminate\Http\Response
     */
    public function show(ListaPersonas $listaPersfonas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListaPersonas  $listaPersonas
     * @return \Illuminate\Http\Response
     */
    public function edit(ListaPersonas $listaPersonas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListaPersonas  $listaPersonas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaPersonas $listaPersonas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListaPersonas  $listaPersonas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ListaPersonas::destroy($id);
        return redirect("lista_personas");
    }
}
