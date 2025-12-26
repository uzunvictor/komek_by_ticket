<div class="sm:!hidden fixed inset-0 flex flex-1 flex-col -translate-x-[100%] bg-[#123D4B] transition duration-300 ease-in z-1000"
     id="mobileMenu">
    <div id="closeMobileMenuBtn"
         class="absolute bottom-8 right-8 cursor-pointer h-10 w-10 flex justify-center items-center">
        <x-icon-close></x-icon-close>
    </div>
    <div class="flex flex-col flex-1 justify-between gap-8 p-8">
        <x-icon-logo class="self-center"></x-icon-logo>
        <div class="flex flex-col gap-8 items-start">
            <div class="flex flex-col gap-8">
                <x-ui.button message="Войти" type="danger"></x-ui.button>
                <x-ui.button message="Написать отзыв" type="danger"></x-ui.button>
                <x-ui.button message="Мне пришёл билет" type="danger"></x-ui.button>
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
</div>