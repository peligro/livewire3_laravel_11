<?php

namespace App\Livewire;

use Livewire\Component;

class RenderizadoComponent extends Component
{
    public $dato_interno;
    public function render()
    {
        return view('livewire.renderizado-component');
    }
    public function mount($dato)
    {
         $this->dato_interno=$dato;
    }
}

