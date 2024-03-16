<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tematicas; 
use App\Models\Peliculas; 
class TematicasComponent extends Component
{
    public $nombre;
    public $id;
    
    public $form;
    public $bot1;
    public $bot2;

    public function render()
    {
        return view('livewire.tematicas-component')->with([
            'datos' => Tematicas::orderBy('id', 'desc')->get(),
        ])->title("Temáticas");
    }
    public function mount()
    {
        $this->form='none';
        $this->bot1='block';
        $this->bot2='none';
        $this->id=0;
    }
    public function formulario($bool, $accion, $dato)
    {
        if($bool)
        {
            $this->form='block';
            $this->bot1='none';
            $this->bot2='block';
        }
        if($bool==false)
        {
            $this->form='none';
            $this->bot1='block';
            $this->bot2='none';
        }
        //$this->dispatch('log', 'Nombre:'.$dato->nombre);
        
        if($accion==1)
        {
            $this->nombre='';
            $this->id=0;
        }else
        {
            $dato=json_decode($dato);
            $this->nombre=$dato->nombre;
            $this->id=$dato->id;
        }
        //$this->nombre=($accion==1) ? '': $dato->nombre ;
    }
    public function save()
    {
        $validated = $this->validate
        (
            [ 
            'nombre' => 'required|min:5',
            ],
            [
            'nombre.required' => 'El campo Nombre está vacío',
            'nombre.min' => 'El campo Nombre debe tener al menos 5 caracteres'

            ]
        );
        if($this->id==0)
        {
            $save=new Tematicas;
            $save->nombre=$this->nombre;
            $save->save();
            $this->dispatch('toast', ['mensaje'=>'Se creó el registro exitosamente', 'clase'=>'bg-success', 'icon'=>'bi-check-lg'] );
        }
        if($this->id>=1)
        {
            $save= Tematicas::where(['id'=>$this->id])->first();
            $save->nombre=$this->nombre;
            $save->save();
            //$this->dispatch('toast', ['mensaje'=>'Se modificó el registro exitosamente', 'clase'=>'bg-warning', 'icon'=>'bi-check-lg'] );
            $this->dispatch('swal', ['title'=>'OK','mensaje'=>'Se modificó el registro exitosamente', 'icon'=>'success'] );
        }
        $this->form='none';
        $this->bot1='block';
        $this->bot2='none';
        //return redirect()->route('ruta_tematicas');
    }
    public function delete($id)
    {
        $existe=Peliculas::where(['tematicas_id'=>$id])->count();
        if($existe==0)
        {
            Tematicas::where(['id'=>$id])->delete();
            $this->dispatch('swal', ['title'=>'OK','mensaje'=>'Se eliminó el registro exitosamente', 'icon'=>'info'] );
        }else
        {
            $this->dispatch('swal', ['title'=>'Ups','mensaje'=>'No es posible eliminar el registro', 'icon'=>'error'] );
        }
        
    }
}
