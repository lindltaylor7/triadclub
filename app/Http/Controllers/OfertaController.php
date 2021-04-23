<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Oferta;

class OfertaController extends Controller
{
    public function index(){
        $ofertas = Oferta::latest('id')->paginate(8);

        return view('ofertas.index', compact('ofertas'));
    }

    public function show(Oferta $oferta){


        $similares = Oferta::where('empresa_id',$oferta->empresa_id)
                            ->where('id','!=',$oferta->id)
                            ->get();


        return view('ofertas.show', compact('oferta', 'similares'));
    }

}
