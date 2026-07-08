<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Back to Projects Link -->
                    <div class="mb-4">
                        <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">
                            ← Back to Projects
                        </a>
                    </div>

                    <!-- Project Details -->
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h3>
                        
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Status -->
                            <div>
                                <p class="text-sm text-gray-500">Status</p>
                                <span class="px-2 py-1 text-xs rounded-full 
                                    @if($project->status == 'completed') bg-green-100 text-green-800
                                    @elseif($project->status == 'in-progress') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($project->status) }}
                                </span>
                            </div>

                            <!-- Deadline -->
                            <div>
                                <p class="text-sm text-gray-500">Deadline</p>
                                <p class="font-medium">{{ $project->deadline ? date('M d, Y', strtotime($project->deadline)) : 'No deadline' }}</p>
                            </div>

                            <!-- Created -->
                            <div>
                                <p class="text-sm text-gray-500">Created</p>
                                <p class="font-medium">{{ $project->created_at ? date('M d, Y h:i A', strtotime($project->created_at)) : 'N/A' }}</p>
                            </div>

                            <!-- Last Updated -->
                            <div>
                                <p class="text-sm text-gray-500">Last Updated</p>
                                <p class="font-medium">{{ $project->updated_at ? date('M d, Y h:i A', strtotime($project->updated_at)) : 'N/A' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <h4 class="text-lg font-medium text-gray-900">Description</h4>
                        <p class="mt-2 text-gray-600">{{ $project->description ?? 'No description provided' }}</p>
                    </div>

                    <!-- Project Owner -->
<div class="mt-6 p-4 bg-gray-50 rounded-lg border border-gray-200">
    <h4 class="text-sm font-medium text-gray-500">Project Owner</h4>
    <div class="mt-2 flex items-center space-x-3">
        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
            {{ substr($project->user->name, 0, 1) }}
        </div>
        <div>
            <p class="font-medium text-gray-900">{{ $project->user->name }}</p>
            <p class="text-sm text-gray-500">{{ $project->user->email }}</p>
        </div>
    </div>
</div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <a href="{{ route('projects.edit', $project) }}" 
                           class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Edit Project
                        </a>
                        <form method="POST" action="{{ route('projects.destroy', $project) }}" 
                              onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                                Delete Project
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>