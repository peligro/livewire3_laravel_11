<?php

namespace App\Livewire;

use Livewire\Component;

class EventosComponent extends Component
{
    public $paises=["Chile", "Perú", "México", "España", "Venezuela"];
    public function render()
    {
        return view('livewire.eventos-component')->title("Eventos");
    }
    public function mount()
    {
        $this->dispatch('log', 'hola');
    } 
    public function con_parametros()
    {
        $this->dispatch('parametros', ['valor'=>'ñandú lalá']);
    }
    public function alert()
    {
        $this->dispatch('swal', ['title'=>'título personalizado', 'icon'=>'error'] );
    }
    public function modal()
    {
        $this->dispatch('modal', ['titulo'=>'título personalizado' ] );
    }
    public function toast()
    {
        //$this->dispatch('toast', ['mensaje'=>'título personalizado', 'clase'=>'bg-danger', 'icon'=>'bi-exclamation-lg'] );
        $this->dispatch('toast', ['mensaje'=>'Se creó el registro exitosamente', 'clase'=>'bg-success', 'icon'=>'bi-check-lg'] );
    }
}
