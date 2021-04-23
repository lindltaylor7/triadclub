<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Image;
use App\Models\Oferta;
use App\Models\Rubro;
use App\Models\User;

class EmpresaController extends Controller
{
    public function index(){

        //return $sliders;
        $empresas = Empresa::all();
        return view('welcome');
    }

    public function register(){
        return view('register');
    }

    public function regUser(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]);

        if($request->has('password')){
            $request->merge([
                'password' => bcrypt($request->password)
            ]);
        }

        $user = User::create($request->all());
        return view('empresa', compact('user'));
    }

    public function regEnt(Request $request){



        $empresa=Empresa::create($request->all());

        return view('auth.login');

    }

    public function rubro(Rubro $rubro){

        $empresas = Empresa::where('rubro_id',$rubro->id)
                                ->latest('name')
                                ->paginate(6);
        return view('empresas.rubro', compact('empresas','rubro'));
    }
}
