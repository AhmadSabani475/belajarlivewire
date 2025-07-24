<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="mt-40 font-bold text-xl text-center">
           <h2>About Page</h2>
        </div>
        HTML;
    }
}
