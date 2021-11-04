<div class="flex flex-col justify-center flex-1 px-5">
    {{-- Recheche avancee --}}
    <div class="py-5">
        <h1 class="text-xl">Recherche Avancee</h1>
        <hr>
        <div class="flex flex-col gap-2 px-1 py-1 bg-gray-300 lg:flex-row">
            <div class="flex items-center justify-between flex-1 text-black border">
                <select name="" id="" class="w-full h-full py-3 pl-2">
                    <option value="">Louer</option>
                    <option value="">Acheter</option>
                </select>
            </div>
            <div class="flex items-center justify-between flex-1 text-black border">
                <select name="" id="" class="w-full h-full py-3 pl-2">
                    <option value="">Type de bien</option>
                </select>
            </div>
            <div class="flex items-center justify-between flex-1 pr-2 text-black bg-white border">
                <input type="text" placeholder="Où ?" class="w-full h-full p-2 pr-2 focus:outline-none focus:ring-white focus:border-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div class="flex items-center justify-between flex-1 pr-2 text-black bg-white border">
                <input type="text" placeholder="Loyer max / budget" class="w-full h-full p-2 pr-2 focus:outline-none focus:ring-white focus:border-0">
                <select name="" id="" class="h-full pl-2">
                    <option value="">FC</option>
                    <option value="">$</option>
                    <option value="">$</option>
                </select>
            </div>
            <div class="">
                <button class="flex justify-between w-full p-3 text-xl text-white bg-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
     </div>

    {{-- Resultat --}}
    <div class="flex flex-col items-center justify-center flex-1 px-1 py-5 sm:px-32 md:px-10">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 xl:grid-cols-4 md:grid-cols-2">
            @foreach ($annonces as $an)
            <livewire:component.annonce-card>
            @endforeach
        </div>
    </div>
</div>