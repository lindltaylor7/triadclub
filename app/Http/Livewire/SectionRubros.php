<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SectionRubros extends Component
{

    public $nombres=['ABOGADOS', 'EDUCACIÓN', 'HOTELERÍA', 'ARTESANÍA'];

    public function render()
    {
        return view('livewire.section-rubros');
    }
}
