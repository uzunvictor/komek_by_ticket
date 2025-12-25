<div class="w-[267px] relative flex flex-col transition duration-300 ease-in hover:scale-102">
    @if($movie->label)
        <div class="bg-[#E92B43] text-white text-sm font-medium absolute top-[10px] right-[10px] px-2 py-1 uppercase">{{$movie->label}}</div>
    @endif
    <img src="{{$movie->image}}" class="w-[279px] h-[400px]" alt=""/>
    <span class="text-2xl mt-[10px]">{{$movie->title}}</span>
    <div class="flex flex-wrap gap-[7px] mt-[9px]">
        @foreach($movie->tags as $tag)
            <div class="bg-[#F2F2F5] text-[#727276] text-xs p-1 rounded-[3px]">{{$tag}}</div>
        @endforeach
    </div>
    <div class="flex flex-wrap gap-[10px] mt-[20px]">
        @foreach($movie->info as $info)
            <div class="flex flex-col gap-[3px] items-center w-[66px] transition duration-300 ease-in hover:-translate-y-1 cursor-pointer">
                <div class="bg-[#E92B43] text-white rounded-[3px] border border-[#E92B43] flex flex-col overflow-hidden">
                    <div class="bg-[#EE92B43] pt-[7px] pr-[14px] pb-[6px] pl-[13px] text-white font-medium text-[15px]">
                        17:40
                    </div>
                    <div class="flex gap-2 bg-white text-[11px] text-[#4C4C4F] tracking-[0%] px-1 py-[3px]">
                        <span>2D</span>
                        <span>1233 ₸</span>
                    </div>
                </div>
                <span class="text-[10px] text-[#4C4C4F]">Зал 3</span>
            </div>
        @endforeach
    </div>
</div>