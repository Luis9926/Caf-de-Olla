<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\datos_identificacion;

class dataController extends Controller
{
    public function ingresar($curp){
      $index = datos_identificacion::Find($curp);
      echo "<script>console.log('Debug Objects: " . $index . "' );</script>";
      return view("index",["index"=>$index]);
    }
}
