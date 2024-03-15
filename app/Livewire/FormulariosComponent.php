<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
class FormulariosComponent extends Component
{
    #[Validate('required', message: 'El campo Nombre está vacío')]
    #[Validate('min:5', message: 'El campo Nombre debe tener al menos 5 caracteres')]
    public $nombre;
    #[Validate('required', message: 'El campo E-Mail está vacío')]
    #[Validate('email', message: 'El E-Mail ingresado no es válido')]
    public $correo;
    
    use WithFileUploads;
    #[Validate('required', message: 'El campo foto está vacío')]  
    #[Validate('mimes:jpg,png', message: 'El campo foto debe ser JPG|PNG')]
    public $foto;
    public function render()
    {
        return view('livewire.formularios-component');
    }
    public function save()
    {
        /*$validated = $this->validate
        (
            [ 
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            ],
            [
            'nombre.required' => 'El campo Nombre está vacío',
            'nombre.min' => 'El campo Nombre debe tener al menos 5 caracteres',
            'correo.required' => 'El campo E-Mail está vacío',
            'correo.email' => 'El E-Mail ingresado no es válido',

            ]
        );*/
        $this->validate();
        $this->dispatch('log', 'nombre='.$this->nombre.' | correo='.$this->correo. ' | foto='.$this->foto.' | extensión='.$this->foto->extension().' | foto nombre='.$this->foto->getClientOriginalName().' | foto temporal='.$this->foto->temporaryUrl().' | foto real='.$this->foto->getRealPath() );
        //$this->foto->store(path: 'fotos');
    
        copy($this->foto->getRealPath(), 'uploads/'.time().".".$this->foto->extension());
        $this->dispatch('toast', ['mensaje'=>'Se creó el registro exitosamente', 'clase'=>'bg-success', 'icon'=>'bi-check-lg'] );
    }
}
