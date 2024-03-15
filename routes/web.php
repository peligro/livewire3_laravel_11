<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ParametrosComponent;
use App\Livewire\InlineComponent;
use App\Livewire\ActionsComponent;
use App\Livewire\EventosComponent;
use App\Livewire\FormulariosComponent;
Route::get('/', HomeComponent::class)->name("ruta_home");
Route::get('/parametros/{id}/{slug}', ParametrosComponent::class)->name("ruta_parametros");
Route::get('/inline', InlineComponent::class)->name("ruta_inline");
Route::get('/actions', ActionsComponent::class)->name("ruta_actions");
Route::get('/eventos', EventosComponent::class)->name("ruta_eventos");
Route::get('/formularios', FormulariosComponent::class)->name("ruta_formularios");
//https://github.com/livewire/livewire/discussions/7480
\Livewire\Livewire::setUpdateRoute(function ($handle) {
    //return Route::post('/clientes/tamila/test/mvp/livewire_mvp/public/livewire/update', $handle);
    return Route::post('/public/livewire/update', $handle);
});