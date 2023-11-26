@props(['showSuccess'])

<div
    x-cloak
    class="flex fixed top-0 w-full h-full bg-gray-900 bg-opacity-60 items-center"
    x-show="{{ $showSuccess }}"
    x-on:click.self="{{ $showSuccess }} = false"
    x-on:keydown.escape.window="{{ $showSuccess }} = false"
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-green-500 shadow-2xl rounded-xl p-12']) }}>
        {{ $slot }}
    </div>
</div>
