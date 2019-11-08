<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'puesto', 'tipo_de_empleado','horario', 'pago_mensual'];
}
