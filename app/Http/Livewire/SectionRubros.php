<?php

namespace App\Http\Livewire;

use App\Models\Rubro;
use Livewire\Component;

class SectionRubros extends Component
{

    public $i;

    public function render()
    {
        $rubros=Rubro::where('id','<=', $this->i*4)
                        ->where('id', '>', ($this->i*4)-4)
                        ->orderBy('id', 'asc')->limit(4)->get();
        return view('livewire.section-rubros',compact('rubros'));
    }
}
