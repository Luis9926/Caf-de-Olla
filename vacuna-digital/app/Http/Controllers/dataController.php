<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\datos_identificacion;

class dataController extends Controller
{
    public function ingresar($index){
      $index = datos_identificacion::Find($index);
      return view("index",["index"=>$index]);
    }
}
