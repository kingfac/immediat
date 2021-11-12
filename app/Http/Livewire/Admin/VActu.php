<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\actu;

class VActu extends Component
{
    public $actu;
    public $selectedId;
    public $url;
    public $actualites;

    public function render()
    {
        $this->actualites = actu::all();
        return view('livewire.admin.v-actu');
    }



    public function store(){
        $validate = $this->validate([
            'actu' => 'required',
            'url' => 'required',
        ]); 

        $record = actu::create($validate);

        session()->flash('message', 'actu enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->actu = '';
        $this->url = '';
    }

    public function charger($data){
        $this->actu = $data['actu'];
        $this->url = $data['url'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = actu::find($this->selectedId);
        $record->update([
            'actu' => $this->actu,
            'url' => $this->url,
        ]);
        session()->flash('message', 'actu mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = actu::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'actu delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
