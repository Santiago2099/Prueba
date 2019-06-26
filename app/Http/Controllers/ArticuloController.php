<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Prueba\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articulo = Articulo::all();
        return $articulo;
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
        if($request->ajax()){
            $articulo = new Articulo();
            $articulo->nombre = $request->input('nombre');
            $articulo->cantidad = $request->input('cantidad');
            $articulo->categoria_id = $request->input('categoria_id');
            $articulo->save();

            return response()->json([
                "message" => "Articulo creado correctamente.",
                "articulo" => $articulo
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return Articulo::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id->fill();
        if ($request->ajax()) {
            $articulo = new Articulo();
            $articulo->save();
            
        }
        $id->nombre = $request->input('name');
        $id->save();
        
        return response()->json([
            "id" => $id,
            "message"=> "Articulo actualizado correctamente"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
