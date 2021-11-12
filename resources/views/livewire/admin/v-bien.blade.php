<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notif : false,
    props : false
}">
    <div class="flex flex-col gap-2">
        {{-- menu superieur --}}
        <div class="flex items-center justify-between bg-black">
            <button class="px-10 py-5 text-white transition duration-200 transform bg-red-900 hover:bg-red-700 hover:scale-105" @click="props=true">
                Cliquez ici pour gerer les propriétés des biens
            </button>
            <h1 class="px-3 text-xl font-bold text-right text-gray-300 divide-x-4">Gestion des biens ou annonces</h1>
        </div>
        {{-- contenu --}}
        <div class="flex w-full gap-2">
            <div class="flex flex-col gap-4 px-3 py-5 shadow-lg" style="width:430px;">
                {{-- <h1 class="text-2xl">Données du bien</h1> --}}
                <div class="flex-1">
                    <select name="" id="" class="w-full py-2 border" wire:model="type_bien_id">
                        <option value="">Type Bien</option>
                        @foreach ($type_bs as $tb)
                            <option value="{{$tb->id}}">{{$tb->lib}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Titre" wire:model="titre">
                <textarea type="text" class="flex-1 w-full p-2 border rounded-lg h-44" placeholder="Description" wire:model="description"></textarea>
                <div class="flex flex-1 gap-2">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Nbr Salon" wire:model="salon">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Nbr Chambre" wire:model="chambre">
                </div>
                {{-- Etat/Equipe --}}
                <div class="flex items-center justify-center flex-1 gap-4 bg-gray-100">
                    <div class="flex items-center justify-center flex-1 gap-3 px-2 py-2 border-r">
                        <label for="etat" class="flex-1">Etat</label>
                        <!-- Rounded switch -->
                        <label class="switch">
                            <input type="checkbox" id="etat" wire:model="etat">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="flex items-center justify-center flex-1 gap-3 px-2 py-2 ">
                        <label for="equipe" class="flex-1">Maison equipe ?</label>
                        <!-- Rounded switch -->
                        <label class="switch">
                            <input type="checkbox" id="equipe" wire:model="equipe"> 
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Adresse" wire:model="adresse">
                <div class="flex flex-1 gap-2">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Prix" wire:model="prix">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Devise" wire:model="devise">
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Ville" wire:model="ville">
                <div class="flex-1">
                    <select name="" id="" class="w-full py-2 border" wire:model="type_annonce_id">
                        <option value="">Type annonce</option>
                        @foreach ($type_as as $ta)
                            <option value="{{$tb->id}}">{{$ta->lib}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="grid flex-1 grid-cols-3">
                    @foreach ($caracts as $car)
                        {{-- <button x-show="$wire.caract_bien.length == 0" class="px-1 text-white bg-yellow-600 border-t border-r cursor-pointer" wire:click="add({{$car->id}})">{{$car->lib}}</button>
                        <button x-show="$wire.caract_bien.length > 0" :class="{'bg-red-600' : $wire.select(<?php //echo $car['id']; ?>)}"  class="px-1 text-white border-t border-r cursor-pointer" wire:click="add({{$car->id}})">{{$car->lib}}</button>
                        <p x-show="$wire.caract_bien.length > 0" x-text="$wire.select(<?php //echo $car['id']; ?>)"></p> --}}
                        <div>
                            <input type="checkbox" name="" id="c{{$car->id}}" wire:model="caract_bien" value="{{$car->id}}" @if (in_array($car->id, $caract_bien)) checked @endif>
                            <label for="c{{$car->id}}">{{$car->lib}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="flex">
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                    <button class="flex-1 text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="url='';actu='';id=0">Clear</button>        
                </div>
            </div>
            <div class="flex-1">
                glodi
                @if ($errors->any())
                <div class="p-2 bg-red-300 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 flex flex-col w-screen h-screen gap-3 p-5 black-transparent" x-transition.500ms x-show="props">
        <div class="flex items-center justify-between text-white bg-black">
            <p class="px-5"><b>Caracteristique / Type de biens / Type d'annonces</b></p>
            <button class="p-2 text-white bg-red-600" @click="props=false">X</button>
        </div>
        <div class="flex justify-center bg-white">
            <div class="flex-1 shadow-lg">
                <livewire:admin.v-caracteristique/>
            </div>
            <div class="flex-1">
                <livewire:admin.v-type-bien/>
            </div>
            <div class="flex-1 shadow-lg">
                <livewire:admin.v-type-annonce/>
            </div>
        </div>
    </div>

     {{-- Modal --}}
     <div class="absolute top-0 left-0 flex items-center justify-center w-screen h-screen gap-10 p-5 text-white black-transparent" x-show="modal"  x-transition.500ms>
        <div class="flex flex-col items-center justify-center w-full gap-10 p-5 black-transparent" >
            <div x-data="{ isUploading : false, progress : 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" 
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
                <div x-show="save" class="flex flex-col items-center justify-center gap-5">
                    {{-- <h1 class="py-3 text-3xl text-left text-white">Parcourir des images pour le bien</h1> --}}
                    <h1 class="text-2xl font-bold">Parcourir des images pour le bien</h1>
                    <div class="flex gap-5">
                        {{-- Button parcourir images --}}
                        <label class="flex items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span class="px-3 mt-2 text-base leading-normal">Parcourir une image</span>
                            <input type="file" class="hidden" wire:model="galleries" multiple />
                            <div x-show="isUploading" class="h-full">
                                <progress max="100" x-bind:value="progress">
                                    <b x-text="progress"></b>%
                                </progress>
                            </div>
                        </label>
                    </div>
                    {{-- Chargement images --}}
                    <div class="grid grid-cols-6 gap-4 py-5">
                        @if ($galleries)
                        @foreach ($galleries as $gal)
                            <img src="{{ $gal->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="flex-1">                    
                        @endforeach
                        @endif
                    </div>
                </div>
                {{-- Confirmation --}}
                <h1 class="text-2xl font-bold">Message de confirmation</h1>
                <hr>
            </div>
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
                <span class="font-extrabold text-9xl">?</span>
            </p>
            <hr>
            <div class="flex justify-end w-full p-2" @click="modal=false;">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="del">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full bg-black cacher" id="notif3">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    {{-- @if (session()->has('message'))
    @endif --}}

    <script>
        var c = document.querySelector('#notif3');
        window.addEventListener('Updated', event => {
            c.style.transform = "scale(0.2)";
            setTimeout(() => {
                c.style.transform = "scale(0.6)";
                setTimeout(() => {
                    c.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                c.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>

</div>
