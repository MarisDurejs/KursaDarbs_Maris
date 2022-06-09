<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @include('layouts.menu')
    </x-slot>

    <div class="py-12">
        @yield('content')
    </div>

    <x-slot name="header">
        <h2 class="font-bold mx-1 text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-8">
        <div class="max-w-7xl mx-8 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    You're logged in!
            </div>
        </div>
    </div>
</x-app-layout>

