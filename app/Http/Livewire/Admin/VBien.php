<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use App\Models\bien;
use App\Models\caract;
use App\Models\type_annonce;
use App\Models\type_bien;
use App\Models\caract_bien;


class VBien extends Component
{
    use WithFileUploads;
    public $titre;
    public $description;
    public $salon;
    public $chambre;
    public $etat = false;
    public $equipe = false;
    public $adresse;
    public $prix;
    public $devise;
    public $valide = false;
    public $client_id;
    public $ville;
    public $type_annonce_id;
    public $type_bien_id;

    public $caract_bien = [];
    public $type_as;
    public $type_bs;
    public $biens;
    public $caracts;
    public $galleries;

    protected $listeners = ['Added'=>'$refresh', 'Updated'=>'$refresh', 'Deleted'=>'$refresh'];

    public function render()
    {
        $this->biens = bien::all();
        $this->caracts = caract::all();
        $this->type_as = type_annonce::all();
        $this->type_bs = type_bien::all();
        return view('livewire.admin.v-bien');
    }

    public function store(){
        //if($this->)
        $validate = $this->validate([
            'titre' => 'required',
            'description' => 'required',
            'salon' => 'required',
            'chambre' => 'required',
            'etat' => 'required',
            'adresse' => 'required',
            'prix' => 'required',
            'devise' => 'required',
            'valide' => 'required',
            'ville' => 'required',
            'type_annonce_id' => 'required',
            'type_bien_id' => 'required',
        ]);   

        $this->validate([
            'galleries' => 'required'
        ]);

        $record = bien::create($validate);
        $idb = $record->id();
        if(count($this->caract_bien) > 0) {
            $cb = [];
            for ($i=0; $i < count($this->caract_bien); $i++) { 
                # code...
                array_push($cb, array('bien_id'=>$idb, 'caract_id'=>$this->caract_bien[$i]));
            }
            caract_bien::insert($cb);
        }

        for ($i=0; $i < $this->galleries; $i++) { 
            # code...
            $this->galleries[$i]->storePubliclyAs('public/bines/'.$idb.'/'.$i.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'Bien enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){

    }
}
