<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoRol extends Model
{
    use HasFactory;
    protected $table = 'empleado_rol';

    protected $fillable = ['empleado_rol','rol_id'];
    
    public $timestamps = false;
}
