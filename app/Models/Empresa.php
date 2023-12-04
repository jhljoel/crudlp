<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['nombre', 'direccion', 'telefono', 'descripcion'];
    use HasFactory;
}
