<?php

namespace App\Livewire;

use App\Models\Landing;
use App\Services\ImageService;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class LandingPage extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule('required|image|mimes:jpeg,png,jpg,gif,svg|max:2048')]
    public $image;

    protected ImageService $imageService;

    public function boot(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function create()
    {
        $this->validate();

        $imagePath = $this->imageService->imageHandler($this->image);
        Landing::create([
            'name' => $this->name,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'The image has been stored successfully.');
        return redirect()->route('manageLandingPage');
    }

    public function render()
    {
        $landings = Landing::all();
        return view('livewire.landing-page', compact('landings'));
    }
}
