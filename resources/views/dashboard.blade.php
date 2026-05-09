@extends('layouts.app')

@section('title', 'Dashboard - Islah Web Service')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Welcome to Your Dashboard!</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                <h3 class="text-lg font-semibold text-blue-800 mb-2">Account Status</h3>
                <p class="text-blue-600">Your account is active and in good standing.</p>
            </div>
            
            <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                <h3 class="text-lg font-semibold text-green-800 mb-2">Profile</h3>
                <p class="text-green-600">Name: {{ Auth::user()->name }}</p>
                <p class="text-green-600">Email: {{ Auth::user()->email }}</p>
            </div>
            
            <div class="bg-purple-50 p-6 rounded-lg border border-purple-200">
                <h3 class="text-lg font-semibold text-purple-800 mb-2">Member Since</h3>
                <p class="text-purple-600">{{ Auth::user()->created_at->format('F d, Y') }}</p>
            </div>
        </div>
        
        <div class="mt-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Quick Actions</h3>
            <div class="flex space-x-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit Profile
                </button>
                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    View Settings
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
