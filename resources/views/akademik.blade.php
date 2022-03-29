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
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"   ><h4 class ="text-center">Gallery</h4></a>
            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4 class ="text-center">Prestasi</h4></a>
            
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
            <h3 style="color: black;" >Gallery Sekolah</h3>
            <div class="gambar-utama">
                <center><img src="img/galery/akademik (1).jpg" alt="" height= "400" width="550" class="gambarjumbo"></center>


                <div class="thumbnail">
                    <center>
                        <img src="img/galery/akademik (1).jpg" alt="" class="thumb" style="height: 80px; width: 110px">
                    </center>
                    <center>
                       <img src="img/galery/akademik (2).jpg" alt="" class="thumb" style="height: 80px; width: 110px">
                    </center>
                    <center>
                       <img src="img/galery/akademik (3).jpg" alt="" class="thumb"style="height: 80px; width: 110px">
                    </center>
                    <center>
                        <img src="img/galery/akademik (4).jpg" alt="" class="thumb" style="height: 80px; width: 110px">
                    </center>
                    <center>
                       <img src="img/galery/akademik (5).jpg" alt="" class="thumb" style="height: 80px; width: 110px">
                    </center>
                     <center>
                       <img src="img/galery/akademik (6).jpg" alt="" class="thumb" style="height: 80px; width: 110px">
                    </center>
                     
                  

                </div>



            </div>
    

        </div>
                <!-- akhir -->
        </div>



            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <!-- guru -->
            
           

        <div class="row">
            <div class="col">
         <div class="galery">
            <h3 style="color: black;" >Prestasi</h3>
            <div class="gambar-utama2">
                <center><img src="img/prestasi/prestasi (1).jpg" alt=""width="550" height= "400"  class="gambarjumbo2">
              
            </center>


                <div class="thumbnail">
                    <center>
                        <img src="img/prestasi/prestasi (1).jpg" alt="" class="thumb11" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/prestasi/prestasi (2).jpg" alt="" class="thumb12" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/prestasi/prestasi (3).jpeg" alt="" class="thumb13" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/prestasi/prestasi (4).jpeg" alt="" class="thumb14" style="width: 110px; height: 80px">
                    </center>
                    <center>
                        <img src="img/prestasi/prestasi (5).jpeg" alt="" class="thumb15" style="width: 110px; height: 80px">
                    </center>
                     <center>
                        <img src="img/prestasi/prestasi (6).jpeg" alt="" class="thumb16" style="width: 110px; height: 80px">
                    </center>

                   {{--  <center>
                        <img src="img/guru/guru 9.png" alt="" class="thumb2" style="width: 60px; height: 80px">
                    </center>
                    <center>
                        <img src="img/guru/guru 10.png" alt="" class="thumb2" style="width: 60px; height: 80px">
                    </center>
 --}}
                </div>


            </div>
            </div>

      
        </div>
        <div class="col">
            <br>
            <br>
            <br>

              <h4 style="color: black;" class="title" ></h4>
               <h4 style="color: black;" class="title2" ></h4>
                <h4 style="color: black;" class="title3" ></h4>
        </div>
        <!-- akhier -->
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


        // guru

    const gambar2 = document.querySelector('.gambar-utama2');
    const gambarjumbo2 = document.querySelector('.gambarjumbo2');
    const thumb11 = document.querySelector('.thumb11');
    const thumb12 = document.querySelector('.thumb12');
    const thumb13 = document.querySelector('.thumb13');
    const thumb14 = document.querySelector('.thumb14');
    const thumb15 = document.querySelector('.thumb15');
    const thumb16 = document.querySelector('.thumb16');
    const title = document.querySelector('.title');
     const title2 = document.querySelector('.title2');
     const title3 = document.querySelector('.title3');
        
        
        title.innerHTML = 'Foto-Foto Piala MIS Tarbiyatul Athfal';
        gambar2.addEventListener('click', function(e) {
            if (e.target.className == 'thumb11') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Foto-Foto Piala MIS Tarbiyatul Athfal';
                title2.innerHTML = '';
                title3.innerHTML = '';
            }

            else if (e.target.className == 'thumb12') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Juara 3 Lomba Dart Game  ';
                title2.innerHTML = 'Juara 3 Lomba Piramida ';
                title3.innerHTML = 'Juara 2 Lomba Pindah Air';
            } else if (e.target.className == 'thumb13') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Lomba KSM';
                title2.innerHTML = '';
                title3.innerHTML = '';
            } else if (e.target.className == 'thumb14') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Lomba 17 Agustus';
                title2.innerHTML = '';
                title3.innerHTML = '';
            } else if (e.target.className == 'thumb15') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Lomba 17 Agustus';
                title2.innerHTML = '';
                title3.innerHTML = '';
            } else if (e.target.className == 'thumb16') {
                gambarjumbo2.src = e.target.src;
                title.innerHTML = 'Lomba 17 Agustus';
                title2.innerHTML = '';
                title3.innerHTML = '';
            } 
            


        })

        // thumb2.addEventListener('click', function(e) {
        //     const src = gambar2.getAttribute('src');


        //     if(src === 'img/guru/guru 1.png'){
        //         title.innerHTML = "FANDI";
        //     }

        // })


        


        
    </script>

       
</body>

</html>