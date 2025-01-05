@extends('layouts.app') {{-- Assuming a layout file named `layouts.app` --}}

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Dashboard</h1>

        <!-- Welcome Message -->
        <div class="bg-white p-6 rounded shadow mb-6">
            <h2 class="text-xl font-semibold text-gray-700">Welcome, {{ auth()->user()->name ?? '' }}!</h2>
            <p class="text-gray-600">Here’s what’s happening today:</p>
        </div>

        <!-- Dashboard Widgets -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Example Widget 1 -->
            <div class="bg-blue-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">Total Users</h3>
                <p class="text-2xl font-bold">{{ $totalUsers ?? 0 }}</p>
            </div>

            <!-- Example Widget 2 -->
            <div class="bg-green-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">New Messages</h3>
                <p class="text-2xl font-bold">{{ $newMessages ?? 0 }}</p>
            </div>

            <!-- Example Widget 3 -->
            <div class="bg-yellow-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">Tasks Completed</h3>
                <p class="text-2xl font-bold">{{ $completedTasks ?? 0 }}</p>
            </div>
        </div>
    </div>
@endsection
