<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::get();

        return response()->json(
            [
                'data' => $addresses,
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
        $address = new Address();
        $address->endAddress = $request->endAddress;
        $address->startAddress = $request->startAddress;
        $address->save();

        return response()->json(
            [
                'data' => $address,
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
    public function show(Address $address)
    {
        return response()->json(
            [
                'data' => $address,
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
    public function update(Request $request, $address)
    {
        $address = Address::find($address);

        $address->endAddress = $request->endAddress;
        $address->startAddress = $request->startAddress;
        $address->save();

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
    public function destroy($address)
    {
         $address = Address::find($address);
        $address->delete();
        
        return response()->json(
            [
                'data' => $address,
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
