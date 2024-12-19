@extends('layouts.plain')

@section('title', 'Login')

@section('content')
<section class="flex items-center justify-center h-screen bg-green-600">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
        
        @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" 
                       class="w-full border-2 border-gray-300 rounded focus:ring-2 focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" 
                       class="w-full border-2 border-gray-300 rounded focus:ring-2 focus:ring-green-500 focus:border-green-500" required>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded shadow hover:bg-green-700">Login</button>
        </form>

        <!-- Tombol Kembali -->
        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="w-full bg-gray-300 text-gray-800 py-2 rounded text-center block hover:bg-gray-400">
                Back
            </a>
        </div>
    </div>
</section>
@endsection
