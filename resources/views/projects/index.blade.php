<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Add Project Button -->
                    <div class="mb-4 flex justify-between items-center">
                        <h3 class="text-lg font-medium">Your Projects</h3>
                        <a href="{{ route('projects.create') }}" 
                           class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            + New Project
                        </a>
                    </div>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
<!-- Filter and Search Section -->
<div class="mb-6 bg-gray-50 p-4 rounded-lg">
    <form method="GET" action="{{ route('projects.index') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <!-- Search -->
        <div>
            <label for="search" class="block text-sm font-medium text-gray-700">Search</label>
            <input type="text" name="search" id="search" 
                   value="{{ request('search') }}"
                   placeholder="Search projects..."
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Filter by Status -->
        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="">All Statuses</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in-progress" {{ request('status') == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <!-- Sort -->
        <div>
            <label for="sort" class="block text-sm font-medium text-gray-700">Sort By</label>
            <select name="sort" id="sort" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest First</option>
                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>By Title</option>
                <option value="deadline" {{ request('sort') == 'deadline' ? 'selected' : '' }}>By Deadline</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="flex items-end space-x-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Apply Filters
            </button>
            <a href="{{ route('projects.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                Reset
            </a>
        </div>
    </form>
</div>
                    <!-- Projects List -->
                    @forelse($projects as $project)
                        <div class="border-b border-gray-200 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="text-lg font-medium">{{ $project->title }}</h4>
                                    <p class="text-sm text-gray-600">{{ $project->description ?? 'No description' }}</p>
                                    <div class="mt-2 flex space-x-2">
                                        <span class="px-2 py-1 text-xs rounded-full 
                                            @if($project->status == 'completed') bg-green-100 text-green-800
                                            @elseif($project->status == 'in-progress') bg-yellow-100 text-yellow-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ ucfirst($project->status) }}
                                        </span>
                                        @if($project->deadline)
                                            <span class="text-xs text-gray-500">
                                                Deadline: {{ date('M d, Y', strtotime($project->deadline)) }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                               <div class="flex space-x-2">
    <a href="{{ route('projects.show', $project) }}" 
       class="text-green-500 hover:text-green-700">
        View
    </a>
    <a href="{{ route('projects.edit', $project) }}" 
       class="text-blue-500 hover:text-blue-700">
        Edit
    </a>
    <form method="POST" action="{{ route('projects.destroy', $project) }}" 
          onsubmit="return confirm('Are you sure you want to delete this project?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 hover:text-red-700">
            Delete
        </button>
    </form>
</div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <p class="text-gray-500">No projects yet. Create your first project!</p>
                            <a href="{{ route('projects.create') }}" 
                               class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                Create Project
                            </a>
                        </div>
                    @endforelse

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $projects->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>