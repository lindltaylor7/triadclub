<?php

namespace App\Http\Livewire;

use App\Models\Empresa;
use App\Models\Image;
use Livewire\Component;

class Buscador extends Component
{

    public $search;
    public $ejemplo;

    public function render()
    {
        //$empresas=Empresa::where('name','like','%'.$this->search.'%')->limit(4)->get();
        $empresas=Empresa::where('name','like','%'.$this->search.'%')->limit(4)->get();
        return view('livewire.buscador', compact('empresas'));
    }
}
