<div class="w-screen h-screen bg-red-">
    <div class="w-full h-full splide">
       {{--  <div class="splide__arrows">
            <button class="bg-red-200 splide__arrow splide__arrow--prev">
                
            </button>
            <button class="splide__arrow splide__arrow--next">
                
            </button>
        </div> --}}
        <div class="splide__track">
              <ul class="splide__list">
                  <li class="h-screen splide__slide">
                      <img src="{{asset('img/los-angeles-californie.jpg')}}" alt="" srcset="">
                  </li>
                  <li class="h-screen splide__slide">
                    <img src="{{asset('img/new-york-city-2380683_1280.jpg')}}" alt="" srcset="">
                </li>
                <li class="h-screen splide__slide">
                    <img src="{{asset('img/5UFHMmp5qRs8sKs95cU_0Q.png')}}" alt="" srcset="">
                </li>
              </ul>
        </div>
      </div>
      <div class="absolute top-0 flex flex-col justify-center w-screen h-screen gap-4 px-5 lg:items-center lg:px-0 md:px-32 sm:px-20">
            <div class="grid grid-cols-3 gap-2">
                <button class="px-8 py-4 font-bold text-white lg:text-xl lg:px-16 black-transparent sm:px-12">Louer</button>
                <button class="py-4 font-bold text-white lg:text-xl lg:px-16 black-transparent">Acheter</button>
                <button class="py-4 font-bold text-white bg-red-700 lg:text-xl lg:px-16">Vendre</button>
            </div>
            <div class="w-full px-4 py-20 bg-white xl:w-3/4 lg:p-4 lg:w-11/12">
                <div class="absolute p-2 -mt-10 bg-black"></div>
                <div class="grid gap-4 lg:grid-cols-4">
                    <div class="flex items-center justify-between pr-2 text-black border">
                        <select name="" id="" class="w-full h-full py-3 pl-2">
                            <option value="">Type de bien</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between pr-2 text-black border">
                        <input type="text" placeholder="Où ?" class="w-full p-2 pr-2 focus:outline-none focus:ring-white focus:border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-between pr-2 text-black border">
                        <input type="text" placeholder="Loyer max / budget" class="w-full p-2 pr-2 focus:outline-none focus:ring-white focus:border-0">
                        <select name="" id="" class="h-full pl-2">
                            <option value="">FC</option>
                            <option value="">$</option>
                            <option value="">$</option>
                        </select>
                    </div>
                    <div class="">
                        <button class="flex justify-between w-full p-3 text-xl text-white bg-red-700">
                            <b>Rechecher</b>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
      </div>
</div>
