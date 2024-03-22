{{-- @extends('layouts.user')

@section('title', 'Profile Settings')

@section('contents')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            <h2 class="text-2xl leading-tight">Profile Settings</h2>
        </div>
        <div class="my-2 py-2 border-t border-gray-200 bg-white rounded-lg shadow-sm">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->name }}">
                </div>
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                    <input type="text" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->email }}">
                </div>
                <div class="px-5 py-5 bg-white text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.user')

@section('title', 'Profile Settings')

@section('contents')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            <h2 class="text-2xl leading-tight">Profile Settings</h2>
        </div>
        @if(Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="my-2 py-2 border-t border-gray-200 bg-white rounded-lg shadow-sm">
            <form method="POST" enctype="multipart/form-data" action="{{ route('updateUserProfile') }}">
                @csrf
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->name }}">
                </div>
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ auth()->user()->email }}">
                </div>
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="password" class="block font-medium text-sm text-gray-700">New Password</label>
                    <input type="password" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="px-5 py-5 bg-white sm:p-6">
                    <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                <div class="px-5 py-5 bg-white text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
