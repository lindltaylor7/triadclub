<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Rubro;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('admin.empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros= Rubro::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('admin.empresas.create', compact('users', 'rubros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|unique:empresas',
            'ruc' => 'required|unique:empresas',
            'direccion' => 'required',
            'tlf' => 'max:11',
            'cel' => 'max:9',
            'logo'=>'required',
            'user_id' => 'required|unique:empresas',
            'rubro_id'=> 'required',
            'file' => 'image'
        ]);

        $empresa = Empresa::create($request->all());

        if($request->file('file')){
           $url = Storage::put('ofertas', $request->file('file'));

           $empresa->image()->create([
               'url' => $url
            ]);
        }




        return redirect()->route('admin.empresas.edit', $empresa)->with('info', 'La empresa se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('admin.empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        $rubros= Rubro::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        return view('admin.empresas.edit', compact('empresa','users','rubros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'name' => "required|unique:empresas,name,$empresa->id",
            'ruc' => "required|unique:empresas,ruc,$empresa->id",
            'direccion' => 'required',
            'tlf' => 'max:11',
            'cel' => 'max:9',
            'logo'=>'required',
            'user_id' => "required|unique:empresas,user_id,$empresa->id",
            'rubro_id'=> 'required'
        ]);

        $empresa->update($request->all());
        return redirect()->route('admin.empresas.edit', $empresa)->with('info', 'La empresa se actualizó con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('admin.empresas.index')->with('info', 'La empresa se eliminó con éxito');
    }
}
