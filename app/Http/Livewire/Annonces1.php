<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Annonces1 extends Component
{
    public $annonces;
    public function render()
    {
        $this->annonces = [1,2,3,4,5,6,];
        return view('livewire.annonces1');
    }
}
