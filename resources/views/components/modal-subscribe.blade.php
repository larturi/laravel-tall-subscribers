@props(['showSubscribe'])

<div 
    x-cloak
    class="flex fixed top-0 w-full h-full items-center" 
    x-show="{{ $showSubscribe }}"
    x-on:click.self="{{ $showSubscribe }}=false" 
    x-on:keydown.escape.window="{{ $showSubscribe }}=false"
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-pink-500 shadow-2xl rounded-xl p-8']) }}>
        {{ $slot }}
    </div>
</div>