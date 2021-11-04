<div class="flex flex-col justify-center lg:flex-row lg:gap-10">
    <div class="flex justify-center flex-1{{--  xl:w-1/2 lg:w-4/5 --}} lg:pl-10 px-5 md:px-28 sm:px-16 lg:px-0">
        <div class="w-full -mt-24 bg-white">
            <div class="w-1/12 p-2 bg-red-600 "></div>
            <div class="p-4">
                <h1 class="text-xl text-red-500">Ville : Kinshasa</h1>
                <div class="flex justify-between">
                    <h1 class="py-2 text-blue-900 sm:text-3xl">Une villa meublée</h1>
                    <h1 class="py-2 text-blue-900 sm:text-3xl">5000 Fc</h1>
                </div>
                <p class="py-3 text-xl text-gray-500">Maison à vendre</p>
                <hr>
                {{-- Gallerie annonce --}}
                <div class="flex flex-col w-full gap-4">
                    <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                    <div class="grid grid-cols-2 gap-4 p-1 bg-gray-100 rounded-sm xl:grid-cols-4 sm:grid-cols-3">
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                        <a href="#">
                            <img src="{{asset('img/maison/2017-07-31-03-06-17_c3d914dc-07b4-4f0a-b795-9594ee841da1_640_640_0.jpg')}}" alt="" srcset="" class="w-full ">
                        </a>
                    </div>
                </div>
            
                <div class="py-12">
                    <h1 class="py-2 text-blue-900 sm:text-3xl">Descriptif du bien</h1>
                    <div class="py-5 text-justify">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatem est explicabo in vitae praesentium vel eos tempore, sunt nulla sed rerum incidunt dicta veritatis nisi corrupti eius aut officiis.
                        </p>
                        <div class="">
                            <h1 class="py-2 text-blue-900 sm:text-2xl">Caracteristiques</h1>
                            <ul class="py-2">
                                @foreach ($caracts as $ca)
                                <li class="flex gap-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>
                                    Cuisine equipée
                                </li>
                                @endforeach                    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Formulaire contact --}}
    <div class="flex flex-col {{-- xl:w-9/12 lg:w-4/5 --}} lg:pr-10 px-5 md:px-28 sm:px-16 lg:px-0">
        <div class="flex flex-col lg:p-0">
            <div class="px-10 py-10 text-white bg-blue-900">
                <h1 class="text-xl font-bold">Contact information</h1>
                <p class="py-5">
                    Bonjour, êtes-vous vivement intéressé par ce bien ?
                    <br>
                    Merci de nous recontacter pour plus d'informations. 
                    <br>
                    Bien cordialement
                </p>
                <div class="flex flex-col gap-4 py-5">
                    <div class="flex gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <p>+243 82 24 23 686</p>
                    </div>
                    <div class="flex gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <p>immo-immediat@gmail.com</p>
                    </div>
                    <div class="flex gap-5">
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                        <a href="#"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></a>
                    </div>
                </div>
            </div>
            <div class="flex-1 px-5 py-10 text-gray-500 bg-white shadow-2xl md:px-10">
                <h1 class="py-4 font-bold">Laissez nous un message</h1>
                <div class="flex flex-col gap-2 md:mb-10 xl:mb-10 xl:gap-10 md:flex-row xl:flex-row lg:flex-col lg:mb-0">
                    <div class="flex-1">
                        <label for="" class=""><b>Nom</b></label>
                        <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                    </div>
                    <div class="flex-1">
                        <label for="" class=""><b>Prenom</b></label>
                        <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:mb-10 xl:mb-10 xl:gap-10 md:flex-row xl:flex-row lg:flex-col lg:mb-0">
                    <div class="flex-1">
                        <label for="" class=""><b>Email</b></label>
                        <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                    </div>
                    <div class="flex-1">
                        <label for="" class=""><b>Phone</b></label>
                        <input type="text" name="" id="" class="w-full p-2 border rounded-lg">
                    </div>
                </div>
                <div class="flex flex-col gap-2 xl:gap-10 md:flex-row xl:flex-row lg:flex-col">
                    <div class="flex-1">
                        <label for="" class=""><b>Message</b></label>
                        <textarea name="" id="" class="w-full h-40 p-2 mt-5 border rounded-lg sm:h-80 xl:h-80 lg:h-40"></textarea>
                    </div>
                </div>
                <div class="flex justify-end gap-10 py-5">
                    <button class="px-10 py-2 text-white bg-blue-900">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</div>