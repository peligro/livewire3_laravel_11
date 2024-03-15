<?php

namespace App\Livewire;

use Livewire\Component;

class ActionsComponent extends Component
{
    public $contador=0;
    public $nombre;
    public $name;
    public function render()
    {
        return view('livewire.actions-component');
    }
    public function mount()
    {
        $this->nombre="Juan Pérez"; 
        $this->name="Andréz López";
    }
    public function add()
    {
        return $this->contador++;
    }
    public function delete()
    {
        return $this->contador--;
    }
    public function resetear()
    {
        return $this->contador=0;
    }
    public function cambiarNombre()
    {
        $this->nombre="Juan Pérez Martínez";
    }
    public function cambiarNombreConParametro($valor)
    {
        $this->nombre=$valor;
    }
      
}
