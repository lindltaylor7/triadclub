<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;

class CarouselMain extends Component
{

    public $sliders;

    public function render()
    {
        $this->sliders = Image::where('imageable_type','portada')->get();
        return view('livewire.carousel-main');
    }
}
