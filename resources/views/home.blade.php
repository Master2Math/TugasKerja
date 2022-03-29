  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>HOME</h1>
    <br>
    <br>

    <div>
      <h6>Nama Akun</h6>

      <b>{{ Auth::user()->name}}</b>
      <br>
      <br>

      <h6>Email</h6>
      <b>{{ Auth::user()->email}}</b>
        <br>
        <br>
        <h6>Harap Untuk Memeriksa Email Secara Berkala</h6>
    </div>

    <div class="container mt-5">
        <div class="row" style="height: 500px">
            <div class="col">
                <div class="row d-flex justify-content-around">

                <div class="card bg-primary text-white shadow">
                    <div class="card-body" style="width: 300px; height: 100px;">
                             
                    <h5 class="card-title">LIHAT FORM Pertanyaan</h5>
                    <br>
                    <a href="{{ url('/ppdb') }}" class="btn btn-primary stretched-link">Selengkapnya</a>
                    </div>
                </div>



                </div>
            </div>


            <div class="col">
                <div class="row" id="kanan">
                    


                </div>
            </div>

        </div>
    </div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop