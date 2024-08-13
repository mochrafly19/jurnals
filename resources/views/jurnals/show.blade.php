<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Journal Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <strong>{{ __('Starts At:') }}</strong> {{ $jurnal->formatted_starts_at }}
                    </div>
                    <div class="mt-4">
                        <strong>{{ __('Ends At:') }}</strong> {{ $jurnal->formatted_ends_at }}
                    </div>
                    <div class="mt-4">
                        <strong>{{ __('Activity:') }}</strong> {{ $jurnal->activity }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('jurnals.edit', $jurnal) }}" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('Edit') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
