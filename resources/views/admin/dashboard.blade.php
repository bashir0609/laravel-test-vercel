@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your website statistics and activity')

@section('content')
<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Blogs Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Total Blogs</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['total_blogs'] }}</p>
                <p class="text-xs text-green-600 mt-2 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    {{ $stats['blogs_this_month'] }} this month
                </p>
            </div>
            <div class="bg-blue-100 rounded-xl p-4">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Total Users Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Total Users</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['total_users'] }}</p>
                <p class="text-xs text-green-600 mt-2 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    {{ $stats['users_this_month'] }} this month
                </p>
            </div>
            <div class="bg-green-100 rounded-xl p-4">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Total Admins Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm font-medium">Admin Accounts</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['total_admins'] }}</p>
                <p class="text-xs text-gray-500 mt-2">Administrators</p>
            </div>
            <div class="bg-purple-100 rounded-xl p-4">
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Quick Actions Card -->
    <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl shadow-sm p-6 text-white">
        <p class="text-blue-100 text-sm font-medium">Quick Actions</p>
        <div class="mt-4 space-y-2">
            <a href="{{ route('admin.blogs.create') }}" class="flex items-center gap-2 text-sm bg-white/20 hover:bg-white/30 rounded-lg px-3 py-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Blog Post
            </a>
            <a href="{{ route('admin.users.create') }}" class="flex items-center gap-2 text-sm bg-white/20 hover:bg-white/30 rounded-lg px-3 py-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add User
            </a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Blogs -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-800">Recent Blogs</h3>
            <a href="{{ route('admin.blogs.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="p-6">
            @if($stats['recent_blogs']->count() > 0)
                <div class="space-y-4">
                    @foreach($stats['recent_blogs'] as $blog)
                    <div class="flex items-start gap-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="text-sm font-medium text-gray-800 truncate">{{ $blog->title }}</h4>
                            <p class="text-xs text-gray-500 mt-1">{{ $blog->created_at->format('M d, Y') }}</p>
                        </div>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500 text-sm">No blogs yet</p>
                    <a href="{{ route('admin.blogs.create') }}" class="mt-3 inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 text-sm font-medium">Create First Blog →</a>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent Users -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-800">Recent Users</h3>
            <a href="{{ route('admin.users.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="p-6">
            @if($stats['recent_users']->count() > 0)
                <div class="space-y-4">
                    @foreach($stats['recent_users'] as $user)
                    <div class="flex items-start gap-4 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-green-600 font-bold text-sm">{{ substr($user->name, 0, 1) }}</span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="text-sm font-medium text-gray-800 truncate">{{ $user->name }}</h4>
                            <p class="text-xs text-gray-500 truncate">{{ $user->email }}</p>
                            <p class="text-xs text-gray-400 mt-1">{{ $user->created_at->format('M d, Y') }}</p>
                        </div>
                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Edit</a>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-sm">No users yet</p>
                    <a href="{{ route('admin.users.create') }}" class="mt-3 inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 text-sm font-medium">Add First User →</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
