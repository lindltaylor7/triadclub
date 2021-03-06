<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rede;
use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user = $request->user();
        $empresa = Empresa::where('user_id', $user->id)->first();
        $rede = Rede::where('empresa_id', $empresa->id)->first();
        return view('dashboard.index', compact('rede', 'empresa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rede $rede)
    {
       return view('dashboard.edit', compact('rede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rede $rede)
    {
        //
        $rede->update($request->all());
        $empresa=Empresa::where('id', $rede->empresa_id);
        $empresa->update([
            'cel'=>$request->cel
        ]);
        if($request->file('logo'))
        {
            $nuevo_logo=Storage::put('empresas', $request->file('logo'));
            $empresa->update([
                'logo'=>$nuevo_logo
            ]);

        }
    
     
    
        
        
        return redirect()->route('dash.redes.index');
        //return $request->cel;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
