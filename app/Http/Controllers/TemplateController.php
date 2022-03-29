<?php

namespace App\Http\Controllers;

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
        $datas = Agama::create([
                    
                    'nama_agama' => $request->nama_agama
                    ]);


 //       $validated = $this->validate($request, [
            
   //     ]);



   //     Agama::create($validated);

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
    public function edit(Agama $agama)
    {
        return view('agamas.edit', compact('agama'));
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
        $validated = $this->validate($request, [
            "id_agama" => "required|id_agama|unique:nama_agama",
            "nama_agama" => "required|min:10|string"
        ]);

        $agama->update($validated);

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agama $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agama $agama)
    {
        $agama->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
