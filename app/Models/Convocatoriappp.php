<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoriappp extends Model
{
    protected $fillable=['titulo', 'descripcion', 'fecha_inicio', 'fecha_fin', 'numero_plazas_disponibles', 'requisitos', 'adjuntar_documento', 'empresa_id'];

    use HasFactory;

    //Una convocatoria tiene muchas empresas
    //Relacion de 1 a * inversa (* a 1)
    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
