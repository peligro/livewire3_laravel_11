<div>
   <h1>Acciones</h1>
   <h2>{{$contador}}</h2>
   <p>
    <button wire:click="add" class="btn btn-primary">+1</button>
   </p>
   <p>
    <button wire:click="delete" class="btn btn-success">-1</button>
   </p>
   <p>
    <button wire:click="resetear" class="btn btn-danger">0</button>
   </p>
   <hr/>
   <h3>{{$nombre}}</h3>
   <p>
    <button wire:click="cambiarNombre()" class="btn btn-danger">Cambiar nombre normal</button>
   </p>
   <p>
    <button wire:click="cambiarNombreConParametro('Pedro Yáñez')" class="btn btn-danger">cambiarNombreConParametro</button>
   </p>
   <p>
    <button wire:click="cambiarNombreConParametro('{{$name}}')" class="btn btn-danger">cambiarNombreConParametro dinámico</button>
   </p>
   <p>
    <button wire:click="$set('nombre', '{{$name}} con $set')" class="btn btn-warning">$set</button>
   </p>
   <hr />
    <livewire:RenderizadoComponent :dato="'Valor estático'" />
</div>
