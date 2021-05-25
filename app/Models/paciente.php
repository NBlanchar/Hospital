<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable=['nombre','identificacion','eps','direccion','nombreAcompanante','telAcompanante','antecedentes','motivo_consulta','diagnostico'];
}
