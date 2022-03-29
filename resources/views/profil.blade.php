<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS TARBIYATUL ATHFAL  </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <header>

        <nav>
            <div class="logo">
                <img src="img/DELICIOUS FOOD.png" alt="">
            </div>

             <ul>
            <li>
                    <a href="{{ url('/') }}" class="text-sm text-white-700 underline">BERANDA</a>
                </li>
                <li>
                    <a href="{{ url('/profil') }}" class="text-sm text-white-700 underline">PROFIL</a>
                </li>
{{--                 <li>
                    <a href="{{ url('/manajemen') }}" class="text-sm text-white-700 underline">MANAJEMEN</a>
                </li> --}}
                <li>
                   <a href="{{ url('/kesiswaan') }}" class="text-sm text-white-700 underline">KESISWAAN</a>
                </li>
                <li>
                    <a href="{{ url('/akademik') }}" class="text-sm text-white-700 underline">AKADEMIK</a>
                </li>
                <li>
                    <a href="{{ url('/ppdb') }}" class="text-sm text-white-700 underline">PPDB ONLINE</a>
                </li>
                <li>
                     <a href="{{ url('/informasi') }}" class="text-sm text-white-700 underline">INFORMASI</a>
                </li>
{{--                 <li>
                              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </li>
 --}}            </ul>

            <div class="toogle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

    </header>

    <main>

            </div>
        </div>



<div>
            <center>
        <br>
        <br>
        <br>
        <br>

                <img src="img/profil.jpg" alt="">
               <br>
               <br>
            </center>
</div>
<div class="container">
<div class="row">

                        <div class="col-lg-6 md">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 style="color: black;">PROFIL</h4>
                                </div>
                                <div class="card-body">
                <h5 style="color: black;">Kepala Madrasah : Suryani,S.Pd.I</h5>
                <h5 style="color: black;">Akreditasi :C</h5>
                <h5 style="color: black;">No. SK. Akreditasi  845/BAP-SM KB/KEP/XII/2014</h5>
                <h5 style="color: black;">Kurikulum : 2013</h5>
                <h5 style="color: black;">Waktu Belajar: Pagi</h5>
                <h5 style="color: black;">NSM : 111261710014</h5>
                <h5 style="color: black;">NPSN : 60722615</h5>
                <h5 style="color: black;">Status : Swasta</h5>
                <h5 style="color: black;">Bentuk Pendidikan : MI</h5>
                <h5 style="color: black;">Penyelenggara : Lembaga</h5>
                <h5 style="color: black;">SK Pendirian Sekolah : KEP-37/PP.03.2/1992</h5>
                <h5 style="color: black;">Tanggal SK Pendirian : 1992-12-12</h5>
                <h5 style="color: black;">SK Izin Operasional : D/WN/MI/0005/1992</h5>
                <h5 style="color: black;">Tanggal SK Izin Operasional : 1992-12-12</h5>

              <h5><a href="http://emispendis.kemenag.go.id/dashboard/?content=madrasah&action=lbg&nss=111261710014"> Sumber: EMIS</a></h5>
              <h5><a href="https://data-sekolah.sekolah-kita.net/sekolah/MIS%20TARBIYATUL%20ATHFAL_133769"> Sumber: Data Sekolah</a></h5>
                                </div>
                            </div>

                            <!-- Basic Card Example -->
{{--                             <div class="card mb-4">
                                <div class="card-header">
                                    NON AKADEMIK
                                </div>
                                <div class="card-body">
                                    - Pramuka
                                    <br>
                                    - paskibra
                                    <br>
                                    - Drumband 
                                </div>
                            </div> --}}

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 style="color: black;">KONTAK</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <h6 style="color: black;">Alamat</h6>
                                  
                                    <p style="color: black;">Jl. Karet No.75, Sungai Beliung, Kecamatan Pontianak Barat, Kota Pontianak, Kalimantan Barat 78244</p>
                                    <b style="color: black;"><i class="fa fa-phone"></i> Telepon :</b>
                                    <p style="color: black;">0853-8774-8881</p>
                                     <b style="color: black;"><i class="fa fa-envelope"></i> Email :</b>
                                     <p style="color: black;">fusairiahmad26@gmail.com</p>
                                    <b style="color: black;" ><i class="fa fa-desktop"></i> Website :</b>
                                     <p style="color: black;" >mistarbiyatulathfalpontianak.com</p>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
{{--                             <div class="card mb-4">
                                <div class="card-header">
                                    KALENDER
                                </div>
                                <div class="card-body">
                                    This card uses Bootstrap's default styling with no utility classes added. Global
                                    styles are the only things modifying the look and feel of this default card example.
                                </div>
                            </div> --}}

                        </div>

                    </div>
                </div>
            </center>
</div>
        <br>
        <br>




    </main>

<footer>

        <h1>MADRASAH IBTIDAIYAH SWASTA TARBIYATUL ATHFAL</h1>
        <h2>COPYRIGHT 2021</h2>

    </footer>



</body>

</html>