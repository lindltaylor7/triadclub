<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return view('admin.ofertas.index', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $empresas = Empresa::pluck('name', 'id');
        return view('admin.ofertas.create', compact('empresas'));
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
            'title' => 'required',
            'description' => 'required',
            'fecha_cad' => 'required|date|after:yesterday',
            'empresa_id'=> 'required'
        ]);


        $oferta = Oferta::create($request->all());
        return redirect()->route('admin.ofertas.index')->with('info', 'Oferta agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        $empresas = Empresa::pluck('name', 'id');
        return view('admin.ofertas.edit', compact('oferta','empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'fecha_cad' => 'required|date|after:yesterday',
            'empresa_id'=> 'required'
        ]);
        $oferta->update($request->all());
        return redirect()->route('admin.ofertas.index')->with('info', 'Oferta actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('admin.ofertas.index')->with('info', 'La oferta se eliminó con éxito');
    }
}
