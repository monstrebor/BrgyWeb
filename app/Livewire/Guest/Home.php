<?php

namespace App\Livewire\Guest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Baranggay Patubig')]
#[Layout('components.layouts.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.guest.home');
    }
}
