<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empresa;

class CarouselTop extends Component
{
    public function render()
    {
        $empresas=Empresa::where('top','=','1')->get();
        return view('livewire.carousel-top', compact('empresas'));
    }
}
