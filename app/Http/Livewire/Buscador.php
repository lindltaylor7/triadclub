<?php

namespace App\Http\Livewire;

use App\Models\Empresa;
use App\Models\Image;
use Livewire\Component;

class Buscador extends Component
{

    public $search;

    public function render()
    {
        $sliders=Image::where('imageable_type','App\Models\Empresa')->get();
        $empresas=Empresa::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.buscador', compact('empresas','sliders'));
    }
}
