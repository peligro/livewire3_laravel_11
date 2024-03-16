<?php
 
use function Livewire\Volt\{layout, state, title};
 
layout('components.layouts.app');
 
title('Volt');
//
state(['nombre' => 'César Cancino']);
state(['edad' => 43]);

?>

<div>
    <h1>Componente Volt</h1>
    <ul>
        <li>Nombre: {{$this->nombre}}</li>
        <li>Edad: {{$this->edad}}</li>
    </ul>
</div>
