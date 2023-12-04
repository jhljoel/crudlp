<?php

namespace App\Livewire;

use App\Models\Convocatoriappp;
use Livewire\Component;

class Crudconvocatoriappp extends Component
{
    public $convocatoriappps, $id_convocatoriappp, $titulo, $descripcion, $fecha_inicio, $fecha_fin, $numero_plazas_disponibles, $requisitos, $adjuntar_documento, $empresa_id;
    public $modal = false;

    public function render()
    {
        $this->convocatoriappps = Convocatoriappp::all();
        return view('livewire.crudconvocatoriappp');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos(){
        $this->titulo = '';
        $this->descripcion = '';
        $this->fecha_inicio = '';
        $this->fecha_fin = '';
        $this->numero_plazas_disponibles = '';
        $this->requisitos = '';
        $this->adjuntar_documento = '';
        $this->empresa_id = '';
    }

    public function editar($id)
    {
        $convocatoriappp = Convocatoriappp::findOrfail($id);
        $this->id_convocatoriappp = $id;
        $this->titulo = $convocatoriappp->titulo;
        $this->descripcion = $convocatoriappp->nombre;
        $this->fecha_inicio = $convocatoriappp->direccion;
        $this->fecha_fin = $convocatoriappp->telefono;
        $this->numero_plazas_disponibles = $convocatoriappp->descripcion;
        $this->requisitos = $convocatoriappp->descripcion;
        $this->adjuntar_documento = $convocatoriappp->descripcion;
        $this->empresa_id = $convocatoriappp->descripcion;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Convocatoriappp::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Convocatoriappp::updateOrCreate(['id'=>$this->id_empresa],
        [
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'fecha_fin' => $this->fecha_fin,
            'numero_plazas_disponibles' => $this->numero_plazas_disponibles,
            'requisitos' => $this->requisitos,
            'adjuntar_documento' => $this->adjuntar_documento,
            'empresa_id' => $this->empresa_id
        ]);

        session()->flash('message',
            $this->id_empresa ? '¡Actualización exitosa!' : '¡Registrado Exitosamente!');

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
