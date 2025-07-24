<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="mt-40 font-bold text-xl text-center">
           <h2>Home Page</h2>
        </div>
        HTML;
    }
}
