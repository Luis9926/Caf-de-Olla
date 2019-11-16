<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class esquema_vacunacion extends Model
{
    protected $fillable =[
        'id_vacuna_aplicada','id_vacuna','curp','fecha'
      ];
  
      protected $hidden = [];
}
