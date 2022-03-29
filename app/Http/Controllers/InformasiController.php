<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\tglLahirRule;
use Redirect;



use App\Models\Informasi;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Agama;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Kelurahan;
use App\Models\Ppdb;
use App\Models\Tampil;


class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasis = Informasi::all();


        return view('informasi', compact('informasis'));
    }

     public function indexPPDB()
    {

        $ppdbs = Ppdb::all();
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $user = User::all();

        $informasis = Informasi::all();
        $tampils = Tampil::all();
        $user_id = Auth::user()->id;

        
         if (Ppdb::where('user_id', '=', $user_id)->count() > 0) {
            foreach ($tampils as $item => $tampil) {
                ($tampil->id);
                if ($tampil->user_id == Auth::user()->id) {
                   $id =  $tampil->id;
                }
                   
            }

            $tampil = Tampil::find($id);

             return view('ppdbvalidasi', compact('informasis', 'tampil', 'kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils'));

        }

        return view('ppdb', compact('ppdbs', 'kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'user'));


    }

    public function indexValidasiPPDB($id)
    {

// validasi validasi validasi

        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();

        $tampils = Tampil::all();

        $informasis = Informasi::all();
        $tampil = Tampil::find($id);

        return view('ppdbvalidasi', compact('informasis', 'tampil', 'kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils'));
    }
    //////////////************
    //TAMPIL TAMPIL TAMPIL

      public function indexTampil()
    {

        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();

        $tampils = Tampil::all();

        $informasis = Informasi::all();

        return view('tampildata', compact('informasis', 'kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils'));
    }

        public function rincian($id)
    {
        //RINCIAN = EDIT TAMPIL DATA
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $tampil = Tampil::find($id);

        return view('edittampildata', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'tampil'));

        //compact = bawa data ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$Informasi = new Informasi;
        //Informasi::create($request->all());
      
   
       // $nilaialternatif = new Tampil;
       // NilaiInformasi::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view('informasis.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi $informasi
     * @return \Illuminate\Http\Response
     */

    //tidak pakai//
    public function edit($id)
    {
        $kotas = Kota::all();



        $kecamatans = Kecamatan::all();
        $kecamatan = Kecamatan::find($id);
        return view('ppdbvalidasi', compact('kecamatan', 'kecamatans', 'kotas'));
        //compact = bawa data ke view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Informasi $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi, Tampil $tampil)
    {
       $id = Tampil::find($request->id);

        $input = $request->all();

        dd($input);
        $id->fill($input)->update();
        // UPDATE DATA SISWA_BARU DAN SISWA_VALIDASI



        $error = Validator::make($request->all(), $rules, $messages);

        if ($error->fails()) {
            // return redirect("/ppdb")->with('message', $error->errors()->all());
            
            return redirect()->back()->with('flash_message_error', $error->errors()->all());
        }
        
        $id = $request->id;
        
        if (Informasi::where('id', '=', $id)->count() > 0) {
   // user found
             return redirect()->back()->with('failed', 'Anda Sudah Melakukan Validasi, Harap Untuk Mengecek Email Anda');   
//             return Redirect::back()->withErrors(['msg' => 'Anda Sudah Mendaftar']);

}

        $id = Tampil::find($request->id);
         $input = $request->all();
         $id->fill($input)->update();
        
        Informasi::create($request->all());

      //  $id = Informasi::find($request->id);

    //    $input = $request->all();
      //  $id->fill($input)->update();


// Tampil : Tabel siswa_baru
 //       return redirect("/home")->with('message', 'item updated successfully');

// Kirim Email Verifikasi
          $details = [
        'title' => 'Email Dari Madrasah Ibtidaiyah Swasta Tarbiyatul Athfal',
        'body' => 'Form Yang Anda Isi Akan Diperiksa Dalam Beberapa Hari, Harap untuk
        Mengecek Email Anda Secara Berkala Untuk Mengetahui Apakah Anda Lanjut Ke Tahap Selanjutnya'
    ];
    $email = Auth::user()->email;

   \Mail::to($email)->send(new \App\Mail\MyTestMail($details));

    \Mail::to('master2mathmaster@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
     $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $informasi = Informasi::find($id);

        return view('home', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'informasi'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return back()->with('message', 'item deleted successfully');
    }



public function diterima(Request $request, Informasi $informasi)
    {
    	$id = Informasi::find($request->id);
    	$input = $request->all();

        $id->fill($input)->update();

        $email = $request->email;
        $status = $request->status;

             $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $informasi = Informasi::find($id);

   return view('home', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'informasi'));
//////////////////////////////////////////////////////////////////////////////////////////////

    $details = [
        'title' => 'Email Dari Madrasah Ibtidaiyah Swasta Tarbiyatul Athfal',
        'body' => 'Selamat Anda Dapat Melanjutkan Ke Tahap Wawancara di Madrasah Ibtidaiyah Swasta Tarbiyatul Athfal, Silahkan Datang Ke Sekolah Pada Tanggal 28-30 Juli 2021'
    ];
   
   // $email = Auth::user()->email;

   \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
   
     $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $informasi = Informasi::find($id);

        return view('home', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'informasi'));

        }


public function rincianTolak($id)
    {
        //RINCIAN = EDIT TAMPIL DATA
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();
        $informasis = Tampil::all();

        $tampil = Tampil::find($id);
          $informasi = Informasi::find($id);

        return view('edittampildatatolak', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'tampil','informasi'));

        //compact = bawa data ke view
    }

public function ditolak(Request $request, Informasi $informasi)
    {
    	$id = Informasi::find($request->id);
    	$input = $request->all();
        $id->fill($input)->update();
        
        $email = $request->email;
        $status = $request->status;
        //status validasi
        $validasi_umur = $request->validasi_umur;
        $validasi_nik = $request->validasi_nik;
        $validasi_akta = $request->validasi_akta;

         if ($validasi_umur == "CUKUP") {
         	$umur = "";
		}
         if ($validasi_umur == "TIDAK CUKUP") {
         	$umur = "UMUR Pendaftar Tidak Cukup";
		}
		if ($validasi_nik == "VALID") {
         	$nik = "";
		}
         if ($validasi_nik == "TIDAK VALID") {
         	$nik = "DATA NIK Tidak Valid";
		}
		if ($validasi_akta == "VALID") {
         	$akta = "";
		}
         if ($validasi_akta == "TIDAK VALID") {
         	$akta = "DATA AKTA KELAHIRAN Tidak Valid";
		}


    $details = [
        'title' => 'Email Dari Madrasah Ibtidaiyah Swasta',
        'body' => 'Mohon Maaf Anda Tidak Diterima di Madrasah Ibtidaiyah Swasta Tarbiyatul Athfal Dengan KRITERIA ' .$umur. '  ' .$nik. ' ' .$akta. ', Harap Hubungi Admin Apabila Anda Ingin Memperbaiki Data Yang Salah'
    ];
    //   $email = Auth::user()->email;

   \Mail::to($email)->send(new \App\Mail\MyTestMail($details));

   // \Mail::to('master2mathmaster@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
     $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();
        $kotas = Kota::all();
        $agamas = Agama::all();
        $tampils = Tampil::all();

        $informasi = Informasi::find($id);

        return view('home', compact('kelurahans', 'kecamatans', 'kotas', 'agamas', 'tampils', 'informasi'));

        }
}
