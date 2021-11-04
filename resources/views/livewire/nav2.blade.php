<div class="flex w-screen bg-white shadow-2xl" x-data="{menu : false}">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <nav class="flex items-center justify-between w-full ">
        <div class="w-1/6 md:w-1/12 lg:w-36 xl:w-24">
            {{-- Logo --}}
            <a href="/"><img src="{{asset('img/LOGO SANS denomination.png')}}" alt="" srcset=""></a>
        </div>
        {{-- Menu --}}
        <div class="px-5">
            <div class="hidden gap-5 lg:flex">
                <a href="#" class="font-bold text-gray-500 transition duration-300 xl:text-xl hover:text-gray-400">Acheter</a>
                <a href="#" class="font-bold text-gray-500 transition duration-300 xl:text-xl hover:text-gray-400">Louer</a>
                <a href="#" class="font-bold text-gray-500 transition duration-300 xl:text-xl hover:text-gray-400">Vendre</a>
                <a href="#" class="font-bold text-gray-500 transition duration-300 xl:text-xl hover:text-gray-400">Accompagnement</a>
                <a href="#" class="font-bold text-gray-500 transition duration-300 xl:text-xl hover:text-gray-400">Conseil juridique</a>
                <a href="#" class="font-bold text-blue-900 transition duration-300 xl:text-xl hover:text-gray-400">Nous rejoindre</a>
            </div>
            <div class="flex lg:hidden ">
                <div class="">
                    <button class="py-3 text-blue-900 transition duration-300 hover:text-gray-400" @click="menu=!menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor" x-show="!menu">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-show="menu">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="absolute flex flex-col w-2/3 px-5 bg-gray-100 right-5 lg:hidden top-16 sm:mr-14 md:mr-28" x-show="menu" x-transition.500ms>
        <div class="">

        </div>
        <div class="grid grid-cols-1 gap-5 py-3">
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Acheter</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Louer</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Vendre</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Accompagnement</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Conseil juridique</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#" class="flex justify-between text-gray-900 transition duration-300 hover:text-gray-400">
                <b>Nous rejoindre</b>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
