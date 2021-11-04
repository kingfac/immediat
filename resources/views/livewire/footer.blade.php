<div class="text-white bg-gray-700 lg:pt-10 ">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex flex-col items-center justify-center py-10 text-center md:gap-20 lg:gap-40 md:flex-row md:text-left">
        {{-- grid pour le contenu du footer --}}
        {{-- vente --}}
        <div class="">
            <h1 class="text-xl">Social Network</h1>
            <ul class="text-gray-400">
                @foreach ($ventes as $vt)
                    <li class="py-1">
                        <a href="#">

                            Vente d'une maison
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Location --}}
        <div class="">
            <h1 class="text-xl ">Links</h1>
            <ul class="text-gray-400">
                @foreach ($ventes as $vt)
                    <li class="py-1"><a href="#">Vente d'une maison</a></li>
                @endforeach
            </ul>
        </div>

        {{-- Contacts --}}
        <div class="">
            <h1 class="text-xl ">Contacts</h1>
            <ul class="text-gray-400">
                @foreach ($ventes as $vt)
                    <li class="py-1"><a href="#">Vente d'une maison</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center text-center bg-gray-900 lg:flex-row lg:text-left">
        {{-- copyright et developpeur --}}
        {{-- logo --}}
        <div class="">
            <img src="{{asset('img/LOGO SANS denomination.png')}}" alt="" srcset="" class="w-28 lg:w-12">
        </div>

        {{-- copyright --}}
        <div class="">
            <p>&copy; 2021. Immo - Immediat | Tous droits réservés. | By FAC</p>
        </div>
 
        {{-- Contact --}}
        <div class="right-0 px-10 py-2 md:absolute md:py-0">
            <button class="px-20 py-2 text-xl bg-red-700">
                Contacts
            </button>
        </div>
    </div>
</div>
