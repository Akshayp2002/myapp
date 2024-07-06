<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Notes') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2">
            <form action="{{ isset($data) ? route('notes.update', $data->id) : route('notes.store') }}" method="post">
                @csrf
                @if (isset($data))
                    @method('PUT')
                @endif
                <button type="submit"
                    class="text-white float-end m-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{ isset($data) ? 'Update' : 'Save' }}
                </button>

                <div class="m-2">
                    <div class="mb-6">
                        <label for="large-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                        </label>
                        <input type="text" id="large-input" name="title" value="{{ old('title', $data->title ?? '') }}"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('title')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <textarea name="notes" id="myeditorinstance" rows="5">{{ old('notes', $data->notes ?? '') }}</textarea>
                    @error('notes')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>

            </form>
        </div>
    </div>

</x-app-layout>
