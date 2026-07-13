<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
          <!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Total Users -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-blue-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Total Users</p>
                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\User::count() }}</p>
            </div>
        </div>
    </div>

    <!-- Total Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-purple-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Total Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Completed Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-green-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Completed Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->where('status', 'completed')->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Pending Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-orange-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Pending Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->where('status', 'pending')->count() }}</p>
            </div>
        </div>
    </div>
</div>

    <!-- Total Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-purple-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Total Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Completed Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-green-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Completed Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->where('status', 'completed')->count() }}</p>
            </div>
        </div>
    </div>

    <!-- Pending Projects -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <div class="flex items-center">
            <div class="p-3 bg-orange-500 rounded-full text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="ml-4">
                <p class="text-sm text-gray-500">Pending Projects</p>
                <p class="text-2xl font-bold text-gray-900">{{ Auth::user()->projects()->where('status', 'pending')->count() }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Users with phone number -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
    <div class="flex items-center">
        <div class="p-3 bg-indigo-500 rounded-full text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
        </div>
        <div class="ml-4">
            <p class="text-sm text-gray-500">Users with Phone</p>
            <p class="text-2xl font-bold text-gray-900">
                {{ \App\Models\User::whereNotNull('phone')->count() }}
            </p>
        </div>
    </div>
</div>
                <!-- New Users Today -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 bg-green-500 rounded-full text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">New Users (Today)</p>
                            <p class="text-2xl font-bold text-gray-900">
                                {{ \App\Models\User::whereDate('created_at', today())->count() }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Total Projects (coming soon) -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 bg-purple-500 rounded-full text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">Total Projects</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 bg-orange-500 rounded-full text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">Recent Activity</p>
                            <p class="text-2xl font-bold text-gray-900">12</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Projects -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium text-gray-900">Recent Projects</h3>
            <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline text-sm">
                View All →
            </a>
        </div>
        
        @php
            $recentProjects = Auth::user()->projects()->latest()->take(5)->get();
        @endphp
        
        @if($recentProjects->count() > 0)
            <div class="space-y-3">
                @foreach($recentProjects as $project)
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <div>
                            <p class="font-medium text-gray-900">{{ $project->title }}</p>
                            <div class="flex space-x-2 mt-1">
                                <span class="px-2 py-0.5 text-xs rounded-full 
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
                        <a href="{{ route('projects.show', $project) }}" 
                           class="text-blue-500 hover:text-blue-700 text-sm">
                            View →
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-sm">No projects yet. Create your first project!</p>
            <a href="{{ route('projects.create') }}" 
               class="inline-block mt-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">
                + Create Project
            </a>
        @endif
    </div>
</div>
<!-- Recent Projects -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium text-gray-900">Recent Projects</h3>
            <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline text-sm">
                View All →
            </a>
        </div>
        
        @php
            $recentProjects = Auth::user()->projects()->latest()->take(5)->get();
        @endphp
        
        @if($recentProjects->count() > 0)
            <div class="space-y-3">
                @foreach($recentProjects as $project)
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                        <div>
                            <p class="font-medium text-gray-900">{{ $project->title }}</p>
                            <div class="flex space-x-2 mt-1">
                                <span class="px-2 py-0.5 text-xs rounded-full 
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
                        <a href="{{ route('projects.show', $project) }}" 
                           class="text-blue-500 hover:text-blue-700 text-sm">
                            View →
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-sm">No projects yet. Create your first project!</p>
            <a href="{{ route('projects.create') }}" 
               class="inline-block mt-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">
                + Create Project
            </a>
        @endif
    </div>
</div>
            <!-- Welcome Message -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('You are logged in! Here\'s what\'s happening with your account.') }}
                    </p>
                    
                    <!-- User Info -->
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Phone</p>
                            <p class="font-medium">{{ Auth::user()->phone ?? 'Not provided' }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Member Since</p>
                            <p class="font-medium">{{ Auth::user()->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-500">Account Status</p>
                            <p class="font-medium">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>