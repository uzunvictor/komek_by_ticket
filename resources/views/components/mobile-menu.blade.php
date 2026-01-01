<div id="mobileMenu" class="sm:!hidden fixed inset-0 flex flex-1 flex-col -translate-x-[100%] transition duration-300 ease-in z-1000
    before:content-['']
    before:absolute
    before:inset-0
    before:bg-[#123D4B]/90
    before:backdrop-blur-[5px]
    before:pointer-events-none
    before:-z-4">
    <div class="flex flex-col flex-1 relative">
        <div class="flex flex-col flex-1 justify-between gap-8 px-6 py-4">
            <div class="flex justify-between items-center">
                <x-logo class="h-8 w-30"></x-logo>
                <button id="closeMobileMenuBtn">
                    <x-icon-close class="h-6 w-6"></x-icon-close>
                </button>
            </div>
{{--            <x-logo class="self-center"></x-logo>--}}
            <div class="flex flex-col gap-8 items-start">
                <div class="flex flex-col gap-8">
                    <x-ui.button message="Войти" type="danger"></x-ui.button>
                    <x-ui.button message="Написать отзыв" type="danger"></x-ui.button>
                    <x-ui.button message="Мне пришёл билет" type="danger"></x-ui.button>
                </div>
                <div class="flex flex-wrap gap-4">
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
            </div>
        </div>
        <div class="relative flex flex-col gap-4 justify-center sm:justify-between items-center px-[50px] py-4 border-t border-[#A0AEB7]">
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
            <span class="text-[#A0AEB7] text-sm">© {{ now()->year }} Все права защищены</span>
        </div>
    </div>
</div>