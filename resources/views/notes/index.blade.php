<x-app-layout :title="$title">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center items-center mb-4">
                        <h2 class="text-2xl font-semibold">All Notes</h2>
                    </div>
                    <div class="flex justify-center mb-4">
                        <a href="{{ route('notes.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Note</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full text-center">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Body</th>
                                    <th class="px-4 py-2">Created At</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notes as $note)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $note->id }}</td>
                                        <td class="border px-4 py-2">{{ $note->title }}</td>
                                        <td class="border px-4 py-2">{{ Str::limit($note->body, 30) }}</td>
                                        <td class="border px-4 py-2">{{ $note->created_at }}</td>
                                        <td class="border px-4 py-2">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('notes.show', $note->id) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                                                <a href="{{ route('notes.edit', $note->id) }}"
                                                    class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Update</a>
                                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                </form>
                                            </div>
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
