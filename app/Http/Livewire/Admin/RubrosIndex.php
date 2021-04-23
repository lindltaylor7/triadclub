<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Rubro;

use Livewire\WithPagination;

class RubrosIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
         $this->resetPage();
    }

    public function render()
    {

        $rubros = Rubro::where('name','LIKE','%'.$this->search.'%')->paginate(5);

        return view('livewire.admin.rubros-index' , compact('rubros'));
    }
}
