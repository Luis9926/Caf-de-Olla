<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vacuna extends Model
{
    protected $fillable =[
        'id_vacuna','nombre_vacuna','dosis','edad_dosis','enfermedad_prevenida'
      ];
  
      protected $hidden = [];
}
