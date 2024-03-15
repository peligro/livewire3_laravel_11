<?php

namespace App\Livewire;

use Livewire\Component;
//use Livewire\Attributes\Title;
class HomeComponent extends Component
{
    public $titulo;
    //#[Title('Livewire 3')] 
    public function render()
    {
        $this->titulo="título dinámico ñandú";
        return view('livewire.home-component')->with([
            'author' => "Juan Pérez",
        ])->title($this->titulo);
        
    }
}
