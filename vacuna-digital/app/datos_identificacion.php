<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_identificacion extends Model
{
     
    protected $fillable =[
      'curp','apellido_materno','apellido_paterno','matricula_expediente','sexo','unidad_medica','consultorio'
    ];

    protected $hidden = [];
}
