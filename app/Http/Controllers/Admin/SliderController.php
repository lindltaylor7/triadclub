<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Image::where('imageable_type','portada')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'file' => 'required|image'
        ]);

        $nroImages=Image::where('imageable_type','portada')->count();

        if($request->file('file')){
            $url = Storage::put('index/portadas', $request->file('file'));
           
            $slider = Image::create([
                'url' => $url,
                'imageable_id' => $nroImages+1,
                'imageable_type' => 'portada'
             ]);
         }

         return redirect()->route('admin.sliders.index')->with('info', 'Slider agregado correctamente');
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
    public function edit($id)
    {
        $slider=Image::where('imageable_id',$id)->where('imageable_type','portada')->first();
       
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        if($request->file('file')){
            $url = Storage::put('index/portadas', $request->file('file'));
           
            Image::where('imageable_type','portada')
            ->where('imageable_id', $id)
            ->update([
                'url' => $url
             ]);
         }

         return redirect()->route('admin.sliders.index')->with('info', 'Slider actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Image::where('imageable_type','portada')->where('imageable_id', $id)->delete();

        return redirect()->route('admin.sliders.index')->with('info', 'Slider elminado correctamente');

    }
}
