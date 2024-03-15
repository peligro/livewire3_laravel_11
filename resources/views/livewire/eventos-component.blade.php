<div>
    <h1>Eventos </h1>
    <hr />
    <p>
        <button type="button" class="btn btn-info" wire:click="con_parametros()">Con parámetros</button>
    </p>
    <p>
    <button type="button" class="btn btn-warning" wire:click="alert()">Evento 1 Swal</button>
    </p>
    <hr />
    <p>
        <select name="" id="" class="form-control select2">
            <option value="0">Selccione....</option>
            @foreach ($paises as $key=>$pais)
                <option wire:key="{{$key}}" value="{{$pais}}">{{$pais}}</option>
            @endforeach
        </select>
    </p>
    <hr/>
    <p>
    <button type="button" class="btn btn-primary" wire:click="modal()">Ventana modal</button>
    </p>
    <hr/>
    <p>
    <button type="button" class="btn btn-success" wire:click="toast()">Mensaje Toast</button>

    </p>
  
         <!--ventana modal-->
         <div class="modal fade" id="ventana_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ventana_modal_title">Crear</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        acá puede ir cualquier cosa, un formulario, tabla html, etc
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> <!--//ventana modal--> 
</div>
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script  type="text/javascript">
         $(document).ready(function() {
    $('.select2').select2();
});
    </script>
    
@endpush
