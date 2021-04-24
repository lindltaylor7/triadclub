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

        $empresas=Empresa::where('name','like','%'.$this->search.'%')->limit(4)->get();

        $sliders = [];

        foreach($empresas as $empresa){


            $slider=Image::where('imageable_type','App\Models\Empresa')
                            ->where('imageable_id',$empresa->id)
                            ->get();

            array_push($sliders,$slider);
        }





        return view('livewire.buscador', compact('empresas','sliders'));
    }
}
