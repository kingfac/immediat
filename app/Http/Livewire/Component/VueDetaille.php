<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class VueDetaille extends Component
{
    public $caracts;
    public function render()
    {
        $this->caracts = [1,2,3,4,5,4];
        return view('livewire.component.vue-detaille');
    }
}
