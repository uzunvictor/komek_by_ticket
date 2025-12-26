<button {{ $attributes->merge(['class' => 'px-4 py-2 text-sm/4 border-1 rounded-2xl cursor-pointer '.$types[$type]]) }}>
    {{ $message }}
</button>