<?php

namespace App\Livewire\Navbar;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class Guest extends Component
{

    public function render()
    {
        return view('livewire.navbar.guest-nav-bar');
    }
}
