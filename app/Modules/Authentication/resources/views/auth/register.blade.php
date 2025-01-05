@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <h1 class="text-center text-2xl font-bold mb-6">Register</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
{{--            @error('name')--}}
{{--            <div class="text-red-500 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
{{--            @error('email')--}}
{{--            <div class="text-red-500 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}
        </div>

        <!-- Password Field -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
{{--            @error('password')--}}
{{--            <div class="text-red-500 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}
        </div>

        <!-- Confirm Password Field -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring focus:ring-blue-500">
        </div>

        <!-- Terms and Conditions -->
        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="terms" required class="form-checkbox">
                <span class="ml-2 text-sm text-gray-600">I agree to the <a href="#" class="text-blue-500 hover:underline">terms and conditions</a></span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                Register
            </button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <p class="text-sm">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
    </div>
@endsection
