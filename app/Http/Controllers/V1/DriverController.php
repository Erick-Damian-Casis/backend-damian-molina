<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::get();

        return response()->json(
            [
                'data' => $drivers,
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
        $drive = new Driver();
        $drive->available = $request->available;
        $drive->city = $request->city;
        $drive->date = $request->date;
        $drive->driverLicense = $request->driverLicense;
        $drive->gmail = $request->gmail;
        $drive->lastName = $request->lastName;
        $drive->names = $request->names;
        $drive->phone = $request->phone;
        $drive->save();

        return response()->json(
            [
                'data' => $drive,
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
    public function show(Driver $drive)
    {
        return response()->json(
            [
                'data' => $drive,
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
    public function update(Request $request, $drive)
    {
        $drive = Driver::find($drive);

        $drive->available = $request->available;
        $drive->city = $request->city;
        $drive->date = $request->date;
        $drive->driverLicense = $request->driverLicense;
        $drive->gmail = $request->gmail;
        $drive->lastName = $request->lastName;
        $drive->names = $request->names;
        $drive->password = $request->password;
        $drive->phone = $request->phone;
        $drive->save();

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
    public function destroy($drive)
    {
        $drive = Driver::find($drive);
        $drive->delete();

        return response()->json(
            [
                'data' => $drive,
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
