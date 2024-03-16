<div  >
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('ruta_home')}}" wire:navigate>Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Temáticas</li>
  </ol>
</nav>
    <div class=" ">
        <h1>Temáticas</h1>
        <p class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" style="display:{{$bot1}};" wire:click="formulario(1, 1, [])"><i class="fas fa-check"></i>  Crear</button>
        <button type="button" class="btn btn-danger" style="display:{{$bot2}};" wire:click="formulario(0, 1, [])"><i class="fas fa-close"></i>  Cerrar</button>
</p>
        <hr/>
    </div>
    <!--formulario-->
    <div class="row" style="margin-bottom:20px; display:{{$form}};">
    
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" wire:model="nombre" class="form-control" placeholder="Nombre" />
            @error('nombre') <span class="text text-danger">{{ $message }}</span> @enderror
           
        </div>
       
        <br/>
        <input type="hidden" value="{{$id}}" wire:model="id" />
        <button type="submit" class="btn btn-primary"  style="margin-bottom:10px" >Enviar</button>
       
    </form>
       <hr/>
</div>
    
    <!--//formulario-->
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $dato)
                        <tr>
                            <td>{{$dato->id}}</td>
                            <td>{{$dato->nombre}}</td>
                            <td class="text-center">
                                <a href="javascript:void(0);" wire:click="formulario(1, 2, '{{$dato}}')"><i class="fas fa-pencil-alt"></i></a>
                                <a href="javascript:void(0);" wire:click="delete('{{$dato->id}}')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
