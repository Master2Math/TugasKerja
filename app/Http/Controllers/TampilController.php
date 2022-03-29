<?php

namespace App\Http\Controllers;

Use App\Http\Middleware;
use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Kelurahan;

use App\Models\Tampil;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $tampils = Tampil::all();

        return view('tampildata', compact('tampils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tampils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tampil::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tampil $tampil
     * @return \Illuminate\Http\Response
     */
    public function show(Tampil $tampil)
    {
        return view('tampils.show', compact('tampil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tampil $tampil
     * @return \Illuminate\Http\Response
     */
    public function rincian($id)
    {
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $tampil = Tampil::find($id);

        return view('edittampildata', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'tampil'));

        //compact = bawa data ke view
    }

 //   public function edit($id)
 //     {
 //         $kelurahans = Kelurahan::all();
 //         $kecamatans = Kecamatan::all();
 //         $kotas = Kota::all();
 //         $agamas = Agama::all();
 //         $tampils = Tampil::all();

 //         $tampil = Tampil::find($id);

 //         return view('edittampildata', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'tampil'));
        //compact = bawa data ke view
  //    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Tampil $tampil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tampil $tampil)
    {
       $id = Tampil::find($request->id);

        $input = $request->all();
        $id->fill($input)->update();


        return redirect("/tampildata")->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tampil $tampil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Tampil::find($id);

        $id->delete();

        return back()->with('message', 'item deleted successfully');
    }

// ambil lokasi file
    public function getDownload(){

        $file = public_path()."/downloads/info.pdf";
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'info.pdf',$headers);
    }
}
