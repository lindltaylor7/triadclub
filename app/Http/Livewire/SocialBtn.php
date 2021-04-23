<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SocialBtn extends Component
{
    public $icon;

    public $url;

    public $color;

    public function render()
    {
        return view('livewire.social-btn');
    }
}
