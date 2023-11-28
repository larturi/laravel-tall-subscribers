<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl text-gray-600 font-bold mb-6">
                        Subscribers
                    </p>
                </div>

                @if ($subscribers->isEmpty())
                    <div class="px-10 py-56 text-center">
                        <p>
                            No subscribers found
                        </p>
                    </div>
                @else
                    <table class="w-full">
                        <thead class="border-b-2 text-white bg-gray-400">
                            <tr>
                                <th class="px-6 py-3 text-left">
                                    Email
                                </th>
                                <th class="px-6 py-3 text-left">
                                    Verified
                                </th>
                                <th class="px-6 py-3 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $subscriber)
                                <tr class="text-sm text-gray-900 border-b border-gray-200">
                                    <td class="px-6 py-4">
                                        {{ $subscriber->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- <x-button class="border border-red-500 text-red-500 bg-red-50 hover:bg-red-100"
                                            wire:click="delete({{ $subscriber->id }})">
                                            Delete
                                        </x-button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
