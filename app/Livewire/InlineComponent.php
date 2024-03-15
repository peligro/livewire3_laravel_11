<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{
   //php artisan make:livewire Inline2Component --inline
   public function render()
   {
       return <<<'HTML'
       <div>
           <h1>Componente inline</h1>
       </div>
       HTML;
   }
}
