<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Journal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('jurnals.store') }}" method="POST">
                        @csrf
                        
                        <div>
                            <label for="starts_at" class="block font-medium text-sm text-gray-700">{{ __('Starts At') }}</label>
                            <input type="datetime-local" name="starts_at" id="starts_at" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mt-4">
                            <label for="ends_at" class="block font-medium text-sm text-gray-700">{{ __('Ends At') }}</label>
                            <input type="datetime-local" name="ends_at" id="ends_at" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mt-4">
                            <label for="activity" class="block font-medium text-sm text-gray-700">{{ __('Activity') }}</label>
                            <textarea name="activity" id="activity" class="form-input rounded-md shadow-sm mt-1 block w-full" required></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Create') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
