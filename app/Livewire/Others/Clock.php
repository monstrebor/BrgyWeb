<?php

namespace App\Livewire\Others;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Clock extends Component
{

    public $time;
    public $date;


    public function mount()
    {

        $this->updateTime();

    }

    public function updateTime()
    {

        $this->date = now()->format('M d, Y');
        $this->time = now()->format('h:i:s A');

    }


    public function render()
    {


        return view('livewire.others.clock');
    }
}
