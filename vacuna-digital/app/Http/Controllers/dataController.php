<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\datos_identificacion;

class dataController extends Controller
{
    public function ingresar($curp){
      $index = datos_identificacion::find($curp);
      return view("index",["index"=>$index]);
    }
}
