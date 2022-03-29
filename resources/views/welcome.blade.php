<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS TARBIYATUL ATHFAL  </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .card {
            margin-top: 30px;
        }
        
        #kanan {
            margin-top: 30px;
            overflow-y: scroll;
            height: 500px;
        }
    </style>

</head>

<body>

    <header>

        <nav>
            <div class="logo">
                <img src="img/DELICIOUS FOOD.png" alt="">
            </div>

            <ul>
                <li>
                    <br>
                    
                    <a href="{{ url('/') }}" class="text-sm text-white-700 underline">BERANDA</a>
                </li>
                <li>
                    <br>
                    <a href="{{ url('/profil') }}" class="text-sm text-white-700 underline">PROFIL</a>
                </li>
{{--                 <li>
                    <a href="{{ url('/manajemen') }}" class="text-sm text-gray-700 underline">MANAJEMEN</a>
                </li> --}}
                <li>
                    <br>
                   <a href="{{ url('/kesiswaan') }}" class="text-sm text-white-700 underline">KESISWAAN</a>
                </li>
                <li>
                    <br>
                    <a href="{{ url('/akademik') }}" class="text-sm text-white-700 underline">AKADEMIK</a>
                </li>
                <li>
                    <br>
                    <a href="{{ url('/ppdb') }}" class="text-sm text-white-700 underline">PPDB ONLINE</a>
                </li>
                <li>
                    <br>
                     <a href="{{ url('/informasi') }}" class="text-sm text-white-700 underline">INFORMASI</a>
                </li>


        <li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white-700 underline">HOME</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white-700 underline">MASUK</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 underline">DAFTAR</a>
                        @endif
                    @endauth
                </div>
                
            @endif
        </li>

            </ul>

            <div class="toogle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

    </header>

    <main>
{{-- Dihapus atas nya hancur --}}
        <div class="jumbo">
{{--             <h1>Search Your Favour Food</h1>
            <h3>Fine Restourans, Specials, And Coumpos For Free</h3>
            <br>
            <center>
                <input type="text" placeholder="looking for now">
                <button type="button">Search</button>
            </center> --}}
        </div>

    <div class="container mt-5">
        <div class="row" style="height: 500px">
            <div class="col">
                <div class="row d-flex justify-content-around">



                <div class="card bg-primary text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
    <h5 class="card-title">Profil</h5>
    <a href="{{ url('/profil') }}" class="btn btn-primary stretched-link">Selengkapnya</a>
                    </div>
                </div>


                <div class="card bg-primary text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
                    <h5 class="card-title">Kesiswaan</h5>
                    <a href="{{ url('/kesiswaan') }}" class="btn btn-primary stretched-link">Selengkapnya</a>
                    </div>
                </div>

                <div class="card bg-success text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
    <h5 class="card-title">PPDB Online</h5>
    <a href="{{ url('/ppdb') }}" class="btn btn-success stretched-link">Selengkapnya</a>
                    </div>
                </div>

                <div class="card bg-primary text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
    <h5 class="card-title">Akademik</h5>
    <a href="{{ url('/akademik') }}" class="btn btn-primary stretched-link">Selengkapnya</a>
                    </div>
                </div>

                <div class="card bg-primary text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
    <h5 class="card-title">Informasi</h5>
    <a href="{{ url('/informasi') }}" class="btn btn-primary stretched-link">Selengkapnya</a>
                    </div>
                </div>

{{--                 <div class="card bg-info text-white shadow">
                    <div class="card-body" style="width: 250px; height: 100px;">
                             
    <h5 class="card-title">Pengumuman</h5>
    <a href="{{ url('/informasi') }}" class="btn btn-info stretched-link">Selengkapnya</a>
                    </div>
                </div> --}}


                </div>
            </div>


            <div class="col">
                <div class="row" id="kanan">
                    <div class="col">
                        <center><h3>PENERIMAAN PESERTA DIDIK BARU</h3></center>
                        <center><h3>MIS TARBIYATUL ATHFAL</h3></center>
                        <center><h3>PONTIANAK BARAT</h3></center>
                        <center><h3>TAHUN PELAJARAN 2021-2022</h3></center>
                        <br>
                           <h5><a href="{{ url('/informasi') }}" class="text-sm text-white-700 underline">SYARAT PENDAFTARAN:</a></h5>
                        
                        <h6>1. Foto Copy Ijazah Ra/Paud/TK (2 Lembar) Jika ada</h6>
                        <h6>2. Foto Copy Kartu Keluarga (KK) (2 Lembar)</h6>
                        <h6>3. Foto Copy Akta Lahir (2 Lembar)</h6>
                        <h6>4. Melampirkan PKH/PIP  (2 Lembar) Jika ada</h6>
                        <h6>5. Membayar Formulir Pendaftaran Rp. 15.000</h6>
                        <h6>6. Berusia 6 Tahun s.d 7 Tahun</h6>
                        


                    </div>

{{--         <div class="galery">
            <h3>Gallery</h3>
            <div class="gambar-utama">
                <center><img src="img/1.png" alt="" width="50%" class="gambarjumbo"></center>


                <div class="thumbnail">
                    <center>
                        <img src="img/1.png" alt="" class="thumb">
                    </center>
                    <center>
                        <img src="img/2.png" alt="" class="thumb">
                    </center>
                    <center>
                        <img src="img/3.png" alt="" class="thumb">
                    </center>
                    <center>
                        <img src="img/4.png" alt="" class="thumb">
                    </center>
                </div>


            </div>
        </div> --}}
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


        <div class="background">

        </div>


        <div class="artikel">

            <article>






        <div class="galery">

            <div class="gambar">
                <center>
                    <img src="" alt="">
                </center>
            </div>


        </div>







    </main>

    <footer>

        <h1>MADRASAH IBTIDAIYAH SWASTA TARBIYATUL ATHFAL</h1>
        <h2>COPYRIGHT 2021</h2>

    </footer>


    <script>
        const nav = document.querySelector('nav ul ');
        const toogle = document.querySelector('.toogle');

        toogle.addEventListener("click", function() {
            nav.classList.toggle("active");
        });

        const gambar = document.querySelector('.gambar-utama');
        const gambarjumbo = document.querySelector('.gambarjumbo');
        const thumb = document.querySelector('.thumb');

        gambar.addEventListener('click', function(e) {
            if (e.target.className == 'thumb') {
                gambarjumbo.src = e.target.src;
            }



        })
    </script>

</body>

</html>