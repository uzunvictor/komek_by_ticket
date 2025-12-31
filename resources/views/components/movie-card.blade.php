<div class="w-[267px] relative flex flex-col transition duration-300 ease-in hover:scale-98">
    @if($movie->label?->title)
        <div class="bg-[#E92B43] text-white text-sm/4 font-medium absolute top-[9px] right-[8px] px-[9px] py-1 uppercase">{{$movie->label->title}}</div>
    @endif
    <img src="{{ asset($movie->imagePath()) }}" alt="{{ $movie->title }}" class="w-[267px] h-[400px] object-cover"/>
    <span class="text-2xl mt-[10px]">{{$movie->title}}</span>
    <div class="flex flex-wrap gap-[7px] mt-[9px]">
        @foreach($movie->tags as $tag)
            <div class="bg-[#F2F2F5] text-[#727276] text-xs p-1 rounded-[3px]">{{$tag->title}}</div>
        @endforeach
    </div>
    <div class="flex flex-wrap gap-[10px] mt-4">
        @if($movie->screenings->isNotEmpty())
            @foreach($movie->screenings as $screening)
                <div class="flex flex-col gap-[3px] items-center w-[66px] transition duration-300 ease-in hover:-translate-y-1 cursor-pointer">
                    <div class="bg-[#E92B43] text-white rounded-[3px] border border-[#E92B43] flex flex-col overflow-hidden">
                        <div class="bg-[#EE92B43] pt-[7px] pr-[14px] pb-[6px] pl-[13px] text-white font-medium text-[15px]">
                            {{$screening->time}}
                        </div>
                        <div class="flex gap-2 bg-white text-[11px] text-[#4C4C4F] tracking-[0%] px-1 py-[3px]">
                            <span>{{$screening->type->title}}</span>
                            <span> {{$screening->price}} ₸</span>
                        </div>
                    </div>
                    <span class="text-[10px] text-[#4C4C4F]">{{$screening->hall->title}}</span>
                </div>
            @endforeach
        @else
            <button class="bg-[#E92B43] px-4 py-2 text-sm/4 text-white rounded">Сеансы на Завтра</button>
        @endif
    </div>
</div>