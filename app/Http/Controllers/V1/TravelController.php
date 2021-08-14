<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::get();

        return response()->json(
            [
                'data' => $travels,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de proyectos está correcta',
                    'code' => '200'
                ]
            ], 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travel = new Travel();
        $travel->cost = $request->cost;
        $travel->code = $request->code;
        $travel->date = $request->date;
        $travel->time = $request->time;
        $travel->save();

        return response()->json(
            [
                'data' => $travel,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'El proyecto se creo correctamente',
                    'code' => '201'
                ]
            ], 201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return response()->json(
            [
                'data' => $travel,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del proyecto se ejecutó correctamente',
                    'code' => '200'
                ]
            ], 200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $travel)
    {
        $travel = Travel::find($travel);

        $travel->cost = $request->cost;
        $travel->driver_id = $request->driver_id;
        $travel->date = $request->date;
        $travel->time = $request->time;
        $travel->save();

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL proyecto se actualizó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($travel)
    {
        $travel = Travel::find($travel);
        $travel->delete();
        return response()->json(
            [
                'data' => $travel,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
    }
}
