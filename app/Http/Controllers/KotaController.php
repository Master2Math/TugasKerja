<?php

namespace App\Http\Controllers;
use App\Models\Agama;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kotas = Kota::all();
        $agamas = Agama::all();
        return view('crudkota', compact('kotas','agamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $input = $request->all();
    $input['pivot'] = json_encode($input['pivot']);
  

    Kota::create($input);
   
//    dd($input['pivot']);


       // Kota::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota $kota
     * @return \Illuminate\Http\Response
     */
    public function show(Kota $kota)
    {
        return view('kotas.show', compact('kota'));
    }

//edit Pakai yang Ini
    public function edit($id)
    {
         $kotas = Kota::all();
        $kota = Kota::find($id);
        return view('editcrudkota', compact('kota', 'kotas'));
        //compact = bawa data ke view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota $kota
     * @return \Illuminate\Http\Response
     */


//    public function edit(Kota $kota)
//    {
  //      return view('kotas.edit', compact('kota'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Kota $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kota $kota)
    {
        $id = Kota::find($request->id);

        $input = $request->all();
        $id->fill($input)->update();


        return redirect("/crudkota")->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Kota::find($id);

        $id->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
