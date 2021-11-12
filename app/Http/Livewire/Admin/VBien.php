<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use App\Models\bien;
use App\Models\caract;
use App\Models\type_annonce;
use App\Models\type_bien;


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
        $valide = $this->validate([
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
            'titre' => 'required',
        ])
    }
}
