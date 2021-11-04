<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{

    public $ventes;
    public $location;
    public function render()
    {
        $this->ventes = [1, 2, 3, 4];
        $this->location = [1, 2, 3, 4];
        return view('livewire.footer');
    }
}
