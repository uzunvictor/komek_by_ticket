@use('\Illuminate\Support\Facades\Vite')

<header class="w-full flex flex-col relative">
    {{--    Mobile menu   --}}
    <div class="sm:!hidden absolute -translate-x-[100%] min-h-screen w-[100vw] bg-[#123D4B] transition duration-300 ease-in z-1000"
         id="mobileMenu">
        <div id="closeMobileMenuBtn" class="absolute top-8 right-8 cursor-pointer h-10 w-10 flex justify-center items-center">
            <x-icon-close></x-icon-close>
        </div>
        <div class="flex flex-col gap-4 p-8">
            <x-icon-logo></x-icon-logo>
            <div class="flex flex-col gap-4">
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
            <div class="flex gap-4 items-center">
                <a href="https://www.facebook.com/groups/worldcinemagroup/" target="_blank">
                    <x-icon-facebook></x-icon-facebook>
                </a>
                <a href="https://www.instagram.com/thecinemagroup/" target="_blank">
                    <x-icon-instagram></x-icon-instagram>
                </a>
                <a href="https://www.youtube.com/channel/UCuOcajNC9eUH7C4Mv4m2R_g" target="_blank">
                    <x-icon-youtube></x-icon-youtube>
                </a>
                <a href="https://vk.com/cinema_group_vk" target="_blank">
                    <x-icon-vk></x-icon-vk>
                </a>
            </div>
            <x-ui.button message="Мне пришёл билет" class="flex-none max-w-[180px]"></x-ui.button>
        </div>
    </div>

    <div class="absolute top-1/2 left-4 transform -translate-y-1/2 cursor-pointer h-10 w-10 flex justify-center items-center sm:!hidden" id="openMobileMenuBtn">
        <x-icon-burger></x-icon-burger>
    </div>
    <img src="{{Vite::asset('resources/assets/images/main_banner.png')}}" alt="Main Banner" class="max-sm:!hidden"/>
    <div class="flex flex-wrap justify-center sm:justify-between gap-4 items-center w-full min-h-[92px] bg-[#123D4B] px-[50px] pt-[23px] pb-[24px]">
        <x-icon-logo></x-icon-logo>
        <div class="flex gap-4 max-sm:!hidden">
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
                <x-icon-facebook></x-icon-facebook>
            </a>
            <a href="https://www.instagram.com/thecinemagroup/" target="_blank">
                <x-icon-instagram></x-icon-instagram>
            </a>
            <a href="https://www.youtube.com/channel/UCuOcajNC9eUH7C4Mv4m2R_g" target="_blank">
                <x-icon-youtube></x-icon-youtube>
            </a>
            <a href="https://vk.com/cinema_group_vk" target="_blank">
                <x-icon-vk></x-icon-vk>
            </a>
            <x-ui.button message="Мне пришёл билет"></x-ui.button>
        </div>
    </div>
</header>