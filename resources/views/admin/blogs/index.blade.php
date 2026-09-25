<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Manage Blog Articles') }}
            </h2>
            <a href="{{ route('admin.blogs.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-500 transition">
                + Write Article
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-4 px-4 py-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="text-left font-bold border-b dark:border-gray-700">
                                <th class="pb-3 px-4">Title</th>
                                <th class="pb-3 px-4">Date</th>
                                <th class="pb-3 px-4">Status</th>
                                <th class="pb-3 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blogs as $blog)
                            <tr class="border-b dark:border-gray-700">
                                <td class="py-3 px-4">{{ $blog->title }}</td>
                                <td class="py-3 px-4">{{ $blog->published_date ? $blog->published_date->format('Y-m-d') : '-' }}</td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 text-xs rounded {{ $blog->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $blog->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="py-3 px-4 flex space-x-3">
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Delete this article?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-6 text-center text-gray-500">No articles found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>