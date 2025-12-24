@use('\Illuminate\Support\Facades\Vite')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Komek by ticket') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <style>--}}
{{--        @layer theme {--}}
{{--            :root {--}}
{{--                --body-bg-image: url('{{ Vite::asset('resources/assets/images/background-poster.png') }}');--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body class="flex bg-black">
    <div class="bg-black">
        <img src="{{Vite::asset('resources/assets/images/bg_left.png')}}" alt="Left poster" class="max-[1714px]:hidden"/>
    </div>
    <div class="flex flex-col flex-1">
        <x-header></x-header>
        <main class="bg-white min-h-[500px]">
            @php
                $tabs = ['Афиша', 'Сеансы', 'Кинотеатр', 'Контакты'];
                $selectedTab = $tabs[0];
            @endphp
            <x-ui.tabs :tabs="$tabs" :selected-tab="$selectedTab">
                <x-slot name="rightSlot">
                    <div class="flex gap-8 items-center">
                        <x-ui.button message="Войти"></x-ui.button>
                        <x-ui.button message="Написать отзыв"></x-ui.button>
                    </div>
                </x-slot>
            </x-ui.tabs>
            @php
                $movies = [
                    (object) [
                        'title' => 'Праздники',
                        'label'=>'премьера',
                        'image'=>'https://upload.wikimedia.org/wikipedia/en/e/e9/Black_Widow_%282021_film%29_poster.jpg',
                        'tags'=>['экшен', 'триллер'],
                        'info'=>['time'=>'15:35', 'hall'=>'Зал 3', 'type'=>'2D', 'price'=>'1233 ₸']
                    ],
                    (object) [
                        'title' => 'Праздники',
                        'label'=>'премьера',
                        'image'=>'https://upload.wikimedia.org/wikipedia/en/e/e9/Black_Widow_%282021_film%29_poster.jpg',
                        'tags'=>['экшен', 'триллер', 'экшен', 'триллер', 'экшен', 'триллер'],
                        'info'=>['time'=>'15:35', 'hall'=>'Зал 3', 'type'=>'2D', 'price'=>'1233 ₸']
                    ],
                    (object) [
                        'title' => 'Праздники',
                        'label'=>'премьера',
                        'image'=>'https://upload.wikimedia.org/wikipedia/en/e/e9/Black_Widow_%282021_film%29_poster.jpg',
                        'tags'=>['экшен', 'триллер'],
                        'info'=>['time'=>'15:35', 'hall'=>'Зал 3', 'type'=>'2D', 'price'=>'1233 ₸']
                    ],
                    (object) [
                        'title' => 'Праздники',
                        'label'=>'премьера',
                        'image'=>'https://upload.wikimedia.org/wikipedia/en/e/e9/Black_Widow_%282021_film%29_poster.jpg',
                        'tags'=>['экшен', 'триллер', 'экшен', 'триллер', 'экшен', 'триллер'],
                        'info'=>['time'=>'15:35', 'hall'=>'Зал 3', 'type'=>'2D', 'price'=>'1233 ₸']
                    ],
                ];
            @endphp
            <div class="flex flex-col items-center sm:flex-wrap sm:flex-row sm:justify-center sm:items-start gap-[25px] mt-5 mx-[50px] mb-[100px]">
                @foreach($movies as $movie)
                    <x-movie-card :movie="$movie"></x-movie-card>
                @endforeach
            </div>
        </main>
        <x-footer></x-footer>
    </div>
    <div class="bg-black">
        <img src="{{Vite::asset('resources/assets/images/bg_right.png')}}" alt="Right poster" class="max-[1714px]:hidden"/>
    </div>
</body>
</html>
