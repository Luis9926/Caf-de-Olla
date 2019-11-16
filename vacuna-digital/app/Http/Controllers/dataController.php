<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\datos_identificacion;
use App\esquema_vacunacion;
use App\vacuna;
class dataController extends Controller
{
    public function ingresar($curp){
      $index = datos_identificacion::Find($curp);
      echo "<script>console.log('Debug Objects: " . $index . "' );</script>";
      return view("index",["index"=>$index]);
    }

    public function datosEsquema($curp)
    {
      
    }
    public function entrar($id){
      $datos = datos_identificacion::find($id);
      if($datos){
        return view("index/{curp}",["datos"=>$datos]);
      }
    }
  }