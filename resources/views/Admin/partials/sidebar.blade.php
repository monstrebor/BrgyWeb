<div class="sidebar">
    <span class="text-white font-bold text-center mt-10 p-10">Administrator</span>
    <ul class="nav flex-column mt-20">
        <li class="nav-item mb-4">
            <a class="nav-link" href="{{route('admin.home')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
        </li>
        <li class="nav-item mb-4">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="nav-item mb-4">
            <a class="nav-link disabled" href="#"><i class="fas fa-ban"></i> <span>Disabled</span></a>
        </li>
        <li class="nav-item mb-4">
            <a class="nav-link" href="{{route('manageLandingPage')}}"><i class="fas fa-desktop"></i> <span>Manage Landing Page</span></a>
        </li>
        <li class="nav-item mb-4">
            <a class="nav-link" href="{{route('admin.settings')}}"><i class="fas fa-cog"></i> <span>Settings</span></a>
        </li>
        <livewire:Logout />
    </ul>
</div>

