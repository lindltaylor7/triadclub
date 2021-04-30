<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Image;
use App\Models\Oferta;
use App\Models\Rede;
use App\Models\Rubro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function index(Request $request){
        $user = $request->user();
        if(isset($user)){
            $empresa = Empresa::where('user_id',$user->id);
            return view('welcome', compact('empresa'));
        }else{
            return view('welcome');
        }

        //return $sliders;

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


    public function landing($empresa){

        $data_emp=Empresa::where('user_id',$empresa)->first();
        
        $redes = Rede::where('empresa_id',$data_emp->id)->first();

        return view('landing', compact('data_emp','redes'));
      
      
    }

    public function regEnt(Request $request){



        $empresa=Empresa::create($request->all());

        return view('social', compact('empresa'));

    }

    public function regSoc(Request $request){



        $redes=Rede::create($request->all());

        return view('auth.login');

    }

    public function rubro($id){

        $rubro = Rubro::where('id', $id)->first();
        $empresas = Empresa::where('rubro_id',$id)
                                ->get();
        return view('empresas.rubro', compact('empresas','id', 'rubro'));
        
    }

    public function ciudad($id)
    {
        //$rubros = Rubro::where('name', $id)->get();
        $empresas=Empresa::where('ciudad', $id)->get();
        return view('ciudad', compact('empresas', 'id'));
    }
}
