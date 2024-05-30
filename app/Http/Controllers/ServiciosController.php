<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios(){
        $servicios=[
            ['titulo'=>'Servicio 1'],
            ['titulo'=>'Servicio 2'],
            ['titulo'=>'Servicio 3'],
            ['titulo'=>'Servicio 4'],
            ['titulo'=>'Servicio 5'],
        ];
        return view('servicios', compact('servicios'));
    }
}
