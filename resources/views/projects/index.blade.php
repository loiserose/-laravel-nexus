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