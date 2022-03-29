<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();

        return view('crudkecamatan', compact('kecamatans', 'kotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kecamatan::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        return view('kecamatans.show', compact('kecamatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kotas = Kota::all();


        $kecamatans = Kecamatan::all();
        $kecamatan = Kecamatan::find($id);
        return view('editcrudkecamatan', compact('kecamatan', 'kecamatans', 'kotas'));
        //compact = bawa data ke view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Kecamatan $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $id = Kecamatan::find($request->id);

        $input = $request->all();
        $id->fill($input)->update();

        return redirect("/crudkecamatan")->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Kecamatan::find($id);
    //  $id = Model:find($id);
        $id->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
