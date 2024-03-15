<div>
    <h1>Formularios</h1>
    <div class="row">
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" wire:model="nombre" class="form-control" />
            @error('nombre') <span class="text text-danger">{{ $message }}</span> @enderror
           
        </div>
        <div class="form-group">
            <label for="correo">E-Mail</label>
            <input type="text" wire:model="correo" class="form-control" />
            @error('correo') <span class="text text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" wire:model="foto" class="form-control" />
            @error('foto') <span class="text text-danger">{{ $message }}</span> @enderror
           
        </div>
        <hr/>
        <button type="submit" class="btn btn-primary"  >Enviar</button>
       
    </form>
    </div>
</div>
