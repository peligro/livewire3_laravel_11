<div>
    <h1>Hola mundo desde Livewire 3 con Laravel 11</h1>
    <p>{{$author}}</p>
    <hr />
    <livewire:RenderizadoComponent :dato="'Valor estático'" />
    <hr />
    <livewire:RenderizadoComponent :dato="$author" />
</div>
