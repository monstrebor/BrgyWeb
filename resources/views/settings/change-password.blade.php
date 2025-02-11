@extends('Admin.layout.layout')

@section('title', 'Change Password Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')
        @if (session('message'))
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 rounded-md mb-4">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <span>{{ session('message') }}</span>
            </div>
        @endif
        <div class="offset-3 col-6 mt-4">
            <livewire:settings.change-password>
        </div>

    </div>
@endsection
