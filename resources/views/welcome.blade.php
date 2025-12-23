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
        <main class="min-h-[500px]"></main>
        <x-footer></x-footer>
    </div>
    <div class="bg-black">
        <img src="{{Vite::asset('resources/assets/images/bg_right.png')}}" alt="Right poster" class="max-[1714px]:hidden"/>
    </div>
</body>
</html>
