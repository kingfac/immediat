<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class VueAnnonces extends Component
{
    public $annonces;
    public function render()
    {
        $this->annonces = [1,2,3,4,5,6,];
        return view('livewire.component.vue-annonces');
    }
}
