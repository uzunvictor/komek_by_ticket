<div class="flex pl-[50px] gap-8">
    <ul class="flex flex-wrap">
        @foreach ($tabs as $tab)
            <li class="inline-block px-[16px] py-[10px] text-sm border-b-3 border-transparent hover:bg-gray-100 cursor-pointer {{ $selectedTab == $tab ? 'border-b-[#FF0000]' : '' }}">{{$tab}}</li>
        @endforeach
    </ul>
    @if($rightSlot)
        {{ $rightSlot }}
    @endif
</div>
