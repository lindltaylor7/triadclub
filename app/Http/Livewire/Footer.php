<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $urls=[];

        $icons=[array('btnicon'=>'fab fa-facebook-f','url' =>'https://www.facebook.com/TRIADagenciademarketing', 'color'=>'blue'),
                array('btnicon'=>'fab fa-instagram', 'url'=>'https://www.instagram.com/triadagenciademarketing', 'color'=>'pink'),
                array('btnicon'=>'fab fa-youtube', 'url'=>'https://www.youtube.com/channel/UCjI_3UFhsvCnrOu4f-Tlc_g', 'color'=>'red')];

        return view('livewire.footer',compact('icons'));
    }
}
