<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculo;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $fabricante = Fabricante::find($id);
        // return response()->json($fabricante-> vehiculos(),200); ;
        response()->json(['datos'=> Vehiculo::all()],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       $vehiculo = Vehiculo::find($id);

        if(!$vehiculo)
        {
            return response()->json(['mensaje'=> 'No se encuentra este vehiculo', 'codigo' => 404],404);
        }
        return response()->json(['datos'=>$vehiculo],200);
    }
}
