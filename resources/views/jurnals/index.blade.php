<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Journals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('jurnals.create') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        {{ __('Create New Journal') }}
                    </a>

                    <div class="relative overflow-x-auto mt-6">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <a
                                            href="{{ route('jurnals.index', ['sort' => request()->get('sort') === 'starts_at' ? '-starts_at' : 'starts_at']) }}">
                                            {{ __('Starts At') }}
                                        </a>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <a
                                            href="{{ route('jurnals.index', ['sort' => request()->get('sort') === 'ends_at' ? '-ends_at' : 'ends_at']) }}">
                                            {{ __('Ends At') }}
                                        </a>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                            {{ __('Activity') }}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurnals as $jurnal)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">
                                            {{ $jurnal->formatted_starts_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $jurnal->formatted_ends_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $jurnal->activity }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('jurnals.show', $jurnal) }}"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('View') }}</a>
                                            <a href="{{ route('jurnals.edit', $jurnal) }}"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                Edit
                                            </a>

                                            <form action="{{ route('jurnals.destroy', $jurnal) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                                    onclick="return confirm('Are you sure you want to delete this journal?');">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
