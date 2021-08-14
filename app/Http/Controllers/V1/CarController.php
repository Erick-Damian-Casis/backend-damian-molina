<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();

        return response()->json(
            [
                'data' => $cars,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta de proyectos está correcta',
                    'code' => '200'
                ]
            ],
            200
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

        $car =  new Car();
        $car->description = $request->description;
        $car->enrollment = $request->enrollment;
        $car->save();

        return response()->json(
            [
                'data' => $car,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'El proyecto se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
       
        return response()->json(
            [
                'data' => $car,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del proyecto se ejecutó correctamente',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $car)
    {
        $car = Car::find($car);
        $car->description = $request->description;
        $car->enrollment = $request->enrollment;
        $car->driver_id = $request->driver_id;
        $car->save();

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL proyecto se actualizó correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($car)
    {
        $car = Car::find($car);
        $car->delete();

        return response()->json(
            [
                'data' => $car,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
