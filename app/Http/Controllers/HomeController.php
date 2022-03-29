<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
 public function index()
    {
        return view('home');
    }
        public function profil()
    {
        return view('profil');
    }

      public function dashboard()
    {
        return view('dashboard');
    }

        public function manajemen()
    {
        return view('manajemen');
    }
        public function kesiswaan()
    {
        return view('kesiswaan');
    }
        public function akademik()
    {
        return view('akademik');
    }

        public function informasi()
    {
        return view('informasi');
    }
        public function settings()
    {
        return view('settings');
    }

        public function ppdb()
    {
        return view('ppdb');
    }

        public function tabel()
    {
        return view('tabel');
    }

        public function crudagama()
    {
        return view('crudagama');
    }
        public function crudkecamatan()
    {
        return view('crudkecamatan');
    }
        public function crudkelurahan()
    {
        return view('crudkelurahan');
    }
        public function crudkota()
    {
        return view('crudkota');
    }
        public function crudprovinsi()
    {
        return view('crudprovinsi');
    }
        public function tampildata()
    {
        return view('tampildata');
    }

    
}
