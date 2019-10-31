<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes; 
    protected $table = 'cliente'; 
    protected $hidden = ['ip','created_at','updated_at']; 
    protected $fillable = ['nombre', 'apellidos', 'fecha_nacimiento', 'clave', 'correo_electronico', 'telefono', 'direccion', 'estado_civil', 'sueldo_anual']; 
}
