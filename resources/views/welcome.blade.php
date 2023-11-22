<x-welcome-layout>
    <div class="bg-indigo-900 flex flex-col h-screen">
        <nav class="pt-5 flex justify-between container mx-auto text-indigo-200">
            <a href="/" class="text-2xl font-bold">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div class="flex justify-end">

            </div>
        </nav>
    </div>

    <div class="bg-pink-500 flex flex-col h-screen">
        @auth
            <a href={{ route('dashboard') }}>Dashboard</a>
        @else
            <a href={{ route('login') }}>Login</a>
        @endauth
    </div>
</x-welcome-layout>
