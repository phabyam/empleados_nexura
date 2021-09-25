<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','email','sexo','area_id','boletin','descripcion'];
    
    public $timestamps = false;

    public function roles()
    {
        return $this->hasMany(EmpleadoRol::class, 'empleado_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
