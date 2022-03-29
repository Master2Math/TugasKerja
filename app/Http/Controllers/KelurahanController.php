<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();

        return view('crudkelurahan', compact('kelurahans','kecamatans', 'kotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelurahans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelurahan::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelurahan $kelurahan)
    {
        return view('kelurahans.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kotas = Kota::all();
        $kecamatans = Kecamatan::all();

        $kelurahans = Kelurahan::all();
        $kelurahan = Kelurahan::find($id);
        return view('editcrudkelurahan', compact('kelurahan', 'kelurahans', 'kotas', 'kecamatans'));
        //compact = bawa data ke view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Kelurahan $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $id = Kelurahan::find($request->id);

        $input = $request->all();
        $id->fill($input)->update();

        return redirect("/crudkelurahan")->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Kelurahan::find($id);
    //  $id = Model:find($id);
        $id->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
