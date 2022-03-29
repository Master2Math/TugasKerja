<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS TARBIYATUL ATHFAL  </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
        <link href="css/sb-admin-2.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
         #v-pills-home-tab {
             height : 70px;
             width: 150px;
             
         }

         #v-pills-home-tab h4{
             line-height : 50px;
             font-size: 1.1rem;
             
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
    <br><br><br><br><br>
    <div class="row">
        <div class="col-12">
            <!-- aaa -->
        <div class="container">
            <div class="row">
                <div class="col-3">
                    
                
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"   ><h4 class ="text-center">Guru</h4></a>
            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4 class ="text-center">Ekstrakurikuler</h4></a>
            
{{--             <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-messages" role="tab" 
            aria-controls="v-pills-messages" aria-selected="false"><h4 class ="text-center">Guru</h4></a>
            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><h4 class ="text-center">Guru</h4></a> --}}
            
            </div>
            </div>

        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> 
                
                <!-- guru -->
                 <div class="galery">
            <h3 style="color: black;" >Foto Guru</h3>
            <div class="gambar-utama">

                <center><img src="img/guru/guru 1.png" alt="" width="300" height= "400"  class="gambarjumbo"></center>


                <div class="thumbnail">
                    <center>
                        <img src="img/guru/guru 1.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 2.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 3.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 4.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 5.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                     <center>
                        <img src="img/guru/guru 6.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                     <center>
                        <img src="img/guru/guru 7.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 8.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 9.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 10.png" alt="" class="thumb" style="width: 60px; height: 80px">
                    </center>

                </div>



            </div>


        </div>
                <!-- akhir -->
        </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <!-- guru -->
         <div class="galery">
            <h3 style="color: black;" >Pramuka</h3>
            <td></td>
            <div class="gambar-utama2">
                <center><img src="img/pramuka/pramuka (1).jpg" alt=""width="550" height= "400"  class="gambarjumbo2"></center>


                <div class="thumbnail">
                    <center>
                        <img src="img/pramuka/pramuka (1).jpg" alt="" class="thumb2" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/pramuka/pramuka (2).jpg" alt="" class="thumb2" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/pramuka/pramuka (3).jpg" alt="" class="thumb2" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/pramuka/pramuka (4).jpg" alt="" class="thumb2" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/pramuka/pramuka (5).jpg" alt="" class="thumb2" style="width: 110px; height: 80px">
                    </center>
            

                </div>



            </div>


        </div>
                <!-- akhir -->
            </div>

{{--             <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...
      Messages   
            </div> --}}
   
{{--             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...
        Setting    
            </div> --}}

        </div>
            <!-- bb -->
</div>

</div>

</div>
        </div>
    </div>
    
   

        
        
</div>
        <br>
        <br>
 



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

    const gambar2 = document.querySelector('.gambar-utama2');
    const gambarjumbo2 = document.querySelector('.gambarjumbo2');
    const thumb2 = document.querySelector('.thumb2');

    
        gambar2.addEventListener('click', function(e) {
            if (e.target.className == 'thumb2') {
                gambarjumbo2.src = e.target.src;
            }



        })
    </script>

       
</body>

</html>