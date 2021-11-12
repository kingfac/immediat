<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notif : false
}">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="px-5 py-5 xl:px-72">
        <div class="flex flex-col gap-4 divide-y-2">
            <div class="p-2">   
                <h1 class="text-xl font-bold text-right divide-x-4 divide-gray-300">Actualités</h1>
                <div class="flex flex-col py-5">
                    <div class="flex flex-1 gap-5 py-5">
                        <input type="text" class="flex-1 p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="Titre de l'actualité" id="actu" wire:model="actu">
                        <input name="h" id="url" wire:model="url" class="flex-1 p-2 placeholder-gray-600 transition transform border rounded-lg" placeholder="url" />
                    </div>
                    
                    <div class="flex">
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                        <button class="flex-1 text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="url='';actu='';id=0">Clear</button>        
                    </div>
                    
                </div> 
            </div>
            
            <div class="flex flex-col gap-2 divide-y-2">
                @foreach ($actualites as $ligne)
                    <div class="flex flex-col">
                        <button class="flex justify-between p-2 font-bold text-white transition duration-300 bg-blue-900 shadow cursor-pointer hover:bg-blue-800" wire:click="charger({{$ligne}})">
                            <h1><?php echo $ligne->actu; ?></h1>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$ligne->icon}}"></path></svg>
                        </button>
                        <div class="p-2 text-lg text-justify bg-gray-300">
                            <?php echo $ligne->url; ?>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="absolute top-0 left-0 flex items-center justify-center w-screen h-screen gap-10 p-5 text-white black-transparent" x-show="modal" @click="modal=false;" x-transition.500ms>
        <div class="flex flex-col items-center justify-center gap-10 p-5 black-transparent" >
            <div>
                <h1 class="text-2xl font-bold">Message de confirmation</h1>
                <hr>
            </div>
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
            </p>
            <hr>
            <div class="flex w-full p-2">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="del">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </div>
        <div class="">
            <h1 class="font-extrabold text-9xl">?</h1>
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
