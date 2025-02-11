@extends('Admin.layout.layout')

@section('title', 'Settings Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')

        <div class="flex justify-start p-20">
            <a href="{{route('admin.password')}}">
                <button class="flex items-center gap-2 px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <i class="fas fa-lock"></i>
                    <span>Change Password</span>
                </button>
            </a>
        </div>

    </div>
@endsection
