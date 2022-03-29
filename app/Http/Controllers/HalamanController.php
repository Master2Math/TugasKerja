<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


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
        
}
