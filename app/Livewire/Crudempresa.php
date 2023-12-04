<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class Crudempresa extends Component
{
    public $empresas, $id_empresa, $nombre, $direccion, $telefono, $descripcion;
    public $modal = false;

    public function render()
    {
        $this->empresas = Empresa::all();
        return view('livewire.crudempresa');
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
        $this->nombre = '';
        $this->direccion = '';
        $this->telefono = '';
        $this->descripcion = '';
    }

    public function editar($id)
    {
        $empresa = Empresa::findOrfail($id);
        $this->id_empresa = $id;
        $this->nombre = $empresa->nombre;
        $this->direccion = $empresa->direccion;
        $this->telefono = $empresa->telefono;
        $this->descripcion = $empresa->descripcion;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Empresa::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Empresa::updateOrCreate(['id'=>$this->id_empresa],
        [
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'descripcion' => $this->descripcion
        ]);

        session()->flash('message',
            $this->id_producto ? '¡Actualización exitosa!' : '¡Registrado Exitosamente!');

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
