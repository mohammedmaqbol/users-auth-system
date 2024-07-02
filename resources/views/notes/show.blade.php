<x-app-layout :title="$title">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Show Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Title</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $note->title }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Body</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $note->body }}</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Created At</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $note->created_at }}</p>
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('notes.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">All Notes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
