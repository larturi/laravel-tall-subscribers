<div>
    <div class="bg-indigo-900 flex flex-col h-screen" 
    x-data="{
        showSubscribe: false,
        showSuccess: false,
    }">
        <nav class="pt-5 flex justify-between container mx-auto text-indigo-200">
            <a href="/" class="text-2xl font-bold">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div class="flex justify-end"> 
                @auth 
                    <a href={{ route('dashboard') }}>Dashboard</a> 
                @else 
                    <a href={{ route('login') }}>Login</a>
                @endauth 
            </div>
        </nav>
        <div class="flex container mx-auto items-center h-full">
            <div class="flex w-1/3 flex-col items-start">
                <h1 class="font-bold text-white text-5xl leading-tight mb-4"> 
                    Simple generic landing page to subscribe
                </h1>
                <p class="text-indigo-200 text-xl mb-10"> 
                    We are just checking the <span class="font-bold">TALL</span>
                    Stack. Would you like subscribing? 
                </p>
                <x-primary-button 
                    x-on:click="showSubscribe=true" 
                    class="py-3 px-8 bg-red-500 hover:bg-red-600"
                >
                    Subscribe 
                </x-primary-button>
            </div>
        </div>
        <x-my-modal trigger="showSubscribe" class="bg-pink-500">
            <p class="text-white font-extrabold text-5xl text-center w-full mt-10"> Let's do it! </p>
            <form 
                class="flex flex-col items-center p-24"
                wire:submit.prevent="subscribe"
            >
                <x-text-input 
                    class="px-5 py-3 w-80 border-blue-400 border" 
                    type="text" 
                    name="email"
                    placeholder="Email Address"
                    wire:model="email"
                >
                </x-text-input>
                <span class="text-gray-100 mt-2"> 
                    {{
                        $errors->has('email') ? $errors->first('email') : "We will send you a confirmation email."
                    }}
                </span>
                <x-primary-button class="px5 py-3 mt-5 w-80 bg-blue-500 justify-center"> 
                    Get in 
                </x-primary-button>
            </form>
        </x-my-modal>
    </div>

    {{-- <x-my-modal trigger="showSuccess" class="bg-green-500">
        <p class="animate-pulse text-white font-extrabold text-5xl text-center w-full mt-10"> 
            &check;
        </p>
        <p class="text-white text-5xl font-extrabold text-center mt-16">
            Great!
        </p>
        <p class="text-2xl text-center mt-1 text-white">
            See you in your inbox!
        </p>
    </x-my-modal> --}}
</div>