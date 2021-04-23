<?php

namespace App\Http\Livewire;

use App\Models\Rubro;
use Livewire\Component;



class Navigation extends Component
{
    public function render()
    {
        $rubros = Rubro::all();

        return view('livewire.navigation', compact('rubros'));
    }
}
