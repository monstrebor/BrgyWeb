<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registration')]
#[Layout('components.layouts.app')]
class Registration extends Component
{

    public function render()
    {
        return view('livewire.guest.registration');
    }
}
