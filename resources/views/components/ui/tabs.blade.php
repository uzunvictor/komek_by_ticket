<div class="flex pl-[50px] gap-8">
    <ul class="flex flex-wrap" id="tab_buttons">
        @foreach ($tabs as $tab)
            <li class="inline-block px-[16px] py-[10px] text-sm border-b-3 border-transparent hover:bg-gray-100 cursor-pointer tab-button {{ $tabs[0] == $tab ? 'border-b-[#FF0000]' : '' }}" data-id={{$tab}}>{{$tab}}</li>
        @endforeach
    </ul>
    @if($rightSlot)
        <div class="flex items-center">
            {{ $rightSlot }}
        </div>
    @endif
</div>
