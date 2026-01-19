<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    @if (auth()->user()->role_id == 1)
                        {{ __("Hallo Super Admin") }}
                    @elseif (auth()->user()->role_id == 2)
                        {{ __("Hallo Admin SMK") }}
                    @elseif (auth()->user()->role_id == 3)
                        {{ __("Hallo Admin Pesantren") }}
                    @elseif (auth()->user()->role_id == 4)
                        {{ __("Hallo Admin MBG") }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
