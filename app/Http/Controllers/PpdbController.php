<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Kelurahan;
use App\Models\User;
use App\Models\Informasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\Tampil;
use App\Rules\tglLahirRule;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Redirect;



class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ppdbs = Ppdb::all();
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $user = User::all();

        $tampils = Tampil::all();

        return view('ppdb', compact('ppdbs', 'kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'user'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // dd($request->all());


        $user_id = $request->user_id;
        
        if (Ppdb::where('user_id', '=', $user_id)->count() > 0) {
   // user found
             return redirect()->back()->with('failed', 'Anda Sudah Mendaftar');   
//             return Redirect::back()->withErrors(['msg' => 'Anda Sudah Mendaftar']);

}
        Ppdb::create($request->all());

        $input = $request->id;


        return redirect("ppdbvalidasi/validasi/$input")->with('message', 'item updated successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        return view('ppdbs.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        return view('ppdbs.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ppdb $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        $ppdb->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
