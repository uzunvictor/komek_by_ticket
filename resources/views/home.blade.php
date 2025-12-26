@use('\Illuminate\Support\Facades\Vite')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Komek by ticket') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex bg-black">
    <x-mobile-menu></x-mobile-menu>
    <div class="bg-black">
        <img src="{{Vite::asset('resources/assets/images/bg_left.png')}}" alt="Left poster" class="max-[1714px]:hidden"/>
    </div>
    <div class="flex flex-col flex-1">
        <x-header></x-header>
        <main class="bg-white">
            @php
                $tabs = ['Афиша', 'Сеансы', 'Кинотеатр', 'Контакты'];
                $selectedTab = $tabs[0];
            @endphp
            <x-ui.tabs :tabs="$tabs" :selected-tab="$selectedTab">
                <x-slot name="rightSlot">
                    <div class="flex gap-8 items-center py-2 max-sm:!hidden">
                        <x-ui.button message="Войти" type="danger"></x-ui.button>
                        <x-ui.button message="Написать отзыв" type="danger"></x-ui.button>
                    </div>
                </x-slot>
            </x-ui.tabs>
            <div id="tab_panels">
                <div data-id="Афиша" class="flex flex-col">
                    <div class="flex flex-wrap gap-[6px] bg-[#F2F2F5] py-2 pl-[50px] animate-fade-in-x" id="daysButtons">
                        <x-ui.button message="Сегодня" type="danger"></x-ui.button>
                        <x-ui.button message="Завтра"></x-ui.button>
                        <x-ui.button message="Воскресенье, 10 сент."></x-ui.button>
                        <x-ui.button message="Понедельник, 11 сент."></x-ui.button>
                        <x-ui.button message="Вторник, 12 сент."></x-ui.button>
                        <x-ui.button message="Среда, 13 сент."></x-ui.button>
                    </div>
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
                    <div class="flex flex-col items-center sm:flex-wrap sm:flex-row sm:justify-center sm:items-start gap-[25px] animate-fade-in-y mt-5 mx-[50px] mb-[100px] overflow-hidden">
                        @foreach($movies as $movie)
                            <x-movie-card :movie="$movie"></x-movie-card>
                        @endforeach
                    </div>
                </div>
                <div data-id="Сеансы" class="hidden animate-fade-in-y min-h-screen mt-5 mx-[50px] mb-[100px] overflow-hidden">Сеансы</div>
                <div data-id="Кинотеатр" class="hidden animate-fade-in-y min-h-screen mt-5 mx-[50px] mb-[100px] overflow-hidden">Кинотеатр</div>
                <div data-id="Контакты" class="hidden animate-fade-in-y min-h-screen mt-5 mx-[50px] mb-[100px] overflow-hidden">Контакты</div>
            </div>
        </main>
        <x-footer></x-footer>
    </div>
    <div class="bg-black">
        <img src="{{Vite::asset('resources/assets/images/bg_right.png')}}" alt="Right poster" class="max-[1714px]:hidden"/>
    </div>
</body>
</html>
