<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Immo - Immediat | Resultat</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('splide/css/splide.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/customcss.css')}}">
        <script src="{{mix('js/app.js')}}" defer></script>
        <script src="{{asset('splide/js/splide.min.js')}}"></script>
        <script src="{{asset('js/anime.js')}}"></script>
    </head>
    <body class="{{-- antialiased --}} overflow-x-hidden">
        <div class="flex flex-col h-full">
            <header class="flex flex-col items-center justify-end object-cover h-64 pb-10 font-bold header-back" style="background-image: url({{asset('img/USA_Coast_Sunrises_and_sunsets_Marinas_San_589198_1280x853.jpg')}});">
                <h1 class="px-12 py-2 text-xl text-white header-title">Resultat de la recherche</h1>
            </header>
            <livewire:component.result>
            
        </div>
        <livewire:footer>
        <livewire:nav>
    </body>
</html>
