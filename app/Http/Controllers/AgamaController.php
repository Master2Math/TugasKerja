<?php

namespace App\Http\Controllers;

use App\Models\Kota;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agamas = Agama::all();

        return view('crudagama', compact('agamas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agamas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agama::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agama $agama
     * @return \Illuminate\Http\Response
     */
    public function show(Agama $agama)
    {
        return view('agamas.show', compact('agama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agama $agama
     * @return \Illuminate\Http\Response
     */
    //edit Pakai yang Ini
    public function edit($id)
    {
         $agamas = Agama::all();
        $agama = Agama::find($id);
        return view('editcrudagama', compact('agama', 'agamas'));
        //compact = bawa data ke view
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Agama $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agama $agama)
    {
        $id = Agama::find($request->id);

        $input = $request->all();
        $id->fill($input)->update();

        return redirect("/crudagama")->with('message', 'item updated successfully');

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agama $agama
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $id = Agama::find($id);
    //  $id = Model:find($id);
        $id->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
