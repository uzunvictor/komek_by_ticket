@use('\Illuminate\Support\Facades\Vite')

<header class="w-full flex flex-col">
    <img src="{{Vite::asset('resources/assets/images/main_banner.png')}}" alt="Main Banner" class=""/>
    <div class="flex justify-between items-center w-full h-[92px] bg-[#123D4B] px-[50px] pt-[23px] pb-[24px]">
        <x-icon-logo></x-icon-logo>
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
        <div class="flex gap-4 items-center">
            <a href="https://www.facebook.com/groups/worldcinemagroup/" target="_blank"><x-icon-facebook></x-icon-facebook></a>
            <a href="https://www.instagram.com/thecinemagroup/" target="_blank"><x-icon-instagram></x-icon-instagram></a>
            <a href="https://www.youtube.com/channel/UCuOcajNC9eUH7C4Mv4m2R_g" target="_blank"><x-icon-youtube></x-icon-youtube></a>
            <a href="https://vk.com/cinema_group_vk" target="_blank"><x-icon-vk></x-icon-vk></a>
            <x-ui.button message="Мне пришёл билет"></x-ui.button>
        </div>
    </div>
</header>