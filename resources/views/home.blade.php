@use('\Illuminate\Support\Facades\Vite')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1">

    <title>{{ config('app.name', 'Komek by ticket') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex bg-black">
    <x-mobile-menu></x-mobile-menu>
    <div class="bg-black flex-1">
        <img src="{{Vite::asset('resources/assets/images/bg_left.webp')}}" alt="Left poster" class="max-[1714px]:hidden"/>
    </div>
    <div class="flex flex-col max-w-[1240px]">
        <x-header></x-header>
        <main class="bg-white overflow-hidden">
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
                    <div class="flex flex-col items-center sm:flex-wrap sm:flex-row sm:justify-center sm:items-start gap-[25px] animate-fade-in-y mt-5 mx-5 md:mx-auto mb-[100px] px-4 md:px-0 overflow-hidden">
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
    <div class="bg-black flex-1">
        <img src="{{Vite::asset('resources/assets/images/bg_right.webp')}}" alt="Right poster" class="max-[1714px]:hidden"/>
    </div>
</body>
</html>
