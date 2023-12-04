<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['nombre', 'direccion', 'telefono', 'descripcion'];
    use HasFactory;

    //Una empresa tiene muchas convocatorias
    //Relacion de 1 a *
    public function convocatoriappp(){
        return $this->hasMany(Convocatoriappp::class);
    }
}
