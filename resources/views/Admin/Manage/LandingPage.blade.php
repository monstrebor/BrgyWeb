@extends('Admin.layout.layout')

@section('title', 'Manage Landing Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')

        <div class="offset-3 col-6 mt-4">
            @include('layout.all_notif')
            <livewire:LandingPage>
        </div>

    </div>
@endsection
