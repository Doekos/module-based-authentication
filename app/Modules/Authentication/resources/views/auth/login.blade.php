@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h1 class="text-center text-2xl font-bold mb-6">Login</h1>
    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="email" type="email" name="email" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
        </div>
        <div class="flex items-center justify-between">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="form-checkbox">
                <span class="ml-2 text-sm text-gray-600">Remember Me</span>
            </label>
            <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
            <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:underline">Register?</a>
        </div>
        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                Login
            </button>
        </div>
    </form>
@endsection
