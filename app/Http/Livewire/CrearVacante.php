<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $descripcion;
    public $ultimo_dia;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required|string',
        'descripcion' => 'required|string',
        'ultimo_dia' => 'required',
        'imagen' => 'required'
    ];

    public function crearVacante()
    {
        $datos = $this->validate();
    }

    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.crear-vacante', ['salarios' => $salarios,'categorias'=>$categorias]);
    }
}
