<footer>
    <div class="flex flex-wrap flex-col justify-start gap-4 sm:justify-between sm:flex-row w-full min-h-[109px] bg-[#123D4B] px-[50px] pt-[24px] pb-[30px]">
        <x-logo></x-logo>
        <div class="flex flex-col">
            <a href="mailto:admin@example.com" class="text-white text-base">admin@example.com</a>
            <a href="mailto:ticket@example.com" class="text-white text-base">ticket@example.com</a>
            <span class="text-[#A0AEB7] text-[13px]">улица Тестовая 1</span>
        </div>
        <div class="flex flex-col">
            <a href="tel:+77750000001" class="text-white text-base flex gap-1 items-center">
                <span>+7 (775) 000 00 01</span>
                <x-icon-arrow_down></x-icon-arrow_down>
            </a>
            <span class="text-[#A0AEB7] text-[13px]">улица Тестовая 1</span>
        </div>
        <div class="flex flex-col">
            <span class="text-white text-base">08:00 - 22:00 с пн.-пт</span>
            <span class="text-[#A0AEB7] text-[13px]">График работы</span>
        </div>
    </div>
    <div class="[&>*]:bg-[#0C3542]">
        <div class="flex flex-col sm:flex-row">
            <div class="flex-1 mt-7 ml-[50px] mb-4 sm:mb-[41px] flex flex-col gap-4">
                <span class="text-white">Меню</span>
                <ul class="[&>*]:text-[#A0AEB7] flex flex-col gap-1">
                    <li><a href="">Афиша</a></li>
                    <li><a href="">Сеансы</a></li>
                    <li><a href="">Пушкинская карта</a></li>
                    <li><a href="">Кинотеатр</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
            </div>
            <div class="flex flex-col flex-1 gap-5 sm:gap-[54px] mt-4 sm:mt-7 sm:ml-[120px] ml-[50px]">
                <div class="flex flex-col gap-3">
                    <span class="text-white">Способы оплаты:</span>
                    <div class="flex gap-[22px] items-center">
                        <x-icon-master_card></x-icon-master_card>
                        <x-icon-visa></x-icon-visa>
                    </div>
                </div>
                <div class="flex flex-col text-[13px] text-[#A0AEB7] text-wrap pr-4 md:p-0 mb-4 md:mb-0">
                    <span>Все сеансы начинаются с рекламно-информационного блока.</span>
                    <span>Точную продолжительность сеансов можно уточнить в кинотеатре.</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 justify-center sm:justify-between items-center px-[50px] pt-[19px] pb-[23px] border-t border-[#A0AEB7]">
            <div class="flex gap-4 items-center">
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
            </div>
            <span class="text-[#A0AEB7] text-sm">© {{ now()->year }} Все права защищены</span>
        </div>
    </div>
</footer>