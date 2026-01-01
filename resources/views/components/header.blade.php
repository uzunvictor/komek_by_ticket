@use('\Illuminate\Support\Facades\Vite')

<header class="w-full flex flex-col relative overflow-hidden
    sm:before:!hidden
    before:content-['']
    before:absolute
    before:h-16
    before:opacity-71
    before:inset-0
    before:bg-[#123D4B]/80
    before:backdrop-blur-[20px]
    before:pointer-events-none
    before:z-4">
    <div class="w-screen max-w-[1240px]
        sm:before:!hidden
        before:content-['']
        before:absolute
        before:inset-0
        before:bg-linear-[0deg,white,transparent_5%]
        before:z-3">
        <x-main-slider></x-main-slider>
    </div>
    <nav class="absolute top-0 left-0 sm:relative flex flex-wrap justify-between gap-4 items-center w-full sm:bg-[#123D4B] sm:min-h-[92px] px-6 py-4 sm:px-[50px] sm:pt-[23px] sm:pb-[24px] z-5">
        <x-logo class="max-sm:h-8 max-sm:w-30"></x-logo>
        <div class="flex gap-4 flex-1 justify-around max-sm:!hidden">
            <div class="flex flex-col">
                <span class="text-white text-base">Казахстан</span>
                <span class="text-[#A0AEB7] text-[13px]">улица Тестовая 1</span>
            </div>
            <div class="flex flex-col">
                <a href="tel:+77750000001" class="text-white text-base flex gap-1 items-center">
                    <span>+7 (775) 000 00 01</span>
                    <x-icon-arrow_down></x-icon-arrow_down>
                </a>
                <span class="text-[#A0AEB7] text-[13px]">улица Тестовая 1</span>
            </div>
        </div>
        <div class="flex gap-4 items-center max-sm:!hidden">
            <a href="https://www.facebook.com/groups/worldcinemagroup/" target="_blank">
                <x-icon-facebook class="hover:scale-110 transition duration-300 ease-in"></x-icon-facebook>
            </a>
            <a href="https://www.instagram.com/thecinemagroup/" target="_blank">
                <x-icon-instagram class="hover:scale-110 transition duration-300 ease-in"></x-icon-instagram>
            </a>
            <a href="https://www.youtube.com/channel/UCuOcajNC9eUH7C4Mv4m2R_g" target="_blank">
                <x-icon-youtube class="hover:scale-110 transition duration-300 ease-in"></x-icon-youtube>
            </a>
            <a href="https://vk.com/cinema_group_vk" target="_blank">
                <x-icon-vk class="hover:scale-110 transition duration-300 ease-in"></x-icon-vk>
            </a>
            <x-ui.button message="Мне пришёл билет" type="danger"></x-ui.button>
        </div>
        <button class="rounded-md flex justify-center items-center sm:!hidden"
                id="openMobileMenuBtn">
            <x-icon-burger class="text-white h-8 w-8"></x-icon-burger>
        </button>
    </nav>
</header>