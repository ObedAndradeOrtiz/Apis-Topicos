<?php

namespace App\Http\Controllers;

use App\Models\Ubicaciones;
use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $imagenes=Ubicaciones::get()->toJson(JSON_PRETTY_PRINT);
        return \response($imagenes,200);
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
        $ubicacion=Ubicaciones::create($request->all());
        return response()->json([
           'res'=>true,
           'id'=>$ubicacion->id,
           'msg'=>'Ubicacion guardado correctamente'
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicaciones $ubicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubicaciones $ubicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicaciones $ubicaciones)
    {
        //
        $ubicaciones->update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Ubicacion actualizada correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubicaciones $ubicaciones)
    {
        //
        $ubicaciones->delete();
        return \response()->json([
            'res'=>true,
            'msg'=>'Ubicacion eliminada correctamente'
        ]);
    }
}
