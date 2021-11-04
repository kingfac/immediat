<div class="flex flex-col pb-4 bg-white border-b-4 border-red-600 shadow-lg rounded-2xl">
    <img src="{{asset('img/maison/191199962_327186845676843_5614446053251912539_n.jpg')}}" alt="" srcset="" class="w-full " style="border-radius: 4%">
    <div class="flex flex-col p-2">
        <div class="flex justify-between py-1">
            <h1 class="text-xl font-bold text-gray-400">Titre</h1>
            <h1 class="text-xl text-right text-red-600">5000$</h1>
        </div>
        <p class="flex-1 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam explicabo veritatis expedita. A quae velit culpa, quos quaerat cumque optio atque repudiandae vitae alias in veritatis quidem neque illo.
        </p>
        <div class="flex w-full gap-5 px-5 pt-5">
            <a class="flex items-center justify-center w-full gap-2 p-1 text-center text-red-600 border border-red-600 rounded-2xl" href="/detail">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span>Favoris</span>
            </a>
            <a class="flex items-center justify-center w-full gap-2 p-1 text-center text-blue-900 border border-blue-900 rounded-2xl" href="/detail">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span>Detail</span>
            </a>
        </div>
    </div>
    <button class="absolute px-5 mt-3 ml-3 text-white transition duration-200 red-transparent">
        Acheter
    </button>
</div>